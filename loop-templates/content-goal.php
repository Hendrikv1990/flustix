<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-goal-';
$class = $prefix.'section';


?>

<div class="container-fluid <?= $class ?>">
    <div class="row">
        <div class="col-md-6">
            <div class="inner">
            <h1><?php echo get_post_meta( get_the_ID(), $prefix.'head', true ) ?></h1>
            <h2><?php echo get_post_meta( get_the_ID(), $prefix.'subhead', true ) ?></h2>
            <p><?php echo get_post_meta( get_the_ID(), $prefix.'paragraph', true ) ?></p>



            <!-- // TODO initialize carousel -->
            <div class="<?= $prefix ?> owl-carousel owl-theme">
                    <div class="item">FLUSTIX zertifiziert komplett plastikfreie Produkte. Möchte ein Hersteller das FLUSTIX-Siegel auf seiner Ware  verwenden, muss das Produkt ein strenges Prüfverfahren durchlaufen. Dieses besteht aus drei Stufen:</div>
                    <div class="item">FLUSTIX zertifiziert komplett plastikfreie Produkte. Min strenges Prüfverfahren durchlaufen. Dieses besteht aus drei Stufen:</div>
                    <div class="item">FLUSTIX zertifiziert komplett p-Siegel auf seiner Ware  verwenden, muss das Produkt ein strenges Prüfverfahren durchlaufen. Dieses besteht aus drei Stufen:</div>
            </div>


            <div class="scroll-button">
                <div class="triangle"></div>
            </div>

            </div>
                </div><?php
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
            $images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0


            if ( !empty( $images ) ) {
                foreach ( $images as $image ) {
                    //echo '<img src="', esc_url( $image['url'] ), '"  alt="', esc_attr( $image['alt'] ), '">';
                }
            }

            ?>





        </div>
    </div>
</div>
