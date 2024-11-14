/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

document.addEventListener('DOMContentLoaded', function() {
	const menu_btn = document.querySelector('.hamburger');
	const mobile_menu = document.querySelector('.mobile-menu-container');

	const menuItems = document.querySelectorAll('.menu-list-mobile > li > a');

	const search = document.querySelector('.bi-search');
	const searchForm = document.querySelector('.search-form-box');
	const closeSearchForm = document.querySelector('.bi-x-lg')

	menuItems.forEach(item => {
		item.addEventListener('click', function (e) {
				e.preventDefault(); // Prevent default link behavior
				const submenu = this.nextElementSibling;

				if (submenu) {
						submenu.classList.toggle('active');
				}
		});
});


	menu_btn.addEventListener('click', function() {
		// menu_btn.classList.toggle('is-active');
		mobile_menu.classList.toggle('is-active');
	});

	search.addEventListener('click', function(){
		console.log('hi');
		searchForm.classList.toggle('is-active');
	});

	closeSearchForm.addEventListener('click',function() {
		console.log('closed');
		searchForm.classList.remove('is-active');
		
	});

	// Blog Category Menu Slider

	let slideIndex = 1;
    
    showSlides(slideIndex);

    // Add event listeners for the "Next" and "Previous" buttons
document.querySelector('.prev').addEventListener('click', function() {
  plusSlides(-1);
});

document.querySelector('.next').addEventListener('click', function() {
  plusSlides(1);
});

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.querySelectorAll('.carousel-menu__item');

      if (n > slides.length) {
        slideIndex = 1;
      }

      if (n < 1) {
        slideIndex = slides.length;
      }

      for (i = 0; i < slides.length; i++){
        slides[i].style.display = 'none';
      }

      slides[slideIndex -1 ].style.display = 'block';
    }


});
