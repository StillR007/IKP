<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/indexPage.min.css", true);
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/indexPage.min.js", true);
?>

<picture>
	<img src="<?= SITE_TEMPLATE_PATH ?>/img/index-sample.png">
</picture>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>