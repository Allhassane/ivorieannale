;(function($) {
    'use strict'
    jQuery(document).ready(function($) {

        //HeaderScroll
        function EducaHeaderScroll() {
            if ( $('body').hasClass('header-scroll') ) {
                var HeightHead = $('.header');
                if ( HeightHead.size() != 0 ) {
                    var scrollTop = $('.header').offset().top,
                        headerHeight = $('.header').height(),
                        Space = $('<div />', { height: headerHeight }).insertAfter(HeightHead);   
                        Space.hide();                 

                    $(window).on('scroll', function(){
                        if ( $(window).scrollTop() > scrollTop + 100 ) {
                            $('.header').addClass('stickytop');
                            Space.show();
                        } else {
                            $('.header').removeClass('header-custom stickytop');
                            Space.hide();
                        }

                        if ( $(window).scrollTop() > 300 ) {
                            $('.header').addClass('header-custom stickybottom');
                        } else {
                            $('.header').removeClass('stickybottom');
                        }
                    })
                }
            }

            if ( $('body').hasClass('header-scroll2') ) {
                var HeightHead = $('.header');

                if ( HeightHead.size() != 0 ) {
                    var scrollTop = $('.header.scroll-head').offset().top,
                        headerHeight = $('.header.scroll-head').height(),
                        Space = $('<div />', { height: headerHeight }).insertAfter(HeightHead);   
                        Space.hide();                 

                    $(window).on('scroll', function(){
                         if ( $(window).scrollTop() > scrollTop + 100 ) {
                             $('.header.scroll-head').addClass('stickytop');
                         } else {
                             $('.header.scroll-head').removeClass('header-custom stickytop');
                         }

                         if ( $(window).scrollTop() > 300 ) {
                             $('.header.scroll-head').addClass('header-custom stickybottom');
                         } else {
                             $('.header.scroll-head').removeClass('stickybottom');
                         }
                    })
                }
            }  
        };
        EducaHeaderScroll();

        // Show EducaShowMenu
        function EducaShowMenu() {
            var menuType = 'desktop';

            $(window).on('load resize', function() {
                var currMenuType = 'desktop';

                if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
                    currMenuType = 'mobile';
                }

                if ( currMenuType !== menuType ) {
                    menuType = currMenuType;

                    if ( currMenuType === 'mobile' ) {
                        var $mobileMenu = $('#menuzord').attr('id', 'menuzord-mobi').hide();
                        var hasChildMenu = $('#menuzord-mobi').find('li:has(ul)');

                        $('#header').after($mobileMenu);
                        hasChildMenu.children('ul').hide();
                        hasChildMenu.children('a').after('<span class="btn-dropdown_menu"></span>');
                        $('#menuzord-mobi').children('.menu').append('<li class="added"><span class="login-mobi"><a data-toggle="modal" href="#popup_login">Register Or Login</a></span></li>');
                        $('.btn-menu').removeClass('active');
                    } else {
                        var $desktopMenu = $('#menuzord-mobi').attr('id', 'menuzord').removeAttr('style');

                        $desktopMenu.find('.dropdown_menu').removeAttr('style');
                        $('#header').find('.nav-group').append($desktopMenu);
                        $('.btn-dropdown_menu').remove();
                        $('.added').remove();
                    }
                }
            });

            $('.btn-menu').on('click', function() {         
                $('#menuzord-mobi').slideToggle(300);
                $(this).toggleClass('active');
            });

            $(document).on('click', '#menuzord-mobi li .btn-dropdown_menu', function(e) {
                $(this).toggleClass('active').next('ul').slideToggle(300);
                e.stopImmediatePropagation()
            });
        };
        EducaShowMenu();
  });   
})(jQuery);