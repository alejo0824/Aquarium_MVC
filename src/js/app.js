document.addEventListener('DOMContentLoaded', function() {

    movileMenu();
});


function movileMenu() {
    const btnMobileMenu = document.querySelector('#btn__moblie-menu');
    const btnCloseMenu = document.querySelector('#btn__close-menu');
    const nav = document.querySelector('.nav');
    const movileMenu = document.querySelector('.menu-mobile');
    const imgMovileMenu = document.querySelector('#btn__moblie-menu');


    if (btnMobileMenu) {
        btnMobileMenu.addEventListener('click', () => {
            nav.classList.add('show');
            movileMenu.classList.add('hidden');
            movileMenu.removeChild(imgMovileMenu);
        });
    }
    if (btnCloseMenu) {
        btnCloseMenu.addEventListener('click', () => {
            nav.classList.remove('show');
            movileMenu.classList.remove('hidden');
            movileMenu.appendChild(imgMovileMenu);
        })
    }
}

const widthScreen = document.body.clientWidth;
window.addEventListener('resize', function() {
    const widthScreen = document.body.clientWidth;
    const nav = document.querySelector('.nav');
    if (widthScreen >= 768) {
        nav.classList.remove('show');
    }
})