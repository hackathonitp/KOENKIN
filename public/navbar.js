window.addEventListener('scroll', function() {
    var navbar = document.getElementById('myNavbar');
    if (window.scrollY > 0) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });



