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
?><link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/detail-page.min.css">


<video class="video" poster="<?= SITE_TEMPLATE_PATH ?>/img/interior_01.jpg" loop="" playsinline="" muted="">
	<source src="<?= SITE_TEMPLATE_PATH ?>/video/baltic_sample_1920-820_min_px.webm" type="video/webm" />
	<source src="<?= SITE_TEMPLATE_PATH ?>/video/baltic-sample-1920-820-min-px.mp4" type="video/mp4" />
	Video tag not supported. Download the video <a href="<?= SITE_TEMPLATE_PATH ?>/video/baltic-sample-1920-820-min-px.mp4">here</a>
</video>

<div class="main-container">
	<div class="under-slider-info">
		<div class="bread-crumbs">
			Проекты / Интерьеры
		</div>
	</div>

	<div class="detail-info">
		<h1>Квартал<br>Энтузиастов</h1>

		<div class="detail-info__status">
			<p class="detail-info__bold">Статус проекта</p>
			<p>В процессе</p>
		</div>

		<div class="detail-info__all-area">
			<p class="detail-info__bold">Общая площадь</p>
			<p>122 000 <span>м<sup>2</sup></span></p>
		</div>

		<div class="detail-info__type">
			<p class="detail-info__bold">Типология</p>
			<p>Городские кварталы, Территории комплексного развития</p>
		</div>

		<div class="detail-info__dev">
			<p class="detail-info__bold">Разработан</p>
			<p>2020 - Лето</p>
		</div>

		<div class="detail-info__place">
			<p class="detail-info__bold">Местоположение</p>
			<p>ул. Академика Вонсовского, 21, Екатеринбург
				<svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.15385 0C2.75862 0 0 2.75132 0 6.13757C0 8.59259 1.06101 11.0053 2.97082 13.2063C4.37135 14.8995 5.85677 15.746 5.85677 15.873C5.98409 15.873 6.06897 16 6.19629 16C6.32361 16 6.40849 15.873 6.53581 15.873C6.62069 15.746 8.02122 14.9418 9.50663 13.2063C11.4164 10.963 12.3926 8.55026 12.3926 6.13757C12.3077 2.75132 9.54908 0 6.15385 0ZM6.15385 8.59259C4.88064 8.59259 3.69231 7.53439 3.69231 6.13757C3.69231 4.74074 4.88064 3.68254 6.15385 3.68254C7.51194 3.68254 8.61539 4.74074 8.61539 6.13757C8.61539 7.49206 7.51194 8.59259 6.15385 8.59259Z" fill="#E5E5E5" />
				</svg>
			</p>
		</div>

		<div class="detail-info__autors">
			<p class="detail-info__bold">Авторы</p>
			<p>
				<a href="#">Давлетбаева Ю. Ш.</a>
				<a href="#">Кузнецов А. С.</a>
				<a href="#">Жолобайло М. И.</a>
				<a href="#">Бочкарёв Д. Н.</a>
				<a href="#">Коняев И. А.</a>
				<a href="#">Давлетбаева Ю. Ш.</a>
				<a href="#">Кузнецов А. С.</a>
				<a href="#">Жолобайло М. И.</a>
				<a href="#">Бочкарёв Д. Н.</a>
				<a href="#">Коняев И. А.</a>
				<a href="#">Давлетбаева Ю. Ш.</a>
				<a href="#">Кузнецов А. С.</a>
				<a href="#">Жолобайло М. И.</a>
				<a href="#">Бочкарёв Д. Н.</a>
				<a href="#">Коняев И. А.</a>
			</p>
		</div>

		<div class="detail-info__coautors">
			<p class="detail-info__bold">Соавторы</p>
			<p class="detail-info__coautors-field">
				<a href="#">Glifberg+Lykke</a>
				<a href="#">Søren V Jensen</a>
				<a href="#">Beaver Concrete</a>
				<a href="#">Glifberg+Lykke</a>
				<a href="#">Søren V Jensen</a>
				<a href="#">Beaver Concrete</a>
				<a href="#">Glifberg+Lykke</a>
				<a href="#">Søren V Jensen</a>
				<a href="#">Beaver Concrete</a>
				<a href="#">Glifberg+Lykke</a>
				<a href="#">Søren V Jensen</a>
				<a href="#">Beaver Concrete</a>
				<a href="#">Glifberg+Lykke</a>
				<a href="#">Søren V Jensen</a>
				<a href="#">Beaver Concrete</a>
			</p>

		</div>

		<div class="detail-info__tags">
			<div class="detail-info__tags--tag">ИРБИТСКАЯ</div>
			<div class="detail-info__tags--tag">КВАРТАЛ</div>
			<div class="detail-info__tags--tag">ЗАСТРОЙКА</div>
			<div class="detail-info__tags--tag">ЖИЛОЙ КОМПЛЕКС</div>
			<div class="detail-info__tags--tag">ЛИФТ</div>
			<div class="detail-info__tags--tag">ИССЛЕДОВАНИЕ</div>
			<div class="detail-info__tags--tag">анализ</div>
			<div class="detail-info__tags--tag">TAG 7</div>
			<div class="detail-info__tags--tag">NEW TAG 8</div>
			<div class="detail-info__tags--tag">TAG 9</div>
			<div class="detail-info__tags--tag">TITLE TAG 10</div>
		</div>

		<div class="detail-info__right">
			<h2>Градостроительная концепция по реновации жилого квартала</h2>
			<p>Проект развития данного малого района, сочетая в себе высотную и
				среднеэтажную застройку, позволяет создать
				комфортную для человека среду и в то же время обеспечить достаточно большой выход площади с участка. Сеть
				пешеходных улиц задает удобные внутриквартальные связи.<br />
				<br />
				Градостроительная концепция предполагает создание сомасштабной человеку среды с помощью деления квартала
				на малые квартальные единицы, формируемые преимущественно застройкой базовой этажности (до 8 этажей)
				и вынесения высотных зданий в зону наименьшей пешеходной активности - на сторону улиц Вилонова и Раевского.
				Так будет создан выразительный силуэт города со стороны магистралей и промышленных зон. Фасадный фронт улиц
				Ирбитская и Данилы Зверева, наоборот, формируется жилыми домами базовой этажности, что позволяет пешеходам
				чувствовать себя в сомасштабном пространстве. Между малыми квартальными единицами разработана
				взаимосвязанная сеть пешеходных улиц. Комфортные аллеи и дворы формируются в основном застройкой базовой
				этажности.
			</p>
		</div>
	</div>
