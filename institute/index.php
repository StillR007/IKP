<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Проекты");
?>

<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/institute_page.min.css">

<div class="institute-page">
	<div class="institute-page__top">
		<div>
			<a href="/" class="institute-page__top--arrow"></a>
			<a href="/">Главная</a>
		</div>
		<i>/ HR информация</i>
	</div>

	<div class="institute-page__background-lines">
		<div class="column"></div>
		<div class="column"></div>
		<div class="column"></div>
		<div class="column"></div>
		<div class="column"></div>
		<div class="column"></div>
		<div class="column"></div>
		<div class="column"></div>
	</div>

	<div class="institute-page__block">
		<a href="/institute/about/">Об институте</a>
		<a href="/institute/about/" class="institute-page__block--arrow"></a>
	</div>
	<div class="institute-page__block">
		<a href="/institute/career/">Карьера</a>
		<a href="/institute/career/" class="institute-page__block--arrow"></a>
	</div>
	<div class="institute-page__block">
		<a href="/institute/internship/">Интернатура</a>
		<a href="/institute/internship/" class="institute-page__block--arrow"></a>
	</div>
	<div class="institute-page__block atom">Институт комплексного проектирования «АТОМ»</div>
</div>


<script src="<?= SITE_TEMPLATE_PATH ?>/js/institute_page.min.js"></script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>