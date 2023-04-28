

const menuBtn = document.querySelector(".menu-icon span");
const searchBtn = document.querySelector(".utensils-icon");
const cancelBtn = document.querySelector(".cancel-icon");
const items = document.querySelector(".nav-items");
const form = document.querySelector("form");

menuBtn.onclick = () => {
    items.classList.add("active");
    menuBtn.classList.add("hide");
    searchBtn.classList.add("hide");
    cancelBtn.classList.add("show");

}

cancelBtn.onclick = () => {
    items.classList.remove("active");
    menuBtn.classList.remove("hide");
    searchBtn.classList.remove("hide");
    cancelBtn.classList.remove("show");
    form.classList.remove("active");


}




document.addEventListener('mousemove', parallax);
function parallax(e) {
	this.querySelectorAll('.layer').forEach(layer => {
		let speed = layer.getAttribute('data-speed');
		let x = (window.innerWidth - e.pageX * speed) / 100;
		let y = (window.innerWidth - e.pageY * speed) / 100;
		layer.style.transform = `translate(${x}px, ${y}px)`;
	});
}

var image1 = document.querySelector('.hero-image1');
var image2 = document.querySelector('.hero-image2');
var image3 = document.querySelector('.hero-image3');
image1.classList.add('position-1');
image2.classList.add('position-2');
image3.classList.add('position-3');



