<?php
// The headline
$headline = get_field('index__headline');
// product Field - ACF
$product = get_field('index__product');

// get the post contentn
$content = get_post_field('post_content');
$class = 'hero_image';
?>

<section class="hero" data-module="hero">
  <?php
    $image = get_the_post_thumbnail_url( $post->ID, 'large' );
    the_module('image', array(
      'image' => $image,
      'class' => $class,
      'id' => $post->ID,
    ));
    ?>
    <div class="center_content">
      <h1><?php echo $headline; ?></h1>
      <p><?php echo $content; ?></p>
    </div>
</section>
<div class="below_border"></div>
<? the_module('two-up'); ?>

