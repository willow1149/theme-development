<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
        <style>
            body, html{
                height: 100%;
                margin: 0;
                font-family: 'Raleway', sans-serif !important;
            }

            .main-wrapper .td-bg-img {
                height: 100%;
                background: url(<?php echo get_template_directory_uri(). '/assets/images/bg-image.jpg'; ?>);
                background-repeat: no-repeat;
                background-position: center;
                background-attachment: fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

        </style>
        <?php wp_head(); ?>
    </head>
    <body>
    <?php get_template_part('page-includes/inc', 'header'); ?>