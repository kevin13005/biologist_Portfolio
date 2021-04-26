//----------------------------javascript sur le menu-------------------------------------//

//selection du hamburger
const hamburger = document.getElementById('hamburger');
//selection de la ul 
const navUl = document.getElementById('nav-ul');
//selection de la navbar complete

//toggle menu
hamburger.addEventListener('click', () => {
    navUl.classList.toggle('show');
});