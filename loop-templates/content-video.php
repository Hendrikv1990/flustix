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
<script>

</script>
<style>
    #big-video-wrap {
        visibility: inherit;
        opacity: 1;
        position: absolute;
        display: block;
        left: 0px;
        width:100%;
        height: 100vh;
        overflow: hidden;
        top: 0;
        left: 0;
    }
    #big-video-wrap video {
        position: relative;
        width: 100%;
        height: auto;
        z-index:1000;
    }

</style>
<section class="video-section big-background" style="background-image:url(<?php echo get_stylesheet_directory_uri() . '/img/video-background.jpg'?>">
<!--    <div id="bgndVideo" class="player" data-property="{videoURL:'http://youtu.be/BsekcY04xvQ',containment:'body',autoPlay:true, mute:true, startAt:0, opacity:1}"></div>-->
<!--    <div id="player"></div> -->

<!--    <a id="bgndVideo" class="player" data-property="{videoURL:'--><?php //echo get_post_meta(get_the_ID(), 'fl-videocontent', true) ?><!--', containment:'#section0',autoPlay:false,mute:true,startAt:0,opacity:1,onReady:hideAndPlay(),mobileFallbackImage:'--><?php //echo get_stylesheet_directory_uri() . '/img/video-background.jpg' ?><!--',showControls:false,loop:100,showYTLogo:false,quality:'medium',optimizeDisplay:true}"></a>-->
    <div id="big-video-wrap" style="visibility: inherit; opacity: 1;">
<!--    <video controls autoplay src="http://res.cloudinary.com/dml2i4baj/video/upload/v1504808804/flustix_WEBSITE_teaser_lujnht.mp4" type="video/mp4">-->
    </video>
    </div>


    <div class="pattern"></div>
    <div class="big-background-container">
            <h1 class="big-background-title"><?php //echo get_post_meta(get_the_ID(), 'fl-videohead', true) ?></h1>

        <p id="js-rotating">2050 gibt es mehr Plastik im Meer als Fische | Der Plastikverbrauch ist 20 Mal höher als vor 50 Jahren | Jede Minute gelangt eine Müllwagenladung Plastik in die Meere | 150 Millionen Tonnen Plastik schwimmen im Meer | Kein anderes Land in Europa verbraucht so viel Plastik wie Deutschland | Nur 45% des Plastikmülls in Deutschland werden tatsächlich recycelt</p>

        <div class="scroll-button" href="#down">
            <div class="triangle"></div>
        </div>
    </div>
    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
//        var tag = document.createElement('script');
//
//        tag.src = "https://www.youtube.com/iframe_api";
//        var firstScriptTag = document.getElementsByTagName('script')[0];
//        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
//
//        // 3. This function creates an <iframe> (and YouTube player)
//        //    after the API code downloads.
//        var player;
//        function onYouTubeIframeAPIReady() {
//            player = new YT.Player('player', {
//                playerVars: { 'autoplay': 1, 'controls': 1, 'loop': 1, 'playlist': 'A9-lvsAeTyY', 'fs':1, 'playsinline': 1, 'rel':0 },
//                height: '100%',
//                width: '100%',
//                videoId: 'A9-lvsAeTyY',
//                events: {
//                    'onReady': onPlayerReady,
//                    'onStateChange': YTStateChange
//                }
//            });
//        }

        function fullScreen() {

            var e = document.getElementById("player");
            if (e.requestFullscreen) {
                e.requestFullscreen();
            } else if (e.webkitRequestFullscreen) {
                e.webkitRequestFullscreen();
            } else if (e.mozRequestFullScreen) {
                e.mozRequestFullScreen();
            } else if (e.msRequestFullscreen) {
                e.msRequestFullscreen();
            }
        }

        function YTStateChange(event) {
            switch(event.data) {
                case -1:
                    fullScreen();
                    break;
                case 1:
                    // some code
                    break;
                case 2:
                    // some code
                    break;
                default:
                    break;
            }
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            event.target.playVideo();
        }

        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        var done = false;
        function stopVideo() {
            player.stopVideo();
        }
    </script>
</section>

<!--        <iframe class="" frameborder="0" allowfullscreen="1" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/ghgEqGjiIB0?playlist=ghgEqGjiIB0&amp;iv_load_policy=3&amp;enablejsapi=1&amp;disablekb=1&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;wmode=transparent&amp;origin=http%3A%2F%2Fflustix.com&amp;widgetid=1" id="widget2" style=""></iframe>-->