</div>

<div class="detail-map">
	<div class="detail-map__close-button"></div>

	<div class="detail-map__map">
		<img src="<?= SITE_TEMPLATE_PATH ?>/img/Map_img.png" />
	</div>

	<div class="detail-map__info">
		<div class="detail-map__info--geo">Пионерский район, Екатеринбург</div>
		<div class="detail-map__info--coordinates">56.862530, 60.652579</div>
	</div>

	<div class="detail-map__link">
		<a href="#" target="_blank">Открыть на Яндекс.Картах</a>
		<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M8.99948 6.30435C8.99948 8.30435 8.99948 8.30435 8.99948 8.30435C8.99948 8.65217 8.64395 9 8.28841 9C1.62218 9 1.62218 9 1.62218 9C1.26665 8.91304 1 8.56522 1 8.21739C1 1.69565 1 1.69565 1 1.69565C1 1.34783 1.26665 1 1.71106 1C4.11091 1 4.11091 1 4.11091 1" stroke="#CEA78F" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
			<path d="M5.97852 1.08691H9.00054V4.13039" stroke="#CEA78F" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
			<path d="M5 4.99996L8.99974 1.08691" stroke="#CEA78F" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
		</svg>
	</div>
</div>


<div class="carousel__status">Эскизы</div>
<div class="carousel">
	<div class="carousel-wrapper">
		<div class="carousel--photo">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/carousel-example--1.jpg">
			<span>
				<a class="download-link-carousel-hover" download></a>
				<svg class="share-carousel-hover" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.5509 1.1659L19.4549 7.14049C19.8532 7.5388 19.8532 7.5388 19.8532 7.80434C19.8532 8.06987 19.8532 8.46818 19.4549 8.86649L12.4181 14.8411C12.0198 15.2394 11.7543 14.8411 11.7543 14.1772V10.1942H10.4266C7.10737 10.5925 3.78815 11.7874 1.39831 14.1772C1 14.5755 1 14.5755 1 14.1772C1 13.7789 1 13.5134 1 13.1151C2.06215 9.13202 6.04522 5.54727 10.2938 5.54727H11.6215V1.5642C11.887 0.900358 12.1526 0.900358 12.5509 1.1659Z" stroke="#F5F5F5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</div>
		<div class="carousel--photo">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/carousel-example--2.jpg">
			<span>
				<a class="download-link-carousel-hover" download></a>
				<svg class="share-carousel-hover" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.5509 1.1659L19.4549 7.14049C19.8532 7.5388 19.8532 7.5388 19.8532 7.80434C19.8532 8.06987 19.8532 8.46818 19.4549 8.86649L12.4181 14.8411C12.0198 15.2394 11.7543 14.8411 11.7543 14.1772V10.1942H10.4266C7.10737 10.5925 3.78815 11.7874 1.39831 14.1772C1 14.5755 1 14.5755 1 14.1772C1 13.7789 1 13.5134 1 13.1151C2.06215 9.13202 6.04522 5.54727 10.2938 5.54727H11.6215V1.5642C11.887 0.900358 12.1526 0.900358 12.5509 1.1659Z" stroke="#F5F5F5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</div>
		<div class="carousel--photo">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/carousel-example--3.jpg">
			<span>
				<a class="download-link-carousel-hover" download></a>
				<svg class="share-carousel-hover" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.5509 1.1659L19.4549 7.14049C19.8532 7.5388 19.8532 7.5388 19.8532 7.80434C19.8532 8.06987 19.8532 8.46818 19.4549 8.86649L12.4181 14.8411C12.0198 15.2394 11.7543 14.8411 11.7543 14.1772V10.1942H10.4266C7.10737 10.5925 3.78815 11.7874 1.39831 14.1772C1 14.5755 1 14.5755 1 14.1772C1 13.7789 1 13.5134 1 13.1151C2.06215 9.13202 6.04522 5.54727 10.2938 5.54727H11.6215V1.5642C11.887 0.900358 12.1526 0.900358 12.5509 1.1659Z" stroke="#F5F5F5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</div>
		<div class="carousel--photo">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/carousel-example--4.jpg">
			<span>
				<a class="download-link-carousel-hover" download></a>
				<svg class="share-carousel-hover" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.5509 1.1659L19.4549 7.14049C19.8532 7.5388 19.8532 7.5388 19.8532 7.80434C19.8532 8.06987 19.8532 8.46818 19.4549 8.86649L12.4181 14.8411C12.0198 15.2394 11.7543 14.8411 11.7543 14.1772V10.1942H10.4266C7.10737 10.5925 3.78815 11.7874 1.39831 14.1772C1 14.5755 1 14.5755 1 14.1772C1 13.7789 1 13.5134 1 13.1151C2.06215 9.13202 6.04522 5.54727 10.2938 5.54727H11.6215V1.5642C11.887 0.900358 12.1526 0.900358 12.5509 1.1659Z" stroke="#F5F5F5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</div>
		<div class="carousel--photo">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/carousel-example--5.jpg">
			<span>
				<a class="download-link-carousel-hover" download></a>
				<svg class="share-carousel-hover" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.5509 1.1659L19.4549 7.14049C19.8532 7.5388 19.8532 7.5388 19.8532 7.80434C19.8532 8.06987 19.8532 8.46818 19.4549 8.86649L12.4181 14.8411C12.0198 15.2394 11.7543 14.8411 11.7543 14.1772V10.1942H10.4266C7.10737 10.5925 3.78815 11.7874 1.39831 14.1772C1 14.5755 1 14.5755 1 14.1772C1 13.7789 1 13.5134 1 13.1151C2.06215 9.13202 6.04522 5.54727 10.2938 5.54727H11.6215V1.5642C11.887 0.900358 12.1526 0.900358 12.5509 1.1659Z" stroke="#F5F5F5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</div>
		<div class="carousel--photo">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/carousel-example--6.jpg">
			<span>
				<a class="download-link-carousel-hover" download></a>
				<svg class="share-carousel-hover" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.5509 1.1659L19.4549 7.14049C19.8532 7.5388 19.8532 7.5388 19.8532 7.80434C19.8532 8.06987 19.8532 8.46818 19.4549 8.86649L12.4181 14.8411C12.0198 15.2394 11.7543 14.8411 11.7543 14.1772V10.1942H10.4266C7.10737 10.5925 3.78815 11.7874 1.39831 14.1772C1 14.5755 1 14.5755 1 14.1772C1 13.7789 1 13.5134 1 13.1151C2.06215 9.13202 6.04522 5.54727 10.2938 5.54727H11.6215V1.5642C11.887 0.900358 12.1526 0.900358 12.5509 1.1659Z" stroke="#F5F5F5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</div>
	</div>

	<div class="carousel__fullscreen-icons">
		<p>Ахахах</p>
		<a class="carousel-download-link" download></a>
		<div class="carousel-download-link-info">
			<span>Скачать</span>
			<span></span>
		</div>
		<svg class="carousel-share" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12.5509 1.1659L19.4549 7.14049C19.8532 7.5388 19.8532 7.5388 19.8532 7.80434C19.8532 8.06987 19.8532 8.46818 19.4549 8.86649L12.4181 14.8411C12.0198 15.2394 11.7543 14.8411 11.7543 14.1772V10.1942H10.4266C7.10737 10.5925 3.78815 11.7874 1.39831 14.1772C1 14.5755 1 14.5755 1 14.1772C1 13.7789 1 13.5134 1 13.1151C2.06215 9.13202 6.04522 5.54727 10.2938 5.54727H11.6215V1.5642C11.887 0.900358 12.1526 0.900358 12.5509 1.1659Z" stroke="#F5F5F5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
		</svg>
		<div class="carousel-share-info">
			<span>Поделиться</span>
			<span></span>
		</div>
		<svg class="carousel-fullscreen--close-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 1L19 19" stroke="#F5F5F5" stroke-miterlimit="10" />
			<path d="M1 19L19 1" stroke="#F5F5F5" stroke-miterlimit="10" />
		</svg>
		<div class="carousel-fullscreen--close-icon-info">
			<span>Закрыть</span>
			<span></span>
		</div>
	</div>
