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

	<? if (isset($arResult['PROP_VALUES']['UF_ARCH_TYPE']) && is_array($arResult['PROP_VALUES']['UF_ARCH_TYPE']) && count($arResult['PROP_VALUES']['UF_ARCH_TYPE'])) : ?>
		<?
		$selectedTypeName = '';
		$searchKey = '';
		$defaultTypeName = '';
		$isSelectedDefault = 'selected';
		$listControlTypes = '';

		foreach ($arResult['PROP_VALUES']['UF_ARCH_TYPE'] as $item) {
			$isSelected = '';

			if ($item['UF_XML_ID'] == '0') {
				$searchKey = $item['UF_LINK'];
				$defaultTypeName = $item['UF_NAME_' . strtoupper(LANGUAGE_ID)];
				$selectedTypeName = $defaultTypeName;
			}

			if (isset($_GET['type']) && $item['UF_XML_ID'] == $_GET['type']) {
				$isSelected = 'selected';
				$isSelectedDefault = '';
				$selectedTypeName = $item['UF_NAME_' . strtoupper(LANGUAGE_ID)];
			}
			if (!isset($_GET['type']) && $item['UF_XML_ID'] == '0') {
				$isSelected = 'selected';
			}

			$listControlTypes .= '<div class="status-bar__dropdown-container">
					<a class="filter-item ' . $isSelected . '" data-key="' . $searchKey . '" data-value="' . $item['UF_XML_ID'] . '">' . $item['UF_NAME_' . strtoupper(LANGUAGE_ID)] . '</a>
				</div>';
		}

		?>
		<div class="status-bar__link-1">
			<a class="status-bar__link-1--link"><?= $selectedTypeName; ?></a>
			<a class="status-bar__link-1--dropdown"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9 1L5 5L1 1" stroke="#808080" stroke-miterlimit="10" />
				</svg></a>
		</div>
		<div class="status-bar__dropdown-content-1">
			<div class="status-bar__dropdown-content-wrapper">
				<?= $listControlTypes; ?>
			</div>
		</div>
	<? endif; ?>

	<? if (isset($arResult['PROP_VALUES']['UF_ARCH_GEO']) && is_array($arResult['PROP_VALUES']['UF_ARCH_GEO']) && count($arResult['PROP_VALUES']['UF_ARCH_GEO'])) : ?>
		<?
		$selectedGeoName = '';
		$searchKey = '';
		$defaultGeoName = '';
		$isSelectedDefault = 'selected';
		$listControlGeo = '';

		foreach ($arResult['PROP_VALUES']['UF_ARCH_GEO'] as $item) {
			$isSelected = '';

			if ($item['UF_XML_ID'] == '0') {
				$searchKey = $item['UF_LINK'];
				$defaultGeoName = $item['UF_NAME_' . strtoupper(LANGUAGE_ID)];
				$selectedGeoName = $defaultGeoName;
			}

			if (isset($_GET['geo']) && $item['UF_XML_ID'] == $_GET['geo']) {
				$isSelected = 'selected';
				$isSelectedDefault = '';
				$selectedGeoName = $item['UF_NAME_' . strtoupper(LANGUAGE_ID)];
			}
			if (!isset($_GET['geo']) && $item['UF_XML_ID'] == '0') {
				$isSelected = 'selected';
			}

			$listControlGeo .= '<div class="status-bar__dropdown-container">
					<a class="filter-item ' . $isSelected . '" data-key="' . $searchKey . '" data-value="' . $item['UF_XML_ID'] . '">' . $item['UF_NAME_' . strtoupper(LANGUAGE_ID)] . '</a>
				</div>';
		}
		?>
		<div class="status-bar__link-2">
			<a class="status-bar__link-2--link"><?= $selectedGeoName; ?></a>
			<a class="status-bar__link-2--dropdown"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9 1L5 5L1 1" stroke="#808080" stroke-miterlimit="10" />
				</svg></a>
		</div>
		<div class="status-bar__dropdown-content-2">
			<div class="status-bar__dropdown-content-wrapper">
				<?= $listControlGeo; ?>
			</div>
		</div>
	<? endif; ?>

	<? if (isset($arResult['PROP_VALUES']['UF_ARCH_YEAR']) && is_array($arResult['PROP_VALUES']['UF_ARCH_YEAR']) && count($arResult['PROP_VALUES']['UF_ARCH_YEAR'])) : ?>
		<?
		$selectedYearName = '';
		$searchKey = '';
		$defaultYearName = '';
		$isSelectedDefault = 'selected';
		$listControlYear = '';

		foreach ($arResult['PROP_VALUES']['UF_ARCH_YEAR'] as $item) {
			$isSelected = '';

			if ($item['UF_XML_ID'] == '0') {
				$searchKey = $item['UF_LINK'];
				$defaultYearName = $item['UF_NAME_' . strtoupper(LANGUAGE_ID)];
				$selectedYearName = $defaultYearName;
			}

			if (isset($_GET['year']) && $item['UF_XML_ID'] == $_GET['year']) {
				$isSelected = 'selected';
				$isSelectedDefault = '';
				$selectedYearName = $item['UF_NAME_' . strtoupper(LANGUAGE_ID)];
			}
			if (!isset($_GET['year']) && $item['UF_XML_ID'] == '0') {
				$isSelected = 'selected';
			}

			$listControlYear .= '<div class="status-bar__dropdown-container">
					<a class="filter-item ' . $isSelected . '" data-key="' . $searchKey . '" data-value="' . $item['UF_XML_ID'] . '">' . $item['UF_NAME_' . strtoupper(LANGUAGE_ID)] . '</a>
				</div>';
		}
		?>
		<div class="status-bar__link-3">
			<a class="status-bar__link-3--link"><?= $selectedYearName; ?></a>
			<a class="status-bar__link-3--dropdown"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9 1L5 5L1 1" stroke="#808080" stroke-miterlimit="10" />
				</svg></a>
		</div>
		<div class="status-bar__dropdown-content-3">
			<div class="status-bar__dropdown-content-wrapper">
				<?= $listControlYear; ?>
			</div>
		</div>
	<? endif; ?>

	<? if (isset($arResult['PROP_VALUES']['UF_ARCH_PROJECT_STATUS']) && is_array($arResult['PROP_VALUES']['UF_ARCH_PROJECT_STATUS']) && count($arResult['PROP_VALUES']['UF_ARCH_PROJECT_STATUS'])) : ?>
		<?
		$selectedStatusName = '';
		$searchKey = '';
		$defaultStatusName = '';
		$isSelectedDefault = 'selected';
		$listControlStatus = '';

		foreach ($arResult['PROP_VALUES']['UF_ARCH_PROJECT_STATUS'] as $item) {
			$isSelected = '';

			if ($item['UF_XML_ID'] == '0') {
				$searchKey = $item['UF_LINK'];
				$defaultStatusName = $item['UF_NAME_' . strtoupper(LANGUAGE_ID)];
				$selectedStatusName = $defaultStatusName;
			}

			if (isset($_GET['status']) && $item['UF_XML_ID'] == $_GET['status']) {
				$isSelected = 'selected';
				$isSelectedDefault = '';
				$selectedStatusName = $item['UF_NAME_' . strtoupper(LANGUAGE_ID)];
			}
			if (!isset($_GET['status']) && $item['UF_XML_ID'] == '0') {
				$isSelected = 'selected';
			}

			$listControlStatus .= '<div class="status-bar__dropdown-container">
					<a class="filter-item ' . $isSelected . '" data-key="' . $searchKey . '" data-value="' . $item['UF_XML_ID'] . '">' . $item['UF_NAME_' . strtoupper(LANGUAGE_ID)] . '</a>
				</div>';
		}
		?>
		<div class="status-bar__link-4">
			<a class="status-bar__link-4--link"><?= $selectedStatusName; ?></a>
			<a class="status-bar__link-4--dropdown"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9 1L5 5L1 1" stroke="#808080" stroke-miterlimit="10" />
				</svg></a>
		</div>
		<div class="status-bar__dropdown-content-4">
			<div class="status-bar__dropdown-content-wrapper">
				<?= $listControlStatus; ?>
			</div>
		</div>
	<? endif; ?>
</div>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/projects_status_bar.min.js"></script>