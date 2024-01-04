// document.addEventListener("DOMContentLoaded", function () {
// 	var splide1 = new Splide("#splide", {
// 		type: "loop",
// 		perPage: 4,
// 		perMove: 1,
// 		direction: "ttb",
// 		height: "40rem",
// 		wheel: true,
// 		arrows: false,
// 		autoplay: "play",
// 		pagination: false,
// 	});
// 	splide1.mount();

// 	var splide2 = new Splide("#splidee", {
// 		type: "loop",
// 		perPage: 4,
// 		perMove: 1,
// 		direction: "ttb",
// 		height: "40rem",
// 		wheel: true,
// 		arrows: false,
// 		autoplay: "play",
// 		pagination: false,
// 	});
// 	splide2.mount();

// 	var splide3 = new Splide("#splideBageur", {
// 		type: "loop",
// 		perPage: 4,
// 		perMove: 1,
// 		direction: "ttb",
// 		height: "40rem",
// 		wheel: true,
// 		arrows: false,
// 		autoplay: "play",
// 		pagination: false,
// 	});
// 	splide3.mount();
// });
var elms = document.getElementsByClassName("splide");

for (var i = 0; i < elms.length; i++) {
	new Splide(elms[i], {
		type: "loop",
		perPage: 3,
		perMove: 1,
		direction: "ttb",
		height: "30rem",
		wheel: true,
		arrows: false,
		autoplay: "play",
		pagination: false,
	}).mount();
}
