let modalClose = document.getElementById("modalClose");
let modalOpen = document.querySelectorAll("#openModal");

let modal = document.getElementById("modal");

modalClose.addEventListener("click", () => {
    modal.classList.toggle("active");
    document.body.style.overflowY = "scroll";
});

modalOpen.forEach(function (btn) {
    btn.addEventListener("click", () => {
        modal.classList.toggle("active");
        document.body.style.overflowY = "hidden";
    });
});
