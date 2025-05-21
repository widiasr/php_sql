document.addEventListener('DOMContentLoaded', function () {
    let menuIcon = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menuIcon.addEventListener('click', function () {
        menuIcon.classList.toggle('bx-x');
        navbar.classList.toggle('active');
    });

    document.addEventListener('click', function (e) {
        if (!menuIcon.contains(e.target) && !navbar.contains(e.target)) {
            menuIcon.classList.remove('bx-x');
            navbar.classList.remove('active');
        }
    });
});