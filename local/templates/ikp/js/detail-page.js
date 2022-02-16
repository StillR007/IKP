const h1 = document.querySelector('h1').innerHTML.replace('<br>', ' ');
$('.detail-slider__fullscreen-icons').find('p').html(h1);
$('.carousel__fullscreen-icons').find('p').html(h1);
$('.detail-slabs__fullscreen-icons').find('p').html(h1);
let WindowWidth = window.innerWidth;


//* top slider
$(document).ready(() => {
	const setWindowHeight = () => {
		let WindowWidth = window.innerWidth;
		let SliderHeight = WindowWidth / 16 * 9;
		document.querySelector('.detail-slider').style.height = SliderHeight + 'px';
	}

	setWindowHeight();

	window.addEventListener('resize', () => {
		setWindowHeight();
	});


	// getting all images
	let allImagesNode = document.querySelectorAll('.detail-slider__img');
	let allImages = Array.prototype.slice.call(allImagesNode);



	// hide an arrows and navigation if there`s only 1 image
	if (allImages.length == 1) {
		$('.detail-slider__arrow-next').addClass('hiden');
		$('.detail-slider__arrow-prev').addClass('hiden');
		$('.detail-slider__info').addClass('hiden');
		$('.detail-slider__img').addClass('active');
		$('.detail-slider__view-button').css('display', 'none');
	} else {
		document.querySelector('.detail-slider__img').classList.add('active');
	}

	// shows current img in under-slider-info
	let checkTheIndex = () => {
		let currentImageToBeAppend = $('.detail-slider__img.active').index() + 1;
		$('.detail-slider__info--current-img').html(currentImageToBeAppend);
	}
	checkTheIndex();
	// shows all img in under-slider-info
	let countOfImages = allImages.length;
	$('.detail-slider__info--all-img').html(countOfImages);



	let swipeNext = () => {
		var currentImage = $('.detail-slider__img.active');
		var currentImageIndex = $('.detail-slider__img.active').index();
		var nextImageIndex = currentImageIndex + 1;
		var nextImage = $('.detail-slider__img').eq(nextImageIndex);
		currentImage.removeClass('active');

		if (nextImageIndex == ($('.detail-slider__img:last').index() + 1)) {
			$('.detail-slider__img').eq(0).addClass('active');
			checkTheIndex()
		} else {
			nextImage.addClass('active');
			checkTheIndex()
		}
	};

	let swipePrev = () => {
		var currentImage = $('.detail-slider__img.active');
		var currentImageIndex = $('.detail-slider__img.active').index();
		var prevImageIndex = currentImageIndex - 1;
		var prevImage = $('.detail-slider__img').eq(prevImageIndex);

		currentImage.removeClass('active');
		prevImage.addClass('active');
		checkTheIndex()
	};

	// Swipe using arrows
	$('.detail-slider__arrow-next').click(() => {
		swipeNext();
	});
	$('.detail-slider__arrow-prev').click(() => {
		swipePrev();
	});
	// Swipe using keyboard
	let moveRect = (e) => {
		if (e.key == "ArrowRight" || e.code == "ArrowRight") {
			swipeNext();
		}
		if (e.key == "ArrowLeft" || e.code == "ArrowLeft") {
			swipePrev();
		}
	};
	addEventListener("keydown", moveRect);



	let fullExit = () => {
		document.exitFullscreen();
		$(".detail-slider__fullscreen-icons").css('display', 'none');
		$(".detail-slider__fullscreen-icons").find('p').css('display', 'none');
		$(".fullscreen--close-icon").css('display', 'none');
		$(".download-link").css('display', 'none');
		$(".share").css('display', 'none');
		$(".detail-slider__img").css('height', '100%');

		$(".detail-slider__fullscreen").css('display', 'block');
		$(".detail-slider__fullscreen-mini").css('display', 'block');
		$(".detail-slider__view-button").css('display', 'block');
	}
	let fullEnter = () => {
		let element = document.querySelector(".detail-slider");
		element.requestFullscreen()
			.then(() => {
				$(".detail-slider__fullscreen-icons").css('display', 'flex');
				$(".detail-slider__fullscreen-icons").find('p').css('display', 'flex');
				$(".fullscreen--close-icon").css('display', 'flex');
				$(".download-link").css('display', 'flex');
				$(".share").css('display', 'flex');
				$(".detail-slider__img").css('height', 'auto');

				$(".detail-slider__fullscreen").css('display', 'none');
				$(".detail-slider__fullscreen-mini").css('display', 'none');
				$(".detail-slider__view-button").css('display', 'none');
			})
	}
	// there is no fullscreen before user`s action
	if (document.fullscreenElement) {
		$(".detail-slider__fullscreen-icons").css('display', 'none');
	};


	// Swipe using touch left or right; exit fullscreen mode by swipe up or swipe down
	$(".detail-slider__img").swipe({
		swipeLeft: swipeNext,
		swipeRight: swipePrev,
		swipeUp: fullExit,
		swipeDown: fullExit,
		threshold: 0,
	});

	document.addEventListener('fullscreenchange', () => {
		if (document.fullscreenElement) {
			fullEnter();
		} else {
			fullExit();
		}
	});


	// handlers to enter fullscreen mode
	$('.detail-slider__fullscreen').click(() => {
		fullEnter();
	});
	$('.detail-slider__fullscreen-mini').click(() => {
		fullEnter();
	});

	// exit fullscreen
	$('svg.fullscreen--close-icon').click(() => {
		fullExit()
	});


	// function that download current image on click
	$('a.download-link').click(() => {
		let picSrc = document.querySelector('.detail-slider__img.active').getAttribute('src');
		$('.download-link').attr("href", picSrc);
		querySelector('.download-link').click();
	});


	// popup` handlers
	$('svg.share').click(() => {
		if (('ontouchstart' in window) || (window.DocumentTouch && document instanceof DocumentTouch)) {
			let link = document.querySelector('.detail-slider__img.active').getAttribute('src');
			const thisUrl = String('https://ikp.atomsk.ru/' + link);
			const shareObj = {
				title: h1,
				url: thisUrl,
			}
			navigator.share(shareObj);
		} else {
			$('.popup').addClass('open');
			$('body').addClass('lock');
			let link = document.querySelector('.detail-slider__img.active').getAttribute('src');
			$('.popup-content--field').html('https://ikp.atomsk.ru/' + link);
		}
	});
	$('.popup-content--field').click(() => {
		let LinkText = $('.popup-content--field').text();
		navigator.clipboard.writeText(LinkText).then(() => {
			let uselessDiv = $('.popup--bottom-frame--photo');

			$('.popup--bottom-frame').addClass('open');
			let frameHide = () => {
				$('.popup--bottom-frame').removeClass('open');
				img.remove();
			}


			let currentImageSrc = document.querySelector('.detail-slider__img.active').getAttribute('src');
			let img = document.createElement("img");
			img.src = currentImageSrc;

			uselessDiv.append(img);
			setTimeout(frameHide, 2000);
		}, (err) => {
			console.error('Async: Could not copy text: ', err);
		});
	});
	$('.popup-content--close').click(() => {
		$('.popup--bottom-frame').removeClass('open');
		$('.popup').removeClass('open');
		$('body').removeClass('lock');
	});

	// top slider`s slabs functional
	$('.detail-slider__view-button').click(() => {
		if ($('.detail-slider__bar--mini-img').length === 0) {
			let barContainer = '<div class="detail-slider__bar active"><div class="detail-slider__bar--close-icon active"></div></div>'
			$('.detail-slider').append(barContainer);
			$('body').addClass('lock');
			let allMiniImages = $('.detail-slider__img').clone(true, false);
			$.each(allMiniImages, function () {
				$('.detail-slider__bar.active').append($(this).attr('class', 'detail-slider__bar--mini-img'));
				$(this).attr('alt', ' ');
				switch (true) {
					case (WindowWidth >= 1920):
						$(this).attr('data-lg', 'test');
						break;
					case (WindowWidth >= 1420):
						$(this).attr('data-md', 'test');
						break;
					case (WindowWidth >= 768):
						$(this).attr('data-sm', 'test');
						break;
					case (WindowWidth <= 767):
						$(this).attr('data-sm', 'test');
						break;
				}
			});
		} else {
			$('.detail-slider__bar').addClass('active');
			$('.detail-slider__bar--close-icon').addClass('active');
			$('body').addClass('lock');
		};

		// func that closes bar
		let miniBarCloses = () => {
			$('.detail-slider__bar').removeClass('active');
			$('.detail-slider__bar--close-icon').removeClass('active');
			$('body').removeClass('lock');
		}
		$('.detail-slider__bar--close-icon.active').click(() => {
			miniBarCloses();
		});

		// this closes the bar window and then makes clicked img active
		$('.detail-slider__bar--mini-img').click(function () {
			miniBarCloses();
			let checkedImgIndex = $(this).index() - 1;
			$('.detail-slider__img.active').removeClass('active');
			$('.detail-slider__img')[checkedImgIndex].classList.add('active');
			checkTheIndex();
		});
	});








	// top slider social links handlers
	$('.popup-content--socials-vk').click(() => {
		let currentImageSrc = document.querySelector('.detail-slider__img.active').getAttribute('src');
		let url = 'https://vk.com/share.php?url=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.popup-content--socials-vk').attr('href', url);
	});
	$('.popup-content--socials-wa').click(() => {
		let currentImageSrc = document.querySelector('.detail-slider__img.active').getAttribute('src');
		let url = 'https://wa.me/?text=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.popup-content--socials-wa').attr('href', url);
	});
	$('.popup-content--socials-tg').click(() => {
		let currentImageSrc = document.querySelector('.detail-slider__img.active').getAttribute('src');
		let url = 'https://telegram.me/share/url?url=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.popup-content--socials-tg').attr('href', url);
	});
	$('.popup-content--socials-fb').click(() => {
		let currentImageSrc = document.querySelector('.detail-slider__img.active').getAttribute('src');
		let url = 'https://www.facebook.com/sharer.php?u=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.popup-content--socials-fb').attr('href', url)
	});
	$('.popup-content--socials-vb').click(() => {
		let currentImageSrc = document.querySelector('.detail-slider__img.active').getAttribute('src');
		let url = 'viber://pa?chatURI=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.popup-content--socials-vb').attr('href', url);
	});
	$('.popup-content--socials-pt').click(() => {
		let currentImageSrc = document.querySelector('.detail-slider__img.active').getAttribute('src');
		let url = 'https://ru.pinterest.com/pin/create/button/?url=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.popup-content--socials-pt').attr('href', url);
	});
});


