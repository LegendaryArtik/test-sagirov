document.getElementById('hamburger-toggle').addEventListener("click", function () {
    this.classList.toggle('hamburger--opened');
    document.getElementById('menu').classList.toggle('open');
})