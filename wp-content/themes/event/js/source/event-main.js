jQuery( function() {
		
		// Search toggle.
		jQuery(function(){
		  var jQuerysearchlink = jQuery('#search-toggle');
		  var jQuerysearchbox  = jQuery('#search-box');
		  
		  jQuery('#search-toggle').on('click', function(){
		    
		    if(jQuery(this).attr('id') == 'search-toggle') {
		      if(!jQuerysearchbox.is(":visible")) { 
		        // if invisible we switch the icon to appear collapsable
		        jQuerysearchlink.removeClass('header-search').addClass('header-search-x');
		      } else {
		        // if visible we switch the icon to appear as a toggle
		        jQuerysearchlink.removeClass('header-search-x').addClass('header-search');
		      }
		      
		      jQuerysearchbox.slideToggle(300, function(){
		        // callback after search bar animation
		      });
		    }
		  });
		});

		// Add class
		jQuery( function() {
			var jQuerymuse = jQuery("#page div");
			var jQuerysld = jQuery("body");

			if (jQuerymuse.hasClass("main-slider")) {
			       jQuerysld.addClass("sld-plus");
			}
		});

		// Menu toggle for below 768 screens.
		( function() {
			var togglenav = jQuery( '.main-navigation' ), button, menu;
			if ( ! togglenav ) {
				return;
			}

			button = togglenav.find( '.menu-toggle' );
			if ( ! button ) {
				return;
			}
			
			menu = togglenav.find( '.menu' );
			if ( ! menu || ! menu.children().length ) {
				button.hide();
				return;
			}

			jQuery( '.menu-toggle' ).on( 'click', function() {
				jQuery(this).toggleClass("on");
				togglenav.toggleClass( 'toggled-on' );
			} );
		} )();

		jQuery( function() {
			if(jQuery( window ).width() < 768){
				//responsive sub menu toggle
                jQuery('#site-navigation .menu-item-has-children, #site-navigation .page_item_has_children').prepend('<button class="sub-menu-toggle"> <i class="fa fa-plus"></i> </button>');
				jQuery(".main-navigation .menu-item-has-children ul, .main-navigation .page_item_has_children ul").hide();
				jQuery(".main-navigation .menu-item-has-children > .sub-menu-toggle, .main-navigation .page_item_has_children > .sub-menu-toggle").on('click', function () {
					jQuery(this).parent(".main-navigation .menu-item-has-children, .main-navigation .page_item_has_children").children('ul').first().slideToggle();
					jQuery(this).children('.fa-plus').first().toggleClass('fa-minus');
					
				});
			}
		});

		// Tab Content.
		jQuery(function() {
			jQuery('.list-nav li').on('click', function() {
				var tabId = jQuery(this).attr('data-tab');

				jQuery('.list-nav li').removeClass('current'); 
				jQuery('.tab-contents').removeClass('current'); 

				jQuery(this).addClass('current');
				jQuery('#' + tabId).addClass('current');
			});
		});

		// Go to top button.
		jQuery(document).ready(function(){

		// Hide Go to top icon.
		jQuery(".go-to-top").hide();

		  jQuery(window).scroll(function(){

		    var windowScroll = jQuery(window).scrollTop();
		    if(windowScroll > 900)
		    {
		      jQuery('.go-to-top').fadeIn();
		    }
		    else
		    {
		      jQuery('.go-to-top').fadeOut();
		    }
		  });

		  // scroll to Top on click
		  jQuery('.go-to-top').click(function(){
		    jQuery('html,header,body').animate({
		    	scrollTop: 0
			}, 700);
			return false;
		  });

		});

} );