function randNumberScript() {
	var randomNumberObject = Math.floor(Math.random() * 100000);
	document.getElementById("number").innerHTML = randomNumberObject;
}
