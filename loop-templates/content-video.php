<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefx = 'fl-video-'
?>

<section class="big-background">
    <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=ghgEqGjiIB0&feature=youtu.be',containment:'#section0',autoPlay:true, mute:true, startAt:0, opacity:1, mobileFallbackImage:'<?php echo get_stylesheet_directory_uri() . '/img/video-background.jpg' ?>', showControls:false, loop:true, showYTLogo:false, quality:'medium'}"></a>
    <div class="pattern"></div>
    <div class="big-background-container">
            <h1 class="big-background-title"><?php echo get_post_meta(get_the_ID(), 'fl-videohead', true) ?></h1>
            <p>es 2050 mehr Plastik als Fisch im Meer geben könnte?</p>

        <div class="scroll-button" href="#down">
            <div class="triangle"></div>
        </div>
    </div>
</section>

<!--        <iframe class="" frameborder="0" allowfullscreen="1" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/ghgEqGjiIB0?playlist=ghgEqGjiIB0&amp;iv_load_policy=3&amp;enablejsapi=1&amp;disablekb=1&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;wmode=transparent&amp;origin=http%3A%2F%2Fflustix.com&amp;widgetid=1" id="widget2" style=""></iframe>-->



