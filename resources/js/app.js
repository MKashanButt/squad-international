import './bootstrap';
function toggleMenu() {
    let menu = document.getElementById("sub-menu");
    let menuIcon = document.getElementById('toggleMenuIcon');
    menuIcon.classList.toggle('rotate-180');
    menu.classList.toggle('hidden')
}
function checkPageScroll() {
    let header = document.getElementById('header');
    if (window.scrollY > 800) {
        header.classList.add('fixed')
    }
    if (window.scrollY < 800) {
        header.classList.remove('fixed')
    }
}