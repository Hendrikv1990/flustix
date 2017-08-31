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

            <a href="https://www.facebook.com/flustix"><img src="<?= get_stylesheet_directory_uri() . '/img/sidebar/facebook.png' ?>" /></a>
        </li>
        <li>
            <a href="https://twitter.com/flustix_siegel"><img src="<?= get_stylesheet_directory_uri() . '/img/sidebar/twitter.png' ?>" /></a>
        </li>
        <li>
            <a href="https://www.instagram.com/flustix_official/"><img src="<?= get_stylesheet_directory_uri() . '/img/sidebar/instagram.png' ?>" /></a>
        </li>
        <li>
            <a href="#" data-toggle="modal" data-target="#contactModal" target="_blank"><img src="<?= get_stylesheet_directory_uri() . '/img/sidebar/man-user.png' ?>" /></a>
        </li>
    </ul>







</div>

<script>
    function openLink(link){
        console.log( link+' link clicked');
        window.location.href = link;
    }

//    var text = ["es 2050 mehr Plastik als Fisch im Meer geben könnte?"
//        "wir heute 20 Mal mehr Plastik verbrauchen, wie vor 50 Jahren?",
//        "jede Minute eine Müllwagenladung Plastik in die Meere gelangt?",
//        "am Nordseestrand auf 100 Metern 389 Müllteile liegen?",
//        "schon heute 150 Millionen Tonnen Plastik im Meer schwimmen?",
//        "Plastik auch in Gesichtscremes verwendet wird?",
//        "kein anderes Land in Europa so viel Plastik verbraucht, wie Deutschland?",
//        "nur 45% des Plastikmülls in Deutschland recycelt werden?"
//    ];
    jQuery("#js-rotating").Morphext({
        // The [in] animation type. Refer to Animate.css for a list of available animations.
        animation: "fadeInLeft",
        // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
        separator: "|",
        // The delay between the changing of each phrase in milliseconds.
        speed: 8000,
        complete: function () {
            // Called after the entrance animation is executed.
        }
    });



</script>
<?php wp_footer(); ?>

<!-- Modal -->
<div class="modal fade" id="newsletterModal" tabindex="-1" role="dialog" aria-labelledby="newsletterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="266" title="Newsletter"]') ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="267" title="Kontakt"]') ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


</body>

</html>