//* detail map functional
(function () {
	$('.detail-info__place p').not('.detail-info__bold').click(() => {
		$('.detail-map').addClass('open');
		$('body').addClass('lock');
		$('body').addClass('black');
	});

	$('.detail-map__close-button').click(() => {
		$('.detail-map').removeClass('open');
		$('body').removeClass('lock');
		$('body').removeClass('black');
	});

	$(document).mouseup((e) => {
		if (($('.detail-map.open').has(e.target).length === 0) || (!$('.detail-map.open'))) {
			$('.detail-map').removeClass('open');
			$('body').removeClass('lock');
			$('body').removeClass('black');
		}
	});
})();



//* hide a coautors field if it`s empty
let coautors = $('.detail-info__coautors-field').find("a");
if (coautors.length == 0) {
	let windowWidth = window.innerWidth;
	$('.detail-info__coautors').css('display', 'none');
	if (windowWidth > 992) {
		$('.detail-info').css("grid-template-rows", "repeat(6, auto)");

		$('.detail-info__tags').css('grid-row', '6');
		$('.detail-info__tags').css('grid-row-end', '7');
		$('.detail-info__right').css('grid-row-end', '6');
	};

	if (windowWidth > 576 && windowWidth <= 992) {
		$('.detail-info').css('gridTemplateRows', 'repeat(7,auto)');
		$('.detail-info__tags').css('grid-row', '7');
		$('.detail-info__right').css('grid-row', '6');
	};

	if (windowWidth <= 576) {
		$('.detail-info__right').css('grid-row', '6');
		$('.detail-info__tags').css('grid-row', '7');
		$('.detail-info').css('gridTemplateRows', 'repeat(7,auto)');
	};
};



