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
?>
<div class="main-container">
	<section class="improvement-photos">
		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="improvement-photo">
				<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])) : ?>
					<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
						<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
							<picture class="improvement-img">
								<img src="/upload/iblock/placeholder.gif" data-src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["NAME"] ?>" />
							</picture>
						</a>
					<? endif; ?>
				<? endif ?>

				<p class="improvement-photo-info">
					<? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]) : ?>
						<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
							<a class="improvement-photo--name" href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a>
						<? endif; ?>
					<? endif; ?>
					<a class="improvement-photo--year" href="<? echo $arItem["DETAIL_PAGE_URL"] ?>">
						<? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty) : ?>
							<?= $arProperty["DISPLAY_VALUE"]; ?>
						<? endforeach; ?>
					</a>
				</p>
			</div>
		<? endforeach; ?>
	</section>
</div>