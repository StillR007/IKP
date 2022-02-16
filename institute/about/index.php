<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Об институте");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/about.min.css", true);
?>


<div class="index__top">
	<div class="index__top-back">
		<a class="index__top-back--arrow" href="/institute/career/"></a>
		<a href="/institute/career/" class="index__top-back--text">Карьера</a>
	</div>

	<div class="index__top-center">
		<h1>АТОМ</h1>
		<p class="index__top--gold">об институте</p>
	</div>

	<div class="index__top-forward">
		<a href="/institute/internship/" class="index__top-forward--text">Интернатура</a>
		<a class="index__top-forward--arrow" href="/institute/internship/"></a>
	</div>
</div>

<div class="main-container">
	<div class="about-main-slider">
		<img class="about-main-slider__img" src="<?= SITE_TEMPLATE_PATH ?>/img/about-main-slider-photo-1.jpg">
		<img class="about-main-slider__img" src="<?= SITE_TEMPLATE_PATH ?>/img/about-main-slider-photo-2.jpg">
		<img class="about-main-slider__img" src="<?= SITE_TEMPLATE_PATH ?>/img/about-main-slider-photo-3.jpg">
		<img class="about-main-slider__img" src="<?= SITE_TEMPLATE_PATH ?>/img/about-main-slider-photo-4.jpg">
		<img class="about-main-slider__img" src="<?= SITE_TEMPLATE_PATH ?>/img/about-main-slider-photo-5.jpg">
		<div class="about-main-slider__arrow-next">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="2" stroke="#fff" fill="none">
				<polyline points="18.86 57.47 44.12 30.84 18.86 6.58" />
			</svg>
		</div>
		<div class="about-main-slider__arrow-prev">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="2" stroke="#fff" fill="none">
				<polyline points="45.15 57.47 19.88 30.84 45.15 6.58" />
			</svg>
		</div>
	</div>

	<div class="under-slider-info">
		<div class="bread-crumbs">
			Кто мы, откуда, куда мы идем?
		</div>
		<div class="about-main-slider__info">
			<div class="about-main-slider__info--current-img"></div>
			<div class="about-main-slider__info--slash">/</div>
			<div class="about-main-slider__info--all-img"></div>
		</div>
	</div>

	<div class="about-info">
		<h2>Крупное подразделение
			<a href="#" target="_blank">Атомстройкомплекс</a>
			<a href="#" target="_blank">
				<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.9992 8.95652C12.9992 11.9565 12.9992 11.9565 12.9992 11.9565C12.9992 12.4783 12.4659 13 11.9326 13C1.93327 13 1.93327 13 1.93327 13C1.39997 12.8696 1 12.3478 1 11.8261C1 2.04348 1 2.04348 1 2.04348C1 1.52174 1.39997 1 2.0666 1C5.66636 1 5.66636 1 5.66636 1" stroke="#CEA78F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M8.4668 1.13037H12.9998V5.69559" stroke="#CEA78F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M6.99951 6.99994L12.9991 1.13037" stroke="#CEA78F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</a>
			основанное в отдельный проектный
			институт
		</h2>

		<div class="about-info__left-text">Градостроительство. Архитектура. Экономика.</div>
		<div class="about-info__right-text">Как глобальная структура, проектный институт «Атомстройкомплекс» был сформирован
			в 2002м году.
			Сегодня мы одна из наиболее известных проектных организаций на Урале и одна из самых крупных по стране.
			Институт специализируется на разработке градостроительных концепций, проектировании зданий и комплексов разного
			функционального назначения, а также создании общественных интерьеров и инженерных сетей. Мы создаем соверменную и
			рациональную архитектуру, которая качественно меняет сценарий будущей жизни и открывает новые форматы городской
			недвижимости.
			<br />
			<br />
			В нашу команду входят проектировщики, пространственные дизайнеры, экономисты, ландшафтные архитекторы и инженеры,
			которые вместе работают над созданием процветающей и устойчивой городской среды. Половина из них имеют стаж в
			структуре больше 10 лет.
			<br />
			<br />
			Мы полностью самодостаточны, хорошо организванны. За нашими плечами лежит огромной ресурсответственного подрядчика
			с уникальными экспертными компетенциями, которому доверяют выполнение «под ключ» самых сложных
			и значимых проектов – корпорации «Атомстройкомплекс».
		</div>

		<div class="about-info__1">
			<div class="about-info__1-first-string">
				<div class="about-info__1--big">427</div>
				<svg width="25" height="31" viewBox="0 0 25 31" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M11.8922 31H12.694L13.7629 30.5991V30.1983H13.3621L12.9612 29.7974H12.694L12.0259 29.1293L12.4267 28.7284V28.3276H12.1595L12.4267 28.0603L12.8276 27.6595L13.6293 26.8578L14.431 24.5862L16.7026 19.375L16.9698 19.6422L17.7716 21.1121L18.5733 23.3836L19.2414 23.7845V24.1853L19.6422 25.3879L20.444 27.2586V28.3276L20.8448 28.7284V29.7974H22.7155V29.5302H24.1853L24.5862 28.8621L24.9871 28.4612V28.3276L24.5862 27.9267H24.1853L23.5172 28.3276L23.1164 27.9267L22.7155 27.5259L23.1164 27.2586V26.1897L22.0474 23.5172L21.6466 22.4483L21.2457 21.7802V21.3793L20.8448 20.7112V19.6422L20.444 18.5733V17.5043L20.0431 16.7026V16.0345L19.6422 15.6336L18.7069 14.2974H18.9741L19.375 13.4957L18.9741 12.694V11.2241L19.375 10.1552V7.88362L18.9741 7.48276V6.81465L18.7069 6.01293V5.21121L18.4397 4.94397H18.7069L19.1078 4.5431V4.14224L19.5086 3.74138V0.801724L19.1078 0.400862L18.306 0H16.4353L16.0345 0.400862L15.6336 0.801724V3.34052L16.0345 3.74138L15.6336 4.14224L14.1638 5.21121L13.3621 6.81465L13.0948 9.35345V10.0216L12.694 10.8233L9.88793 15.2328H9.75431L7.88362 14.1638V12.2931L7.61638 11.8922V10.8233L7.21552 10.4224V10.1552H7.88362V6.81465H7.48276L7.21552 6.41379H5.21121V7.0819L3.34052 9.75431V9.88793H4.00862L4.27586 10.1552L3.74138 10.4224L3.34052 11.625L2.93966 13.8966L2.67241 14.5647L3.07328 15.2328V16.3017H3.34052V16.9698L2.93966 17.3707V21.7802L2.67241 22.3147V22.7155L2.27155 23.3836L1.87069 24.1853L1.06897 27.125L0.668103 27.7931L0.267241 28.194H0V30.0647L1.20259 30.4655H3.47414V30.0647L3.07328 29.6638H2.67241L2.27155 28.9957V28.5948H2.00431L2.27155 28.3276L2.67241 28.0603L3.07328 27.6595L3.875 25.7888L5.74569 21.7802L6.01293 22.0474L6.41379 23.1164L7.21552 24.9871L7.48276 25.3879L7.88362 26.4569L8.55172 28.0603V29.1293L8.95259 29.931H9.35345V30.1983L10.8233 30.5991H11.2241L11.8922 31ZM10.6897 26.5905L9.88793 24.9871L9.35345 23.9181L8.95259 23.5172V22.4483H8.68534L9.08621 21.7802L8.68534 20.9784L8.28448 19.9095V18.7069L7.61638 17.6379L7.88362 17.2371V16.4353L7.61638 16.1681L9.62069 16.569V16.9698C9.62069 16.9698 9.62069 17.1034 9.75431 16.9698L13.4957 13.2284H13.7629L13.3621 13.8966V14.2974L12.9612 15.7672L13.3621 16.569V16.9698L12.9612 17.3707V17.7716H13.3621L12.9612 20.3103H12.694V20.7112L12.2931 21.7802L11.8922 22.5819L10.8233 26.5905H10.6897Z" fill="#2E2E2E" />
				</svg>
			</div>
			<p>проектов с момента основания выполнил наш интситут</p>
		</div>

		<div class="about-info__2">
			<div>1.8</div>
			<p>проектов с момента основания выполнил наш интситут</p>
		</div>
	</div>

	<div class="about-bar">
		<div class="about-bar__1">
			<div class="about-bar__1--top">/ 01</div>
			<div class="about-bar__1--center">
				23
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/about-bar-1.png" />
			</div>
			<div class="about-bar__1--bottom">
				Благоустроенных улицы в городе
				построены по нашим рассчетам
			</div>
		</div>
		<div class="about-bar__2">
			<div class="about-bar__2--top">/ 02</div>
			<div class="about-bar__2--center">
				41
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/about-bar-2.png" />
			</div>
			<div class="about-bar__2--bottom">
				Спроектировано крупных жилых и многофункциональных комплексов
			</div>
		</div>
		<div class="about-bar__3">
			<div class="about-bar__3--top">/ 03</div>
			<div class="about-bar__3--center">
				4
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/about-bar-3.png" />
			</div>
			<div class="about-bar__3--bottom">
				Крупных транспортных мастерпланов с автомобильным и пешеходным движением
			</div>
		</div>
		<div class="about-bar__4">
			<div class="about-bar__4--top">/ 04</div>
			<div class="about-bar__4--center">
				148
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/about-bar-4.png" />
			</div>
			<div class="about-bar__4--bottom">
				Авторских интерьеров по различным дизайнесрким решениям
			</div>
		</div>
	</div>

	<div class="about-awards">
		<h2>Награды и премии</h2>
		<p class="about-awards__awards-count"></p>
		<div class="about-awards__bold">
			<div>проект</div>
			<div>КОНКУРС</div>
			<div>НОМИНАЦИЯ</div>
			<div>ГОД</div>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>
		<div class="about-awards__award">
			<p>Квартал Энтузиастов</p>
			<p>Зодчество VRN 2020</p>
			<p>Жилые здания</p>
			<p>2021</p>
			<a class="about-awards__award--arrow"></a>
		</div>

		<a class="about-awards__load-more">Показать ещё</a>
	</div>
