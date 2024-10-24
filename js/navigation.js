/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
const menu_btn = document.querySelector('.hamburger');
const mobile_menu = document.querySelector('.mobile-menu-container');

menu_btn.addEventListener('click', function() {
	// menu_btn.classList.toggle('is-active');
	mobile_menu.classList.toggle('is-active');
})