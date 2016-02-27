<?php
/**
 * @package WordPress
 * @subpackage Nada
 * @since Nada 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header id="masthead" class="site-header" role="banner">

    <div class="site-branding">
      <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
    </div>

    <?php if (has_nav_menu('primary') || has_nav_menu('secondary')) : ?>
      
      <?php if (has_nav_menu('primary')) : ?>
        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'nada'); ?>">
          <?php
            wp_nav_menu([
              'theme_location' => 'primary',
              'menu_class'     => 'primary-menu',
             ]);
          ?>
        </nav>
      <?php endif; ?>

    <?php endif; ?>

  </header>