<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-goal-';
$class = $prefix . 'section';


?>

<div class="container-fluid <?= $class ?>">
    <div class="row">
        <div class="col-md-6">
            <div class="inner">

                <h1><?php echo get_post_meta(get_the_ID(), $prefix . 'head', true) ?></h1>

                <!-- // TODO initialize carousel -->
                <div class="<?= $prefix ?> owl-carousel owl-theme">

                    <div class="item">
                        <h2><?php echo get_post_meta(get_the_ID(), $prefix . 'subhead-1', true) ?></h2>
                        <p><?php echo get_post_meta(get_the_ID(), $prefix . 'paragraph-1', true) ?></p>
                        <a class="fl-button fl-goal-activate-slider" href="#">
                            <?php echo get_post_meta(get_the_ID(), $prefix . 'button-text-1', true) ?>
                        </a>
                    </div>
                    <div class="item">
                        <h2><?php echo get_post_meta(get_the_ID(), $prefix . 'subhead-2', true) ?></h2>
                        <p><?php echo get_post_meta(get_the_ID(), $prefix . 'paragraph-2', true) ?></p>
                        <a class="fl-button fl-goal-activate-slider" href="#">
                            <?php echo get_post_meta(get_the_ID(), $prefix . 'button-text-2', true) ?>
                        </a>
                    </div>
                </div>


                <div class="scroll-button">
                    <div class="triangle"></div>
                </div>

            </div>

        </div>

        <?php
        $images = rwmb_meta($prefix . 'image', 'size=full'); // Since 4.8.0
        if (!empty($images)) {
            foreach ($images as $image) {
                $slide_images[] = $image['url'];
                //echo '<img src="', esc_url($image['url']), '"  alt="', esc_attr($image['alt']), '">';
            }
        }

        ?>
        <div class="col-md-6 image" style=""
             data-images="<?php echo htmlspecialchars(json_encode($slide_images), ENT_QUOTES, 'UTF-8'); ?>">

        <?php
        $images = rwmb_meta($prefix . 'image', 'size=full'); // Since 4.8.0


        if (!empty($images)) {
            foreach ($images as $image) {
                //echo '<img src="', esc_url( $image['url'] ), '"  alt="', esc_attr( $image['alt'] ), '">';
            }
        }

        ?>


    </div>
</div>
</div>
