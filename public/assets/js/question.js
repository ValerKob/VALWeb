// Header
let questionHeader1 = document.getElementById("questionHeader1");
let questionHeader2 = document.getElementById("questionHeader2");
let questionHeader3 = document.getElementById("questionHeader3");
let questionHeader4 = document.getElementById("questionHeader4");
let questionHeader5 = document.getElementById("questionHeader5");
let questionHeader6 = document.getElementById("questionHeader6");

// BTN
let questionBtn1 = document.getElementById("questionBtn1");
let questionBtn2 = document.getElementById("questionBtn2");
let questionBtn3 = document.getElementById("questionBtn3");
let questionBtn4 = document.getElementById("questionBtn4");
let questionBtn5 = document.getElementById("questionBtn5");
let questionBtn6 = document.getElementById("questionBtn6");

// Text
let questionText1 = document.getElementById("questionText1");
let questionText2 = document.getElementById("questionText2");
let questionText3 = document.getElementById("questionText3");
let questionText4 = document.getElementById("questionText4");
let questionText5 = document.getElementById("questionText5");
let questionText6 = document.getElementById("questionText6");

questionHeader1.addEventListener("click", () => {
    questionHeader1.classList.toggle("active");
    questionBtn1.classList.toggle("active");
    questionText1.classList.toggle("active");
});

questionHeader2.addEventListener("click", () => {
    questionHeader2.classList.toggle("active");
    questionBtn2.classList.toggle("active");
    questionText2.classList.toggle("active");
});

questionHeader3.addEventListener("click", () => {
    questionHeader3.classList.toggle("active");
    questionBtn3.classList.toggle("active");
    questionText3.classList.toggle("active");
});

questionHeader4.addEventListener("click", () => {
    questionHeader4.classList.toggle("active");
    questionBtn4.classList.toggle("active");
    questionText4.classList.toggle("active");
});

questionHeader5.addEventListener("click", () => {
    questionHeader5.classList.toggle("active");
    questionBtn5.classList.toggle("active");
    questionText5.classList.toggle("active");
});

questionHeader6.addEventListener("click", () => {
    questionHeader6.classList.toggle("active");
    questionBtn6.classList.toggle("active");
    questionText6.classList.toggle("active");
});
