const windowHeight = document.documentElement.clientHeight;
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
		setTimeout(checkTheTop, 1); // 1000 is 1 sec
	}
}
