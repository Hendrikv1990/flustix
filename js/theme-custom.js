jQuery(document).ready(function () {



    $ = jQuery;



    $('#fullpage').fullpage({
        verticalCentered: true,
        anchors:['start', 'worum', 'weltweit', 'was', '3-stufen', 'ziel', 'siegel', 'bewerben', 'plastik', 'standards', 'kontakt'],
        sectionsColor: ['transparent', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff'],
        autoScrolling: decide(), //decide()
        fitToSection: decide(),

        onLeave: function (index, nextIndex, direction) {



            // we hide the logo after leaving the first index

            if(index == 2 && direction == 'up') {
                console.log('we are not at the first: hide logo');
                $('.custom-logo-link').show('slow');
            }

            if(index == 1 && direction == 'down') {
                console.log('we are not at the first: hide logo');
                $('.custom-logo-link').hide('slow');
            }

            if(nextIndex == 3 && direction == 'down' || nextIndex == 7 && direction == 'down' || nextIndex == 9 && direction == 'down' ){
                $('.hamburger.is-closed').removeClass('black');

            }
            if(nextIndex == 2 && direction == 'down' || nextIndex == 6 && direction == 'down'  || nextIndex == 4 && direction == 'down' || nextIndex == 8 && direction == 'down' || nextIndex == 5 && direction == 'down' || nextIndex == 10 && direction == 'down' || nextIndex == 11 && direction == 'down'){
                $('.hamburger.is-closed').addClass('black');

            }

            if(nextIndex == 3 && direction == 'up' || nextIndex == 7 && direction == 'up' || nextIndex == 9 && direction == 'up' ){
                $('.hamburger.is-closed').removeClass('black');

            }
            if(nextIndex == 2 && direction == 'up' || nextIndex == 6 && direction == 'up' || nextIndex == 4 && direction == 'up' || nextIndex == 8 && direction == 'up' || nextIndex == 5 && direction == 'up' || nextIndex == 10 && direction == 'up' || nextIndex == 11 && direction == 'up'){
                $('.hamburger.is-closed').addClass('black');
            }





            // TODO move this
            if (index == 2 && direction == "up") {
                $('.hamburger.is-closed').removeClass('black');

                // remove the social media area
                $('.social-media-sidebar').hide();

            }


            if (direction == "down") {
                $('.section').removeClass('active-down').removeClass('active-up');
                $('.section').eq(index).addClass('active-down');
            } else {
                $('.section').removeClass('active-down').removeClass('active-up');
                $('.section').eq(index - 2).addClass('active-up');
            }
        },
        afterLoad: function(anchorLink, index){
            $('.section').removeClass('up').removeClass('down');
            $('.section').eq(index-2).addClass('up');
            $('.section').eq(index).addClass('down');

            console.log('we are at index with: ');
            console.log(index);

            if(index >= 2) {
                console.log('we are not at the first: hide logo');
                $('.custom-logo-link').hide();
            } else {
                $('.custom-logo-link').show();
            }

            if(index == 9){
                var options = {
                    useEasing: true,
                    useGrouping: true,
                    separator: ',',
                    decimal: '.',
                };
                var numbers = jQuery('#numbers').data('numbers');
                var demo = new CountUp('prettyCounter', 0, numbers, 0, 2, options);
                if (!demo.error) {
                    demo.start();
                } else {
                    console.error(demo.error);
                }
            }

            // if(index == 1){
            //     console.log('entering show logo')
            //     $('.custom-logo-link').show();
            // }


            // TODO move this
            if(index == 1) {

                // reactivates the video when the index is reached TODO
                jQuery('video').get(0).play();
                //jQuery('#bgndVideo').YTPPlay();



                // remove the social media bar
                $('.social-media-sidebar').hide();

            }else {

                $('.social-media-sidebar').show();
            }


        },
    });



    /// let' initalize some carousels
    // each one has the prefix of the section <?= $prefix ?>owl-carousel

    /*
     fl-goal
     fl-standards
     fl-what
     fl-why

     */

    $('.fl-goal-').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:1,
        autoWidth:false,
    });

    $('.fl-standards-').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:1,
        autoWidth:false,
    });

    $('.fl-certificate-').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:1,
        autoWidth:false,
    });

    $('.fl-how-it-works-').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:1,
        autoWidth:false,
    });



    $( ".default-show" )
        .mouseenter(function() {

        })
        .mouseleave(function() {

        });

    $( ".first-hover" )
        .mouseenter(function() {

            $('.how-it-works-overlay-text-1').show();
            $('.default-show').hide();
            $('.how-it-works-overlay-text-3').hide();
        })
        .mouseleave(function() {

            $('.how-it-works-overlay-text-1').hide();
            $('.default').hide();
        });

    $( ".second-hover" )
        .mouseenter(function() {

            $('.how-it-works-overlay-text-2').show();
            $('.default-show').hide();
            $('.how-it-works-overlay-text-3').hide();
        })
        .mouseleave(function() {

            $('.how-it-works-overlay-text-2').hide();
            $('.how-it-works-overlay-text-3').hide();
        });

    $( ".third-hover" )
        .mouseenter(function() {
            $('.default-show').hide();
            $('.how-it-works-overlay-text-3').show();
            $('.default').hide();
        })
        .mouseleave(function() {
        });


    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
        isClosed = false;

    trigger.click(function () {
        hamburger_cross();
    });

    function hamburger_cross() {

        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function () {
        $('#full-width-page-wrapper').toggleClass('toggled');
    });




    var owlstandards = $('.fl-standards-');
    owlstandards.owlCarousel();
    $('.activate-fl-standards-').click(function() {
        owlstandards.trigger('next.owl.carousel');
    })




    var owlhowto = $('.fl-how-it-works-');
    owlhowto.owlCarousel();
    $('.activate-fl-how-it-works-').click(function() {
        owlhowto.trigger('next.owl.carousel');
    })

    $('#player iframe').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });

    // If you want to keep full screen on window resize
    $(window).resize(function(){
        $('#player iframe').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
    });

    $('.scroll-button').on('click', function () {
        $.fn.fullpage.moveSectionDown();

        //$.fn.fullpage. .moveTo('firstSlide', 2);
    });



    /// Goal Area for Carousel

    var owlgoal = $('.fl-goal-');
    owlgoal.owlCarousel();
    $('.fl-goal-activate-slider').click(function() {
        owlgoal.trigger('next.owl.carousel');
    });

    var _image_div = $('.fl-goal-section .image');

    var _initial_image = _image_div.data('images')[0];


    _image_div.css("background-image", "url("+_initial_image+")");


    var _images_loop = _image_div.data('images');

    owlgoal.on('changed.owl.carousel', function(event) {
       console.log( event.item.index ); // returns 0, 1, 2 >
        console.log( event.page.index );
        // with this we go overwrite the slider with that that index.
        var _updated_image = _images_loop[event.page.index];
        _image_div.css("background-image", "url("+_updated_image+")");
    });


    /// Certificate Area for Carousel

    var owlcertificate = $('.fl-certificate-');
    owlcertificate.owlCarousel();
    $('.activate-fl-certificate-').click(function() {
        owlcertificate.trigger('next.owl.carousel');
    });

    var _image_div = $('.fl-certificate-section .image');

    var _initial_image = _image_div.data('images')[0];


    _image_div.css("background-image", "url("+_initial_image+")");


    var _images_loop = _image_div.data('images');




    owlcertificate.on('changed.owl.carousel', function(event) {

        console.log( event.item.index ); // returns 0, 1, 2 >
        console.log( event.page.index );
        // with this we go overwrite the slider with that that index.
        var _updated_image = _images_loop[event.page.index];
        _image_div.css("background-image", "url("+_updated_image+")");
    });


    function decide(){
        return !(/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent));
    }








});




