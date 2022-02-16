<!DOCTYPE html>
<html lang="en">

<head>
	<?
	$APPLICATION->ShowHead();
	$rsSites = CSite::GetByID(SITE_ID);
	$arSite = $rsSites->Fetch();
	?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Manrope:wght@400;700&display=swap" rel="stylesheet" />

	<?
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/mainCss.min.css", true);
	//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-3.6.0.slim.min.js", true);  //в этом файле нет ajax
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.js", true);
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/mainJs.min.js", true);
	?>
	<title><? $APPLICATION->ShowTitle() ?> | <?= $arSite['SITE_NAME'] ?></title>
</head>

<body>
	<? $APPLICATION->ShowPanel(); ?>
	<?
	$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		array(
			"AREA_FILE_SHOW" => "file",
			"AREA_FILE_SUFFIX" => "inc",
			"EDIT_TEMPLATE" => "",
			"PATH" => "/include/topnavbar.php"
		)
	);
	?>
	<main>