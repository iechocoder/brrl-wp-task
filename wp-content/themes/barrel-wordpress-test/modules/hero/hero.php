<?php
// The headline
$headline = get_field('index__headline');
// product Field - ACF
$product = get_field('index__product');
// get the post contentn
$content = get_post_field('post_content');

?>
<?php
    $image = get_the_post_thumbnail_url( $post->ID, 'large' );
?>
  <section class="hero" style=" background: url(<?php echo $image;?>);background-size:cover;">
    <div class="container">
      <div class="hero-text">
        <div class="text">
          <h1><?php echo $headline; ?></h1>
          <p><?php echo $content; ?></p>
        </div>
      </div>
        <?php the_module('two-up'); ?>
    </div>
  </section>