(function($) {
    $(document).ready(function() {


        // $(document).ready(function () {
        //     $('video').get(0).play();
        // })
        //
        // $('video').click(function() {
        //     this.paused ? this.play() : this.pause();
        // });


        $.fn.extend({
            animateCss: function (animationName) {
                var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                this.addClass('animated ' + animationName).one(animationEnd, function() {
                    $(this).removeClass('animated ' + animationName);
                });
                return this;
            }
        });

        /* IF YOU WANT TO APPLY SOME BASIC JQUERY TO REMOVE THE VIDEO BACKGROUND ON A SPECIFIC VIEWPORT MANUALLY

         var is_mobile = false;

         if( $('.player').css('display')=='none') {
         is_mobile = true;
         }
         if (is_mobile == true) {
         //Conditional script here
         $('.big-background, .small-background-section').addClass('big-background-default-image');
         }else{
         $(".player").mb_YTPlayer();
         }

         });

         */
        /*  IF YOU WANT TO USE DEVICE.JS TO DETECT THE VIEWPORT AND MANIPULATE THE OUTPUT  */

        //Device.js will check if it is Tablet or Mobile - http://matthewhudson.me/projects/device.js/
        if (!device.tablet() && !device.mobile()) {
            //$(".player").mb_YTPlayer();



        } else {
            //jQuery will add the default background to the preferred class
            $.fn.fullpage.setAutoScrolling(false);
            $('.big-background').addClass(
                'big-background-default-image');
        }



    });





})(jQuery);
