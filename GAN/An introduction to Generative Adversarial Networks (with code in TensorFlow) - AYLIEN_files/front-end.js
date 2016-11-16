jQuery( function($) {

	/*
	 * Position sidebar icons vertically
	 *
	 */
	$(document).ready( function() {
		$('#dpsp-floating-sidebar').css('top', ( window.innerHeight - $('#dpsp-floating-sidebar').height() ) / 2 );
	});

	$(window).on( 'resize', function() {
		$('#dpsp-floating-sidebar').css('top', ( window.innerHeight - $('#dpsp-floating-sidebar').height() ) / 2 );
	});


	/*
	 * Open Pinterest overlay to select which image to pin when
	 * clicking on a Pin button without media attached
	 *
	 */
	$(document).ready( function() {
		$('.dpsp-networks-btns-share .dpsp-network-btn.dpsp-pinterest').click( function(e) {

			if( $(this).attr('href') == '#' ) {
				e.preventDefault();

				var elem = document.createElement('script');
				elem.setAttribute('type', 'text/javascript');
				elem.setAttribute('charset', 'UTF-8');
				elem.setAttribute('src', 'https://assets.pinterest.com/js/pinmarklet.js');
				document.body.appendChild(elem);
			}

		});
	});


	/*
	 * Print button action
	 *
	 */
	$(document).ready( function() {
		$('.dpsp-networks-btns-share .dpsp-network-btn.dpsp-print').click( function(e) {
			window.print();
		});
	});


	/*
	 * Open share links in a pop-up window
	 *
	 */
	$(document).on( 'click', '.dpsp-networks-btns-share .dpsp-network-btn, .dpsp-click-to-tweet', function(e) {

		if( $(this).hasClass('dpsp-whatsapp') || $(this).hasClass('dpsp-email') )
			return;

		e.preventDefault();

		if( $(this).attr('href') == '#' )
			return false;

		$(this).blur();

		var window_size = {
			width  : 700,
			height : 300
		}

		if( $(this).hasClass('dpsp-buffer') ) {
			window_size.width = 800;
			window_size.height = 575;
		}

		window.open( $(this).attr('href'),'targetWindow', "toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=yes,width=" + window_size.width + ",height=" + window_size.height + ",top=200,left=" + ($(window).innerWidth() - window_size.width)/2 );

	});


	/*
	 * Calculate position of viewport when scrolling
	 *
	 */
	var dpsp_hasScrolled 	   = false;
	var dpsp_scrollTop 	   	   = 0;

	$(window).scroll( function() {

		// User has scrolled
		dpsp_hasScrolled = true;
			
		// Calculate scrollTop in percentages on user scroll
		dpsp_scrollTop = parseInt( $(window).scrollTop() / $(document).innerHeight() * 100 );

	});

	$(window).load( function() {

		// Calculate scrollTop in percentages on page load
		dpsp_scrollTop = parseInt( $(window).scrollTop() / $(document).innerHeight() * 100 );

	})


	/*
	 * Handle floating sidebar show events
	 *
	 */
	if( $('#dpsp-floating-sidebar').length > 0 ) {

		var dpsp_FloatingSidebarTriggerScroll = $('#dpsp-floating-sidebar').attr('data-trigger-scroll');

		/*
		 * Handle display of the mobile sticky while scrolling the page
		 *
		 */
		if( dpsp_FloatingSidebarTriggerScroll != 'false' ) {

			$(window).on( 'scroll load', function() {
			
				// Trigger for scroll position
				if( dpsp_scrollTop > parseInt(dpsp_FloatingSidebarTriggerScroll) ) 
					$('#dpsp-floating-sidebar').addClass('opened');
				else
					$('#dpsp-floating-sidebar').removeClass('opened');
				
			});

		// If there's no scroll trigger just display the buttons
		} else {

			$('#dpsp-floating-sidebar').addClass('opened');
				
		}

	}


	/*
	 * Handle mobile sticky show events
	 *
	 */
	if( $('#dpsp-mobile-sticky').length > 0 ) {

		var dpsp_MobileStickyTriggerScroll = $('#dpsp-mobile-sticky').attr('data-trigger-scroll');

		/*
		 * Handle display of the mobile sticky while scrolling the page
		 *
		 */
		$(window).scroll( function() {
			
			if( dpsp_hasScrolled == true ) {

				// Trigger for scroll position
				if( dpsp_MobileStickyTriggerScroll != 'false' && dpsp_scrollTop > parseInt(dpsp_MobileStickyTriggerScroll) ) 
					$('#dpsp-mobile-sticky').addClass('opened');

			}
			
		});

	}
	

	/*
	 * Handle share pop-up events for the Pop-Up tool
	 *
	 */
	if( $('#dpsp-pop-up').length > 0 ) {

		// Set defaults, like trigger values and scroll value
		var dpsp_PopUpTriggerScroll = $('#dpsp-pop-up').attr('data-trigger-scroll');
		var dpsp_TriggerPostBottom  = $('#dpsp-post-bottom').length > 0 ? parseInt( $('#dpsp-post-bottom').offset().top ) : false;
		var dpsp_TriggerExitIntent  = $('#dpsp-pop-up').attr('data-trigger-exit');
		var dpsp_TriggerTimeDelay   = parseInt( $('#dpsp-pop-up').attr('data-trigger-delay') );

		var pop_up_session		    = $('#dpsp-pop-up').data('session');

		/*
		 * Handle display of the pop-up when in a session 
		 *
		 */
		if( pop_up_session != 0 ) {

			if( getCookie('dpsp_pop_up') != '' ) {
				$('#dpsp-pop-up').remove();
				$('#dpsp-pop-up-overlay').remove();
			} else
				setCookie( 'dpsp_pop_up', '1', pop_up_session );

		} else
			setCookie( 'dpsp_pop_up', '', -1 );


		/*
		 * Handle display of the pop-up while scrolling the page
		 *
		 */
		$(window).scroll( function() {
			
			if( dpsp_hasScrolled == true ) {

				// Trigger for scroll position
				if( dpsp_PopUpTriggerScroll != 'false' && dpsp_scrollTop > parseInt(dpsp_PopUpTriggerScroll) )
					showPopUp();

				// Trigger for bottom of post
				if( dpsp_TriggerPostBottom != false && $(window).scrollTop() + window.innerHeight / 1.5 >= dpsp_TriggerPostBottom )
					showPopUp();

			}
			
		});


		/*
		 * Bind the document mouse leave with the show pop-up if the exit intent is set to true
		 *
		 */
		if( dpsp_TriggerExitIntent == 'true' ) {

			document.documentElement.addEventListener( 'mouseleave', documentMouseLeave );

			function documentMouseLeave(e) {
				if( e.clientY < 1 )
					showPopUp();
			}

		}


		/*
		 * Show pop-up after time delay
		 *
		 */
		if( !isNaN( dpsp_TriggerTimeDelay ) ) {

			setTimeout( showPopUp, dpsp_TriggerTimeDelay * 1000 );

		}


		/*
		 * Position the pop-up in the center of the viewport when resizing the window
		 *
		 */
		$(window).resize( function() {
			positionPopUp();
		});


		/*
		 * Hide pop-up when clicking the overlay
		 * Hide pop-up when clicking the close button
		 * Hide pop-up when clicking a network button
		 *
		 */
		$('#dpsp-pop-up-overlay, #dpsp-pop-up-close, .dpsp-network-btn').click( function() {
			hidePopUp();
		});


		/*
		 * Shows the pop-up
		 *
		 */
		function showPopUp() {
			positionPopUp();

			$('#dpsp-pop-up').addClass('opened');
			$('#dpsp-pop-up-overlay').addClass('opened');
		}


		/*
		 * Hides the pop-up and removes it from the DOM
		 *
		 */
		function hidePopUp() {
			$('#dpsp-pop-up').removeClass('opened');
			$('#dpsp-pop-up-overlay').removeClass('opened');

			setTimeout( function() {
				$('#dpsp-pop-up').remove();
				$('#dpsp-pop-up-overlay').remove();
			}, 250 );
		}

		/*
		 * Function that positions the pop-up in the center of the page
		 *
		 */
		function positionPopUp() {

			$popUp = $('#dpsp-pop-up');

			var windowHeight = window.innerHeight;
			var windowWidth  = window.innerWidth;

			var popUpHeight  = $popUp.outerHeight();
			var popUpWidth   = $popUp.outerWidth();

			$popUp.css({
				top  : ( windowHeight - popUpHeight ) / 2,
				left : ( windowWidth - popUpWidth ) / 2
			});

		}

	}


	/*
	 * Set a cookie
	 *
	 */
	function setCookie( cname, cvalue, exdays ) {
	    var d = new Date();
	    d.setTime(d.getTime() + (exdays*24*60*60*1000));
	    var expires = "expires="+d.toUTCString();
	    document.cookie = cname + "=" + cvalue + "; " + expires;
	}

	/*
	 * Get a cookie
	 *
	 */
	 function getCookie( cname ) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0; i<ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1);
	        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
	    }
	    return "";
	}
});