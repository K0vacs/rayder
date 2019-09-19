// Media control variables //
const overlay = document.getElementsByClassName( "intro-overlay" );
const video = document.getElementsByClassName( "profile-video" );
const mediaControl = document.getElementsByClassName( "profile-play-button" );

// Event listeners for media controls //
overlay[0].addEventListener("click", playVideo);

for (var i = 0; i < video.length; i++) {
    video[i].addEventListener('ended', videoEnded);
		video[i].addEventListener('click', mediaController);
		mediaControl[i].addEventListener('click', mediaController);
}

// Functions to execute media handeling //
function playVideo() {
	overlay[0].classList.add( "opacity" );
	var video = document.getElementsByClassName( "intro-video" );

	if( video[0].paused ) {
		video[0].play();
	} else {
		video[0].pause();
	}
}

function mediaController(event) {
	var self 			= event.target;
	var overlay 	= self.parentElement.parentElement.parentElement.parentElement;
	var video 		= overlay.previousElementSibling || event.target;
	var container = overlay.parentElement;
	overlay.classList.add("overlay-after-play");
	overlay.classList.remove("overlay-height");

	if( video.paused ) {
	//	self.style.marginLeft = "7px";
	//	self.src = "http://localhost:8888/rayder/wp-content/uploads/2019/09/pause-button.svg"
		video.play();
	} else {
	//	self.style.marginLeft = "10px";
	//	self.src = "http://localhost:8888/rayder/wp-content/uploads/2019/08/play-button.svg"
		video.pause();
	}

	// if( !overlay.children[0].children[0].classList.contains("hide") ) {
	// 	overlay.children[0].children[0].classList.add("hide");
	// 	self.parentElement.classList.add("mini-play-circle")
	// 	self.parentElement.classList.remove("profile-play-circle");
	// 	self.classList.add("mini-play-button")
	// 	self.classList.remove("profile-play-button");
	// }

}

function videoEnded(event) {
	var overlay = event.target.nextSibling;
	overlay.classList.remove("overlay-after-play");
	overlay.classList.add("overlay-height");
	//overlay[0].children[0].children[1].children[0].children[0].src = "http://localhost:8888/rayder/wp-content/uploads/2019/08/play-button.svg"
}


