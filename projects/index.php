<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Об институте");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/about.min.css", true);
?>

<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/projects_page.min.css">

<div class="projects-page">
	<div class="projects-page__top">
		<div>
			<a href="/" class="projects-page__top--arrow"></a>
			<a href="/">Главная</a>
		</div>
		<i>/ Проекты института</i>
	</div>

	<div class="projects-page__background-lines">
		<div class="column"></div>
		<div class="column"></div>
		<div class="column"></div>
		<div class="column"></div>
		<div class="column"></div>
		<div class="column"></div>
		<div class="column"></div>
		<div class="column"></div>
	</div>

	<div class="projects-page__block">
		<a href="/projects/masterplans/">Мастерпланы</a>
		<a href="/projects/masterplans/" class="projects-page__block--number">12</a>
		<a href="/projects/masterplans/" class="projects-page__block--arrow"></a>
	</div>
	<div class="projects-page__block">
		<a href="/projects/architecture/">Архитектура</a>
		<a href="/projects/architecture/" class="projects-page__block--number">12</a>
		<a href="/projects/architecture/" class="projects-page__block--arrow"></a>
	</div>
	<div class="projects-page__block">
		<a href="/projects/improvement/">Благоустройство</a>
		<a href="/projects/improvement/" class="projects-page__block--number">12</a>
		<a href="/projects/improvement/" class="projects-page__block--arrow"></a>
	</div>
	<div class="projects-page__block">
		<a href="/projects/interiors/">Интерьеры</a>
		<a href="/projects/interiors/" class="projects-page__block--number">12</a>
		<a href="/projects/interiors/" class="projects-page__block--arrow"></a>
	</div>
	<div class="projects-page__block atom">Институт комплексного проектирования «АТОМ»</div>
</div>


<script src="<?= SITE_TEMPLATE_PATH ?>/js/projects_page.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/about.min.js"></script><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>