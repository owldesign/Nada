<?php
/**
 * @package WordPress
 * @subpackage Nada
 * @since Nada 1.0
 */
?>

<footer id="footer" class="site-footer" role="contentinfo">
  <?php if (has_nav_menu('secondary')) : ?>
    <nav class="secondary-navigation" role="navigation" aria-label="<?php esc_attr_e('Secondary Nav', 'nada'); ?>">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'secondary',
          'menu_class'     => 'secondary-links-menu',
          'depth'          => 1,
          'link_before'    => '<span class="screen-reader-text">',
          'link_after'     => '</span>',
        ) );
      ?>
    </nav>
  <?php endif; ?>
  
  <hr />
  <p>2016 Nada Theme</p>
</footer>

<?php wp_footer(); ?>