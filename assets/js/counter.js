let counterElements = document.getElementsByClassName("counter");

for (let i = 0; i < counterElements.length; i++) {
	let upto = 15000;
	let stopValue = parseInt(counterElements[i].innerHTML);
	let counts = setInterval(() => updated(i), 50);

	function updated(index) {
		upto++;
		counterElements[index].innerHTML = upto;
		if (upto === stopValue) {
			clearInterval(counts);
		}
	}
}
