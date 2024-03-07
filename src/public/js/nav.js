document.addEventListener('DOMContentLoaded', function () {
    const navToggle = document.getElementById('navToggle');
    const beforeLoginMenu = document.querySelector('.before-login-nav__list');
    const afterLoginMenu = document.querySelector('.after-login-nav__list');

    const isLoggedIn = false;

    if (isLoggedIn) {
        beforeLoginMenu.classList.remove('active');
        afterLoginMenu.classList.add('active');
    } else {
        beforeLoginMenu.classList.add('active');
        afterLoginMenu.classList.remove('active');
    }

    navToggle.addEventListener('click', function () {
        beforeLoginMenu.classList.toggle('active');
        afterLoginMenu.classList.toggle('active');
    });
});