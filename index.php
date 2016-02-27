<?php
/**
 * @package WordPress
 * @subpackage Nada
 * @since Nada 1.0
 */
get_header(); ?>

<main id="main" class="site-main" role="main">

  <?php if (have_posts()) : ?>

    <?php if (is_home() && ! is_front_page()) : ?>
      <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
      </header>
    <?php endif; ?>

    <?php
    // Start the loop.
    while (have_posts()) : the_post();
      get_template_part('templates/content', get_post_format());
    endwhile;

    // Previous/next page navigation.
    the_posts_pagination([
      'prev_text'          => __('Previous page', 'nada'),
      'next_text'          => __('Next page', 'nada'),
      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'nada') . ' </span>',
    ]);

  // If no content, include the "No posts found" template.
  else :
    get_template_part('template/content', 'none');
  endif;
  ?>

</main>

<?php get_footer(); ?>