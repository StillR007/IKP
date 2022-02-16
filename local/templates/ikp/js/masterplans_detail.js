// top slider
$(document).ready(() => {
	const setWindowHeight = () => {
		let WindowWidth = window.innerWidth;
		let SliderHeight = WindowWidth / 16 * 9;
		document.querySelector('.masterplans-detail-slider').style.height = SliderHeight + 'px';
	}

	setWindowHeight();

	window.addEventListener('resize', () => {
		setWindowHeight();
	});



	let allImagesNode = document.querySelectorAll('.masterplans-detail-slider__img');
	let allImages = Array.prototype.slice.call(allImagesNode);


	// это и другая чушь чтобы создать элемент из того же элемента с измененным классом
	//console.log(`allImages is ${allImages}, ${typeof (allImages)}`);


	if (allImages.length == 1) {
		$('.masterplans-detail-slider__arrow-next').addClass('hiden');
		$('.masterplans-detail-slider__arrow-prev').addClass('hiden');
		$('.masterplans-detail-slider__info').addClass('hiden');
		$('.masterplans-detail-slider__img').addClass('active');
		$('.masterplans-detail-slider__view-button').css('display', 'none');
	} else {
		document.querySelector('.masterplans-detail-slider__img').classList.add('active');
	}

	let checkTheIndex = () => {
		let currentImageToBeAppend = $('.masterplans-detail-slider__img.active').index() + 1;
		$('.masterplans-detail-slider__info--current-img').html(currentImageToBeAppend);
	}

	checkTheIndex();

	let countOfImages = allImages.length;
	$('.masterplans-detail-slider__info--all-img').html(countOfImages);



	let swipeNext = () => {
		var currentImage = $('.masterplans-detail-slider__img.active');
		var currentImageIndex = $('.masterplans-detail-slider__img.active').index();
		var nextImageIndex = currentImageIndex + 1;
		var nextImage = $('.masterplans-detail-slider__img').eq(nextImageIndex);
		currentImage.removeClass('active');

		if (nextImageIndex == ($('.masterplans-detail-slider__img:last').index() + 1)) {
			$('.masterplans-detail-slider__img').eq(0).addClass('active');
			checkTheIndex()
		} else {
			nextImage.addClass('active');
			checkTheIndex()
		}
	};

	let swipePrev = () => {
		var currentImage = $('.masterplans-detail-slider__img.active');
		var currentImageIndex = $('.masterplans-detail-slider__img.active').index();
		var prevImageIndex = currentImageIndex - 1;
		var prevImage = $('.masterplans-detail-slider__img').eq(prevImageIndex);

		currentImage.removeClass('active');
		prevImage.addClass('active');
		checkTheIndex()
	};

	// Swipe using arrows
	$('.masterplans-detail-slider__arrow-next').click(() => {
		swipeNext();
	});
	$('.masterplans-detail-slider__arrow-prev').click(() => {
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
		$(".masterplans-detail-slider__fullscreen-icons").css('display', 'none');
		$(".masterplans-detail-slider__fullscreen-icons").find('p').css('display', 'none');
		$(".fullscreen--close-icon").css('display', 'none');
		$(".download-link").css('display', 'none');
		$(".share").css('display', 'none');
		$(".masterplans-detail-slider__img").css('height', '100%');

		$(".masterplans-detail-slider__fullscreen").css('display', 'block');
		$(".masterplans-detail-slider__fullscreen-mini").css('display', 'block');
		$(".masterplans-detail-slider__view-button").css('display', 'block');
	}
	let fullEnter = () => {
		let element = document.querySelector(".masterplans-detail-slider");
		element.requestFullscreen()
			.then(() => {
				$(".masterplans-detail-slider__fullscreen-icons").css('display', 'flex');
				$(".masterplans-detail-slider__fullscreen-icons").find('p').css('display', 'flex');
				$(".fullscreen--close-icon").css('display', 'flex');
				$(".download-link").css('display', 'flex');
				$(".share").css('display', 'flex');
				$(".masterplans-detail-slider__img").css('height', 'auto');

				$(".masterplans-detail-slider__fullscreen").css('display', 'none');
				$(".masterplans-detail-slider__fullscreen-mini").css('display', 'none');
				$(".masterplans-detail-slider__view-button").css('display', 'none');
			})
	}
	// there is no fullscreen before user`s action
	if (document.fullscreenElement) {
		fullExit();
	};
	$(".masterplans-detail-slider__fullscreen-icons").css('display', 'none');

	// Swipe using touch left or right; exit fullscreen mode by swipe up or swipe down
	$(".masterplans-detail-slider__img").swipe({
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
	$('.masterplans-detail-slider__fullscreen').click(() => {
		fullEnter();
	});


	$('.masterplans-detail-slider__fullscreen-mini').click(() => {
		fullEnter();
	});
	$('svg.fullscreen--close-icon').click(() => {
		fullExit()
	});


	$('a.download-link').click(() => {
		let picSrc = document.querySelector('.masterplans-detail-slider__img.active').getAttribute('src');
		$('.download-link').attr("href", picSrc);
		querySelector('.download-link').click();
	});


	$('svg.share').click(() => {
		$('.masterplans__popup').addClass('open');
		$('body').addClass('lock');
		let link = document.querySelector('.masterplans-detail-slider__img.active').getAttribute('src');
		$('.masterplans__popup-content--field').html('https://ikp.atomsk.ru/' + link);
	});
	$('.masterplans__popup-content--field').click(() => {
		let LinkText = $('.masterplans__popup-content--field').text();
		navigator.clipboard.writeText(LinkText).then(() => {
			let uselessDiv = $('.masterplans__popup--bottom-frame--photo');

			$('.masterplans__popup--bottom-frame').addClass('open');
			let frameHide = () => {
				$('.masterplans__popup--bottom-frame').removeClass('open');
				img.remove();
			}


			let currentImageSrc = document.querySelector('.masterplans-detail-slider__img.active').getAttribute('src');
			let img = document.createElement("img");
			img.src = currentImageSrc;

			uselessDiv.append(img);
			setTimeout(frameHide, 2000);
		}, (err) => {
			console.error('Async: Could not copy text: ', err);
		});
	});
	$('.masterplans__popup-content--close').click(() => {
		$('.masterplans__popup--bottom-frame').removeClass('open');
		$('.masterplans__popup').removeClass('open');
		$('body').removeClass('lock');
	});



	$('.masterplans-detail-slider__view-button').click(() => {
		$('.masterplans-detail-slider__bar').addClass('active');
		$('.masterplans-detail-slider__bar--close-icon').addClass('active');
		$('body').addClass('lock');
	});
	let miniBarCloses = () => {
		$('.masterplans-detail-slider__bar').removeClass('active');
		$('.masterplans-detail-slider__bar--close-icon').removeClass('active');
		$('body').removeClass('lock');
	}
	$('.masterplans-detail-slider__bar--close-icon').click(() => {
		miniBarCloses();
	});
	$('.masterplans-detail-slider__bar--mini-img').click(() => {
		miniBarCloses();
	});


	$('.masterplans__popup-content--socials-vk').click(() => {
		let currentImageSrc = document.querySelector('.masterplans-detail-slider__img.active').getAttribute('src');
		let url = 'https://vk.com/share.php?url=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.masterplans__popup-content--socials-vk').attr('href', url);
	});
	$('.masterplans__popup-content--socials-wa').click(() => {
		let currentImageSrc = document.querySelector('.masterplans-detail-slider__img.active').getAttribute('src');
		let url = 'https://wa.me/?text=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.masterplans__popup-content--socials-wa').attr('href', url);
	});
	$('.masterplans__popup-content--socials-tg').click(() => {
		let currentImageSrc = document.querySelector('.masterplans-detail-slider__img.active').getAttribute('src');
		let url = 'https://telegram.me/share/url?url=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.masterplans__popup-content--socials-tg').attr('href', url);
	});
	$('.masterplans__popup-content--socials-fb').click(() => {
		let currentImageSrc = document.querySelector('.masterplans-detail-slider__img.active').getAttribute('src');
		let url = 'https://www.facebook.com/sharer.php?u=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.masterplans__popup-content--socials-fb').attr('href', url)
	});
	$('.masterplans__popup-content--socials-vb').click(() => {
		let currentImageSrc = document.querySelector('.masterplans-detail-slider__img.active').getAttribute('src');
		let url = 'viber://pa?chatURI=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.masterplans__popup-content--socials-vb').attr('href', url);
	});
	$('.masterplans__popup-content--socials-pt').click(() => {
		let currentImageSrc = document.querySelector('.masterplans-detail-slider__img.active').getAttribute('src');
		let url = 'https://ru.pinterest.com/pin/create/button/?url=' + 'https://ikp.atomsk.ru/' + currentImageSrc;
		$('.masterplans__popup-content--socials-pt').attr('href', url);
	});
});


