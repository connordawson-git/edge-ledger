/* Navbar
    on scroll remove and add class "top"
    for styling purposes
*/
const navbar = document.getElementById('navbar');
let scrolled = false;

window.onscroll = function () {
    if(window.pageYOffset > 100) {
        navbar.classList.remove('top');
        if(!scrolled) {
            navbar.style.transform = 'translateY(-75px)';
        }
        this.setTimeout(function () {
            navbar.style.transform = 'translateY(0)';
        }, 250);
    } else {
        navbar.classList.add('top');
    }
}