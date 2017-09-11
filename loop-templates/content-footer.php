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

                        <p style="margin-left: 16px; font-weight: 400;">Mail: <a href="mailto:info@flustix.com">info@flustix.com</a> <br>Phone: +49 (0) 30 80 93 331-11 <br> Kronprinzendamm 20, 10711 Berlin</p>

                        <li class="nav-item">
                            <h2 class="nav-link" style="font-size: 24px; margin-bottom: 1px;"><a data-toggle="modal" data-target="#newsletterModal">Newsletter</a></h2>
                        </li>
                        <li class="nav-item">
                            <h2 class="nav-link" style="font-size: 24px; margin-bottom: 1px;">Videos</h2>
                        </li>
                        <li class="nav-item">
                            <h2 class="nav-link" style="font-size: 24px; margin-bottom: 1px;"><a href="http://flustix.com/wp-content/uploads/2017/08/FAQs_FLUSTIX.pdf" target="_blank">FAQ's</a></h2>
                        </li>
                        <li class="nav-item">
                            <h2 class="nav-link" style="font-size: 24px; margin-bottom: 1px;"><a href="http://flustix.com/wp-content/uploads/2017/08/Rechtsersatz_Grundsätzlich.pdf" style="color: #333;" target="_blank" >Rechtliche Hinweise</a></h2>
                        </li>
                        <li class="nav-item">
                            <h2 class="nav-link" style="font-size: 24px; margin-bottom: 1px;"><a href="/impressum/" style="color: #333;">Impressum</a></h2>
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
            <div class="social-media-icons">
            <img class="explanation" src="<?php echo get_stylesheet_directory_uri() . '/img/folgeuns.png' ?>" style="">
            <div class="d-block images"><a target="_blank" href="https://www.facebook.com/flustix"><img src="<?php echo get_stylesheet_directory_uri() . '/img/facebook.png' ?>" style=""></a>
            <a target="_blank"href="https://twitter.com/flustix_siegel"><img src="<?php echo get_stylesheet_directory_uri() . '/img/twitter.png' ?>" style=""></a>
            <a target="_blank" href="https://www.instagram.com/flustix_official/"><img src="<?php echo get_stylesheet_directory_uri() . '/img/instagram.png' ?>" style="">
                <a target="_blank" href="https://www.xing.com/xbp/pages/flustix"><img src="<?php echo get_stylesheet_directory_uri() . '/img/linkedin.png' ?>" style=""></a>
                <a target="_blank" href="https://www.xing.com/xbp/pages/flustix"><img src="<?php echo get_stylesheet_directory_uri() . '/img/logo.png' ?>" style=""></a>
            </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>