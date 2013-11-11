/**
 * Functionality specific to Twenty Thirteen.
 *
 * Provides helper functions to enhance the theme experience.
 */

( function( $ ) {
	var body    = $( 'body' ),
	    _window = $( window );

	/**
	 * Adds a top margin to the footer if the sidebar widget area is higher
	 * than the rest of the page, to help the footer always visually clear
	 * the sidebar.
	 */
	$( function() {
		if ( body.is( '.sidebar' ) ) {
			var sidebar   = $( '#secondary .widget-area' ),
			    secondary = ( 0 == sidebar.length ) ? -40 : sidebar.height(),
			    margin    = $( '#tertiary .widget-area' ).height() - $( '#content' ).height() - secondary;

			if ( margin > 0 && _window.innerWidth() > 999 )
				$( '#colophon' ).css( 'margin-top', margin + 'px' );
		}
	} );

	/**
	 * Enables menu toggle for small screens.
	 */
	( function() {
		var nav = $( '#site-navigation' ), button, menu;
		if ( ! nav )
			return;

		button = nav.find( '.menu-toggle' );
		if ( ! button )
			return;

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$( '.menu-toggle' ).on( 'click.twentythirteen', function() {
			nav.toggleClass( 'toggled-on' );
		} );
	} )();

	/**
	 * Makes "skip to content" link work correctly in IE9 and Chrome for better
	 * accessibility.
	 *
	 * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
	 */
	_window.on( 'hashchange.twentythirteen', function() {
		var element = document.getElementById( location.hash.substring( 1 ) );

		if ( element ) {
			if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
				element.tabIndex = -1;

			element.focus();
		}
	} );

	/**
	 * Arranges footer widgets vertically.
	 */
	if ( $.isFunction( $.fn.masonry ) ) {
		var columnWidth = body.is( '.sidebar' ) ? 228 : 245;

		$( '#secondary .widget-area' ).masonry( {
			itemSelector: '.widget',
			columnWidth: columnWidth,
			gutterWidth: 20,
			isRTL: body.is( '.rtl' )
		} );
	}

    /**
     * activate submenu
     */
    if($('#menu-top-menu li:last-child').hasClass('current-page-ancestor') || $('#menu-top-menu li:last-child').hasClass('current-menu-item')) {
        $('.menu-secondary-menu-container').show();
    }

    $('.homepage-figure .item a').on('click', function(event) {
        event.preventDefault();
        $(this).parent().siblings().removeClass('active');
        $(this).parent().addClass('active');

        $('.homepage-figure-content .item').removeClass('active');
        $('.homepage-figure-content .'+$(this).attr('data-target')).addClass('active');
    });

    $('.content-scroll').mCustomScrollbar({
        autoHideScrollbar: Boolean,
        scrollInertia: 0,
        mouseWheelPixels: 100,
        advanced: {
            autoScrollOnFocus: false
        }
    });

    var homepage_effects = function() {
        var i = 0;
        var next = function() {
            if(typeof functions[i] === 'function'){
                functions[i]();
                i++;
            }
        };
        var functions = [
            function() {
                $('.homepage-step-1').removeClass('hidden', {duration: 500, complete: next});
            },
            function() {
                var i = 0;
                $('.homepage-step-1 span').addClass('green', {duration: 300, complete: function() {++i; i === $('.homepage-step-1 span').length ? next(): ''}});
            },
            function() {
                setTimeout(next, 2000);
            },
            function() {
                $('.homepage-step-1').animate({top: '0px'}, 1000, next);
            },
            function() {
                $('.homepage-step-1').animate({right: '0px'}, 1000, next);
                $('.homepage-figure').removeClass('none');
            },
            function() {
                $('.homepage-figure .phone').animate({top: '0px', opacity: 1}, 1000);
                $('.first-letter:eq(0)').removeClass('hidden', {duration: 1000, complete: next});
            },
            function() {
                $('.first-letter:eq(0)').next().animate({opacity: 1}, 500, next);
            },
            function() {
                $('.homepage-figure .tablet').animate({top: '110px', opacity: 1}, 1000);
                $('.homepage-figure .device').animate({top: '283px', opacity: 1}, 1000);
                $('.first-letter:eq(1)').removeClass('hidden', {duration: 1000, complete: next});
            },
            function() {
                $('.first-letter:eq(1)').next().removeClass('hidden', 1000, next);
            },
            function() {
                $('.homepage-figure .usb').animate({top: '283px', opacity: 1}, 1000);
                $('.homepage-figure .tv').animate({top: '110px', opacity: 1}, 1000);
                $('.first-letter:eq(2)').removeClass('hidden', {duration: 1000, complete: next});
            },
            function() {
                $('.first-letter:eq(2)').next().removeClass('hidden', 1000, next);
            },
            function() {
                $('.try-it-now').removeClass('hidden', 1000, next);
            }

        ];
        next();
    };

    $(document).ready(function() {
        var placeToCenter = function(elem) {
            var p_w = elem.parent().width();
            var e_w = elem.width();
            elem.css('right', p_w / 2 - e_w /2);
        }
        placeToCenter($('.homepage-step-1'));

        homepage_effects();
    });

} )( jQuery );