// hide a coautors field if it`s empty
let coautors = $('.masterplans-detail-info__coautors-field').find("a");
if (coautors.length == 0) {
	let windowWidth = window.innerWidth;
	$('.masterplans-detail-info__coautors').css('display', 'none');
	if (windowWidth > 992) {
		$('.masterplans-detail-info').css("grid-template-rows", "repeat(6, auto)");

		$('.masterplans-detail-info__tags').css('grid-row', '6');
		$('.masterplans-detail-info__tags').css('grid-row-end', '7');
		$('.masterplans-detail-info__right').css('grid-row-end', '6');
	};

	if (windowWidth > 576 && windowWidth <= 992) {
		$('.masterplans-detail-info').css('gridTemplateRows', 'repeat(7,auto)');
		$('.masterplans-detail-info__tags').css('grid-row', '7');
		$('.masterplans-detail-info__right').css('grid-row', '6');
	};

	if (windowWidth <= 576) {
		$('.masterplans-detail-info__right').css('grid-row', '6');
		$('.masterplans-detail-info__tags').css('grid-row', '7');
		$('.masterplans-detail-info').css('gridTemplateRows', 'repeat(7,auto)');
	};
};


// slabs fullscreen mode, download and share functional
(function () {
	let allImagesNode = document.querySelectorAll('.masterplans-detail-slabs__photos img');
	let allImages = Array.prototype.slice.call(allImagesNode);


	let fullExit = () => {
		document.exitFullscreen();
		$(".masterplans-detail-slabs__photos--photo img").removeClass('active');
		$(".masterplans-detail-slabs__fullscreen-icons").css('display', 'none');
		$(".masterplans-detail-slabs__fullscreen-icons").find('p').css('display', 'none');
		$(".fullscreen-slabs--close-icon").css('display', 'none');
		$(".download-link-slabs").css('display', 'none');
		$(".share-slabs").css('display', 'none');
	};
	let fullEnter = () => {
		document.requestFullscreen()
			.then(() => {
				let element = document.querySelector(".masterplans-detail-slabs__photos--photo img.active");
				element.requestFullscreen()
					.then(() => {
						/* 				$(".masterplans-detail-slabs__photos--photo img").addClass('active'); */
						$(".masterplans-detail-slabs__fullscreen-icons").css('display', 'flex');
						$(".masterplans-detail-slabs__fullscreen-icons").find('p').css('display', 'flex');
						$(".fullscreen-slabs--close-icon").css('display', 'flex');
						$(".download-link-slabs").css('display', 'flex');
						$(".share-slabs").css('display', 'flex');
						$(".masterplans-detail-slabs__photos--photo img").css('height', 'auto');
					})
			})
	};

	// there is no fullscreen before user`s action
	if (document.fullscreenElement) {
		fullExit();
	};
	$(".masterplans-detail-slabs__fullscreen-icons").css('display', 'none');


	$('.masterplans-detail-slabs__photos--photo img').click(() => {
		fullEnter();
	});
	$('svg.fullscreen-slabs--close-icon').click(() => {
		fullExit();
	});


	$('.masterplans-detail-slabs__photos--photo a.download-link-slabs').click(() => {
		let picSrc = this.find('img');
		console.log(picSrc)
		$('.download-link-slabs').attr("href", picSrc);
		querySelector('.download-link-slabs').click();
	});
})();




