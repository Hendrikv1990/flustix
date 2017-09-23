<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-video-'


///

?>

<style>

    #big-video-wrap {
        visibility: inherit;
        opacity: 1;
        position: absolute;
        display: block;
        left: 0px;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        top: 0;
        left: 0;
    }

    #big-video-wrap video {
        position: relative;
        width: 100%;
        height: auto;
        z-index: 1000;
    }
    @media (min-aspect-ratio: 16/9) {
        #big-video-wrap video {
            height: 300%;
            top: -100%;
        }
    }

    @media (max-aspect-ratio: 16/9) {
        #big-video-wrap video {
            width: 300%;
            left: -100%;
        }
    }

</style>
<section class="video-section big-background"
         style="background-image:url(<?php echo get_stylesheet_directory_uri() . '/img/video-background.jpg' ?>">

    <div id="big-video-wrap">
        <video autoplay="autoplay" type="video/mp4" autoplay loop>
            <source src="<?php echo get_post_meta(get_the_ID(), 'fl-videocontent', true) ?>" />
        </video>
    </div>


    <div class="pattern"></div>
    <div class="big-background-container">
        <h1 class="big-background-title"><?php //echo get_post_meta(get_the_ID(), 'fl-videohead', true) ?></h1>

        <p id="js-rotating">2050 gibt es mehr Plastik im Meer als Fische | Der Plastikverbrauch ist 20 Mal höher als vor
            50 Jahren | Jede Minute gelangt eine Müllwagenladung Plastik in die Meere | 150 Millionen Tonnen Plastik
            schwimmen im Meer | Kein anderes Land in Europa verbraucht so viel Plastik wie Deutschland | Nur 45% des
            Plastikmülls in Deutschland werden tatsächlich recycelt</p>

        <div class="scroll-button" href="#down">
            <div class="triangle"></div>
        </div>
    </div>

</section>

<!--        <iframe class="" frameborder="0" allowfullscreen="1" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/ghgEqGjiIB0?playlist=ghgEqGjiIB0&amp;iv_load_policy=3&amp;enablejsapi=1&amp;disablekb=1&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;wmode=transparent&amp;origin=http%3A%2F%2Fflustix.com&amp;widgetid=1" id="widget2" style=""></iframe>-->



