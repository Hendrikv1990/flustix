<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-footer-';

?>
<div class="section" id="section10" style="background-image:url('<?php echo $image['url'] ?>');">
    <div class="container-fluid">


        <?php
        $images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0

        if (!empty($images)) {
            foreach ($images as $image) {
                $image = $image;
                //echo '<img src="', esc_url($image['url']), '"  alt="', esc_attr($image['alt']), '">';
            }
        }

        ?>
      <?php /*  <div class="col-md-6 image" style="background-image:url('<?php echo $image['url'] ?>');">

            <?php
            $images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0


            if ( !empty( $images ) ) {

                $image = $images[0]['url'];

            }
            ?>
        </div> */ ?>


        <div class="col-md-6">
            <div class="row">


                <div class="col-md-12">

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <h2 class="nav-link active" href="#">KONTAKT :</h2>
                        </li>

                        <p>.Mail: info@flustix.com <br>·Phone: +49 (0) 30 80 93 331-11 <br> Kronprinzendamm 20, 10711 Berlin</p>

                        <li class="nav-item">
                            <h2 class="nav-link" href="#">Newsletter</h2>
                        </li>
                        <li class="nav-item">
                            <h2 class="nav-link" href="#">Videos</h2>
                        </li>
                        <li class="nav-item">
                            <h2 class="nav-link" href="#">FAQ's</h2>
                        </li>
                        <li class="nav-item">
                            <h2 class="nav-link" href="#">Rechtliche Hinweise</h2>
                        </li>
                        <li class="nav-item">
                            <h2 class="nav-link" href="#">Datenschutz</h2>
                        </li>
                    </ul>

                </div>

                <div class="col-md-12">
                    <ul class="nav">
                        <li class="nav-item">
                            <a style="height:90%; ">&copy; FLUSTIX GmbH 2017</a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>