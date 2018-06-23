<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Adding svg sprite -->
    <?php get_template_part( 'assets/svg/sprite.svg.php' ); ?>

    <header class="header">
    </header>