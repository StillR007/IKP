<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
// номер текущей страницы
$curPage = $arResult["NAV_RESULT"]->NavPageNomer;
// всего страниц - номер последней страницы
$totalPages = $arResult["NAV_RESULT"]->NavPageCount;
// номер постраничной навигации на странице
$navNum = $arResult["NAV_RESULT"]->NavNum;

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
//echo "<pre>".print_r($arParams)."</pre>";
//echo "<pre>".print_r($arResult["NAV_RESULT"], 1)."</pre>";
//echo "totalPages:".$totalPages;
?>
<? if (count($arResult["ITEMS"]) > 0) : ?>
	<? if ($arParams["AJAX"] != "Y") : ?>
		<div class="main-container">
			<section class="architecture-photos">
			<? endif; ?>

			<? foreach ($arResult["ITEMS"] as $arItem) : ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

				//исходное изображение в элементе $arItem["PREVIEW_PICTURE"]["SRC"]
				$imgXL = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]['ID'], array("width" => 1900, "height" => 1080), BX_RESIZE_IMAGE_PROPORTIONAL, false);
				$imgMD = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]['ID'], array("width" => 495, "height" => 278), BX_RESIZE_IMAGE_PROPORTIONAL, false);
				$imgSM = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]['ID'], array("width" => 575, "height" => 385), BX_RESIZE_IMAGE_PROPORTIONAL, false);

				//echo $imgXL["src"];
				?>
				<div class="architecture-photo">
					<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) : ?>
						<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
							<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
								<picture class="architecture-img">
									<? //
									?>
									<img src="/upload/iblock/placeholder.gif" data-src="<?= $imgXL["src"] ?>" alt="<?= $arItem["NAME"] ?>" />
								</picture>
							</a>
						<? endif; ?>
					<? endif ?>

					<p class="architecture-photo-info">
						<? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]) : ?>
							<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
								<a class="architecture-photo--name" href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a>
							<? endif; ?>
						<? endif; ?>

						<a class="architecture-photo--year" href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["PROJECT_YEAR"] ?></a>
					</p>
				</div>
			<? endforeach; ?>

			<? if ($arParams["AJAX"] != "Y") : ?>
			</section>
		<? endif; ?>
		<div id="load-items"></div>
		<div id="ajax-loader">
			<img />
		</div>
		<? if ($arParams["AJAX"] != "Y") : ?>
			<? if ($totalPages > 1) : ?>
				<script>
					$(function() {
						var newsSetLoader = new moreLoader({
							root: '.main-container',
							newsBlock: '.architecture-photos',
							newsLoader: '#load-items',
							ajaxLoader: '#ajax-loader img',
							loadSett: {
								endPage: <?= $totalPages ?>,
								navNum: <?= $navNum ?>
							}
						});
						newsSetLoader.init();
					});
				</script>


			<? endif; ?>
		<? endif; ?>

	<? else : ?>
		<div class="main-container">
			<section class="architecture-photos">
				<h5>Проекты не найдены!</h5>
			</section>
		</div>
	<? endif; ?>
		</div>