jQuery(document).ready(function () {



    $ = jQuery;



    $('#fullpage').fullpage({
        verticalCentered: true,
        sectionsColor: ['transparent', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff'],


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

            // if(index == 1){
            //     console.log('entering show logo')
            //     $('.custom-logo-link').show();
            // }


            // TODO move this
            if(index == 1) {



                // remove the social media bar
                $('.social-media-sidebar').hide();

            }else {

                $('.social-media-sidebar').show();
            }


        },
    });

    $('.scroll-button').on('click', function () {
        $.fn.fullpage.moveSectionDown();
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

    $( ".first-hover" )
        .mouseenter(function() {
            console.log('moused over first hover');

            $('.how-it-works-overlay-text-1').show();
        })
        .mouseleave(function() {
            console.log('moused out first hover');

            $('.how-it-works-overlay-text-1').hide();
        });

    $( ".second-hover" )
        .mouseenter(function() {
            console.log('moused over second hover');

            $('.how-it-works-overlay-text-2').show();
        })
        .mouseleave(function() {
            console.log('moused out second hover');

            $('.how-it-works-overlay-text-2').hide();
        });

    $( ".third-hover" )
        .mouseenter(function() {
            console.log('moused over third hover');

            $('.how-it-works-overlay-text-3').show();
        })
        .mouseleave(function() {
            console.log('moused out third hover');

            $('.how-it-works-overlay-text-3').hide();
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






});




(function($) {
    $(document).ready(function() {

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
            $(".player").mb_YTPlayer();
        } else {
            //jQuery will add the default background to the preferred class
            $('.big-background').addClass(
                'big-background-default-image');
        }
    });





})(jQuery);
