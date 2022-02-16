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
$this->setFrameMode(true);
?>
<div class="block-list">
	<div class="row">
	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?><br />
	<?endif;?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="col-sm-12 col-md-6 col_b-pad" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		  <a class="block-link" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
			<div class="row">
			  <div class="col-12 col-sm-6">
				<div class="block-preview-cont_bg" style="background-image:url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
				</div>
			  </div>
			  <div class="col-12 col-sm-6">
				<div class="block-description-header">— <?echo $arItem["DISPLAY_ACTIVE_FROM"]?> —</div>
				<div class="block-decription-text">
					<?echo $arItem["NAME"]?>
					<?//echo $arItem["PREVIEW_TEXT"];?>
				</div>
			  </div>
			</div>
		  </a>
		</div>
	<?endforeach;?>
	</div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

