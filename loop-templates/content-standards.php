<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-standards-';
$class = $prefix.'section';

?>

<div class="container-fluid <?= $class ?>">
    <div class="row">
        <div class="col-md-6">
            <h1><?php echo get_post_meta( get_the_ID(), $prefix.'head', true ) ?></h1>
            <h2><?php echo get_post_meta( get_the_ID(), $prefix.'subhead', true ) ?></h2>
            <p><?php echo get_post_meta( get_the_ID(), $prefix.'paragraph', true ) ?></p>


            <!-- // TODO initialize carousel -->
            <div class="<?= $prefix ?> owl-carousel owl-theme">
                <div class="item"><?= get_post_meta( get_the_ID(), $prefix.'standards-paragraph-1', true ) ?></div>
                <div class="item"><?= get_post_meta( get_the_ID(), $prefix.'standards-paragraph-2', true ) ?></div>
                <div class="item"><?= get_post_meta( get_the_ID(), $prefix.'standards-paragraph-3', true ) ?></div>
            </div>





            <div class="scroll-button" href="#down">
                <div class="triangle"></div>
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

        ?>
        <div class="col-md-6 image" style="background-image:url('<?php echo $image['url'] ?>');">

            <?php
            $images = rwmb_meta( $prefix.'overlay-image', 'size=full' ); // Since 4.8.0
            $url = get_post_meta( get_the_ID(), $prefix.'url', true);

            if ( !empty( $images ) ) {
            foreach ( $images as $image ) {?>
            <?php  echo '<a href="', esc_url( $url ), '" title="', esc_attr( $image['title'] ), '"><img src="', esc_url( $image['url'] ), '"  alt="', esc_attr( $image['alt'] ), '"></a>';
            }
            }

            ?>





        </div>
    </div>
</div>
