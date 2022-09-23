<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#900000">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-1 top">
                <?php get_template_part('templates-parts/header/navbar'); ?>
                </div>
                <?php if(is_page(38)) { ?>

                <?php } else { ?>
                <div class="col col-1">
                <?php get_template_part('templates-parts/header/title-page'); ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </header>
    <main id="main" class="container-fluid">
