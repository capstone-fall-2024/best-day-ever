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


});
