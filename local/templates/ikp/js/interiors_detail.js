/* $(document).ready(() => {
	$('video').get(0).play();
});*/

$('video').trigger('play');



/* $('.video').click(function () {
	this.play()
}); */




$('.interiors-detail-slabs__buttons--1-col').click(function () {
	$('.interiors-detail-slabs__photos').css('grid-template-columns', '100%');
});

$('.interiors-detail-slabs__buttons--2-col').click(function () {
	$('.interiors-detail-slabs__photos').css('grid-template-columns', 'repeat(2, 1fr)');
});

$('.interiors-detail-slabs__buttons--3-col').click(function () {
	$('.interiors-detail-slabs__photos').css('grid-template-columns', 'repeat(3, 1fr)');
});

$('.interiors-detail-slabs__buttons--4-col').click(function () {
	$('.interiors-detail-slabs__photos').css('grid-template-columns', 'repeat(4, 1fr)');
});