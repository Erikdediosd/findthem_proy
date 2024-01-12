let burger = document.querySelector('.nav__burgermenu')
let nav = document.querySelector('.nav__list')
burger.addEventListener('click', function(){
    burger.classList.toggle('active')
    nav.classList.toggle('active')
})