</div>

<div class="carousel__popup">
	<div class="carousel__popup-body">
		<div class="carousel__popup-content">
			<div class="carousel__popup-content--close">
				<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M8 9.16551L1.16551 16L0 14.8345L6.83449 8L0 1.16551L1.16551 4.91225e-06L8 6.83449L14.8345 0L16 1.16551L9.16551 8L16 14.8345L14.8345 16L8 9.16551Z" fill="#2E2E2E" />
				</svg>
			</div>
			<div class="carousel__popup-content--title">Поделиться фотографией</div>
			<div class="carousel__popup-content--text">Поделитесь фотографией с коллегами и друзьями, скопируйте
				ссылку
				на фотографию или отправьте через социальные сети или мессенджеры</div>
			<p class="carousel__popup-content--field"></p>

			<div class="carousel__popup-content--socials">
				<a class="carousel__popup-content--socials-fb" href="#" target="_blank">
					<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M1.73333 7.73333H0V5.06667H1.73333V3.73333C1.73333 1.33333 2.8 0 5.6 0H7.86667V2.8H6.53333C5.33333 2.8 5.33333 3.06667 5.33333 3.86667V4.93333H7.86667L7.46667 7.73333H5.33333V13.4667H1.73333V7.73333Z" fill="#2E2E2E" />
					</svg>
					Facebook
				</a>
				<a class="carousel__popup-content--socials-vk" href="#" target="_blank">
					<svg width="17" height="10" viewBox="0 0 17 10" fill="#2E2E2E;" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M5.57401 8.66667C4.64068 8.13333 3.84067 7.33333 3.17401 6.4C1.84067 4.66667 0.907342 2.8 0.107342 0.933333C-0.159325 0.533333 0.107342 0.266667 0.507342 0.266667H2.90734C3.17401 0.266667 3.44067 0.533333 3.57401 0.8C4.10734 1.86667 4.64068 2.93333 5.30734 3.86667C5.44068 4 5.57401 4.4 5.84068 4.53333C6.10734 4.66667 6.37401 4.66667 6.50734 4.26667C6.64068 4.13333 6.64068 3.86667 6.64068 3.6C6.64068 2.8 6.64068 2.13333 6.64068 1.33333C6.64068 0.933333 6.37401 0.533333 5.84068 0.533333C5.57401 0.533333 5.57401 0.4 5.70734 0.266667C5.97401 0.133333 6.10734 0 6.50734 0H9.30734C9.70734 0.133333 9.84068 0.266667 9.84068 0.666667V3.73333C9.84068 3.86667 9.84068 4.4 10.2407 4.53333C10.5073 4.66667 10.6407 4.4 10.774 4.26667C11.4407 3.6 11.8407 2.8 12.374 1.86667C12.5073 1.46667 12.774 1.06667 12.9073 0.8C12.9073 0.4 13.174 0.4 13.4407 0.4H16.2407C16.6407 0.533333 16.774 0.666667 16.6407 1.06667C16.374 1.73333 15.974 2.26667 15.574 2.93333C15.174 3.46667 14.6407 4.13333 14.2407 4.66667C13.8407 5.33333 13.8407 5.46667 14.374 6C14.9073 6.53333 15.574 7.06667 15.974 7.73333C16.2407 8 16.374 8.26667 16.5073 8.53333C16.774 8.93333 16.5073 9.46667 16.1073 9.46667H13.7073C13.0407 9.46667 12.5073 9.2 12.1073 8.8C11.974 8.53333 11.7073 8.13333 11.3073 7.73333C11.3073 7.6 11.0407 7.46667 10.9073 7.33333C10.6407 7.2 10.374 7.2 10.1073 7.6C9.97401 7.86667 9.84068 8.26667 9.84068 8.66667C9.84068 9.2 9.57401 9.33333 9.04068 9.46667C7.84067 9.6 6.64068 9.33333 5.57401 8.66667Z" fill="#2E2E2E" />
					</svg>
					Вконтакте
				</a>
				<a class="carousel__popup-content--socials-tg" href="#" target="_blank">
					<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M14.1176 0.0257003C0.301801 5.39106 0.301801 5.39106 0.301801 5.39106C-0.1006 5.52519 -0.1006 6.19586 0.301801 6.33C3.78928 7.40307 3.78928 7.40307 3.78928 7.40307C5.13062 11.5612 5.13062 11.5612 5.13062 11.5612C5.26476 11.9636 5.93543 12.0978 6.2037 11.6954C7.94744 9.81748 7.94744 9.81748 7.94744 9.81748C11.4349 12.366 11.4349 12.366 11.4349 12.366C11.9715 12.7684 12.508 12.6343 12.6421 12.0978C15.0565 0.964638 15.0565 0.964638 15.0565 0.964638C15.1907 0.293968 14.52 -0.108434 14.1176 0.0257003ZM12.3739 2.57425C5.93543 8.20787 5.93543 8.20787 5.93543 8.20787C5.93543 8.20787 5.80129 8.34201 5.80129 8.47614C5.66716 10.6223 5.66716 10.6223 5.66716 10.6223H5.53303C4.45995 7.40307 4.45995 7.40307 4.45995 7.40307C4.45995 7.26893 4.45995 7.1348 4.59409 7.00067C12.1056 2.30598 12.1056 2.30598 12.1056 2.30598C12.3739 2.17184 12.508 2.44011 12.3739 2.57425Z" fill="#2E2E2E" />
					</svg>

					Telegram
				</a>
				<a class="carousel__popup-content--socials-wa" href="#" target="_blank">
					<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1823 9.90645C11.9145 9.90645 10.9774 9.37097 10.8435 9.2371C10.5758 9.10323 10.4419 9.10323 10.3081 9.37097C10.1742 9.50484 9.77258 9.90645 9.63871 10.0403C9.50484 10.1742 9.37097 10.3081 9.2371 10.1742C8.96936 10.0403 8.3 9.77258 7.63065 9.10323C6.96129 8.43387 6.55968 7.76452 6.55968 7.63065C6.42581 7.3629 6.55968 7.22903 6.69355 7.22903C6.82742 7.22903 6.96129 6.96129 7.09516 6.82742C7.09516 6.69355 7.09516 6.55968 7.09516 6.42581C7.09516 6.29194 7.09516 6.15806 7.09516 6.02419C7.09516 6.02419 6.69355 4.95323 6.55968 4.55161C6.42581 4.15 6.29194 4.15 6.15806 4.15C6.02419 4.15 5.89032 4.15 5.75645 4.15C5.48871 4.15 5.35484 4.15 5.0871 4.41774C4.95323 4.55161 4.41774 5.0871 4.28387 6.02419C4.28387 7.09516 4.95323 8.03226 5.0871 8.16613C5.22097 8.3 6.42581 10.5758 8.56774 11.379C10.5758 12.45 10.5758 12.1823 10.9774 12.0484C11.379 12.0484 12.3161 11.6468 12.45 11.2452C12.5839 10.7097 12.5839 10.3081 12.5839 10.1742C12.45 10.1742 12.3161 10.0403 12.1823 9.90645ZM8.43387 14.8597C7.09516 14.8597 5.75645 14.4581 4.68548 13.6548C2.14194 14.4581 2.14194 14.4581 2.14194 14.4581C2.94516 12.0484 2.94516 12.0484 2.94516 12.0484C2.14194 10.9774 1.60645 9.50484 1.60645 8.03226C1.60645 4.28387 4.68548 1.20484 8.3 1.20484C12.0484 1.20484 15.1274 4.28387 15.1274 8.03226C15.1274 11.7806 12.0484 14.8597 8.43387 14.8597ZM8.43387 0C3.88226 0 0.267742 3.61452 0.267742 8.16613C0.267742 9.77258 0.803226 11.1113 1.33871 12.3161C0 16.6 0 16.6 0 16.6C4.41774 15.1274 4.41774 15.1274 4.41774 15.1274C5.62258 15.7968 6.96129 16.1984 8.3 16.1984C12.7177 16.1984 16.4661 12.5839 16.4661 8.16613C16.4661 3.74839 12.8516 0 8.43387 0Z" fill="#2E2E2E" />
					</svg>

					WhatsApp
				</a>
				<a class="carousel__popup-content--socials-vb" href="#" target="_blank">
					<svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M13.017 10.5956C12.4798 10.1927 12.0769 9.92406 11.5397 9.52116C10.7339 8.98395 9.92813 8.84965 9.12232 9.92406C8.85372 10.4613 8.18222 10.5956 7.64502 10.327C6.16771 9.52115 4.95901 8.58105 4.15321 6.96945C3.8846 6.29794 3.8846 5.62644 4.55611 5.22354C4.95901 4.82064 5.36191 4.55204 5.36191 3.88054C5.36191 3.20903 3.4817 0.657324 2.8102 0.388723C2.5416 0.254422 2.1387 0.254422 1.8701 0.388723C0.258492 1.06023 -0.41301 2.40323 0.258492 4.01484C2.273 8.84965 5.76481 12.3415 10.4653 14.356C10.7339 14.4903 11.1368 14.4903 11.1368 14.6246C12.2112 14.6246 13.5542 13.5502 13.8228 12.4758C14.36 11.5357 13.5542 10.9985 13.017 10.5956Z" fill="#2E2E2E" />
						<path fill-rule="evenodd" clip-rule="evenodd" d="M7.64502 0.791624C11.1368 1.32883 12.7484 2.94043 13.1513 6.56655C13.1513 6.83515 13.017 7.37235 13.5542 7.37235C14.0914 7.37235 13.9571 6.83515 13.9571 6.56655C13.9571 3.20903 11.1368 0.120122 7.64502 0.120122C7.37642 -0.0141785 6.97352 -0.148479 6.83921 0.388723C6.83921 0.791624 7.37642 0.657324 7.64502 0.791624Z" fill="#2E2E2E" />
						<path fill-rule="evenodd" clip-rule="evenodd" d="M8.31652 1.73173C7.91362 1.73173 7.51072 1.46313 7.37642 2.00033C7.37642 2.53753 7.77932 2.40323 8.18222 2.53753C10.331 3.07473 11.1368 3.88054 11.5397 5.89504C11.5397 6.29794 11.4054 6.70085 11.9426 6.70085C12.3455 6.70085 12.2112 6.16364 12.2112 5.89504C12.2112 3.88054 10.4653 2.00033 8.31652 1.73173Z" fill="#2E2E2E" />
						<path fill-rule="evenodd" clip-rule="evenodd" d="M8.45082 3.47763C8.18222 3.47763 8.04792 3.47763 7.91362 3.74623C7.77932 4.01484 8.18222 4.14914 8.31652 4.14914C9.12232 4.28344 9.65952 4.82064 9.79383 5.62644C9.79383 5.89504 9.92813 6.02934 10.1967 6.02934C10.4653 6.02934 10.4653 5.76074 10.4653 5.35784C10.5996 4.55204 9.39092 3.34333 8.45082 3.47763Z" fill="#2E2E2E" />
					</svg>

					Viber
				</a>
				<a class="carousel__popup-content--socials-pt" href="#" target="_blank">
					<svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M6.74275 10.9015C5.81728 10.7693 5.42064 10.3726 4.75959 9.97599C4.36296 12.0914 3.83411 13.9423 2.51201 15C2.11537 11.9592 3.17306 9.57936 3.7019 7.06735C2.77643 5.61303 3.7019 2.70439 5.55286 3.49765C7.80044 4.42313 3.56969 8.78609 6.34612 9.44714C9.25476 9.84378 10.4447 4.29092 8.59371 2.43997C5.94949 -0.204249 1.05769 2.30776 1.58653 6.14187C1.71874 7.06735 2.64422 7.33177 1.98316 8.65388C0.396632 8.25725 0 6.93514 0 5.2164C0.132211 2.43997 2.51201 0.324595 5.02401 0.060173C8.19707 -0.33646 11.1057 1.25007 11.5023 4.15871C11.899 7.46398 10.048 11.1659 6.74275 10.9015Z" fill="#2E2E2E" />
					</svg>

					Pinterest
				</a>
			</div>
		</div>
	</div>
