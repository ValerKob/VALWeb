let burgerMenu = document.getElementById("burgerMenu");
let burger = document.getElementById("burger");

let burgerMenu2 = document.getElementById("burgerMenu2");

let burgerWrapper = document.getElementById("burgerWrapper");

burgerMenu.addEventListener("click", () => {
    burgerMenu.classList.toggle("active");
    burger.classList.toggle("active");
    burgerWrapper.classList.toggle("active");
});

burgerMenu2.addEventListener("click", () => {
    burgerMenu.classList.toggle("active");
    burger.classList.toggle("active");
    burgerWrapper.classList.toggle("active");
});
