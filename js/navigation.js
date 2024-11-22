const quoteBtn = document.querySelector('#quote-btn')
const frontPage = document.querySelector('.home-main')

if(frontPage && frontPage.classList.contains('front-page')) {
  quoteBtn.classList.add("cta-homepage")
} else {
  quoteBtn.classList.add("cta-other-page")
}

document.addEventListener('DOMContentLoaded', function() {
  const menu_btn = document.querySelector('.hamburger');
  const menu_btn_closed = document.querySelector('.hamburger-closed');
  const mobile_menu = document.querySelector('.sidebar-menu');
  const menuItems = document.querySelectorAll('.bi-chevron-down');
	const body = document.body; //Select the body element
  const overlay = document.querySelector('.site-overlay');
  const search = document.querySelector('.bi-search');
  const searchForm = document.querySelector('.search-form-box');
  const closeSearchForm = document.querySelector('.bi-x-lg');

  // Event listener for toggling the mobile menu
  menu_btn.addEventListener('click', function(e) {
    e.preventDefault();
    // menu_btn.classList.toggle('is-active');
    mobile_menu.classList.toggle('is-active');
    overlay.classList.toggle('is-active');
		if (mobile_menu.classList.contains('is-active')) {
      body.classList.add('no-scroll'); // Add class to disable body scroll
    } else {
      body.classList.remove('no-scroll'); // Remove class to re-enable body scroll
    }
  });

  menu_btn_closed.addEventListener('click', function(e) {
    e.preventDefault();
    mobile_menu.classList.remove('is-active');
    overlay.classList.remove('is-active');
    body.classList.remove('no-scroll'); // Re-enable body scroll
  });

  overlay.addEventListener('click', function(e) {
    e.preventDefault();
    menu_btn.classList.remove('is-active');
    mobile_menu.classList.remove('is-active');
    overlay.classList.remove('is-active');
    body.classList.remove('no-scroll'); // Re-enable body scroll

  })

  // Event listener for toggling submenus
  // menuItems.forEach(item => {
  //   item.addEventListener('click', function(e) {
  //     e.preventDefault(); // Prevent default link behavior
  //     console.log('success');
  //     const submenu = this.nextElementSibling;
  //     if (submenu) {
  //       submenu.classList.toggle('active');
  //     }
  //   });
  // });

  const dropdown = document.querySelector('.bi-chevron-down');
  const submenu = document.querySelector('.submenu-mobile');

    dropdown.addEventListener('click', function() {
      console.log('success');
      dropdown.classList.toggle('active');
        // Toggle the 'active' class to show or hide the submenu
        submenu.classList.toggle('active');

    });

  // Event listener for showing the search form
  search.addEventListener('click', function() {
    searchForm.classList.toggle('is-active');
  });

  // Event listener for closing the search form
  closeSearchForm.addEventListener('click', function() {
    console.log('closed');
    searchForm.classList.remove('is-active');
  });

  // Second Navigation in the Blog Page
  const blogPage = document.querySelector('.blog')
  if(blogPage) {
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
      console.log(slides)
      if(slides) {
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
    }
  }
});
