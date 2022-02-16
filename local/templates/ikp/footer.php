</main>
<footer>
	<div class="footer__menu">
		<div class="footer__menu--links">
			<a href="/projects/"><? echo (LANGUAGE_ID == 'ru' ? 'Проекты' : 'Projects') ?></a>
			<a href="/institute/"><? echo (LANGUAGE_ID == 'ru' ? 'Институт' : 'Institute') ?></a>
			<a href="#"><? echo (LANGUAGE_ID == 'ru' ? 'Блоги' : 'Blogs') ?></a>
			<a href="#"><? echo (LANGUAGE_ID == 'ru' ? 'Контакты' : 'Contacts') ?></a>
		</div>
		<div class="footer__menu--social">
			<a href="#" target="_blank">FB</a>
			<a href="#" target="_blank">VK</a>
			<a href="#" target="_blank">IN</a>
			<a href="#" target="_blank">YT</a>
			<a href="#" target="_blank">TE</a>
		</div>
	</div>

	<div class="footer__copyright">
		<div class="footer__copyright--left">
			<div><? echo (LANGUAGE_ID == 'ru' ? '&copy; 2021 ИКП «АТОМ». Все права защищены.' : '&copy; 2021 IKP «АТОМ». All rights reserved.') ?></div>
			<div>|</div>
			<div><a href="#" target="_black"><? echo (LANGUAGE_ID == 'ru' ? 'Политика конфиденциальности' : 'Privacy Policy') ?></a></div>
		</div>
		<div class="footer__copyright--right">
			<div><? echo (LANGUAGE_ID == 'ru' ? 'Корпорация' : 'Corporation') ?> «<a href="https://atomsk.ru" target="_black"><? echo (LANGUAGE_ID == 'ru' ? 'Атомстройкомплекс' : 'Atomstroycomplex')?></a>»</div>
		</div>
	</div>
</footer>
<script src="<?= SITE_TEMPLATE_PATH; ?>/js/sitelang.js"></script>
<script src="<?= SITE_TEMPLATE_PATH; ?>/js/mainJs.min.js"></script>
</body>

</html>