let AddOrDeleteTransitions = (elemActive, elem) => {
	if (document.querySelector(elemActive)) {
		let arr = document.querySelector(elemActive).querySelectorAll('.status-bar__dropdown-container');
		let delay = 0;
		arr.forEach(function (item) {
			delay += 0.15
			item.style.transitionDelay = `${delay}s`;
		});
	} else {
		let arr = document.querySelector(elem).querySelectorAll('.status-bar__dropdown-container');
		arr.forEach(function (item) {
			item.style.transitionDelay = `0s`;
			/* item.classList.removeClass('active'); */
		});
	};
}

/* let AddOrDeleteTransitionsAfterMouseUp = (elemActive, elem) => {
	let arr = document.querySelector(elem).querySelectorAll('.status-bar__dropdown-container');
	arr.forEach(function (item) {
		item.style.transitionDelay = `0s`;
		item.classList.remove('active');
	});
} */

$('.status-bar__link-1').click((e) => {
	$('.status-bar__link-2').removeClass('active');
	$('.status-bar__link-2--dropdown').removeClass('transformed');
	$('.status-bar__dropdown-content-2').removeClass('active');

	$('.status-bar__link-3').removeClass('active');
	$('.status-bar__link-3--dropdown').removeClass('transformed');
	$('.status-bar__dropdown-content-3').removeClass('active');

	$('.status-bar__link-4').removeClass('active');
	$('.status-bar__link-4--dropdown').removeClass('transformed');
	$('.status-bar__dropdown-content-4').removeClass('active');

	$('.status-bar__link-1').toggleClass('active');
	$('.status-bar__link-1').hasClass('active') ? $('.status-bar').addClass('active') : $('.status-bar').removeClass('active');
	$('.status-bar__link-1').hasClass('active') ? $('.status-bar__dropdown-content-1').addClass('active') : $('.status-bar__dropdown-content-1').removeClass('active');
	$('.status-bar__link-1').hasClass('active') ? $('.status-bar__dropdown-content-1').find('.status-bar__dropdown-container').addClass('active') : $('.status-bar__dropdown-content-1').find('.status-bar__dropdown-container').removeClass('active');

	$('.status-bar__link-1').hasClass('active') ? $('.status-bar__link-1--dropdown').addClass('transformed') : $('.status-bar__link-1--dropdown').removeClass('transformed');
	$('.status-bar__link-1').hasClass('active') ? $('body').addClass('black') : $('body').removeClass('black');


	// func that add or delete animate transitions after click
	let elemActive = '.status-bar__dropdown-content-1.active';
	let elem = '.status-bar__dropdown-content-1';
	AddOrDeleteTransitions(elemActive, elem);
});
$('.status-bar__link-2').click(() => {
	$('.status-bar__link-1').removeClass('active');
	$('.status-bar__link-1--dropdown').removeClass('transformed');
	$('.status-bar__dropdown-content-1').removeClass('active');

	$('.status-bar__link-3').removeClass('active');
	$('.status-bar__link-3--dropdown').removeClass('transformed');
	$('.status-bar__dropdown-content-3').removeClass('active');

	$('.status-bar__link-4').removeClass('active');
	$('.status-bar__link-4--dropdown').removeClass('transformed');
	$('.status-bar__dropdown-content-4').removeClass('active');

	$('.status-bar__link-2').toggleClass('active');
	$('.status-bar__link-2').hasClass('active') ? $('.status-bar').addClass('active') : $('.status-bar').removeClass('active');
	$('.status-bar__link-2').hasClass('active') ? $('.status-bar__dropdown-content-2').addClass('active') : $('.status-bar__dropdown-content-2').removeClass('active');
	$('.status-bar__link-2').hasClass('active') ? $('.status-bar__dropdown-content-2').find('.status-bar__dropdown-container').addClass('active') : $('.status-bar__dropdown-content-2').find('.status-bar__dropdown-container').removeClass('active');
	$('.status-bar__link-2').hasClass('active') ? $('.status-bar__link-2--dropdown').addClass('transformed') : $('.status-bar__link-2--dropdown').removeClass('transformed');
	$('.status-bar__link-2').hasClass('active') ? $('body').addClass('black') : $('body').removeClass('black');

	// func that add or delete animate transitions after click
	let elemActive = '.status-bar__dropdown-content-2.active';
	let elem = '.status-bar__dropdown-content-2';
	AddOrDeleteTransitions(elemActive, elem);
});
$('.status-bar__link-3').click(() => {
	$('.status-bar__link-1').removeClass('active');
	$('.status-bar__link-1--dropdown').removeClass('transformed');
	$('.status-bar__dropdown-content-1').removeClass('active');

	$('.status-bar__link-2').removeClass('active');
	$('.status-bar__link-2--dropdown').removeClass('transformed');
	$('.status-bar__dropdown-content-2').removeClass('active');

	$('.status-bar__link-4').removeClass('active');
	$('.status-bar__link-4--dropdown').removeClass('transformed');
	$('.status-bar__dropdown-content-4').removeClass('active');

	$('.status-bar__link-3').toggleClass('active');
	$('.status-bar__link-3').hasClass('active') ? $('.status-bar').addClass('active') : $('.status-bar').removeClass('active');
	$('.status-bar__link-3').hasClass('active') ? $('.status-bar__dropdown-content-3').addClass('active') : $('.status-bar__dropdown-content-3').removeClass('active');
	$('.status-bar__link-3').hasClass('active') ? $('.status-bar__dropdown-content-3').find('.status-bar__dropdown-container').addClass('active') : $('.status-bar__dropdown-content-3').find('.status-bar__dropdown-container').removeClass('active');
	$('.status-bar__link-3').hasClass('active') ? $('.status-bar__link-3--dropdown').addClass('transformed') : $('.status-bar__link-3--dropdown').removeClass('transformed');
	$('.status-bar__link-3').hasClass('active') ? $('body').addClass('black') : $('body').removeClass('black');

	// func that add or delete animate transitions after click
	let elemActive = '.status-bar__dropdown-content-3.active';
	let elem = '.status-bar__dropdown-content-3';
	AddOrDeleteTransitions(elemActive, elem);
});
$('.status-bar__link-4').click(() => {
	$('.status-bar__link-1').removeClass('active');
	$('.status-bar__link-1--dropdown').removeClass('transformed');
	$('.status-bar__dropdown-content-1').removeClass('active');

	$('.status-bar__link-2').removeClass('active');
	$('.status-bar__link-2--dropdown').removeClass('transformed');
	$('.status-bar__dropdown-content-2').removeClass('active');

	$('.status-bar__link-3').removeClass('active');
	$('.status-bar__link-3--dropdown').removeClass('transformed');
	$('.status-bar__dropdown-content-3').removeClass('active');

	$('.status-bar__link-4').toggleClass('active');
	$('.status-bar__link-4').hasClass('active') ? $('.status-bar').addClass('active') : $('.status-bar').removeClass('active');
	$('.status-bar__link-4').hasClass('active') ? $('.status-bar__dropdown-content-4').addClass('active') : $('.status-bar__dropdown-content-4').removeClass('active');
	$('.status-bar__link-4').hasClass('active') ? $('.status-bar__dropdown-content-4').find('.status-bar__dropdown-container').addClass('active') : $('.status-bar__dropdown-content-4').find('.status-bar__dropdown-container').removeClass('active');
	$('.status-bar__link-4').hasClass('active') ? $('.status-bar__link-4--dropdown').addClass('transformed') : $('.status-bar__link-4--dropdown').removeClass('transformed');
	$('.status-bar__link-4').hasClass('active') ? $('body').addClass('black') : $('body').removeClass('black');

	// func that add or delete animate transitions after click
	let elemActive = '.status-bar__dropdown-content-4.active';
	let elem = '.status-bar__dropdown-content-4';
	AddOrDeleteTransitions(elemActive, elem);

});