</div>


<div class="main-container">
	<div class="about-staff">
		<h2>Сотрудники института</h2>
		<div class="about-staff__letters">
			<i>А</i>
			<span></span>
			<i>Я</i>
		</div>
		<div class="about-staff__employees">
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_01-1.jpg">
				</a>
				<a href="#">Авраменко В. В.</a>
				<a href="#" class="grey">Ведущий архитектор</a>
			</div>

			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_02-1.jpg">
				</a>
				<a>Алякрицкий А. С.</a>
				<a class="grey">Ведущий архитектор</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_03-1.jpg">
				</a>
				<a>Барила Е. В.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_04-1.jpg">
				</a>
				<a>Борисова А. В.</a>
				<a class="grey">Архитектор</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_05-1.jpg">
				</a>
				<a>Бушуева Л. Б.</a>
				<a class="grey">Главный архитектор проекта</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_06-1.jpg">
				</a>
				<a>Вартанян С. В.</a>
				<a class="grey">Архитектор</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_07-1.jpg">
				</a>
				<a>Вечерская П. И.</a>
				<a class="grey">Техник-архитектор</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_08-1.jpg">
				</a>
				<a>Волошина М. В.</a>
				<a class="grey">Архитектор 2 категории</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_09-1.jpg">
				</a>
				<a>Второва Е. А.</a>
				<a class="grey">Главный архитектор проекта</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_10-1.jpg">
				</a>
				<a>Гарпуль А. А.</a>
				<a class="grey">Архитектор 2 категории</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_11-1.jpg">
				</a>
				<a>Давлетбаева Ю. Ш.</a>
				<a class="grey">Ведущий архитектор</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_12-1.jpg">
				</a>
				<a>Долгих Л. В.</a>
				<a class="grey">Архитектор 1 категории</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_13-1.jpg">
				</a>
				<a>Драгошанская И. А.</a>
				<a class="grey">Главный архитектор проекта</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_14-1.jpg">
				</a>
				<a>Заводова А. Д.</a>
				<a class="grey">Архитектор</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_15-1.jpg">
				</a>
				<a>Зацепина А. Ю.</a>
				<a class="grey">Архитектор I категории</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_16-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_17-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_18-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_19-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_20-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_21-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_22-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_23-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_24-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_25-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_26-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_27-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
			<div class="about-staff__employee">
				<a href="#">
					<img src="/upload/iblock/placeholder.gif" data-src="<?= SITE_TEMPLATE_PATH ?>/img/person_28-1.jpg">
				</a>
				<a>Земцова Г. А.</a>
				<a class="grey">Руководитель группы архитекторов</a>
			</div>
		</div>
		<div class="about-staff__load-more">
			<i>Показать ещё</i>
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/about-staff-load-more.png">
		</div>

	</div>


	<div class="about-bottom-info">
		<h2>Выполянем комплекс проектных работ</h2>
		<div class="about-left-info">
			Институт разрабатывает проекты от их первоначальной концепции до авторского надзора на объекте строительства в
			составе архитектурной группы.<br />
			<br />
			Прежде, чем приступить к проектированию, институт проводит масштабную подготовительную работу в формате
			архитектурной концепции. Этот процесс длится порядка 9-12 месяцев и включает в себя несколько этапов.<br />
			<br />
			Далее следует разработка проектной документации, подключение контролирующих органов, экспертизы и выхода проекта
			на
			стройплощадку.<br />
			<br />
			Также, институт сотрудничает с архитектурными бюро, привлекает инженерных консультантов, по проектам, где опыт и
			знание местных норм сторонних организаций может принести оценимый вклад и пользу.
		</div>

		<div class="about-accordion">
			<div class="about-accordion__steps">
				<p>Этапы проектирования</p>
			</div>
			<button class="accordion">Предпроектное исследование
				<i class="number">01</i></button>
			<div class="panel">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, qui? Quos sit ullam explicabo enim
					corporis? Incidunt, fugit laboriosam reiciendis rem ipsa natus velit quos tempore quod quis asperiores atque
					optio, perspiciatis vel voluptates. Soluta aperiam nisi adipisci molestiae amet dolor quibusdam consectetur
					neque, error deleniti mollitia minus modi autem, deserunt labore provident ducimus?</p>
			</div>

			<button class="accordion">Создание градостроительной концепции<i class="number">02</i></button>
			<div class="panel">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, sunt! Ratione voluptatem, quia nihil
					nisi vel, tempore minus magni cum repellat dicta doloremque, doloribus ipsam vitae distinctio quidem eum
					maiores dolorum culpa? Sequi perspiciatis, accusantium nihil non autem iste magnam laudantium provident
					corporis dolores dolor architecto nemo, corrupti adipisci ipsa ullam distinctio ipsum voluptates eum at
					voluptate. Nisi quod iusto sequi ipsum dicta doloremque incidunt placeat vitae eius id. Fuga, doloribus
					nostrum id placeat molestiae voluptatem ipsam animi aliquid ex asperiores odio expedita minus quos.
					Repellendus architecto id explicabo quia sed hic beatae fugiat officiis maxime incidunt quibusdam magni ex ut,
					ab reiciendis modi laboriosam animi aspernatur? Veniam repellendus fuga earum ipsa eius laudantium accusantium
					totam illum, possimus veritatis, similique ut et est praesentium voluptatum amet ullam porro, eaque soluta
					obcaecati nulla esse quas rem laboriosam. Amet a eaque quae laboriosam, ex incidunt soluta! Non nemo
					distinctio odit sint voluptatibus placeat debitis voluptate perspiciatis nobis temporibus architecto corporis
					ex repellat exercitationem impedit vero facilis sed doloremque, laboriosam, eum corrupti recusandae
					reprehenderit tempore nulla. Reprehenderit quisquam vitae vel doloremque pariatur fugiat sint assumenda.
					Maiores dicta quibusdam maxime laboriosam labore placeat distinctio at quos officiis, totam optio fugiat
					earum, rem culpa praesentium magnam! Quis harum ad nisi eaque iusto necessitatibus voluptatem recusandae
					ullam, modi, minus adipisci perspiciatis voluptate dignissimos odio nam laboriosam. Cumque veniam dicta ad
					odit dolore excepturi numquam optio eligendi nulla. Accusantium optio provident iste!</p>
			</div>

			<button class="accordion">Создание архитектурной концепции<i class="number">03</i></button>
			<div class="panel">
				<p>Подразумевает разработку объемно-планировочной структуры, эскизного проекта с высокой степенью детализации.
				</p>
			</div>

			<button class="accordion">Разработка интерьерных решений<i class="number">04</i></button>
			<div class="panel">
				<p>Lorem ipsum...</p>
			</div>

			<button class="accordion">Эскиз благоустройства<i class="number">05</i></button>
			<div class="panel">
				<p>Lorem ipsum...</p>
			</div>

			<button class="accordion">Создание функциональной модели<i class="number">06</i></button>
			<div class="panel">
				<p>Lorem ipsum...</p>
			</div>

			<button class="accordion">Стадия П<i class="number">07</i></button>
			<div class="panel">
				<p>Lorem ipsum...</p>
			</div>

			<button class="accordion">Стадия Р<i class="number">08</i></button>
			<div class="panel">
				<p>Lorem ipsum...</p>
			</div>
		</div>
	</div>
</div>


<script src="<?= SITE_TEMPLATE_PATH ?>/js/about.min.js"></script>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>