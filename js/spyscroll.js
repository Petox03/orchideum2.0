let one = document.querySelector("#one");
let two = document.querySelector("#two");
let three = document.querySelector("#three");
let four = document.querySelector("#four");
let five = document.querySelector("#five");
let six = document.querySelector("#six");

window.addEventListener("scroll", () => {
    var windo = window.pageYOffset;
    if (two.offsetTop <= windo && three.offsetTop > windo) {
        document.querySelector(".two").setAttribute("id", "active");
        document.querySelector(".three").removeAttribute("id", "active");
        document.querySelector(".four").removeAttribute("id", "active");
        document.querySelector(".five").removeAttribute("id", "active");
        document.querySelector(".six").removeAttribute("id", "active");
        document.querySelector(".one").removeAttribute("id", "active");
    }
    else if (three.offsetTop <= windo && four.offsetTop > windo) {
        document.querySelector(".three").setAttribute("id", "active");
        document.querySelector(".two").removeAttribute("id", "active");
        document.querySelector(".four").removeAttribute("id", "active");
        document.querySelector(".five").removeAttribute("id", "active");
        document.querySelector(".six").removeAttribute("id", "active");
        document.querySelector(".one").removeAttribute("id", "active");
    }
    else if (four.offsetTop <= windo && five.offsetTop > windo) {
        document.querySelector(".four").setAttribute("id", "active");
        document.querySelector(".three").removeAttribute("id", "active");
        document.querySelector(".two").removeAttribute("id", "active");
        document.querySelector(".five").removeAttribute("id", "active");
        document.querySelector(".six").removeAttribute("id", "active");
        document.querySelector(".one").removeAttribute("id", "active");
    }
    else if (five.offsetTop <= windo && six.offsetTop > windo) {
        document.querySelector(".five").setAttribute("id", "active");
        document.querySelector(".six").removeAttribute("id", "active");
        document.querySelector(".three").removeAttribute("id", "active");
        document.querySelector(".four").removeAttribute("id", "active");
        document.querySelector(".two").removeAttribute("id", "active");
        document.querySelector(".one").removeAttribute("id", "active");
    }
    else if (six.offsetTop <= windo) {
        document.querySelector(".six").setAttribute("id", "active");
        document.querySelector(".five").removeAttribute("id", "active");
        document.querySelector(".three").removeAttribute("id", "active");
        document.querySelector(".four").removeAttribute("id", "active");
        document.querySelector(".two").removeAttribute("id", "active");
        document.querySelector(".one").removeAttribute("id", "active");
    }
    else {
        document.querySelector(".one").setAttribute("id", "active");
        document.querySelector(".three").removeAttribute("id", "active");
        document.querySelector(".four").removeAttribute("id", "active");
        document.querySelector(".five").removeAttribute("id", "active");
        document.querySelector(".two").removeAttribute("id", "active");
        document.querySelector(".six").removeAttribute("id", "active");
    }
})