$(document).mouseup((e) => {
	if ($('.status-bar__link-1').has(e.target).length === 0) {
		$('.status-bar').removeClass('active');
		$('.status-bar__link-1').removeClass('active');
		$('.status-bar__link-1--dropdown').removeClass('transformed');
		$('.status-bar__dropdown-content-1').removeClass('active');
		$('body').removeClass('black');
		$('status-bar__dropdown-content-1.active').removeClass('active');
		let containers = $('.status-bar__dropdown-content-1').find('.status-bar__dropdown-container');
		containers.each(function () {
			$(this).removeClass('active');
			$(this).css('transition-delay', '0s');
		});
	};
});
$(document).mouseup((e) => {
	if ($('.status-bar__link-2').has(e.target).length === 0) {
		$('.status-bar').removeClass('active');
		$('.status-bar__link-2').removeClass('active');
		$('.status-bar__link-2--dropdown').removeClass('transformed');
		$('.status-bar__dropdown-content-2').removeClass('active');
		$('body').removeClass('black');
		$('status-bar__dropdown-content-2.active').removeClass('active');
		let containers = $('.status-bar__dropdown-content-2').find('.status-bar__dropdown-container');
		containers.each(function () {
			$(this).removeClass('active');
			$(this).css('transition-delay', '0s');
		});
	};
});
$(document).mouseup((e) => {
	if ($('.status-bar__link-3').has(e.target).length === 0) {
		$('.status-bar').removeClass('active');
		$('.status-bar__link-3').removeClass('active');
		$('.status-bar__link-3--dropdown').removeClass('transformed');
		$('.status-bar__dropdown-content-3').removeClass('active');
		$('body').removeClass('black');
		$('status-bar__dropdown-content-3.active').removeClass('active');
		let containers = $('.status-bar__dropdown-content-3').find('.status-bar__dropdown-container');
		containers.each(function () {
			$(this).removeClass('active');
			$(this).css('transition-delay', '0s');
		});
	};
});
$(document).mouseup((e) => {
	if ($('.status-bar__link-4').has(e.target).length === 0) {
		$('.status-bar').removeClass('active');
		$('.status-bar__link-4.active').removeClass('active');
		$('.status-bar__link-4--dropdown').removeClass('transformed');
		$('.status-bar__dropdown-content-4').removeClass('active');
		$('body').removeClass('black');
		$('status-bar__dropdown-content-4.active').removeClass('active');
		let containers = $('.status-bar__dropdown-content-4').find('.status-bar__dropdown-container');
		containers.each(function () {
			$(this).removeClass('active');
			$(this).css('transition-delay', '0s');
		});
	};
});