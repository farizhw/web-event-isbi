document.onreadystatechange = function() {
    let lastScrollPosition = 0;
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', function(e) {
      lastScrollPosition = window.scrollY;
      
      if (lastScrollPosition > 0)
        navbar.classList.add('nav-berubah');
      else
        navbar.classList.remove('nav-berubah');
    });
  }