<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-footer-';

$images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0
if ( !empty( $images ) ) {
    foreach ( $images as $image ) {
        $image = $image;
    }

}

?>
<div class="section" id="section10" style="background-image:url('<?php echo $image['url'] ?>');">
<div class="container-fluid">
    <?php
    $images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0


    if ( !empty( $images ) ) {

        $image = $images[0]['url'];

    }
    ?>
    <div class="row">


        <div class="col-md-6">

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>

        </div>

        <div class="col-md-4 col-md-offset-4">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">info@flustix.com</a><a href="tel:+49(0)308093331-11">+49 (0) 30 80 93 331-11</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kronprinzendamm 20, 10711 Berlin</a>
                </li>
            </ul>

        </div>

        <div class="col-md-4">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">&copy; FLUSTIX GmbH 2017</a>
                </li>

            </ul>
        </div>


    </div>
</div>
</div>