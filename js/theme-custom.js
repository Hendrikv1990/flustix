jQuery(document).ready(function () {

    $ = jQuery;

    $('#fullpage').fullpage({
        verticalCentered: true,
        sectionsColor: ['#fff', '#fff', '#fff'],


        onLeave: function (index, nextIndex, direction) {

            // TODO move this
            if (index == 2 && direction == "up") {
                $('.menu-trigger .icon').addClass('white');
                $('.menu-trigger').addClass('white');
                $('.menu-trigger').removeClass('black');
                $('.menu-trigger .icon').removeClass('black');

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
        }
    });

    $('.scroll-button').on('click', function () {
        $.fn.fullpage.moveSectionDown();
    });

});