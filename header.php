<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charaset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    <header class="site-header">
      <a class="header-title" href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a>
      <h5 class="header-description"><?php bloginfo('description') ?></h5>
    </header>
