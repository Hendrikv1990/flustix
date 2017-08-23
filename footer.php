<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

                        <span></span> <span class="pull-right"></span>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<div class="social-media-sidebar">
    <ul>
        <li>

            <a href=""><img src="<?= get_stylesheet_directory_uri() . '/img/sidebar/facebook.png' ?>" /></a>
        </li>
        <li>
            <a href=""><img src="<?= get_stylesheet_directory_uri() . '/img/sidebar/twitter.png' ?>" /></a>
        </li>
        <li>
            <a href=""><img src="<?= get_stylesheet_directory_uri() . '/img/sidebar/instagram.png' ?>" /></a>
        </li>
        <li>
            <a href=""><img src="<?= get_stylesheet_directory_uri() . '/img/sidebar/man-user.png' ?>" /></a>
        </li>
    </ul>







</div>

<script>
    function openLink(link){
        console.log( link+' link clicked');
        window.location.href = link;
    }

    var text = ["es 2050 mehr Plastik als Fisch im Meer geben könnte?",
        "wir heute 20 Mal mehr Plastik verbrauchen, wie vor 50 Jahren?",
        "jede Minute eine Müllwagenladung Plastik in die Meere gelangt?",
        "am Nordseestrand auf 100 Metern 389 Müllteile liegen?",
        "schon heute 150 Millionen Tonnen Plastik im Meer schwimmen?",
        "Plastik auch in Gesichtscremes verwendet wird?",
        "kein anderes Land in Europa so viel Plastik verbraucht, wie Deutschland?",
        "nur 45% des Plastikmülls in Deutschland recycelt werden?"
    ];
    var counter = 0;
    var elem = jQuery('.overlay-video p');
    setInterval(change, 5000);

    function change() {
        console.log('changed');
        elem.text(text[counter]);
        console.log(text[counter]);
        counter++;
        if (counter >= text.length) {
            counter = 0;
        }
    }

</script>
<?php wp_footer(); ?>

</body>

</html>

