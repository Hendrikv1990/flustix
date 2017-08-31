<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-footer-';

?>
<div class="section <?= $prefix?>section" id="section10">
    <div class="container-fluid">
        <div class="row">




        <div class="col-md-6">
            <div class="row">

                <div class="col-md-12">
                    <div class="inner">

                    <ul class="nav flex-column" style="text-align: left;">
                        <li class="nav-item">
                            <h2 class="nav-link active" style="font-size: 24px;">KONTAKT :</h2>
                        </li>

                        <p style="margin-left: 16px; font-weight: 400;">Mail: info@flustix.com <br>Phone: +49 (0) 30 80 93 331-11 <br> Kronprinzendamm 20, 10711 Berlin</p>

                        <li class="nav-item">
                            <h2 class="nav-link" style="font-size: 24px; margin-bottom: 1px;"><a data-toggle="modal" data-target="#newsletterModal">Newsletter</a></h2>
                        </li>
                        <li class="nav-item">
                            <h2 class="nav-link" style="font-size: 24px; margin-bottom: 1px;">Videos</h2>
                        </li>
                        <li class="nav-item">
                            <h2 class="nav-link" style="font-size: 24px; margin-bottom: 1px;">FAQ's</h2>
                        </li>
                        <li class="nav-item">
                            <h2 class="nav-link" style="font-size: 24px; margin-bottom: 1px;"><a href="/impressum/" style="color: #333;">Rechtliche Hinweise</a></h2>
                        </li>
                        <li class="nav-item">
                            <h2 class="nav-link" style="font-size: 24px; margin-bottom: 1px;"><a href="/datenschutz/" style="color: #333;">Datenschutz</a></h2>
                        </li>
                    </ul>
                    </div>

                </div>
            </div>

            <ul class="nav footer-bottom">
                <li class="nav-item">
                    <a style="">&copy; FLUSTIX GmbH 2017</a>
                </li>

            </ul>

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
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/folgeuns.png' ?>" style="width: 520px;height: auto;bottom: 5%;position: fixed;left: 75%;transform: translate(-50%, -50%);">
            <a href="https://www.facebook.com/flustix"><img src="<?php echo get_stylesheet_directory_uri() . '/img/facebook.png' ?>" style="height: 65px;width: 65px;bottom: 4%; margin-bottom: 35px; position: fixed; left: 60%; transform: translate(-50%, -50%);"></a>
            <a href="https://twitter.com/flustix_siegel"><img src="<?php echo get_stylesheet_directory_uri() . '/img/twitter.png' ?>" style="height: 65px;width: 65px;bottom: 4%; margin-bottom: 35px; position: fixed; left: 68%; transform: translate(-50%, -50%);"></a>
            <a href="https://www.instagram.com/flustix_official/"><img src="<?php echo get_stylesheet_directory_uri() . '/img/instagram.png' ?>" style="height: 65px;width: 65px;bottom: 4%; margin-bottom: 35px; position: fixed; left: 76%; transform: translate(-50%, -50%);">
                <img src="<?php echo get_stylesheet_directory_uri() . '/img/linkedin.png' ?>" style="height: 65px;width: 65px;bottom: 4%; margin-bottom: 35px; position: fixed; left: 84%; transform: translate(-50%, -50%);"></a>
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/logo.png' ?>" style="height: 65px;width: 65px;bottom: 4%; margin-bottom: 35px; position: fixed; left: 92%; transform: translate(-50%, -50%);">
        </div>
        </div>
        </div>
    </div>
</div>