//* carousel
(function () {
	$('.carousel-wrapper').slick({
		speed: 100,
		slidesToShow: 1,
		centerMode: true,
		variableWidth: true,
		arrow: true,
		draggable: false,
		prevArrow: `<div class="carousel__arrow-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="2" stroke="#fff" fill="none">
			<polyline points="45.15 57.47 19.88 30.84 45.15 6.58" /></svg></div>`,
		nextArrow: `<div class="carousel__arrow-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="2" stroke="#fff" fill="none">
		<polyline points="18.86 57.47 44.12 30.84 18.86 6.58" /></svg></div>`,
		swipeToSlide: false,
	});


	let addZeros = function (n) {
		return (n < 10) ? '0' + n : '' + n;
	};

	// That shows all img in carousel
	let totalCarouselImages = $('.carousel').find('.carousel--photo').not('.slick-cloned');
	totalCarouselImagesNum = totalCarouselImages.length;
	$('.carousel__numbers .total').html(addZeros(totalCarouselImagesNum));

	// create a black lines under carousel
	for (let i = 0; i < totalCarouselImagesNum; i++) {
		$('.carousel__lines').append('<span></span>');
	}
	$('.carousel__lines span').css('width', `calc(100% / ${totalCarouselImagesNum})`);

	// check`s the index of current photo and colors a black line under carousel
	let checkTheIndex = () => {
		let currentImageToBeAppend = $('.slick-center').index() - 1;
		if (currentImageToBeAppend == 0) {
			currentImageToBeAppend = totalCarouselImagesNum;
		}
		$('.carousel__numbers .active').html(addZeros(currentImageToBeAppend));
		$('.carousel__lines').find('span').removeClass('black');
		$('.carousel__lines span').eq(currentImageToBeAppend - 1).addClass('black');

	}
	checkTheIndex();
	$(this).on('afterChange', checkTheIndex);



	// to make carousel display photos correct (it`s incorrect because of margins)
	let clickOnlyPrev = function () {
		$('.carousel__arrow-prev').click();
	};
	let clickNextPrev = function () {
		$('.carousel__arrow-next').click();
		setTimeout(clickOnlyPrev, 100);
	};



	// enter half-fullscreen mode
	const miniFullEnter = () => {
		$('.carousel').addClass('miniFull');
		clickNextPrev();
		$('body').addClass('lock');
		$('.carousel.miniFull').css('visibility', 'visible');
		$('.carousel.miniFull').css('opacity', '1');
		setTimeout(function () { $('.slick-slide').css('visibility', 'visible') }, 300);
	}


	// exit half-fullscreen mode
	const miniFullExit = () => {
		$('.carousel').removeClass('miniFull');
		clickNextPrev();
		$('body').removeClass('lock');
	}
	document.querySelector('.carousel-fullscreen--close-icon').addEventListener('click', miniFullExit);


	$('.slick-slide').hover(
		function () {
			$(this).find('span').css('visibility', 'visible');
			$(this).find('span').css('opacity', '1');
			$(this).find('img').css('transform', 'scale(1.2)');
			$(this).find('img').css('transition', '.5s');
		}, function () {
			$(this).find('span').css('visibility', 'hidden');
			$(this).find('span').css('opacity', '0');
			$(this).find('img').css('transform', 'scale(1)');
			$(this).find('img').css('transition', '.3s');
		}
	);


	// checks and writen current img index to inder carousel info field
	let checkActiveImg = () => {
		$('.slick-active img').click(() => {
			miniFullEnter();
		});
	}
	checkActiveImg();
	$(this).on('afterChange', checkActiveImg);


	$('.carousel-download-link').click(() => {
		let picSrc = document.querySelector('.slick-active img').getAttribute('src');
		$('.carousel-download-link').attr("href", picSrc);
		querySelector('.carousel-download-link').click();
	});
	$('.download-link-carousel-hover').click(function () {
		let photoSrc = this.closest('div').querySelector('img').getAttribute('src');
		$('.download-link-carousel-hover').attr("href", photoSrc);
	});


	$('.carousel-share').click(() => {
		if (('ontouchstart' in window) || (window.DocumentTouch && document instanceof DocumentTouch)) {
			let picSrc = document.querySelector('.slick-active img').getAttribute('src');
			const thisUrl = String('https://ikp.atomsk.ru/' + picSrc);
			const shareObj = {
				title: h1,
				url: thisUrl,
			}
			navigator.share(shareObj);
		} else {
			$('.carousel__popup').addClass('open');
			$('body').addClass('lock');
			let picSrc = document.querySelector('.slick-active img').getAttribute('src');
			$('.carousel__popup-content--field').html('https://ikp.atomsk.ru/' + picSrc);
		}


	});
	$('.share-carousel-hover').click(function () {
		if (('ontouchstart' in window) || (window.DocumentTouch && document instanceof DocumentTouch)) {
			let picSrc = this.closest('div').querySelector('img').getAttribute('src');
			const thisUrl = String('https://ikp.atomsk.ru/' + picSrc);
			const shareObj = {
				title: h1,
				url: thisUrl,
			}
			navigator.share(shareObj);
		} else {
			$('.carousel__popup').addClass('open');
			$('body').addClass('lock');
			let picSrc = this.closest('div').querySelector('img').getAttribute('src');
			$('.carousel__popup-content--field').html('https://ikp.atomsk.ru/' + picSrc);
		}
	});



	$('.carousel__popup-content--close').click(() => {
		$('.carousel__popup').removeClass('open');
		$('.carousel__popup--bottom-frame').removeClass('open');
		if ($('.carousel.miniFull').length == 0) {
			$('body').removeClass('lock');
		}
	});
	$('.carousel__popup-content--field').click(() => {
		let LinkText = $('.carousel__popup-content--field').text();
		navigator.clipboard.writeText(LinkText)
			.then(() => {
				let uselessDiv = $('.carousel__popup--bottom-frame--photo');

				$('.carousel__popup--bottom-frame').addClass('open');

				let frameHide = () => {
					$('.carousel__popup--bottom-frame').removeClass('open');
					img.remove();
				}


				let currentImageSrc
				if (document.querySelector('.slick-active img')) {
					currentImageSrc = document.querySelector('.slick-active img').getAttribute('src');
				} else {
					currentImageSrc = document.querySelector(`.slick-active img[src="${LinkText}"]`).getAttribute('src');
				}

				let img = document.createElement("img");
				img.src = currentImageSrc;

				uselessDiv.append(img);
				setTimeout(frameHide, 2000);
			}, (err) => {
				console.error('Async: Could not copy text: ', err);
			});
	});

	$('.carousel__arrow-next').click((e) => {
		if ($('.carousel').hasClass('miniFull')) {
			if (!($('body').hasClass('lock'))) {
				$('body').addClass('lock');
			}
		}
	});

	$('.carousel__arrow-prev').click((e) => {
		if ($('.carousel').hasClass('miniFull')) {
			if (!($('body').hasClass('lock'))) {
				$('body').addClass('lock');
			}
		}
	});
})();



