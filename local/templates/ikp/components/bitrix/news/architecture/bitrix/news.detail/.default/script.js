function moreLoader(p) {
	var o = this;
	this.root = $(p.root);
	this.newsBlock = $(p.newsBlock, this.root);
	// this.newsLoader = $(p.newsLoader);
	// this.ajaxLoader = $(p.ajaxLoader);
	this.ajaxLoader;
	this.curPage = 1;
	this.loadSett = (p.loadSett);

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
			});
	}

	this.checkFunc = function () {
		const windowHeight = window.screen.height;
		let footer = $('footer');
		let checkTheTop = () => {
			let paddingTop = footer.offset().top;
			let justVarToCheck = (paddingTop <= (pageYOffset + windowHeight));

			if (justVarToCheck) {
				console.log('it should be loaded');
				return true
			}

		};
		window.addEventListener('scroll', checkTheTop);
	}

	this.init = () => {
		if (checkTheTop) {
			console.log('it should be loaded 2');
			o.loadMoreItems();
		}
	};
}