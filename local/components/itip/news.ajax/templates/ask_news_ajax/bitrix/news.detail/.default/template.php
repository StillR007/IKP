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
<div class="row row_l-pad">
	<div class="col-12 col_l-pad">
		<div class="page-image-cont" style="position: relative;">
			<a onclick="askMobile.showPhoto('<?=$arResult["DETAIL_PICTURE"]["SRC"]?>','<?=$arResult["NAME"]?>')">
				<img class="page-image" 
					src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" 
					alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
					title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
				/>
				<div class="zoom-img-icon">
					<div></div>
					<i class="la la-search" aria-hidden="true"></i>
				</div>
			</a>
		</div>
		<article class="article">
			<h1><?=$arResult["NAME"]?></h1>

			<?echo $arResult["DETAIL_TEXT"];?>
			<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
		</article>

		<?
		if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
		{
			?>
			<div class="news-detail-share">
				<noindex>
				<?
				$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
						"HANDLERS" => $arParams["SHARE_HANDLERS"],
						"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
						"PAGE_TITLE" => $arResult["~NAME"],
						"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
						"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
						"HIDE" => $arParams["SHARE_HIDE"],
					),
					$component,
					array("HIDE_ICONS" => "Y")
				);
				?>
				</noindex>
			</div>
			<?
		}
		?>
	</div>
</div>
