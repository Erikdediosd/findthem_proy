let burger = document.querySelector('.nav__burgermenu')
let nav = document.querySelector('.nav__list')
burger.addEventListener('click', function(){
    burger.classList.toggle('active')
    nav.classList.toggle('active')
})

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");
    const containersWithLightbg = document.querySelectorAll(".lightbg-container");
  
    window.addEventListener("scroll", function () {
      let shouldAddClass = false;
  
      containersWithLightbg.forEach((container) => {
        const containerTop = container.offsetTop;
        const containerBottom = containerTop + container.clientHeight;
  
        if (window.scrollY >= containerTop && window.scrollY < containerBottom) {
          shouldAddClass = true;
        }
      });
  
      if (shouldAddClass) {
        navbar.classList.add("lightbg");
      } else {
        navbar.classList.remove("lightbg");
      }
    });
  });