// style navbar menu on responsive
document.querySelectorAll('.hamburger').forEach(function (hamburger) {
  hamburger.addEventListener(
    'click',
    function () {
      let nav = document.querySelector('#mainNav');
      if (this.classList.contains('is-active') == false) {
        nav.style.backgroundColor = '#68b5a8';
        nav.style.opacity = '0.9';
        nav.style.transition = '0.4s ease';
      } else {
        nav.style.backgroundColor = 'transparent';
      }
      this.classList.toggle('is-active');
    },
    false
  );
});

// adds transition for hamburger
let nav = document.querySelector('nav'); // Identify target

window.addEventListener('scroll', function (event) {
  event.preventDefault();

  if (window.scrollY <= 40) {
    nav.style.backgroundColor = 'transparent';
  } else {
    nav.style.backgroundColor = '#68b5a8';
    nav.style.opacity = '0.9';
    nav.style.transition = '0.4s ease';
  }
});