//* burger functional
(function () {
	$('.nav__burger').click(() => {
		$('.nav__burger').toggleClass('active');
		$('.nav__burger-menu').toggleClass('active');
		if (!$('.nav__burger.active')) {
			$('body').removeClass('lock');
		}
		$('.index__top').toggleClass('lock');
		$('.index__top.fixed').toggleClass('lock');
		$('.tags').toggleClass('lock');
		$('.nav__search').toggleClass('left');
	});
}());


//* nav search functional
(function () {
	$('.nav__search').click(() => {
		$('.nav__search').addClass('hidden');
		$('.nav__search-popup').addClass('active');
		$('body').addClass('lock');
		/* 		$('.logo-img').css('z-index', '200');
				$('.logo-img-small').css('z-index', '200'); */
	});

	$('.nav__search-popup--close').click(() => {
		$('.nav__search').removeClass('hidden');
		$('.nav__search-popup').removeClass('active');
		$('body').removeClass('lock');
		/* 		$('.logo-img').css('z-index', 'inherit');
				$('.logo-img-small').css('z-index', 'inherit'); */
	});

	$('.nav__search-popup--recomended p:not(:nth-child(1))').click(function () {
		let textP = $(this).text();
		$('#search-input').val(textP);
		$('.nav__search-popup--search button').click();
	});

	$('.nav__search-popup-projects-results--photo').hover(function () {
		$(this).find('p').css('visibility', 'visible');
		$(this).find('img').css('filter', 'brightness(.4)');
	}, function () {
		$(this).find('p').css('visibility', 'hidden');
		$(this).find('img').css('filter', 'unset');
	});
}());


//* fixed nav functional
(function () {
	var scrollPos = 100;
	$(window).scroll(() => {
		let currentPosition = $(this).scrollTop();
		if (currentPosition < scrollPos) {
			$('nav').removeClass('fixed');
			$('.index__top').removeClass('fixed');
			/* $('body').removeClass('black'); */
			scrollPos = currentPosition;
			if (currentPosition <= scrollPos) {
				$('nav').addClass('fixed');
				$('.index__top').addClass('fixed');
				/* $('body').removeClass('black'); */
			}
		} else {
			$('nav').removeClass('fixed');
			$('.index__top').removeClass('fixed');
			$('.nav__links--border-1').removeClass('active');
			$('.nav__dropdown-content-1').removeClass('active');
			$('.nav__links--border-2').removeClass('active');
			$('.nav__links--border-3').removeClass('active');
			$('.nav__dropdown-content-3').removeClass('active');
			$('.nav__links--border-4').removeClass('active');
			/* $('body').removeClass('black'); */
			currentPosition = currentPosition;
		}
		scrollPos = currentPosition;
	});
}());

/* $(window).scroll(() => {
	let basicPosition = $(this).scrollTop();
	if (basicPosition <= 1) {
		$('nav').removeClass('fixed');
		$('.index__top').removeClass('fixed');
	}
}) */


//* opens nav links and closes when mousep
$('.nav__links--border-1').click(() => {
	$('.nav__links--border-2').removeClass('active');
	$('.nav__links--border-3').removeClass('active');
	$('.nav__dropdown-content-3').removeClass('active');
	$('.nav__links--border-4').removeClass('active');

	$(this).toggleClass('active');
	$('.nav__links--border-1').toggleClass('active');
	$('.nav__dropdown-content-1').toggleClass('active');
	$('.nav__links--border-1').hasClass('active') ? $('body').addClass('black') : $('body').removeClass('black');
});
$('.nav__links--border-3').click(() => {
	$('.nav__links--border-1').removeClass('active');
	$('.nav__dropdown-content-1').removeClass('active');
	$('.nav__links--border-2').removeClass('active');
	$('.nav__links--border-4').removeClass('active');

	$(this).toggleClass('active');
	$('.nav__links--border-3').toggleClass('active');
	$('.nav__dropdown-content-3').toggleClass('active');
	$('.nav__links--border-3').hasClass('active') ? $('body').addClass('black') : $('body').removeClass('black');
});
$(document).mouseup((e) => {
	if ($('.nav__links--border-1').has(e.target).length === 0) {
		$('.nav__links--border-1').removeClass('active');
		$('.nav__dropdown-content-1').removeClass('active');
		$('body').removeClass('black');
	}
});
$(document).mouseup((e) => {
	if ($('.nav__links--border-3').has(e.target).length === 0) {
		$('.nav__links--border-3').removeClass('active');
		$('.nav__dropdown-content-3').removeClass('active');
		$('body').removeClass('black');
	}
});




// nav-burger
$('.nav__burger-links--border-1').click(() => {
	$('.nav__burger-links--border-2').removeClass('active');
	$('.nav__burger-links--border-3').removeClass('active');
	$('.nav__burger-dropdown-content-3').removeClass('active');
	$('.nav__burger-links--border-4').removeClass('active');
	$(this).toggleClass('active');
	$('.nav__burger-dropdown-arrow-1').toggleClass('transformed');
	$('.nav__burger-dropdown-content-1').toggleClass('active');
});
$('.nav__burger-links--border-3').click(() => {
	$('.nav__burger-links--border-1').removeClass('active');
	$('.nav__burger-dropdown-content-1').removeClass('active');
	$('.nav__burger-links--border-2').removeClass('active');
	$('.nav__burger-links--border-4').removeClass('active');
	$(this).toggleClass('active');
	$('.nav__burger-dropdown-arrow-3').toggleClass('transformed');
	$('.nav__burger-dropdown-content-3').toggleClass('active');
});

$(document).mouseup((e) => {
	if ($('.nav__burger-links--border-1').has(e.target).length === 0) {
		$('.nav__burger-links--border-1').removeClass('active');
		$('.nav__burger-dropdown-content-1').removeClass('active');
		$('.nav__burger-dropdown-arrow-1').removeClass('transformed');
	}
});
$(document).mouseup((e) => {
	if ($('.nav__burger-links--border-3').has(e.target).length === 0) {
		$('.nav__burger-links--border-3').removeClass('active');
		$('.nav__burger-dropdown-content-3').removeClass('active');
		$('.nav__burger-dropdown-arrow-3').removeClass('transformed');
	}
});



// languages
$('.nav__languages--link-ru').click(() => {
	$('.nav__languages--link-ru').addClass('active');
	$('.nav__languages--link-en').removeClass('active');
});
$('.nav__languages--link-en').click(() => {
	$('.nav__languages--link-en').addClass('active');
	$('.nav__languages--link-ru').removeClass('active');
});