//* slabs fullscreen mode, download and share functional
(function () {
	// swiping images in half-fullscreen mode
	let swipeNext = () => {
		let imgIndex = $('.detail-slabs__photos--photo.miniFull').index();
		let allImages = $('.detail-slabs__photos--photo').find('img');
		$('.detail-slabs__photos--photo.miniFull').removeClass('miniFull');
		imgIndex++;
		if (imgIndex == allImages.length) {
			imgIndex = 0;
		};
		let nextImg = allImages[imgIndex].closest('.detail-slabs__photos--photo');
		nextImg.classList.add('miniFull');
	};
	let swipePrev = () => {
		let imgIndex = $('.detail-slabs__photos--photo.miniFull').index();
		let allImages = $('.detail-slabs__photos--photo').find('img');
		$('.detail-slabs__photos--photo.miniFull').removeClass('miniFull');
		imgIndex--;
		if (imgIndex < 0) {
			imgIndex = allImages.length - 1;
		};
		let prevImg = allImages[imgIndex].closest('.detail-slabs__photos--photo');
		prevImg.classList.add('miniFull');
	};
	$('.detail-slabs__arrow-next').on('click', function () {
		swipeNext();
	});
	$('.detail-slabs__arrow-prev').on('click', function () {
		swipePrev();
	});



	// enter and exit half-fullscreen mode
	let fullExit = () => {
		$('.detail-slabs__arrow-next').removeClass('active');
		$('.detail-slabs__arrow-prev').removeClass('active');
		$('.detail-slabs__fullscreen-icons').removeClass('active');
		$('.detail-slabs__photos--photo').removeClass('miniFull');
		$('header').css('display', 'inherit');
		$('body').removeClass('lock');
	};
	let fullEnter = (element) => {
		element.closest('div').addClass('miniFull');
		$('.detail-slabs__arrow-next').addClass('active');
		$('.detail-slabs__arrow-prev').addClass('active');
		$('.detail-slabs__fullscreen-icons').addClass('active');
		$('header').css('display', 'none');
		$('body').addClass('lock');
	};
	$('.detail-slabs__photos--photo img').click(function () {
		if (window.innerWidth >= 767) {
			fullEnter($(this));
		}
	});
	$('.fullscreen-slabs--close-icon').click(function () {
		fullExit();
	});


	$('.detail-slabs__photos--photo').hover(
		function () {
			$(this).find('span').css('visibility', 'visible');
			$(this).find('span').css('opacity', '1');
			$(this).find('img').css('transform', 'scale(1.2)');
			$(this).find('img').css('transition', '.5s');
		}, function () {
			$(this).find('span').css('visibility', 'hidden');
			$(this).find('span').css('opacity', '0');
			$(this).find('img').css('transform', 'scale(1)');
			$(this).find('img').css('transition', '.3s');
		}
	);


	$('.download-link-slabs').click(() => {
		let picSrc = document.querySelector('.detail-slabs__photos--photo.miniFull img').getAttribute('src');
		$('.download-link-slabs').attr("href", picSrc);
		querySelector('.download-link-slabs').click();
	});
	$('.download-link-slabs-hover').click(function () {
		let photoSrc = this.closest('div').querySelector('img').getAttribute('src');
		$('.download-link-slabs-hover').attr("href", photoSrc);
	});


	$('svg.share-slabs').click(() => {
		if (('ontouchstart' in window) || (window.DocumentTouch && document instanceof DocumentTouch)) {
			let picSrc = document.querySelector('.detail-slabs__photos--photo.miniFull img').getAttribute('src');
			const thisUrl = String('https://ikp.atomsk.ru/' + picSrc);
			const shareObj = {
				title: h1,
				url: thisUrl,
			}
			navigator.share(shareObj);
		} else {
			$('.slabs__popup').addClass('open');
			$('body').addClass('lock');
			let picSrc = document.querySelector('.detail-slabs__photos--photo.miniFull img').getAttribute('src');
			$('.slabs__popup-content--field').html('https://ikp.atomsk.ru/' + picSrc);
		}
	});
	$('.share-slabs-hover').click(function () {
		if (('ontouchstart' in window) || (window.DocumentTouch && document instanceof DocumentTouch)) {
			let picSrc = this.closest('div').querySelector('img').getAttribute('src');
			const thisUrl = String('https://ikp.atomsk.ru/' + picSrc);
			const shareObj = {
				title: h1,
				url: thisUrl,
			}
			navigator.share(shareObj);
		} else {
			$('.slabs__popup').addClass('open');
			$('body').addClass('lock');
			let picSrc = this.closest('div').querySelector('img').getAttribute('src');
			$('.slabs__popup-content--field').html('https://ikp.atomsk.ru/' + picSrc);
		}
	});
	$('.slabs__popup-content--close').click(() => {
		$('.slabs__popup').removeClass('open');
		$('.slabs__popup--bottom-frame').removeClass('open');
		if ($('.detail-slabs__photos--photo.miniFull').length == 0) {
			$('body').removeClass('lock');
		}
	});
	$('.slabs__popup-content--field').click(() => {
		let LinkText = $('.masterplans__popup-content--field').text();
		navigator.clipboard.writeText(LinkText)
			.then(() => {
				let uselessDiv = $('.slabs__popup--bottom-frame--photo');

				$('.slabs__popup--bottom-frame').addClass('open');

				let frameHide = () => {
					$('.slabs__popup--bottom-frame').removeClass('open');
					img.remove();
				}


				let currentImageSrc
				if (document.querySelector('.detail-slabs__photos--photo.miniFull img')) {
					currentImageSrc = document.querySelector('.detail-slabs__photos--photo.miniFull img').getAttribute('src');
				} else {
					/* let LinkText = $('.masterplans__popup-content--field').text();
					console.log('LinkText is ', LinkText) */
					currentImageSrc = document.querySelector(`.detail-slabs__photos--photo img[src="${LinkText}"]`).getAttribute('src');
				}

				let img = document.createElement("img");
				img.src = currentImageSrc;

				uselessDiv.append(img);
				setTimeout(frameHide, 2000);
			}, (err) => {
				console.error('Async: Could not copy text: ', err);
			});
	});



	$('.slabs__popup-content--socials-vk').click(() => {
		let currentImageSrc = document.querySelector('.detail-slabs__photos--photo.miniFull img').getAttribute('src');
		let url = 'https://vk.com/share.php?url=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.slabs__popup-content--socials-vk').attr('href', url);
	});
	$('.slabs__popup-content--socials-wa').click(() => {
		let currentImageSrc = document.querySelector('.detail-slabs__photos--photo.miniFull img').getAttribute('src');
		let url = 'https://wa.me/?text=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.slabs__popup-content--socials-wa').attr('href', url);
	});
	$('.slabs__popup-content--socials-tg').click(() => {
		let currentImageSrc = document.querySelector('.detail-slabs__photos--photo.miniFull img').getAttribute('src');
		let url = 'https://telegram.me/share/url?url=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.slabs__popup-content--socials-tg').attr('href', url);
	});
	$('.slabs__popup-content--socials-fb').click(() => {
		let currentImageSrc = document.querySelector('.detail-slabs__photos--photo.miniFull img').getAttribute('src');
		let url = 'https://www.facebook.com/sharer.php?u=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.slabs__popup-content--socials-fb').attr('href', url)
	});
	$('.slabs__popup-content--socials-vb').click(() => {
		let currentImageSrc = document.querySelector('.detail-slabs__photos--photo.miniFull img').getAttribute('src');
		let url = 'viber://pa?chatURI=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.slabs__popup-content--socials-vb').attr('href', url);
	});
	$('.slabs__popup-content--socials-pt').click(() => {
		let currentImageSrc = document.querySelector('.detail-slabs__photos--photo.miniFull img').getAttribute('src');
		let url = 'https://ru.pinterest.com/pin/create/button/?url=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.slabs__popup-content--socials-pt').attr('href', url);
	});
})();




