$(document).ready(function () {
	const setWindowHeight = () => {
		let WindowWidth = window.innerWidth;
		switch (true) {
			case (WindowWidth > 1400):
				WindowWidth -= 200;
				break;
			case (WindowWidth >= 1201 && WindowWidth <= 1400):
				WindowWidth -= 100;
				break;
			case (WindowWidth <= 1200):
				break;
		}
		let SliderHeight = WindowWidth / 16 * 9;
		document.querySelector('.about-main-slider').style.height = SliderHeight + 'px';
	}

	setWindowHeight();

	window.addEventListener('resize', function () {
		setWindowHeight();
	});

	let allImagesNode = document.querySelectorAll('.about-main-slider__img');
	let allImages = Array.prototype.slice.call(allImagesNode);
	if (allImages.length == 1) {
		$('.about-main-slider__arrow-next').addClass('hiden');
		$('.about-main-slider__arrow-prev').addClass('hiden');
		$('.about-main-slider__info').addClass('hiden');
		$('.about-main-slider__img').addClass('active');
	} else {
		document.querySelector('.about-main-slider__img').classList.add('active');
	}

	function checkTheIndex() {
		let currentImageToBeAppend = $('.about-main-slider__img.active').index() + 1;
		$('.about-main-slider__info--current-img').html(currentImageToBeAppend);
	}

	checkTheIndex();
	let countOfImages = allImages.length;
	$('.about-main-slider__info--all-img').html(countOfImages);


	let swipeNext = () => {
		let currentImage = $('.about-main-slider__img.active');
		let currentImageIndex = $('.about-main-slider__img.active').index();
		let nextImageIndex = currentImageIndex + 1;
		let nextImage = $('.about-main-slider__img').eq(nextImageIndex);
		currentImage.removeClass('active');

		if (nextImageIndex == ($('.about-main-slider__img:last').index() + 1)) {
			$('.about-main-slider__img').eq(0).addClass('active');
			checkTheIndex()
		} else {
			nextImage.addClass('active');
			checkTheIndex()
		}
	};


	let swipePrev = () => {
		let currentImage = $('.about-main-slider__img.active');
		let currentImageIndex = $('.about-main-slider__img.active').index();
		let prevImageIndex = currentImageIndex - 1;
		let prevImage = $('.about-main-slider__img').eq(prevImageIndex);

		currentImage.removeClass('active');
		prevImage.addClass('active');
		checkTheIndex()
	};
	$('.about-main-slider__arrow-next').click(function () {
		swipeNext();
	});
	$('.about-main-slider__arrow-prev').click(function () {
		swipePrev();
	});
	$(".about-main-slider__img").swipe({
		swipeLeft: swipeNext,
		swipeRight: swipePrev,
		threshold: 0
	});
});

$(function () {
	let allAwardsNode = document.querySelectorAll('.about-awards__award');
	let allAwards = Array.prototype.slice.call(allAwardsNode);
	$('.about-awards__awards-count').html('Всего наград: ' + allAwards.length);
});


$(function () {
	$(".about-awards__award").slice(0, 6).addClass('active');
	$(".about-awards__load-more").click(function (e) {
		e.preventDefault();
		$(".about-awards__award:hidden").slice(0, 6).addClass('active');
		if ($(".about-awards__award:hidden").length == 0) {
			$(".about-awards__load-more").remove();
		}
	});
});


/* $(document).ready(function () {
	var $owl = $('.owl-carousel');

	$owl.children().each(function (index) {
		$(this).attr('data-position', index);
	});

	$owl.owlCarousel({
		center: true,
		loop: true,
		items: 2,
	});

	$(document).on('click', '.owl-item>div', function () {
		var $speed = 300;  // in ms
		$owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
	});
}); */


/* $('.owl-carousel__fullscreen-ico').click(function () {
	var element = document.querySelector(".owl-carousel__img");

	element.requestFullscreen()
		.then(function () {
			// element has entered fullscreen mode successfully
			if (full_screen_element !== null) {
				$('span.owl-carousel__img-fullscreen').addClass('active');
			} else {
				$('span.owl-carousel__img-fullscreen').removeClass('active');
			}
		})
		.catch(function (error) {
			console.log(error.message);
		});
}); */

(function () {
	let acc = document.getElementsByClassName("accordion");
	for (let i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function () {
			this.classList.toggle("active");
			let panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
				panel.style.maxHeight = null;
			} else {
				panel.style.maxHeight = panel.scrollHeight + "px";
			}
		});
	}
})();






(function () {
	let windowHeight = document.documentElement.clientHeight;
	let pastElemHeight;

	function checkTheTop() {
		let lazyImage = document.querySelector('img[data-src]');

		if (lazyImage.getAttribute('data-src') !== null) {
			let paddingTop = $("img[data-src]").offset().top;
			lazyScrollCheck(paddingTop, lazyImage);
		} else {
			lazyScrollCheck(paddingTop, lazyImage);
		}
	}

	checkTheTop()

	window.addEventListener('scroll', checkTheTop);


	function lazyScrollCheck(padding, img) {
		let justVarToCheck = (padding <= (pageYOffset + windowHeight));
		if (justVarToCheck) {
			dataSrc = img.getAttribute('data-src');
			img.setAttribute('src', dataSrc);
			img.removeAttribute("data-src");
			setTimeout(checkTheTop, 300); // 1000 is 1 sec
		}
	}
}());

$(function () {
	$(".about-staff__employee").slice(0, 12).addClass('active');
	$(".about-staff__load-more img").on('click', function (e) {
		e.preventDefault();
		$(".about-staff__employee:hidden").slice(0, 12).addClass('active');
		if ($(".about-staff__employee:hidden").length == 0) {
			$(".about-staff__load-more").remove();
		}
	});
	$(".about-staff__load-more i").on('click', function (e) {
		e.preventDefault();
		$(".about-staff__employee:hidden").slice(0, 12).addClass('active');
		if ($(".about-staff__employee:hidden").length == 0) {
			$(".about-staff__load-more").remove();
		}
	});
});
