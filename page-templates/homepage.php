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
    $ = jQuery;
    $(document).ready(function() {
        $('#fullpage').fullpage({
            verticalCentered: true,
            sectionsColor: ['#fff', '#fff', '#fff']
        });
    });
</script>
<div class="wrapper" id="full-width-page-wrapper">



    <div id="fullpage">
        <div class="section row" id="section0">
            <?php //echo get_template_part('loop-templates/content', 'video'); ?>
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

            <?php echo get_template_part('loop-templates/content', 'certificates'); ?>

        <div class="section" id="section7">
            <?php echo get_template_part('loop-templates/content', 'certificate'); ?>
        </div>

            <?php echo get_template_part('loop-templates/content', 'numbers'); ?>

        <div class="section" id="section9">
            <?php echo get_template_part('loop-templates/content', 'standards'); ?>
        </div>

            <?php echo get_template_part('loop-templates/content', 'footer'); ?>
    </div>

</div>


    <!--    /Video Modal    -->

    <!-- Add youtube api -->

<?php get_footer(); ?>
