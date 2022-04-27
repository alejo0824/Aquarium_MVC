function movileMenu() { const e = document.querySelector("#btn__moblie-menu"),
        n = document.querySelector("#btn__close-menu"),
        t = document.querySelector(".nav"),
        o = document.querySelector(".menu-mobile"),
        d = document.querySelector("#btn__moblie-menu");
    e && e.addEventListener("click", () => { t.classList.add("show"), o.classList.add("hidden"), o.removeChild(d) }), n && n.addEventListener("click", () => { t.classList.remove("show"), o.classList.remove("hidden"), o.appendChild(d) }) }
document.addEventListener("DOMContentLoaded", (function() { movileMenu() }));
const widthScreen = document.body.clientWidth;
window.addEventListener("resize", (function() { const e = document.body.clientWidth,
        n = document.querySelector(".nav");
    e >= 768 && n.classList.remove("show") }));