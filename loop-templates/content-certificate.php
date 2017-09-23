<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-certificate-';
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
                        <p><?= get_post_meta( get_the_ID(), $prefix.'paragraph-1', true ) ?></p>
                        <a class="fl-button activate-<?= $prefix ?>" href="#">
                            <?= get_post_meta( get_the_ID(), $prefix.'slider-button-text-1', true ) ?>
                        </a>
                    </div>
                    <div class="item">
                        <h2><?php echo get_post_meta( get_the_ID(), $prefix.'subhead-2', true ) ?></h2>
                        <p><?= get_post_meta( get_the_ID(), $prefix.'paragraph-2', true ) ?></p>
                        <a class="fl-button activate-<?= $prefix ?>" href="#">
                            <?= get_post_meta( get_the_ID(), $prefix.'slider-button-text-2', true ) ?>
                        </a>
                    </div>
                </div>




                <div class="scroll-button" href="#down">
                    <div class="triangle"></div>
                </div>

            </div>


        </div><?php

        $images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0
        if (!empty($images)) {
        foreach ($images as $image) {
            $slide_images[] = $image['url'];
        //echo '<img src="', esc_url($image['url']), '"  alt="', esc_attr($image['alt']), '">';
        }
        }

        ?>
        <div class="col-md-6 image" style="background-image:url('<?php echo $image['url'] ?>');" data-images="<?php echo htmlspecialchars(json_encode($slide_images), ENT_QUOTES, 'UTF-8'); ?>">>

            <?php
            //$images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0


            if ( !empty( $images ) ) {
                foreach ( $images as $image ) {
                    //echo '<img src="', esc_url( $image['url'] ), '"  alt="', esc_attr( $image['alt'] ), '">';
                }
            }

            $images = rwmb_meta( $prefix.'overlay-image', 'size=full' ); // Since 4.8.0
            $url = get_post_meta( get_the_ID(), $prefix.'url', true);

            if ( !empty( $images ) ) {
                foreach ( $images as $image ) {
                    echo '<div class="cert-img"><a target="_blank" href="#" data-toggle="modal" data-target="#contactModal"><img src="', esc_url( $image['url'] ), '"  alt="', esc_attr( $image['alt'] ), '"></a></div>';
                }
            }

            $button_text = get_post_meta( get_the_ID(), $prefix.'button-text', true);


            ?>



        </div>
    </div>
</div>
