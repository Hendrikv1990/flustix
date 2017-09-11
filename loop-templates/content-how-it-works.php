<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-how-it-works-';
$class = $prefix.'section';



?>

<div class="container-fluid <?= $class ?>">
    <div class="row">
        <div class="col-md-6">
            <div class="inner">

                <h1><?php echo get_post_meta( get_the_ID(), $prefix.'head', true ) ?></h1>

                <!-- // TODO initialize carousel -->
                <div class="<?= $prefix ?> owl-carousel owl-theme">
                    <div class="item">
                        <h2><?php echo get_post_meta( get_the_ID(), $prefix.'subhead-1', true ) ?></h2>
                        <?= get_post_meta( get_the_ID(), $prefix.'paragraph-1', true ) ?>

                        <a class="fl-button activate-<?= $prefix ?>" href="#">
                            <?= get_post_meta( get_the_ID(), $prefix.'button-text-1', true ) ?>
                        </a>
                    </div>
                    <div class="item">
                        <h2><?php echo get_post_meta( get_the_ID(), $prefix.'subhead-2', true ) ?></h2>
                        <?= get_post_meta( get_the_ID(), $prefix.'paragraph-2', true ) ?>
                        <a class="fl-button activate-<?= $prefix ?>" href="#">
                            <?= get_post_meta( get_the_ID(), $prefix.'button-text-2', true ) ?>
                        </a>
                    </div>
                </div>




                <div class="scroll-button" href="#down">
                    <div class="triangle"></div>
                </div>


            </div>


        </div>
        <?php

        $images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0
        if (!empty($images)) {
            foreach ($images as $image) {
                $image = $image;
                //echo '<img src="', esc_url($image['url']), '"  alt="', esc_attr($image['alt']), '">';
            }
        }

        $svg = get_stylesheet_directory_uri() . '/img/graphic-1.svg';

        ?>
        <div class="col-md-6 image" style="">
            <!-- // background-image:url('<?php echo $image['url'] ?>'); -->
            <div class="svg">
            <?php echo file_get_contents($svg); ?>
            </div>

            <?php
            $images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0


            if ( !empty( $images ) ) {
                foreach ( $images as $image ) {
                    //echo '<img src="', esc_url( $image['url'] ), '"  alt="', esc_attr( $image['alt'] ), '">';
                }
            }

            ?>

            <div class="overlay-text how-it-works-overlay-text-1" style="display:none;"><?= get_post_meta( get_the_ID(), $prefix.'text-image-1', true ); ?></div>
            <div class="overlay-text how-it-works-overlay-text-2" style="display:none;"><?= get_post_meta( get_the_ID(), $prefix.'text-image-2', true ); ?></div>
            <div class="overlay-text how-it-works-overlay-text-3" style="display:none;"><?= get_post_meta( get_the_ID(), $prefix.'text-image-3', true ); ?></div>



        </div>
    </div>
</div>