//* slabs buttons template and functional
$('.detail-slabs__buttons--2-col').addClass('pushed');
$('.detail-slabs__buttons--1-col').click(() => {
	$('.detail-slabs__buttons--1-col').addClass('pushed');
	$('.detail-slabs__photos').css('grid-template-columns', '100%');

	$('.detail-slabs__buttons--2-col').removeClass('pushed');
	$('.detail-slabs__buttons--3-col').removeClass('pushed');
	$('.detail-slabs__buttons--4-col').removeClass('pushed');
});
$('.detail-slabs__buttons--2-col').click(() => {
	$('.detail-slabs__buttons--2-col').addClass('pushed');
	$('.detail-slabs__photos').css('grid-template-columns', 'repeat(2, 1fr)');

	$('.detail-slabs__buttons--1-col').removeClass('pushed');
	$('.detail-slabs__buttons--3-col').removeClass('pushed');
	$('.detail-slabs__buttons--4-col').removeClass('pushed');
});
$('.detail-slabs__buttons--3-col').click(() => {
	$('.detail-slabs__buttons--3-col').addClass('pushed');
	$('.detail-slabs__photos').css('grid-template-columns', 'repeat(3, 1fr)');

	$('.detail-slabs__buttons--1-col').removeClass('pushed');
	$('.detail-slabs__buttons--2-col').removeClass('pushed');
	$('.detail-slabs__buttons--4-col').removeClass('pushed');
});
$('.detail-slabs__buttons--4-col').click(() => {
	$('.detail-slabs__buttons--4-col').addClass('pushed');
	$('.detail-slabs__photos').css('grid-template-columns', 'repeat(4, 1fr)');

	$('.detail-slabs__buttons--1-col').removeClass('pushed');
	$('.detail-slabs__buttons--2-col').removeClass('pushed');
	$('.detail-slabs__buttons--3-col').removeClass('pushed');
});


