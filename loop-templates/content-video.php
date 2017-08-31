<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-video-'
?>

<section class="big-background">
<!--    <div id="bgndVideo" class="player" data-property="{videoURL:'http://youtu.be/BsekcY04xvQ',containment:'body',autoPlay:true, mute:true, startAt:0, opacity:1}"></div>-->

    <a id="bgndVideo" class="player" data-property="{videoURL:'<?php echo get_post_meta(get_the_ID(), 'fl-videocontent', true) ?>', containment:'#section0',autoPlay:true, mute:true, startAt:0, opacity:1, mobileFallbackImage:'<?php echo get_stylesheet_directory_uri() . '/img/video-background.jpg' ?>', showControls:false, loop:true, showYTLogo:false, quality:'medium', optimizeDisplay:true}"></a>
    <div class="pattern"></div>
    <div class="big-background-container">
            <h1 class="big-background-title"><?php echo get_post_meta(get_the_ID(), 'fl-videohead', true) ?></h1>
        <p id="js-rotating">es 2050 mehr Plastik als Fisch im Meer geben könnte? | wir heute 20 Mal mehr Plastik verbrauchen, wie vor 50 Jahren? | jede Minute eine Müllwagenladung Plastik in die Meere gelangt? | am Nordseestrand auf 100 Metern 389 Müllteile liegen? | schon heute 150 Millionen Tonnen Plastik im Meer schwimmen? | Plastik auch in Gesichtscremes verwendet wird? | kein anderes Land in Europa so viel Plastik verbraucht, wie Deutschland? | nur 45% des Plastikmülls in Deutschland recycelt werden?</p>

        <div class="scroll-button" href="#down">
            <div class="triangle"></div>
        </div>
    </div>
</section>

<!--        <iframe class="" frameborder="0" allowfullscreen="1" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/ghgEqGjiIB0?playlist=ghgEqGjiIB0&amp;iv_load_policy=3&amp;enablejsapi=1&amp;disablekb=1&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;wmode=transparent&amp;origin=http%3A%2F%2Fflustix.com&amp;widgetid=1" id="widget2" style=""></iframe>-->



