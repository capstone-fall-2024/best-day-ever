document.addEventListener('DOMContentLoaded', function() {
  const menu_btn = document.querySelector('.hamburger');
  const mobile_menu = document.querySelector('.sidebar-menu');
  const menuItems = document.querySelectorAll('.menu-list-mobile > li > a');
	const body = document.body; //Select the body element
  const overlay = document.querySelector('.site-overlay');

  const search = document.querySelector('.bi-search');
  const searchForm = document.querySelector('.search-form-box');
  const closeSearchForm = document.querySelector('.bi-x-lg');

  // Event listener for toggling the mobile menu
  menu_btn.addEventListener('click', function() {
    menu_btn.classList.toggle('is-active');
    mobile_menu.classList.toggle('is-active');
    overlay.classList.toggle('is-active');
		if (mobile_menu.classList.contains('is-active')) {
      body.classList.add('no-scroll'); // Add class to disable body scroll
    } else {
      body.classList.remove('no-scroll'); // Remove class to re-enable body scroll
    }
  });

  overlay.addEventListener('click', function() {
    menu_btn.classList.remove('is-active');
    mobile_menu.classList.remove('is-active');
    overlay.classList.remove('is-active');
    body.classList.remove('no-scroll'); // Re-enable body scroll

  })

  // Event listener for toggling submenus
  menuItems.forEach(item => {
    item.addEventListener('click', function(e) {
      e.preventDefault(); // Prevent default link behavior
      const submenu = this.nextElementSibling;
      if (submenu) {
        submenu.classList.toggle('active');
      }
    });
  });

  // Event listener for showing the search form
  search.addEventListener('click', function() {
    console.log('hi');
    searchForm.classList.toggle('is-active');
  });

  // Event listener for closing the search form
  closeSearchForm.addEventListener('click', function() {
    console.log('closed');
    searchForm.classList.remove('is-active');
  });

  // Blog Category Menu Slider logic
  let slideIndex = 1;
  showSlides(slideIndex);

  // Add event listeners for the "Next" and "Previous" buttons
  document.querySelector('.prev').addEventListener('click', function() {
    plusSlides(-1);
  });

  document.querySelector('.next').addEventListener('click', function() {
    plusSlides(1);
  });

  // Next/previous controls function
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Function to show the slides
  function showSlides(n) {
    let i;
    let slides = document.querySelectorAll('.carousel-menu__item');

    if (n > slides.length) {
      slideIndex = 1;
    }

    if (n < 1) {
      slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';
    }

    slides[slideIndex - 1].style.display = 'block';
  }
});