(function() {

	/**
	 * Debounce
	 *
	 * @param {Function} func
	 * @param {number} wait
	 * @param {boolean} immediate
	 */
	function debounce(func, wait, immediate) {
		'use strict';

		var timeout;
		wait      = (typeof wait !== 'undefined') ? wait : 20;
		immediate = (typeof immediate !== 'undefined') ? immediate : true;

		return function() {

			var context = this, args = arguments;
			var later = function() {
				timeout = null;

				if (!immediate) {
					func.apply(context, args);
				}
			};

			var callNow = immediate && !timeout;

			clearTimeout(timeout);
			timeout = setTimeout(later, wait);

			if (callNow) {
				func.apply(context, args);
			}
		};
	}

	/**
	 * Prepends an element to a container.
	 *
	 * @param {Element} container
	 * @param {Element} element
	 */
	function prependElement(container, element) {
		if (container.firstChild.nextSibling) {
			return container.insertBefore(element, container.firstChild.nextSibling);
		} else {
			return container.appendChild(element);
		}
	}

	/**
	 * Shows an element by adding a hidden className.
	 *
	 * @param {Element} element
	 */
	function showButton(element) {
		// classList.remove is not supported in IE11
		element.className = element.className.replace('is-empty', '');
	}

	/**
	 * Hides an element by removing the hidden className.
	 *
	 * @param {Element} element
	 */
	function hideButton(element) {
		// classList.add is not supported in IE11
		if (!element.classList.contains('is-empty')) {
			element.className += ' is-empty';
		}
	}

	/**
	 * Returns the currently available space in the menu container.
	 *
	 * @returns {number} Available space
	 */
	function getAvailableSpace( button, container ) {
		return container.offsetWidth - button.offsetWidth - 22;
	}

	/**
	 * Returns whether the current menu is overflowing or not.
	 *
	 * @returns {boolean} Is overflowing
	 */
	function isOverflowingNavivation( list, button, container ) {
		return list.offsetWidth > getAvailableSpace( button, container );
	}

	/**
	 * Set menu container variable
	 */
	var navContainer = document.querySelector('.main-navigation');
	var breaks       = [];

	/**
	 * Let’s bail if we our menu doesn't exist
	 */
	if ( ! navContainer ) {
		return;
	}

	/**
	 * Refreshes the list item from the menu depending on the menu size
	 */
	function updateNavigationMenu( container ) {

		/**
		 * Let’s bail if our menu is empty
		 */
		if ( ! container.parentNode.querySelector('.main-menu[id]') ) {
			return;
		}

		// Adds the necessary UI to operate the menu.
		var visibleList  = container.parentNode.querySelector('.main-menu[id]');
		var hiddenList   = visibleList.parentNode.nextElementSibling.querySelector('.hidden-links');
		var toggleButton = visibleList.parentNode.nextElementSibling.querySelector('.main-menu-more-toggle');

		if ( isOverflowingNavivation( visibleList, toggleButton, container ) ) {

			// Record the width of the list
			breaks.push( visibleList.offsetWidth );
			// Move last item to the hidden list
			prependElement( hiddenList, ! visibleList.lastChild || null === visibleList.lastChild ? visibleList.previousElementSibling : visibleList.lastChild );
			// Show the toggle button
			showButton( toggleButton );

		} else {

			// There is space for another item in the nav
			if ( getAvailableSpace( toggleButton, container ) > breaks[breaks.length - 1] ) {
				// Move the item to the visible list
				visibleList.appendChild( hiddenList.firstChild.nextSibling );
				breaks.pop();
			}

			// Hide the dropdown btn if hidden list is empty
			if (breaks.length < 2) {
				hideButton( toggleButton );
			}
		}

		// Recur if the visible list is still overflowing the nav
		if ( isOverflowingNavivation( visibleList, toggleButton, container ) ) {
			updateNavigationMenu( container );
		}
	}

	/**
	 * Run our priority+ function as soon as the document is `ready`
	 */
	document.addEventListener( 'DOMContentLoaded', function() {

		updateNavigationMenu( navContainer );

		// Also, run our priority+ function on selective refresh in the customizer
		var hasSelectiveRefresh = (
			'undefined' !== typeof wp &&
			wp.customize &&
			wp.customize.selectiveRefresh &&
			wp.customize.navMenusPreview.NavMenuInstancePartial
		);

		if ( hasSelectiveRefresh ) {
			// Re-run our priority+ function on Nav Menu partial refreshes
			wp.customize.selectiveRefresh.bind( 'partial-content-rendered', function ( placement ) {

				var isNewNavMenu = (
					placement &&
					placement.partial.id.includes( 'nav_menu_instance' ) &&
					'null' !== placement.container[0].parentNode &&
					placement.container[0].parentNode.classList.contains( 'main-navigation' )
				);

				if ( isNewNavMenu ) {
					updateNavigationMenu( placement.container[0].parentNode );
				}
			});
        }
	});

	/**
	 * Run our priority+ function on load
	 */
	window.addEventListener( 'load', function() {
		updateNavigationMenu( navContainer );
	});

	/**
	 * Run our priority+ function every time the window resizes
	 */
	var isResizing = false;
	window.addEventListener( 'resize',
		debounce( function() {
			if ( isResizing ) {
				return;
			}

			isResizing = true;
			setTimeout( function() {
				updateNavigationMenu( navContainer );
				isResizing = false;
			}, 150 );
		} )
	);

	/**
	 * Run our priority+ function
	 */
	updateNavigationMenu( navContainer );

})();
