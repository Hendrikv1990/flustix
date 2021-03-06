<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-world-';
$class = $prefix.'section';

$images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0
if ( !empty( $images ) ) {
    foreach ( $images as $image ) {
        $image = $image;
    }

}


?>
<div class="section" id="section3" style="background-image:url('<?php echo $image['url'] ?>');">
<div class="container-fluid <?= $class ?>">
    <?php




    ?>
    <div class="row">
        <h1><?php echo get_post_meta( get_the_ID(), $prefix.'head', true ); ?></h1>
    </div>
    <div class="row">
        <?php

        $images = rwmb_meta( $prefix.'overlay-image', 'size=full' ); // Since 4.8.0

        if ( !empty( $images ) ) {
            foreach ( $images as $image ) {
                echo '<img src="', esc_url( $image['url'] ), '"  alt="', esc_attr( $image['alt'] ), '">';
            }
        }
        ?>


    </div>
    <div class="row">
        <div class="scroll-button" href="#down">
            <div class="triangle"></div>
        </div>
    </div>
</div>
</div>
