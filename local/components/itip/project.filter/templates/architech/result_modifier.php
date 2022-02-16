<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

//echo "<pre>".print_r($arResult, 1)."</pre>";

use \Bitrix\Main\Loader;
use \Bitrix\Highloadblock as HL;

//получаем список типов проектов для инфоблока
$propertyFilter = ['ID' => 3];  //PROJECT_TYPE
$getProjectTypes = CIBlockElement::GetPropertyValues(
    $arParams["IBLOCK_ID"], 
    ["ACTIVE" => "Y"], 
    false, 
    $propertyFilter
);
$typeProjectValues = [];
while ($row = $getProjectTypes->Fetch())
{
    //echo "<pre>".print_r($row, 1)."</pre>";
    $typeProjectValues[] = $row[3];
}
$arResult['PROP_HAS_VALUES'] = [];
$arResult['PROP_HAS_VALUES']['PROJECT_TYPE'] = array_unique($typeProjectValues);
//$arResult['PROP_VALUES']['PROJECT_TYPE'] = array_unique($typeProjectValues);

$arResult['PROP_VALUES'] = [];
$codePropertyList = [];
foreach($arResult['arrProp'] AS $prop) {
    $codeProperty = $prop['CODE'];
    $codePropertyList[] = $prop['CODE'];
    //создаем массив значений справочника для свойства
    $arResult['PROP_VALUES'][$codeProperty] = [];
    $res = CIBlock::GetProperties(intval($arParams["IBLOCK_ID"]), Array(), Array("CODE"=>$codeProperty));
    if($res_arr = $res->Fetch()) {
        //echo "<pre>".print_r($res_arr, 1)."</pre>";
        $sTableName = $res_arr['USER_TYPE_SETTINGS']['TABLE_NAME'];

        if(Loader::IncludeModule('highloadblock') && !empty($sTableName)) {
            $hlblock = HL\HighloadBlockTable::getRow([
                'filter' => [
                  '=TABLE_NAME' => $sTableName
                ],
            ]);
            
            if($hlblock) {
                $entity = HL\HighloadBlockTable::compileEntity( $hlblock );
                $entityClass = $entity->getDataClass();
                
                $arRecords = $entityClass::getList([
                    'select' => array('*'),
                    'order' => array('UF_SORT' => 'ASC'),
                    //'filter' => array('UF_XML_ID' => заданный ID)
                ]);

                foreach ($arRecords as $record) {
                    //заполняем справочник для свойства значениями
                    if($codeProperty == 'PROJECT_TYPE'){
                        if($record['UF_XML_ID'] == '0') {
                            $arResult['PROP_VALUES'][$codeProperty][] = $record;
                        }else{
                            if(in_array($record['UF_XML_ID'], $arResult['PROP_HAS_VALUES']['PROJECT_TYPE'])) {
                                $arResult['PROP_VALUES'][$codeProperty][] = $record;
                            }
                        }
                        
                    }else{
                        $arResult['PROP_VALUES'][$codeProperty][] = $record;
                    }
                    
                }
            }
        }            
    }
}

//select all elements from IBlock
$filter = [
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "ACTIVE" => "Y"
];
if(isset($_GET['type']) && $_GET['type'] != "0") {
    $filter['PROPERTY_PROJECT_TYPE'] = $_GET['type'];
}
if(isset($_GET['geo']) && $_GET['geo'] != "0") {
    $filter['PROPERTY_PROJECT_GEO'] = $_GET['geo'];
}
if(isset($_GET['status']) && $_GET['status'] != "0") {
    $filter['PROPERTY_PROJECT_STATUS'] = $_GET['status'];
}
if(isset($_GET['year']) && $_GET['year'] != "0") {
    $filter['PROPERTY_PROJECT_YEAR'] = $_GET['year'];
}

$getIBlockElements = CIBlockElement::GetList(Array(), $filter, false, false, ["ID"]);

//Get array ID-elements
$items = [];
while($res = $getIBlockElements->Fetch()) {
    $items[$res['ID']] = $res;
}
//Get property values for elements
CIBlockElement::GetPropertyValuesArray(
    $items, 
    $arParams["IBLOCK_ID"], 
    ['ID' => array_keys($items)], 
    ['CODE' => $codePropertyList]
);
//Get actual unique values for filter properties

foreach($codePropertyList AS $propCode) {
    if($propCode != 'PROJECT_TYPE'){
        $propParams = array_column($items, $propCode);
        $propValuesUnique = array_values(array_unique(array_column($propParams, 'VALUE')));
        $propValues = array_filter($propValuesUnique, function($value) { return !is_null($value) && $value !== ''; });
        $arResult['PROP_HAS_VALUES'][$propCode] = $propValues;
    }    
}

unset($codePropertyList, $items);
