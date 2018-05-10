/*
 * Title:   EDUCA | Multiconcept Education & Courses HTML Template
 * Author: jrbthemes
 */

/*
 [Start contents]
    1 EducaFullimage
    2 EducaContactForm
    3 EducaCounter
    4 EducaBackTop
    5 Educavideo
    6 RemoveLoader
    7 CarouselTeam
    8 EducaCheckShow
    9 EducaEventCarousel
    10 EducaBlog_filte_carousel
    11 EducaTestimonials
    12 EducaSlidershop
    13 EducaMenuTestimonial
    14 EducaEqual
    15 FooterFixed
    16 EducaPopupViewImages
    17 EducaToggle
    18 EducaEqual
    19 EducaPoint
    20 EducaCountdown
    21 EducaLogos
    22 EducaMaps
    23 EducaTabs
    24 EducaMailChimp
    25 EducaProgress
    26 EducaSelectPrice
    27 EducaPortIsotope
 [End  contents]
 */

;(function($) {

   'use strict'
   jQuery(document).ready(function($) {

        // EducaFullimage
        function EducaFullimage(){
            if ( $('section').hasClass('full-screen') ) {
                function setDimensions(){

                   var windowsHeight = $(window).height();
                   $('.full-screen').css('height', windowsHeight + 'px');
                }

                setDimensions();

                //when resizing the site, we adjust the heights of the sections
                $(window).resize(function() {
                    setDimensions();
                });
            }
        };
        EducaFullimage();

        // EducaContactForm
        function EducaContactForm() {  
            $('#contactform').on('submit',function(e){

                e.preventDefault();

                var $action = $(this).prop('action');
                var $data = $(this).serialize();
                var $this = $(this);

                $this.prevAll('.alert').remove();

                $.post( $action, $data, function( data ) {

                    if( data.response=='error' ){

                        $this.after( '<div class="alert danger-border"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <i class="fa fa-times-circle"></i> '+data.message+'</div>' );
                    }

                    if( data.response=='success' ){

                        $this.after( '<div class="alert success-border"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-thumbs-o-up"></i> '+data.message+'</div>' );
                        $this.find('input, textarea').val('');
                    }

                }, "json");
            });
        }; 
        EducaContactForm(); 

        // EducaCounter
        function EducaCounter() { 
            if ( $().counter ) { 
                $('.numb-counter').counter({
                    delay: 10,
                    time: 2000
                });
            }
        };  
        EducaCounter();  

        // EducaBackTop
        function EducaBackTop() {
            $('body').append('<a class="back-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>');
            $(window).scroll(function() {
                if ($(this).scrollTop() > 800) {
                    $('.back-to-top').addClass('active');
                } else {
                    $('.back-to-top').removeClass('active');
                }
            });
            $('.back-to-top').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        }; 
        EducaBackTop();

        // Educavideo
        function Educavideo() {
            $(".fancybox").on("click", function(){
                $.fancybox({
                  href: this.href,
                  type: $(this).data("type")
                }); // fancybox
                return false   
            }); // on
        };    
        Educavideo();

        // RemoveLoader
        function EducaLoader() {        
            $(window).load(function() { 
                $(".loader").fadeOut();
                $('.loader').delay().fadeOut();
            }); 
        };
        EducaLoader();

        // CarouselTeam
        function EducaTeam(){          
            if ( $().slick ) {
                $('.educa-team-member').slick({
                  centerMode: true,
                  centerPadding: '0px',
                  autoplay: true,
                  autoplaySpeed:3000,
                  slidesToShow: 5,
                  responsive: [
                    {
                        breakpoint: 767,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                          }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                          }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                          }
                    }
                  ]
                });
            }
        };
        EducaTeam();

        // EducaCheckShow
        function EducaCheckShow() {
             $('.box-text').each(function() {
                $('.box-text .lab-check.active').siblings('.info-check').show();
                 $(this).find('.lab-check').children('.select-check').on('click', function() {
                     $(this).closest('.box-text').children('.info-check').slideToggle(400);
                 });
                
             });  
        };
        EducaCheckShow();

         // EducaEventCarousel
        function EducaEventCarousel() {
            $('.event-carousel').each(function(){            
                if ( $().owlCarousel ) {
                    $(this).find('.event-shortcode').owlCarousel({
                        loop: true,
                        margin: 30,
                        nav: true,
                        dots: false, 
                        auto:true,
                        responsive:{
                            0:{
                                items: 1
                            },
                            480:{
                                items: 2
                            },
                            767:{
                                items: 2
                            },
                            991:{
                                items: 3
                            }, 
                            1200:{
                                items: 4
                            }               
                        }
                    });
                }            
            });
        };
        EducaEventCarousel();

        // EducaBlog_filte_carousel
        function EducaBlog_filte_carousel() {
            if ( $('section').hasClass('section-carousel-coursegrid') ) {
                $('.section-carousel-coursegrid').ready(function() {  
                    if ( $().owlCarousel ) {
                        var owl = $('.blog-carousel').owlCarousel({
                            loop    :true,
                            margin  :30,
                            nav     :true,
                            dots    :true,
                            responsive:{
                                0:{
                                    items: 1
                                },
                                320:{
                                    items: 1
                                },
                                480:{
                                    items: 2
                                },
                                767:{
                                    items: 2
                                },
                                991:{
                                    items: 3
                                },
                                1200: {
                                    items: 4
                                }
                            }
                        })
                        
                        /* filter */
                          var owlAnimateFilter = function(even) {
                             $(this)
                              .addClass('__loading')
                              .delay(70 * $(this).parent().index())
                              .queue(function() {
                                  $(this).dequeue().removeClass('__loading')
                             })
                         }
                        
                        $('.section-carousel-coursegrid .btn-filter-group').on('click', '.btn-filter', function(e) {
                            var filter_data = $(this).data('filter');

                            if($(this).hasClass('btn-active')) return;

                            
                            $(this).addClass('btn-active').siblings().removeClass('btn-active');

                            
                            owl.owlFilter(filter_data, function(_owl) { 
                                $(_owl).find('.section-carousel-coursegrid .post-item').each(owlAnimateFilter); 
                            });
                        
                        })
                    };
                });
            }
        };
        EducaBlog_filte_carousel();

        // EducaTestimonials
        function EducaTestimonials() {
            if ( $('section').hasClass('section-testimonation') ) {

                $('.section-testimonation').each(function() {            
                    if ( $().owlCarousel ) {
                        $('.educa-testimonials').owlCarousel({
                            loop:true,
                            nav:false,
                            dots:true,
                            autoplay:true,
                            margin: 30,
                            responsive:{
                                0:{
                                    items: 1
                                },
                                320:{
                                    items: 1
                                },
                                480:{
                                    items: 2
                                },
                                767:{
                                    items: 2
                                },
                                991:{
                                    items: 2
                                },
                                1200: {
                                    items: 2
                                }
                            }
                        })
                    }
                });
            }
        };
        EducaTestimonials();

        // EducaSlidershop
        function EducaFlexshop() { 
            if ( $().flexslider ) {
                $('.educa-flexslider').each(function() {   
                    var $this = $(this);         
                    $this.find('.flexslider').flexslider({
                        animation      :  "slide",
                        direction      :  "horizontal", // vertical
                        pauseOnHover   :  true,
                        useCSS         :  false,
                        easing         :  "swing",
                        animationSpeed :  500,
                        slideshowSpeed :  5000,
                        controlNav     :  false,
                        directionNav   :  true,
                        slideshow      :  true,
                        prevText       :  '<i class="fa fa-angle-left"></i>',
                        nextText       :  '<i class="fa fa-angle-right"></i>',
                        smoothHeight   :  true
                    }); // flexslider
               }); // educa-blog-slider
            }
        };
        EducaFlexshop();

        // EducaMenuTestimonial
        function EducaGroupTestimonial() {
            $('.group-testimonial').each(function(){
                $(this).children('#testimonial-carousel').flexslider({
                    animation: "slide",
                    controlNav: false,
                    controldot: false,
                    animationLoop: true,
                    slideshow: false,
                    itemWidth: 194,
                    drag: true,
                    itemMargin: 0,
                    directionNav: false,
                    asNavFor: $(this).children('#testimonial-slider'),
                    // nextText: '<i class="ti-angle-right"></i>'
                });
                
                $(this).children('#testimonial-slider').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    directionNav: false,
                    sync: $(this).children('#testimonial-carousel'),
                });
            });
        };
        EducaGroupTestimonial();

        // EducaEqual
        function EducaEqual() {
            $(window).load(function() { 
                if ( $('section').hasClass('equaltwo') ) {
                    if ( matchMedia( 'only screen and (min-width: 992px)' ).matches ) {
                        $('.section-contact').each(function() {
                            var h = document.getElementById("equalright").offsetHeight;
                            document.getElementById("equalleft").style.height = h + "px";
                        });
                    }
                };
            });
        };
        EducaEqual();

        // FooterFixed
        function EducaFooter() {
            var footername = '__FFixed';
            var FFixed = function(el, options) {
                return this.init(el, options);
            };
            FFixed.defaults = {};
            FFixed.prototype = {
                init: function(el, options) {
                    if (el.data(footername)) {
                        return this;
                    }
                    this.el = el;
                    this.setOptions(options).build();
                    return this;
                },
                setOptions: function(options) {
                    this.el.data(footername, this);
                    this.options = $.extend(true, {}, FFixed.defaults, options);
                    return this;
                },
                build: function() {
                    var element = this.el, mainContents = $('main#main-content'), footerHeight = element.outerHeight() - 1;
                    element.addClass('is-fixed');
                    mainContents.css({
                        marginBottom: footerHeight
                    });
                }
            };
            $.fn.RelFFixed = function(settings) {
                return this.map(function() {
                    var el = $(this);
                    el.imagesLoaded(function() {
                        if (el.data(footername)) {
                            return el.data(footername);
                        } else {
                            var pluginOptions = el.data('plugin-options'), opts;
                            if (pluginOptions) {
                                opts = $.extend(true, {}, settings, pluginOptions);
                            }
                            return new FFixed(el, opts);
                        }
                    });
                });
            };
            $(document).ready(function() {
                $('footer[data-fixed]').RelFFixed();
            });
            $(window).on('resize', function() {
                $('footer[data-fixed]').RelFFixed();
            });
        };
        EducaFooter();

        // EducaPopupViewImages
        function EducaPopupView() {
            if ( $().magnificPopup ) {
                $(".popup").magnificPopup({
                    type: "image",
                    tLoading: "Loading image #%curr%...",
                    mainClass: "mfp-img-mobile",
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [ 0, 1 ]
                    },
                    image: {
                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                    }
                });
            }
        }; 
        EducaPopupView();

         // EducaToggle
        function EducaToggle() {
            $('.educa-toggle .toggle-header.active').siblings('.toggle-info').show();

            $('.educa-toggle.enable .toggle-header').on('click', function() {
                 $(this).closest('.educa-toggle').find('.toggle-info').slideUp(500);
                $(this).toggleClass('active');
            }); 

            $('.educa-accordion .toggle-header').on('click', function () {
                if( !$(this).is('.active') ) {
                    $(this).closest('.educa-accordion').find('.toggle-header.active').toggleClass('active').next().slideUp(500);
                    $(this).toggleClass('active');
                    $(this).next().slideDown(500);
                } else {
                    $(this).toggleClass('active');
                    $(this).next().slideUp(500);
                }     
            }); 
        };
        EducaToggle();

        // EducaEqual
        function EducaParallax() {
            if ( $().parallax ) {
                $('.parallax-fixed').parallax();
            }
        };
        EducaParallax();

        // EducaPoint
        function EducaPoint() {
            if ( $().waypoint ) {
                $('[data-waypoint-active="yes"]').waypoint(function() {
                $(this).trigger('on-appear');
                }, { offset: '90%', triggerOnce: true });

                $(window).on('load', function() {
                    setTimeout(function() {
                        $.waypoints('refresh');
                    });
                }); 
            }     
        };
        EducaPoint();

        // EducaCountdown
        function EducaCountdown() {
            var before = '<div class="timeline"><div class="numb">',
                text = '</div><div class="text">';
                if ($().countdown) {
                    $(".countdown").countdown('2018/11/10', function(event) {
                      $(this).html(event.strftime(before + '%D' + text + 'Days</div></div>' + before + '%H' + text + 'Hours</div></div>' + before + '%M' + text + 'Minutes</div></div>' + before + '%S' + text + 'Seconds</div>'));
                    });
                }      
        };
        EducaCountdown();

        // EducaLogos
        function EducaLogos() {
          var retina = window.devicePixelRatio > 1 ? true : false;
            if(retina) {
                if ( $('header').hasClass('logo-style2') ) {
                    $('.header .logo').find('img').attr( {src:'./assets/images/logolight2.png',width:'118',height:'27'} );   
                }else{
                    $('.header .logo').find('img').attr( {src:'./assets/images/logolight.png',width:'118',height:'27'} ); 
                }

                if ( $('.footer').hasClass('footer-logo-style2') ) {
                    $('#logo_footer').find('img').attr({src:'./assets/images/logolight3.png',width:'118',height:'27'});   
                }else{
                    $('#logo_footer').find('img').attr({src:'./assets/images/logolight.png',width:'118',height:'27'});
                } 
                   
            }
        };
        EducaLogos(); 

        // EducaMaps
        function EducaMaps() {
            if ( $().gmap3 ) {
                var addressmapx = JSON.parse('[{"address":"Harrison, New Jersey","content":""}]');
                var addressmapy = JSON.parse('[{"address1":"69 Halsey St, New York, Ny 10002, US","content":"","status":"live"},{"address2":" Lefferts PI, New York, Ny 10002, US","content":""}]');
                var addressmapz = JSON.parse('[{"address":"Boys & Girls Club Northern Westchester, East Main Street, Mount Kisco, NY, USA","content":""}]');
                $('.maps').gmap3({
                    map:{
                        options:{
                            center:[40.7437646, -74.1692991],
                            mapTypeId: 'educa_style',
                            mapTypeControlOptions: {
                                    mapTypeIds: ['educa_style', google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID]},
                            zoom: 12,
                        },
                        navigationControl: false,
                       scrollwheel: false,
                       streetViewControl: false
                    }
                });
                
                $('.map-1').gmap3({
                    map:{
                        options:{
                            center:[40.6805495, -73.9551558],
                            mapTypeId: 'educa_style',
                            mapTypeControlOptions: {
                                    mapTypeIds: ['educa_style', google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID]},
                            zoom: 16,
                        },
                        navigationControl: false,
                       scrollwheel: false,
                       streetViewControl: false
                    }
                });

                $('.map-2').gmap3({
                    map:{
                        options:{
                            center:[41.1982676, -73.7269627],
                            mapTypeId: 'educa_style',
                            mapTypeControlOptions: {
                                    mapTypeIds: ['educa_style', google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID]},
                            zoom: 15,
                        },
                        navigationControl: false,
                       scrollwheel: false,
                       streetViewControl: false
                    }
                });

                $.each(addressmapx, function(key, val) {
                    $(".maps").gmap3({
                        marker:{
                            values:[{
                                address:val.address,
                                options:{icon: "assets/images/map/3.png"}
                            }]
                        },
                        styledmaptype:{
                            id: "educa_style",
                            options:{
                                name: "Educa Map"
                            },
                            styles: [
                                {
                                    "featureType": "water",
                                    "stylers": [
                                        { "color": "#81abff" }
                                    ]
                                },
                                
                                {
                                    "featureType": "road.local",
                                    "stylers": [
                                      { "color": "#edebe3" }
                                    ]
                                },
                                {
                                    "featureType": "road.highway",
                                    "stylers": [
                                      { "color": "#e3e3e3" }
                                    ]
                               },
                               {
                                    "featureType": "poi.park",
                                    "stylers": [
                                      { "color": "#c0d997" }
                                    ]
                               }                                              
                            ]
                        },  
                    });
                });

                $.each(addressmapy, function(key, val) {
                    $('.map-1').gmap3({
                        marker:{
                            values:[{
                                address:val.address1,
                                options:{icon: "assets/images/map/1.png"}
                            },
                            {
                                address:val.address2,
                                options:{icon: "assets/images/map/2.png"}
                            }]
                        },
                        styledmaptype:{
                            id: "educa_style",
                            options:{
                                name: "Educa Map"
                            },
                            styles:[
                                {
                                    "featureType": "all",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "saturation": 36
                                        },
                                        {
                                            "color": "#000000"
                                        },
                                        {
                                            "lightness": 40
                                        }
                                    ]
                                },
                                {
                                    "featureType": "all",
                                    "elementType": "labels.text.stroke",
                                    "stylers": [
                                        {
                                            "visibility": "on"
                                        },
                                        {
                                            "color": "#000000"
                                        },
                                        {
                                            "lightness": 16
                                        }
                                    ]
                                },
                                {
                                    "featureType": "all",
                                    "elementType": "labels.icon",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            "color": "#000000"
                                        },
                                        {
                                            "lightness": 20
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative",
                                    "elementType": "geometry.stroke",
                                    "stylers": [
                                        {
                                            "color": "#000000"
                                        },
                                        {
                                            "lightness": 17
                                        },
                                        {
                                            "weight": 1.2
                                        }
                                    ]
                                },
                                {
                                    "featureType": "landscape",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#000000"
                                        },
                                        {
                                            "lightness": 20
                                        }
                                    ]
                                },
                                {
                                    "featureType": "poi",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#000000"
                                        },
                                        {
                                            "lightness": 21
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            "color": "#000000"
                                        },
                                        {
                                            "lightness": 17
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "geometry.stroke",
                                    "stylers": [
                                        {
                                            "color": "#000000"
                                        },
                                        {
                                            "lightness": 29
                                        },
                                        {
                                            "weight": 0.2
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.arterial",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#000000"
                                        },
                                        {
                                            "lightness": 18
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.local",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#000000"
                                        },
                                        {
                                            "lightness": 16
                                        }
                                    ]
                                },
                                {
                                    "featureType": "transit",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#000000"
                                        },
                                        {
                                            "lightness": 19
                                        }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#000000"
                                        },
                                        {
                                            "lightness": 17
                                        }
                                    ]
                                }
                            ]
                        }
                    });
                });

                $.each(addressmapz, function(key, val) {
                    $('.map-2').gmap3({
                        marker:{
                            values:[{
                                address:val.address,
                                options:{icon: "assets/images/map/3.png"},
                                events: {
                                    mouseover: function() {
                                        $(this).gmap3({
                                            overlay:{
                                                address:val.address,
                                                options:{
                                                    content:  "<div class='infobox clearfix'><div class='featured-address'><img src='assets/images/map/box.jpg'></div><div class='box-info'><p class='title'>EDUCA Headquarters</p><p class='address'><i class='fa fa-map-marker'></i>155th West, 43rd Stress<br>New York City, US</p><ul class='educa-socials'><li class='facebook'><a href='#'><i class='fa fa-facebook'></i></a></li><li class='twitter'><a href='#'><i class='fa fa-twitter'></i></a></li><li class='google'><a href='#'><i class='fa fa-google-plus'></i></a></li><li class='linkin'><a href='#'><i class='fa fa-linkedin'></i></a></li></ul></div> <div class='clearfix'></div></div>",
                                                    offset:{
                                                        y:-190,
                                                        x:-170
                                                    }
                                                }
                                            }
                                        });
                                    },
                                    mouseout: function(){
                                    $('.infobox').each(function() {
                                        $(this).remove();
                                    });
                                    }
                                }
                            }]
                        },
                        styledmaptype:{
                            id: "educa_style",
                            options:{
                                name: "Educa Map"
                            },
                            styles:[
                            {
                                "featureType": "administrative",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "color": "#444444"
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "color": "#f2f2f2"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "saturation": -100
                                    },
                                    {
                                        "lightness": 45
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "visibility": "simplified"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "labels.icon",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "color": "#46bcec"
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            }
                        ]
                        }
                    });
            });
            }

            // Function Clear Markers
            function gmap_clear_markers() {
                $('.infobox').each(function() {
                    var args = {duration: 600};
                    $(this).slideToggle(args).remove();
                });
            }
            gmap_clear_markers();
        };
        EducaMaps(); 

        // EducaTabs
        function EducaTabs() {
            $('.educa-tabs').each(function() {
                $(this).children('.info-tab').children().hide();
                $(this).children('.info-tab').children().first().show();
                $(this).find('.ui-tabs-nav').children('li').on('click', function(e) {  
                    var liActive = $(this).index(),
                        contentActive = $(this).siblings().removeClass('active').parents('.educa-tabs').children('.info-tab').children().eq(liActive);

                    contentActive.addClass('active').fadeIn('slow');
                    contentActive.siblings().removeClass('active');
                    $(this).addClass('active').parents('.educa-tabs').children('.info-tab').children().eq(liActive).siblings().hide();
                    e.preventDefault();
                });
            });
        };
        EducaTabs();  

        //EducaMailChimp
        function EducaAjaxMailchimp(){
            if ( $().ajaxChimp ) {
                $('.educa-subscribe-form').ajaxChimp({
                    callback: mailchimpCallback,
                    //replace bellow url with your own mailchimp form post url inside the url: "---".
                    url: "https://jrbthemes.us17.list-manage.com/subscribe/post?u=9d665807de25a395a1400d0da&amp;id=43b829d91c" 
                }); 
                function mailchimpCallback(resp) {
                     if (resp.result === 'success') {
                        $('.subscription-success').html('<i class="fa fa-check"></i>' + resp.msg).fadeIn(1000);
                        $('.subscription-error').fadeOut(500);
                        
                    } else if(resp.result === 'error') {
                        $('.subscription-error').html('<i class="fa fa-times"></i>' + resp.msg).fadeIn(1000);
                    }  
                }
            }
        }
        EducaAjaxMailchimp();

        // EducaProgress
        function EducaRun() {        
            $('.ui-progress').on('on-appear', function() {
                $(this).each(function() {
                    var percent = $(this).data('percent');                
                    $(this).find('.progress-count').animate({
                        "width": percent + '%'
                    }, $(this).find('.progress-count').data('duration') );

                    $(this).parent('.educa-progress').find('.perc').addClass('show').animate({
                        "width": percent + '%'
                    }, $(this).find('.progress-count').data('duration') );
                });
            });
        };
        EducaRun(); 
        
        // EducaSelectPrice
        function EducaSelectPrice() {
            if( $().slider ) {
                $( ".price_slider" ).slider({
                    range: true,
                    min: 0,
                    max: 250,
                    values: [ 30, 100 ],
                    slide: function( event, ui ) {
                        $( ".price_label > input " ).val( "$" + ui.values[ 0 ] + "  - $" + ui.values[ 1 ] );
                        }
                });

                $( ".price_label > input " ).val( "$" + $( ".price_slider" ).slider( "values", 0 ) +
                "  -  $" + $( ".price_slider" ).slider( "values", 1 ) );
                $( ".ui-slider-handle").append("<span class='shadow'></span>");
            }
        };
        EducaSelectPrice();

        // EducaPortIsotope
        function EducaPortIsotope() {
            if ( $().isotope ) {                    
                var $container = $('.educa-portfolio');
                $container.imagesLoaded(function(){
                    $container.isotope({
                        itemSelector: '.portfolio-item',
                        transitionDuration: '0.5s'
                    });
                });

                $('.portfolio-filter li').on('click',function() {                           
                    var selector = $(this).find("a").attr('data-filter');
                    $('.portfolio-filter li').removeClass('active');
                    $(this).addClass('active');
                    $container.isotope({ filter: selector });
                    return false;
                });            
            };
        };
        EducaPortIsotope();     
  }); 	
})(jQuery);