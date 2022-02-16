<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$this->setFrameMode(true);
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/projects_status_bar.min.css", true);

// echo "<pre>" . print_r($arResult['PROP_VALUES'], 1) . "</pre>";
// echo "<pre>".print_r($arResult['arrProp'], 1)."</pre>";
// var_dump($arResult['test']);
?>
<div class="status-bar">
	<div class="status-bar__filter">
		<div class="status-bar__filter--icon"></div>
		<div class="status-bar__filter--filter">Фильтр</div>
		<?
		//<div class="status-bar__filter--all">Всего:</div>
		//<div class="status-bar__filter--all-number">999</div> 
		?>
	</div>

	<? 
	//билдер селектора для свойства
	function buildFilterBlock($propCode, $propValues, $index) {

	}

	$indexProp = 1;
	//перебираем список свойств и строим селеторы
	foreach ($arResult['PROP_VALUES'] AS $code=>$values) {
		//print_r($arResult['PROP_HAS_VALUES'][$code]);

		$selectedTypeName = '';
		$searchKey = '';
		$defaultTypeName = '';
		$isSelectedDefault = 'selected';
		$listControl = '';

		foreach ($values as $item) {
			$isSelected = '';

			if ($item['UF_XML_ID'] == '0') {
				$searchKey = $item['UF_LINK'];
				$defaultTypeName = $item['UF_NAME_' . strtoupper(LANGUAGE_ID)];
				$selectedTypeName = $defaultTypeName;
			}

			if (isset($_GET[$searchKey]) && $item['UF_XML_ID'] == $_GET[$searchKey]) {
				$isSelected = 'selected';
				$isSelectedDefault = '';
				$selectedTypeName = $item['UF_NAME_' . strtoupper(LANGUAGE_ID)];
			}
			if (!isset($_GET[$searchKey]) && $item['UF_XML_ID'] == '0') {
				$isSelected = 'selected';
			}
			$isActive = '';
			if ($item['UF_XML_ID'] !== '0' && !in_array($item['UF_XML_ID'], $arResult['PROP_HAS_VALUES'][$code])) {
				$isActive = 'disabled';
			}

			$listControl .= '<div class="status-bar__dropdown-container">
					<button class="filter-item '.$isSelected.'" data-key="'.$searchKey.'" data-value="'.$item['UF_XML_ID'].'" '.$isActive.'>'. $item['UF_NAME_'.strtoupper(LANGUAGE_ID)].'</button>
				</div>';
		}

		?>
		<div class="status-bar__link-<?=$indexProp?>">
			<a class="status-bar__link-<?=$indexProp?>--link"><?= $selectedTypeName; ?></a>
			<a class="status-bar__link-<?=$indexProp?>--dropdown"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9 1L5 5L1 1" stroke="#808080" stroke-miterlimit="10" />
				</svg></a>
		</div>
		<div class="status-bar__dropdown-content-<?=$indexProp?>">
			<div class="status-bar__dropdown-content-wrapper">
				<?= $listControl; ?>
			</div>
		</div>
		<?
		$indexProp++;
	}
	
	?>
</div>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/projects_status_bar.min.js"></script>