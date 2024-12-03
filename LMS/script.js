function toggleNav() {
  const mobileNav = document.getElementById('mobileNav');
  mobileNav.classList.toggle('show'); 
}

function closeNav() {
  const mobileNav = document.getElementById('mobileNav');
  mobileNav.classList.remove('show'); 
}
document.addEventListener('click', (event) => {
  const mobileNav = document.getElementById('mobileNav');
  const hemBurgerBtn = document.getElementById('HemBurgerBTN');
  if (!mobileNav.contains(event.target) && event.target !== hemBurgerBtn) {
      closeNav();
  }
});

  