</div>
<div class="carousel__popup--bottom-frame">
	<div class="carousel__popup--bottom-frame--photo"></div>
	<p>Ссылка на выбранное изображение скопирована</p>
</div>

<div class="carousel__lines"></div>

<div class="carousel__numbers">
	<span class="active">14</span><span>/</span><span class="total">88</span>
</div>


<div class="detail-description">
	<h3>Проблематика концепции</h3>
	<p>Сложность данной концепции состояла в создании достаточного количества дворовых территорий.
		Для решения этой задачи был спроектирован надземный мост с одного стилобата на другой, так высотки на улице
		Вилонова получили большой и защищенный двор сложной конфигурации.<br>
		<br>
		Градостроительная концепция также предполагает реконструкцию детского сада. Здание будет расположено
		вплотную к границе участка, таким образом, его фасад будет формировать облик одной из пешеходных улиц внутри
		квартала. Такое размещение также позволит эффективнее использовать территорию детского сада и сократить площадь
		пожарного проезда.
	</p>
	<h3>Парковочные места</h3>
	<p>Основные парковочные места будут расположены в стилобатах зданий, расположенных, как правило, внутри периметральной
		застройки. Вдоль улиц располагаются парковки для удобства пользования коммерческой инфраструктурой.</p>
</div>

