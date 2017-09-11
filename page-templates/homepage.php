<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<script type="text/javascript">
//    $ = jQuery;
//    $(document).ready(function() {
//        $('#fullpage').fullpage({
//            verticalCentered: true,
//            sectionsColor: ['#fff', '#fff', '#fff']
//        });
//    });
</script>
<div class="wrapper" id="full-width-page-wrapper">
    <div class="overlay"></div>

<!--    anchors:['start', 'worum', 'weltweit', 'was', '3-stufen', 'ziel', 'siegel', 'bewerben', 'plastik', 'standards', 'kontakt'],-->


    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li>
                <a href="#start">Home</a>
            </li>
            <li>
                <a href="#worum">Worum geht's</a>
            </li>
            <li>
                <a href="#was">Was ist Flustix</a>
            </li>
            <li>
                <a href="#3-stufen">So funktioniert's</a>
            </li>
            <li>
                <a href="#ziel">Unser Ziel</a>
            </li>
            <li>
                <a href="#bewerben">Siegel</a>
            </li>
            <li>
                <a href="#standards">Unsere Prüfpartner</a>
            </li>
            <li>
                <a href="#kontakt">Kontakt</a>
            </li>
        </ul>
    </nav>
    <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
        <span class="menu-name">Menu</span>
    </button>

    <div id="fullpage">
        <div class="section" id="section0">
            <?php echo get_template_part('loop-templates/content', 'video'); ?>
        </div>
<!--        <div class="section" id="section1">-->
<!--            <div class="slide" id="slide1"><h1>Slide Backgrounds</h1></div>-->
<!--            <div class="slide" id="slide2"><h1>Totally customizable</h1></div>-->
<!--        </div>-->
        <div class="section" id="section2">
            <?php echo get_template_part('loop-templates/content', 'why'); ?>
        </div>
        <?php echo get_template_part('loop-templates/content', 'world'); ?>
        <div class="section" id="section4">
            <?php echo get_template_part('loop-templates/content', 'what'); ?>
        </div>
        <div class="section" id="section5">
            <?php echo get_template_part('loop-templates/content', 'how-it-works'); ?>
        </div>
        <div class="section" id="section6">
            <?php echo get_template_part('loop-templates/content', 'goal'); ?>
        </div>

            <?php echo get_template_part('loop-templates/content', 'certificates'); ?>

        <div class="section" id="section8">
            <?php echo get_template_part('loop-templates/content', 'certificate'); ?>
        </div>

            <?php echo get_template_part('loop-templates/content', 'numbers'); ?>

        <div class="section" id="section10">
            <?php echo get_template_part('loop-templates/content', 'standards'); ?>
        </div>



            <?php echo get_template_part('loop-templates/content', 'footer'); ?>
    </div>

</div>


    <!--    /Video Modal    -->

    <!-- Add youtube api -->

<?php get_footer(); ?>
