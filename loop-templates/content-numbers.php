<?php
/**
 * Created by PhpStorm.
 * User: hendrikvlaanderen
 * Date: 21.08.17
 * Time: 13:40
 */

$prefix = 'fl-numbers-';
$class = $prefix.'section';

$images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0
if ( !empty( $images ) ) {
    foreach ( $images as $image ) {
        $image = $image;
    }

}


?>
<div class="section" id="section9" style="background-image:url('<?php echo $image['url'] ?>');">

<div class="container-fluid <?= $class ?>">
    <?php
    $images = rwmb_meta( $prefix.'image', 'size=full' ); // Since 4.8.0


    if ( !empty( $images ) ) {

        $image = $images[0]['url'];

    }
    ?>
    <div class="row">
        <h1 class="main"><?php echo get_post_meta( get_the_ID(), $prefix.'head', true ); ?></h1>
    </div>
        <div class="row">
        <h1 class="sub"><?php echo get_post_meta( get_the_ID(), $prefix.'overlay-text', true ); ?></h1>
        <?php
        ?>
    </div>
</div>
</div>
