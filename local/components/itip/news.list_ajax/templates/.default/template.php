<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
//echo "totalPages:".$totalPages;
?>
<?if($arParams["AJAX"] != "Y"):?>
	<div class="block-list" style="border-bottom: 0px;">
		<div class="row news-wrap">
<?endif;?>

	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		$arr_dt = explode(" ", $arItem["DISPLAY_ACTIVE_FROM"]);
		$arr_month = ["январь","февраль","март","апрель","май","июнь","июль","август","сентябрь","октябрь","ноябрь","январь","декабрь"];
		$file = CFile::GetFileArray($arItem['PROPERTY_5']);
		//print_r($file);
		?>
		<div class="col-12 col-sm-6 col-md-6 col_b-pad" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		  <a class="block-link pt-2" onclick="BXMobileApp.UI.Document.open({'url':'<?=$file['SRC']?>'});">
			<div class="row">
			  <div class="col-lg-6">
				<div class="block-preview-cont_bg" style="border: 1px solid #efeeee; background-image:url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
				</div>
			  </div>
			  <div class="col-lg-6">
					<div class="row">
						<div class="col-6">
							<div class="block-description-header"><?echo $arr_month[$arr_dt[0]-1]." ".$arr_dt[1];?></div>
						</div>
						<div class="col-6">
							<div class="block-decription-text">
								<?echo $arItem["NAME"]?>
								<?//echo $arItem["PREVIEW_TEXT"];?>
							</div>
						</div>
					</div>
				</div>
			</div>
		  </a>
		</div>
	<?endforeach;?>
<?if($arParams["AJAX"] != "Y"):?>
	</div>
<?endif;?>

<?if($arParams["AJAX"] != "Y"):?>
	<?//if($totalPages > 1):?>
<!-- 		<div class="row">
			<div class="col-12">
				<div class="paginator-more-wrap ask-main">
					<div class="paginator-block"> -->
						<!--<span id="ajax-loader"><img src="<?=//$templateFolder?>/img/loader.gif" /></span>-->
<!-- 						<a class="paginator-more" id="load-items">Показать еще</a>
					</div>
				</div>
			</div>
		</div> -->
	<?//endif;?>

	<?if($totalPages > 1):?>
		<script>
			$(function(){
				var newsSetLoader = new moreLoader({
					root: '.block-list',
					newsBlock: '.news-wrap',
					newsLoader: '#load-items',
					ajaxLoader: '#ajax-loader img',
					loadSett:{
						endPage: <?=$totalPages?>,
						navNum: <?=$navNum?>
					}	
				});
				newsSetLoader.init();
			});
		</script>
	<?endif;?>

<?endif;?>
</div>