<section class="detail-slabs">
	<div class="detail-slabs__status">
		<div>Эскизы</div>
		<div>
			<p>Всего:</p>
			<p class="detail-slabs__status--number">16</p>
		</div>
	</div>


	<div class="detail-slabs__photos">
		<div class="detail-slabs__photos--photo">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/masterplans-detail-slabs__photo-1.jpg">

			<span>
				<a class="download-link-slabs-hover" download></a>
				<svg class="share-slabs-hover" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.5509 1.1659L19.4549 7.14049C19.8532 7.5388 19.8532 7.5388 19.8532 7.80434C19.8532 8.06987 19.8532 8.46818 19.4549 8.86649L12.4181 14.8411C12.0198 15.2394 11.7543 14.8411 11.7543 14.1772V10.1942H10.4266C7.10737 10.5925 3.78815 11.7874 1.39831 14.1772C1 14.5755 1 14.5755 1 14.1772C1 13.7789 1 13.5134 1 13.1151C2.06215 9.13202 6.04522 5.54727 10.2938 5.54727H11.6215V1.5642C11.887 0.900358 12.1526 0.900358 12.5509 1.1659Z" stroke="#F5F5F5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</div>

		<div class="detail-slabs__photos--photo">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/masterplans-detail-slabs__photo-2.jpg">

			<span>
				<a class="download-link-slabs-hover" download></a>
				<svg class="share-slabs-hover" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.5509 1.1659L19.4549 7.14049C19.8532 7.5388 19.8532 7.5388 19.8532 7.80434C19.8532 8.06987 19.8532 8.46818 19.4549 8.86649L12.4181 14.8411C12.0198 15.2394 11.7543 14.8411 11.7543 14.1772V10.1942H10.4266C7.10737 10.5925 3.78815 11.7874 1.39831 14.1772C1 14.5755 1 14.5755 1 14.1772C1 13.7789 1 13.5134 1 13.1151C2.06215 9.13202 6.04522 5.54727 10.2938 5.54727H11.6215V1.5642C11.887 0.900358 12.1526 0.900358 12.5509 1.1659Z" stroke="#F5F5F5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</div>

		<div class="detail-slabs__photos--photo">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/masterplans-detail-slabs__photo-3.jpg">

			<span>
				<a class="download-link-slabs-hover" download></a>
				<svg class="share-slabs-hover" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.5509 1.1659L19.4549 7.14049C19.8532 7.5388 19.8532 7.5388 19.8532 7.80434C19.8532 8.06987 19.8532 8.46818 19.4549 8.86649L12.4181 14.8411C12.0198 15.2394 11.7543 14.8411 11.7543 14.1772V10.1942H10.4266C7.10737 10.5925 3.78815 11.7874 1.39831 14.1772C1 14.5755 1 14.5755 1 14.1772C1 13.7789 1 13.5134 1 13.1151C2.06215 9.13202 6.04522 5.54727 10.2938 5.54727H11.6215V1.5642C11.887 0.900358 12.1526 0.900358 12.5509 1.1659Z" stroke="#F5F5F5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</div>

		<div class="detail-slabs__photos--photo">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/masterplans-detail-slabs__photo-4.jpg">

			<span>
				<a class="download-link-slabs-hover" download></a>
				<svg class="share-slabs-hover" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.5509 1.1659L19.4549 7.14049C19.8532 7.5388 19.8532 7.5388 19.8532 7.80434C19.8532 8.06987 19.8532 8.46818 19.4549 8.86649L12.4181 14.8411C12.0198 15.2394 11.7543 14.8411 11.7543 14.1772V10.1942H10.4266C7.10737 10.5925 3.78815 11.7874 1.39831 14.1772C1 14.5755 1 14.5755 1 14.1772C1 13.7789 1 13.5134 1 13.1151C2.06215 9.13202 6.04522 5.54727 10.2938 5.54727H11.6215V1.5642C11.887 0.900358 12.1526 0.900358 12.5509 1.1659Z" stroke="#F5F5F5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</div>
	</div>


	<div class="detail-slabs__arrow-next">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="2" stroke="#fff" fill="none">
			<polyline points="18.86 57.47 44.12 30.84 18.86 6.58" />
		</svg>
	</div>
	<div class="detail-slabs__arrow-prev">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="2" stroke="#fff" fill="none">
			<polyline points="45.15 57.47 19.88 30.84 45.15 6.58" />
		</svg>
	</div>


	<div class="detail-slabs__fullscreen-icons">
		<p></p>
		<a class="download-link-slabs" download></a>
		<div class="download-link-slabs-info">
			<span>Скачать</span>
			<span></span>
		</div>
		<svg class="share-slabs" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12.5509 1.1659L19.4549 7.14049C19.8532 7.5388 19.8532 7.5388 19.8532 7.80434C19.8532 8.06987 19.8532 8.46818 19.4549 8.86649L12.4181 14.8411C12.0198 15.2394 11.7543 14.8411 11.7543 14.1772V10.1942H10.4266C7.10737 10.5925 3.78815 11.7874 1.39831 14.1772C1 14.5755 1 14.5755 1 14.1772C1 13.7789 1 13.5134 1 13.1151C2.06215 9.13202 6.04522 5.54727 10.2938 5.54727H11.6215V1.5642C11.887 0.900358 12.1526 0.900358 12.5509 1.1659Z" stroke="#F5F5F5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
		</svg>
		<div class="share-slabs-info">
			<span>Поделиться</span>
			<span></span>
		</div>
		<svg class="fullscreen-slabs--close-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 1L19 19" stroke="#F5F5F5" stroke-miterlimit="10" />
			<path d="M1 19L19 1" stroke="#F5F5F5" stroke-miterlimit="10" />
		</svg>
		<div class="fullscreen-slabs--close-icon-info">
			<span>Закрыть</span>
			<span></span>
		</div>
	</div>


	<div class="slabs__popup">
		<div class="slabs__popup-body">
			<div class="slabs__popup-content">
				<div class="slabs__popup-content--close">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M8 9.16551L1.16551 16L0 14.8345L6.83449 8L0 1.16551L1.16551 4.91225e-06L8 6.83449L14.8345 0L16 1.16551L9.16551 8L16 14.8345L14.8345 16L8 9.16551Z" fill="#2E2E2E" />
					</svg>
				</div>
				<div class="slabs__popup-content--title">Поделиться фотографией</div>
				<div class="slabs__popup-content--text">Поделитесь фотографией с коллегами и друзьями, скопируйте
					ссылку
					на фотографию или отправьте через социальные сети или мессенджеры</div>
				<p class="slabs__popup-content--field"></p>

				<div class="slabs__popup-content--socials">
					<a class="slabs__popup-content--socials-fb" href="#" target="_blank">
						<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M1.73333 7.73333H0V5.06667H1.73333V3.73333C1.73333 1.33333 2.8 0 5.6 0H7.86667V2.8H6.53333C5.33333 2.8 5.33333 3.06667 5.33333 3.86667V4.93333H7.86667L7.46667 7.73333H5.33333V13.4667H1.73333V7.73333Z" fill="#2E2E2E" />
						</svg>
						Facebook
					</a>
					<a class="slabs__popup-content--socials-vk" href="#" target="_blank">
						<svg width="17" height="10" viewBox="0 0 17 10" fill="#2E2E2E;" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M5.57401 8.66667C4.64068 8.13333 3.84067 7.33333 3.17401 6.4C1.84067 4.66667 0.907342 2.8 0.107342 0.933333C-0.159325 0.533333 0.107342 0.266667 0.507342 0.266667H2.90734C3.17401 0.266667 3.44067 0.533333 3.57401 0.8C4.10734 1.86667 4.64068 2.93333 5.30734 3.86667C5.44068 4 5.57401 4.4 5.84068 4.53333C6.10734 4.66667 6.37401 4.66667 6.50734 4.26667C6.64068 4.13333 6.64068 3.86667 6.64068 3.6C6.64068 2.8 6.64068 2.13333 6.64068 1.33333C6.64068 0.933333 6.37401 0.533333 5.84068 0.533333C5.57401 0.533333 5.57401 0.4 5.70734 0.266667C5.97401 0.133333 6.10734 0 6.50734 0H9.30734C9.70734 0.133333 9.84068 0.266667 9.84068 0.666667V3.73333C9.84068 3.86667 9.84068 4.4 10.2407 4.53333C10.5073 4.66667 10.6407 4.4 10.774 4.26667C11.4407 3.6 11.8407 2.8 12.374 1.86667C12.5073 1.46667 12.774 1.06667 12.9073 0.8C12.9073 0.4 13.174 0.4 13.4407 0.4H16.2407C16.6407 0.533333 16.774 0.666667 16.6407 1.06667C16.374 1.73333 15.974 2.26667 15.574 2.93333C15.174 3.46667 14.6407 4.13333 14.2407 4.66667C13.8407 5.33333 13.8407 5.46667 14.374 6C14.9073 6.53333 15.574 7.06667 15.974 7.73333C16.2407 8 16.374 8.26667 16.5073 8.53333C16.774 8.93333 16.5073 9.46667 16.1073 9.46667H13.7073C13.0407 9.46667 12.5073 9.2 12.1073 8.8C11.974 8.53333 11.7073 8.13333 11.3073 7.73333C11.3073 7.6 11.0407 7.46667 10.9073 7.33333C10.6407 7.2 10.374 7.2 10.1073 7.6C9.97401 7.86667 9.84068 8.26667 9.84068 8.66667C9.84068 9.2 9.57401 9.33333 9.04068 9.46667C7.84067 9.6 6.64068 9.33333 5.57401 8.66667Z" fill="#2E2E2E" />
						</svg>
						Вконтакте
					</a>
					<a class="slabs__popup-content--socials-tg" href="#" target="_blank">
						<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M14.1176 0.0257003C0.301801 5.39106 0.301801 5.39106 0.301801 5.39106C-0.1006 5.52519 -0.1006 6.19586 0.301801 6.33C3.78928 7.40307 3.78928 7.40307 3.78928 7.40307C5.13062 11.5612 5.13062 11.5612 5.13062 11.5612C5.26476 11.9636 5.93543 12.0978 6.2037 11.6954C7.94744 9.81748 7.94744 9.81748 7.94744 9.81748C11.4349 12.366 11.4349 12.366 11.4349 12.366C11.9715 12.7684 12.508 12.6343 12.6421 12.0978C15.0565 0.964638 15.0565 0.964638 15.0565 0.964638C15.1907 0.293968 14.52 -0.108434 14.1176 0.0257003ZM12.3739 2.57425C5.93543 8.20787 5.93543 8.20787 5.93543 8.20787C5.93543 8.20787 5.80129 8.34201 5.80129 8.47614C5.66716 10.6223 5.66716 10.6223 5.66716 10.6223H5.53303C4.45995 7.40307 4.45995 7.40307 4.45995 7.40307C4.45995 7.26893 4.45995 7.1348 4.59409 7.00067C12.1056 2.30598 12.1056 2.30598 12.1056 2.30598C12.3739 2.17184 12.508 2.44011 12.3739 2.57425Z" fill="#2E2E2E" />
						</svg>

						Telegram
					</a>
					<a class="slabs__popup-content--socials-wa" href="#" target="_blank">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M12.1823 9.90645C11.9145 9.90645 10.9774 9.37097 10.8435 9.2371C10.5758 9.10323 10.4419 9.10323 10.3081 9.37097C10.1742 9.50484 9.77258 9.90645 9.63871 10.0403C9.50484 10.1742 9.37097 10.3081 9.2371 10.1742C8.96936 10.0403 8.3 9.77258 7.63065 9.10323C6.96129 8.43387 6.55968 7.76452 6.55968 7.63065C6.42581 7.3629 6.55968 7.22903 6.69355 7.22903C6.82742 7.22903 6.96129 6.96129 7.09516 6.82742C7.09516 6.69355 7.09516 6.55968 7.09516 6.42581C7.09516 6.29194 7.09516 6.15806 7.09516 6.02419C7.09516 6.02419 6.69355 4.95323 6.55968 4.55161C6.42581 4.15 6.29194 4.15 6.15806 4.15C6.02419 4.15 5.89032 4.15 5.75645 4.15C5.48871 4.15 5.35484 4.15 5.0871 4.41774C4.95323 4.55161 4.41774 5.0871 4.28387 6.02419C4.28387 7.09516 4.95323 8.03226 5.0871 8.16613C5.22097 8.3 6.42581 10.5758 8.56774 11.379C10.5758 12.45 10.5758 12.1823 10.9774 12.0484C11.379 12.0484 12.3161 11.6468 12.45 11.2452C12.5839 10.7097 12.5839 10.3081 12.5839 10.1742C12.45 10.1742 12.3161 10.0403 12.1823 9.90645ZM8.43387 14.8597C7.09516 14.8597 5.75645 14.4581 4.68548 13.6548C2.14194 14.4581 2.14194 14.4581 2.14194 14.4581C2.94516 12.0484 2.94516 12.0484 2.94516 12.0484C2.14194 10.9774 1.60645 9.50484 1.60645 8.03226C1.60645 4.28387 4.68548 1.20484 8.3 1.20484C12.0484 1.20484 15.1274 4.28387 15.1274 8.03226C15.1274 11.7806 12.0484 14.8597 8.43387 14.8597ZM8.43387 0C3.88226 0 0.267742 3.61452 0.267742 8.16613C0.267742 9.77258 0.803226 11.1113 1.33871 12.3161C0 16.6 0 16.6 0 16.6C4.41774 15.1274 4.41774 15.1274 4.41774 15.1274C5.62258 15.7968 6.96129 16.1984 8.3 16.1984C12.7177 16.1984 16.4661 12.5839 16.4661 8.16613C16.4661 3.74839 12.8516 0 8.43387 0Z" fill="#2E2E2E" />
						</svg>

						WhatsApp
					</a>
					<a class="slabs__popup-content--socials-vb" href="#" target="_blank">
						<svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M13.017 10.5956C12.4798 10.1927 12.0769 9.92406 11.5397 9.52116C10.7339 8.98395 9.92813 8.84965 9.12232 9.92406C8.85372 10.4613 8.18222 10.5956 7.64502 10.327C6.16771 9.52115 4.95901 8.58105 4.15321 6.96945C3.8846 6.29794 3.8846 5.62644 4.55611 5.22354C4.95901 4.82064 5.36191 4.55204 5.36191 3.88054C5.36191 3.20903 3.4817 0.657324 2.8102 0.388723C2.5416 0.254422 2.1387 0.254422 1.8701 0.388723C0.258492 1.06023 -0.41301 2.40323 0.258492 4.01484C2.273 8.84965 5.76481 12.3415 10.4653 14.356C10.7339 14.4903 11.1368 14.4903 11.1368 14.6246C12.2112 14.6246 13.5542 13.5502 13.8228 12.4758C14.36 11.5357 13.5542 10.9985 13.017 10.5956Z" fill="#2E2E2E" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M7.64502 0.791624C11.1368 1.32883 12.7484 2.94043 13.1513 6.56655C13.1513 6.83515 13.017 7.37235 13.5542 7.37235C14.0914 7.37235 13.9571 6.83515 13.9571 6.56655C13.9571 3.20903 11.1368 0.120122 7.64502 0.120122C7.37642 -0.0141785 6.97352 -0.148479 6.83921 0.388723C6.83921 0.791624 7.37642 0.657324 7.64502 0.791624Z" fill="#2E2E2E" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M8.31652 1.73173C7.91362 1.73173 7.51072 1.46313 7.37642 2.00033C7.37642 2.53753 7.77932 2.40323 8.18222 2.53753C10.331 3.07473 11.1368 3.88054 11.5397 5.89504C11.5397 6.29794 11.4054 6.70085 11.9426 6.70085C12.3455 6.70085 12.2112 6.16364 12.2112 5.89504C12.2112 3.88054 10.4653 2.00033 8.31652 1.73173Z" fill="#2E2E2E" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M8.45082 3.47763C8.18222 3.47763 8.04792 3.47763 7.91362 3.74623C7.77932 4.01484 8.18222 4.14914 8.31652 4.14914C9.12232 4.28344 9.65952 4.82064 9.79383 5.62644C9.79383 5.89504 9.92813 6.02934 10.1967 6.02934C10.4653 6.02934 10.4653 5.76074 10.4653 5.35784C10.5996 4.55204 9.39092 3.34333 8.45082 3.47763Z" fill="#2E2E2E" />
						</svg>

						Viber
					</a>
					<a class="slabs__popup-content--socials-pt" href="#" target="_blank">
						<svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M6.74275 10.9015C5.81728 10.7693 5.42064 10.3726 4.75959 9.97599C4.36296 12.0914 3.83411 13.9423 2.51201 15C2.11537 11.9592 3.17306 9.57936 3.7019 7.06735C2.77643 5.61303 3.7019 2.70439 5.55286 3.49765C7.80044 4.42313 3.56969 8.78609 6.34612 9.44714C9.25476 9.84378 10.4447 4.29092 8.59371 2.43997C5.94949 -0.204249 1.05769 2.30776 1.58653 6.14187C1.71874 7.06735 2.64422 7.33177 1.98316 8.65388C0.396632 8.25725 0 6.93514 0 5.2164C0.132211 2.43997 2.51201 0.324595 5.02401 0.060173C8.19707 -0.33646 11.1057 1.25007 11.5023 4.15871C11.899 7.46398 10.048 11.1659 6.74275 10.9015Z" fill="#2E2E2E" />
						</svg>

						Pinterest
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="slabs__popup--bottom-frame">
		<div class="slabs__popup--bottom-frame--photo"></div>
		<p>Ссылка на выбранное изображение скопирована</p>
	</div>


	<div class="detail-slabs__buttons">
		<div class="detail-slabs__buttons--1-col">
			<span></span>
		</div>
		<div class="detail-slabs__buttons--1-col-info">
			<span>В 1 колонку</span>
			<span></span>
		</div>
		<div class="detail-slabs__buttons--2-col">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="detail-slabs__buttons--2-col-info">
			<span>В 2 колонки</span>
			<span></span>
		</div>
		<div class="detail-slabs__buttons--3-col">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="detail-slabs__buttons--3-col-info">
			<span>В 3 колонки</span>
			<span></span>
		</div>
		<div class="detail-slabs__buttons--4-col">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="detail-slabs__buttons--4-col-info">
			<span>В 4 колонки</span>
			<span></span>
		</div>
	</div>
