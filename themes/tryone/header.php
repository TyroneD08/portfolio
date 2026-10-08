<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="site-vanta" class="site-vanta" aria-hidden="true"></div>

<header class="header">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">Tyrone Offei</a>
    <nav aria-label="Hoofdnavigatie">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <a class="nav-accent" href="<?php echo esc_url(home_url('/projecten/')); ?>">Projecten</a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
        <a class="nav-accent" href="<?php echo esc_url(home_url('/over-mij/')); ?>">Over mij</a>
    </nav>
</header>
