<?php
/**
 * @package WordPress
 * @subpackage Nada
 * @since Nada 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php if (is_sticky() && is_home() && ! is_paged()) : ?>
      <span class="sticky-post"><?php _e('Featured', 'nada'); ?></span>
    <?php endif; ?>

    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
  </header>


  <div class="entry-content">
    <?php the_excerpt(); ?>
  </div>
</article>