</section>



<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/jqueryTouchSwipe.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/detail-page.min.js"></script>


<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])) : ?>
<!-- <img class="detail_picture" border="0" src="<?//= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?//= $arResult["DETAIL_PICTURE"]["ALT"] ?>" /> -->
<? endif ?>
<? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]) : ?>
<!--<span class="news-date-time"><?//= $arResult["DISPLAY_ACTIVE_FROM"] ?></span> -->
<? endif; ?>
<? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]) : ?>
<h3><?//= $arResult["NAME"] ?></h3>
<? endif; ?>
<? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arResult["FIELDS"]["PREVIEW_TEXT"]) : ?>
<p><?//= $arResult["FIELDS"]["PREVIEW_TEXT"]; ?>
<?//unset($arResult["FIELDS"]["PREVIEW_TEXT"]); ?></p>
<? endif; ?>
<? if ($arResult["NAV_RESULT"]) : ?>
<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
<?//= $arResult["NAV_STRING"] ?>
<? endif; ?>
<?// echo $arResult["NAV_TEXT"]; ?>
<?// if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
<?//= $arResult["NAV_STRING"] ?>
<? endif; ?>
<?// elseif (strlen($arResult["DETAIL_TEXT"]) > 0) : ?>
<?// echo $arResult["DETAIL_TEXT"]; ?>
<?// else : ?>
<?// echo $arResult["PREVIEW_TEXT"]; ?>
<?// endif ?>


<? foreach ($arResult["FIELDS"] as $code => $value) :
	if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code) { ?>
		<?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;
		<? if (!empty($value) && is_array($value)) { ?>

			<img border="0" src="<?= $value["SRC"] ?>" width="<?= $value["WIDTH"] ?>" height="<?= $value["HEIGHT"] ?>">
		<?
		}
	} else {
		?>
		<?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
	<?
	}
	?>
	<br />
<? endforeach;


foreach ($arResult["DISPLAY_PROPERTIES"] as $pid => $arProperty) : ?>
	<?= $arProperty["NAME"] ?>:&nbsp;
	<? if (is_array($arProperty["DISPLAY_VALUE"])) : ?>
		<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
	<? else : ?>
		<?= $arProperty["DISPLAY_VALUE"]; ?>
	<? endif ?>
	<br />
<? endforeach;


if (array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y") {
?>
	<div class="news-detail-share">
		<noindex>
			<?
			$APPLICATION->IncludeComponent(
				"bitrix:main.share",
				"",
				array(
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