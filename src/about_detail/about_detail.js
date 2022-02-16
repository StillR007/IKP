$(document).ready(function () {
	let allImagesNode = document.querySelectorAll('.employee-slider__img');
	var allImages = Array.prototype.slice.call(allImagesNode);
	if (allImages.length == 1) {
		$('.employee-slider__arrow-next').addClass('hiden');
		$('.employee-slider__arrow-prev').addClass('hiden');
		$('.employee-slider__info').addClass('hiden');
		$('.employee-slider__img').addClass('active');
	} else {
		$('.employee-slider__img').addClass('active');
	}

	function checkTheIndex() {
		let currentImageToBeAppend = $('.employee-slider__img.active').index() + 1;
		$('.employee-slider__info--current-img').html(currentImageToBeAppend);
	}

	checkTheIndex();
	let countOfImages = allImages.length;
	$('.employee-slider__info--all-img').html(countOfImages);


	let swipeNext = () => {
		var currentImage = $('.employee-slider__img.active');
		var currentImageIndex = $('.employee-slider__img.active').index();
		var nextImageIndex = currentImageIndex + 1;
		var nextImage = $('.employee-slider__img').eq(nextImageIndex);
		currentImage.removeClass('active');

		if (nextImageIndex == ($('.employee-slider__img:last').index() + 1)) {
			$('.employee-slider__img').eq(0).addClass('active');
			checkTheIndex()
		} else {
			nextImage.addClass('active');
			checkTheIndex()
		}
	};

	let swipePrev = () => {
		var currentImage = $('.employee-slider__img.active');
		var currentImageIndex = $('.employee-slider__img.active').index();
		var prevImageIndex = currentImageIndex - 1;
		var prevImage = $('.employee-slider__img').eq(prevImageIndex);

		currentImage.removeClass('active');
		prevImage.addClass('active');
		checkTheIndex()
	};


	$('.employee-slider__arrow-next').click(function () {
		swipeNext();
	});
	$('.employee-slider__arrow-prev').click(function () {
		swipePrev();
	});
	$(".employee-slider__img").swipe({
		swipeLeft: swipeNext,
		swipeRight: swipePrev,
		threshold: 0
	});
});