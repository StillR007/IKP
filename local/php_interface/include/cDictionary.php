<?php
class cDictionary {
	
    function __construct() {
		
	}

    public static function addNewItemToDictionary($highloadBlockId, $data, $needReturnId = false) {

        //info: https://devforces.ru/blog/api-d7-rabota-s-highload-blokam-v-bitriks/

		$result = false;
	
		if(Bitrix\Main\Loader::IncludeModule('highloadblock')) {
		//use Bitrix\Highloadblock as HL;
		
			//выбор инфоблока
			$hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById($highloadBlockId)->fetch(); 
			$entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock); 
			$entity_data_class = $entity->getDataClass(); 
			
			//определение полей
			/*$data = array(
				"UF_OBJ_ADDRESS" => ' ',
				"UF_OBJ_NAME" => ' ',
				"UF_OBJ_CODE_EXTERNAL" => ' ',
				"UF_OBJ_COMPANY_ID" => ' ',
			);*/
			
			//запись
			$addResult = $entity_data_class::add($data);
			$result = $addResult->isSuccess();

            if($needReturnId) {
                $result = $addResult->getId();
            }
		}
	
		return $result;
	}

    public static function removeItemsFromDictionary($highloadBlockId, $itemId) {

        //info: https://devforces.ru/blog/api-d7-rabota-s-highload-blokam-v-bitriks/

		$result = false;
	
		if(Bitrix\Main\Loader::IncludeModule('highloadblock')) {
            
            $hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById($highloadBlockId)->fetch();  
            $entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
            $entity_data_class = $entity->getDataClass();  

            $removeResult = $entity_data_class::Delete($itemId);
            $result = $removeResult->isSuccess();
		}
	
		return $result;
	}

    public static function findItemsFromDictionary($highloadBlockId, $data, $order = array("ID" => "ASC"), $limit = NULL) {

        //info: https://devforces.ru/blog/api-d7-rabota-s-highload-blokam-v-bitriks/

		$result = false;
	
		if(Bitrix\Main\Loader::IncludeModule('highloadblock')) {
            
            $hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById($highloadBlockId)->fetch();  
            $entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
            $entity_data_class = $entity->getDataClass();  

            $params = array(
                "select" => array("*"),
                "order" => $order,
                "filter" => $data  // Задаем параметры фильтра выборки например $data = array("UF_PRODUCT_ID"=>"77","UF_TYPE"=>'33')
            );
            if($limit > 0) {
                $params["limit"] = $limit;
            }
            $rsData = $entity_data_class::getList($params);
            
            $arrResult = [];
            while($arData = $rsData->Fetch()){
                array_push($arrResult, $arData);
            }
            if(count($arrResult) > 0) {
                $result = $arrResult;
            }
		}
	
		return $result;
	}

    public static function getElementFromDictionaryById($highloadBlockId, $id) {

        //info: https://devforces.ru/blog/api-d7-rabota-s-highload-blokam-v-bitriks/

		$result = false;
	
		if(Bitrix\Main\Loader::IncludeModule('highloadblock')) {
            
            $hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById($highloadBlockId)->fetch();  
            $entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
            $entity_data_class = $entity->getDataClass();  

            $rsData = $entity_data_class::getList(array(
                "select" => array("*"),
                "order" => array("ID" => "ASC"),
                "filter" => array("ID"=> $id)
            ));
            
            while($arData = $rsData->Fetch()){
                $result = $arData;
            }
		}
	
		return $result;
	}

    public static function getElementFromDictionaryByXmlId($highloadBlockId, $xmlId) {

        //info: https://devforces.ru/blog/api-d7-rabota-s-highload-blokam-v-bitriks/

		$result = false;
	
		if(Bitrix\Main\Loader::IncludeModule('highloadblock')) {
            
            $hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById($highloadBlockId)->fetch();  
            $entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
            $entity_data_class = $entity->getDataClass();  

            $rsData = $entity_data_class::getList(array(
                "select" => array("*"),
                "order" => array("ID" => "ASC"),
                "filter" => array("UF_XML_ID"=> $xmlId)
            ));

            while($arData = $rsData->Fetch()){
                $result = $arData;
            }
		}
	
		return $result;
	}

    public static function getXMLElementIdFromDictionaryById($highloadBlockId, $id) {

        //info: https://devforces.ru/blog/api-d7-rabota-s-highload-blokam-v-bitriks/

		$result = false;
	
		if(Bitrix\Main\Loader::IncludeModule('highloadblock')) {
            
            $hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById($highloadBlockId)->fetch();  
            $entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
            $entity_data_class = $entity->getDataClass();  

            $rsData = $entity_data_class::getList(array(
                "select" => array("*"),
                "order" => array("ID" => "ASC"),
                "filter" => array("ID"=> intval($id))
            ));
            
            while($arData = $rsData->Fetch()){
                $result = $arData["UF_XML_ID"];
            }
		}
        //возвращаем внешний код элемента справочника
		return $result;
	}

    public static function getElementIdFromDictionaryByXML($highloadBlockId, $xmlId) {

        //info: https://devforces.ru/blog/api-d7-rabota-s-highload-blokam-v-bitriks/

		$result = false;
	
		if(Bitrix\Main\Loader::IncludeModule('highloadblock')) {
            
            $hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById($highloadBlockId)->fetch();  
            $entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
            $entity_data_class = $entity->getDataClass();  

            $rsData = $entity_data_class::getList(array(
                "select" => array("*"),
                "order" => array("ID" => "ASC"),
                "filter" => array("UF_XML_ID"=> $xmlId)
            ));
            
            while($arData = $rsData->Fetch()){
                $result = $arData["ID"];
            }
		}
        //возвращаем внешний ID элемента справочника
		return $result;
	}

    public static function checkExistItemToDictionary($highloadBlockId, $data) {

        //info: https://devforces.ru/blog/api-d7-rabota-s-highload-blokam-v-bitriks/

		$result = false;
	
		if(Bitrix\Main\Loader::IncludeModule('highloadblock')) {
            
            $hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById($highloadBlockId)->fetch();  
            $entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
            $entity_data_class = $entity->getDataClass();  

            $rsData = $entity_data_class::getList(array(
                "select" => array("ID"),
                "order" => array("ID" => "ASC"),
                "filter" => $data  // Задаем параметры фильтра выборки например $data = array("UF_PRODUCT_ID"=>"77","UF_TYPE"=>'33')
            ));

            $arrResult = [];
            while($arData = $rsData->Fetch()){
                //echo "<pre>".print_r($arData, 1)."</pre>";
                array_push($arrResult, $arData);
            }
            if(count($arrResult) > 0) {
                $result = $arrResult;
            }
            
		}
	
		return $result;
	}
    

    public static function updateItemToDictionary($highloadBlockId, $data, $itemId) {

        //info: https://devforces.ru/blog/api-d7-rabota-s-highload-blokam-v-bitriks/

		$result = false;
	
		if(Bitrix\Main\Loader::IncludeModule('highloadblock')) {
            
            $hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById($highloadBlockId)->fetch();  
            $entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
            $entity_data_class = $entity->getDataClass();  

            $updResult = $entity_data_class::update($itemId, $data);
            $result = $updResult->isSuccess();
            if(!$result) {
                $errors = $updResult->getErrorMessages();

                $title = "Ошибка обновления highloadblock-элемента ".$itemId." в справочнике ".$highloadBlockId;
                $message = "Параметры запроса:".print_r($data,1)."<br/>Текст ошибки:".$errors."<br/>Метод: ".__METHOD__;
                $this->sendLogToMail($title, $message);
                //var_dump($errors);
            }
		}
	
		return $result;
	}

}

$cDictionary = new cDictionary();