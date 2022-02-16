function moreLoader(p) {
	var o = this;
	this.root = $(p.root);
	this.newsBlock = $(p.newsBlock, this.root);
	this.newsLoader = $(p.newsLoader);
	this.ajaxLoader = $(p.ajaxLoader);
	this.ajaxLoader;
	this.curPage = 1;
	this.loadSett = (p.loadSett);

	this.windowHeight = window.screen.height;
	this.footer = $('footer');
	// загружаем дополнительные элементы
	this.loadMoreItems = function () {
		var loadUrl = location.href;
		if (location.search != '') {
			loadUrl += '&';
		}
		else {
			loadUrl += '?';
		}
		loadUrl += 'PAGEN_' + o.loadSett.navNum + '=' + (++o.curPage);
		o.ajaxLoader.show();
		$.ajax({
			url: loadUrl,
			type: "POST",
			data: {
				AJAX: 'Y'
			}
		})
			.done(function (html) {
				o.newsBlock.append(html);
				o.ajaxLoader.hide();

				if (o.curPage == o.loadSett.endPage) {
					o.newsLoader.parent().hide();
				}
			});
	}

	this.checkTheTop = function () {
		console.log('checkTheTop starts')
		let paddingTop = footer.offset().top;
		let justVarToCheck = (paddingTop <= (pageYOffset + windowHeight));

		if (justVarToCheck) {
			console.log('justVarToCheck is ok');
			isReady = true;
		}

	};

	this.checkFunc = function () {
		console.log('checkFunc started')
		const windowHeight = window.screen.height;
		console.log(windowHeight);
		let footer = $('footer');
		checkTheTop();
		window.addEventListener('scroll', checkTheTop);
	};

	this.addIndicate = function () {
		if ($("div.cssload-container").length) {
			//$('.cssload-container').show();
			this.ajaxLoader = $('.ui_ajax_block');
		} else {
			$('body').append("<div class='ui_ajax_block'><div class='cssload-container'><div class='cssload-whirlpool'></div></div></div>");
			this.ajaxLoader = $('.ui_ajax_block');
			//$('.cssload-container').show();
		}
	}

	this.init = function () {
		o.checkFunc();
		o.addIndicate();
		o.loadMoreItems();
		event.preventDefault();
	};
};


/* o.newsLoader.click(function (event) {
	o.addIndicate();
	o.loadMoreItems();
	event.preventDefault();
}) */


/* this.checkFunc = function () {
	console.log('checkFunc started')
	const windowHeight = window.screen.height;
	console.log(windowHeight);
	let footer = $('footer');
	let checkTheTop = function () {
		let paddingTop = footer.offset().top;
		let justVarToCheck = (paddingTop <= (pageYOffset + windowHeight));

		if (justVarToCheck) {
			console.log('justVarToCheck is ok');
			isReady = true;
		}

	};
	window.addEventListener('scroll', checkTheTop);
} */