// slabs buttons template and functional
$('.masterplans-detail-slabs__buttons--2-col').addClass('pushed');
$('.masterplans-detail-slabs__buttons--1-col').click(() => {
	$('.masterplans-detail-slabs__buttons--1-col').addClass('pushed');
	$('.masterplans-detail-slabs__photos').css('grid-template-columns', '100%');

	$('.masterplans-detail-slabs__buttons--2-col').removeClass('pushed');
	$('.masterplans-detail-slabs__buttons--3-col').removeClass('pushed');
	$('.masterplans-detail-slabs__buttons--4-col').removeClass('pushed');
});
$('.masterplans-detail-slabs__buttons--2-col').click(() => {
	$('.masterplans-detail-slabs__buttons--2-col').addClass('pushed');
	$('.masterplans-detail-slabs__photos').css('grid-template-columns', 'repeat(2, 1fr)');

	$('.masterplans-detail-slabs__buttons--1-col').removeClass('pushed');
	$('.masterplans-detail-slabs__buttons--3-col').removeClass('pushed');
	$('.masterplans-detail-slabs__buttons--4-col').removeClass('pushed');
});
$('.masterplans-detail-slabs__buttons--3-col').click(() => {
	$('.masterplans-detail-slabs__buttons--3-col').addClass('pushed');
	$('.masterplans-detail-slabs__photos').css('grid-template-columns', 'repeat(3, 1fr)');

	$('.masterplans-detail-slabs__buttons--1-col').removeClass('pushed');
	$('.masterplans-detail-slabs__buttons--2-col').removeClass('pushed');
	$('.masterplans-detail-slabs__buttons--4-col').removeClass('pushed');
});
$('.masterplans-detail-slabs__buttons--4-col').click(() => {
	$('.masterplans-detail-slabs__buttons--4-col').addClass('pushed');
	$('.masterplans-detail-slabs__photos').css('grid-template-columns', 'repeat(4, 1fr)');

	$('.masterplans-detail-slabs__buttons--1-col').removeClass('pushed');
	$('.masterplans-detail-slabs__buttons--2-col').removeClass('pushed');
	$('.masterplans-detail-slabs__buttons--3-col').removeClass('pushed');
});














