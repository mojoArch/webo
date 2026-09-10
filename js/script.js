const name = document.querySelector(".hero-name");
window.addEventListener("scroll", function () {
    const scroll = window.scrollY;

    name.style.transform = `translateX(${scroll * -0.5}px)`;
});