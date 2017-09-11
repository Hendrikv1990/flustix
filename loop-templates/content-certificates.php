<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-certificates-';
$class = $prefix.'section';

$images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0
if ( !empty( $images ) ) {
    foreach ( $images as $image ) {
        $image = $image;
    }

}


?>
<div class="section" id="section7" style="background-image:url('<?php echo $image['url'] ?>');">

<div class="container-fluid <?= $class ?>">
    <?php
    $images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0


    if ( !empty( $images ) ) {

        $image = $images[0]['url'];

    }
    ?>
    <div class="certificates mt-5 mt-md-1 pt-1 pt-md-1 row" style="background-image:url('<?php echo $image ?>');">

        <?php

        $images = rwmb_meta( $prefix.'overlay_image', 'size=full' ); // Since 4.8.0

        if ( !empty( $images ) ) {
            foreach ( $images as $image ) {
                echo '<img src="', esc_url( $image['url'] ), '"  alt="', esc_attr( $image['alt'] ), '">';
            }
        }



        ?>

        <div class="certificate-img col-6 col-md-4"><img src="<?= get_stylesheet_directory_uri() . '/img/blue-certificate.png' ?>" /></div>
        <div class="certificate-img col-6 col-md-4"><img src="<?= get_stylesheet_directory_uri() . '/img/white-certificate.png' ?>" /></div>
        <div class="certificate-img  col-6 col-md-4"><img src="<?= get_stylesheet_directory_uri() . '/img/black-certificate.png' ?>" /></div>

        <h1><?php echo get_post_meta( get_the_ID(), $prefix.'head', true ); ?></h1>

        <div class="scroll-button" href="#down">
            <div class="triangle"></div>
        </div>
    </div>
</div>
</div>