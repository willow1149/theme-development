<!DOCTYPE html>
<html lang="en">

<head>
    <title>Theme Development</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Raleway', sans-serif !important;
        }
        body{
            /* overflow: hidden; */
        }
        .header-wrapper {
            max-width: 1920px !important;
            height: 100%;
            position: relative;
        }
        .header-img-wrapper {
            height: 100%;
            display: block !important;
        }
        .td-header-img {
            height: 100%;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }
        .main-nav ul {
            padding: 0;
        }
        .main-nav ul li {
            list-style-type: none;
            text-align: center;    
        }
        .hamburger {
            padding: 10px;
            display: inline-block;
            cursor: pointer;
            transition-property: opacity, filter;
            transition-duration: 0.15s;
            transition-timing-function: linear;
            font: inherit;
            color: inherit;
            text-transform: none;
            background-color: transparent;
            border: 0;
            margin: 0;
            overflow: visible;
        }
        .hamburger:hover {
            opacity: 0.7;
        }

        .hamburger-box {
            width: 40px;
            height: 24px;
            display: inline-block;
            position: relative;
        }

        .hamburger-inner {
            display: block;
            top: 50%;
            margin-top: -2px;
        }
        .hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
            width: 40px;
            height: 4px;
            background-color: #000;
            position: absolute;
            transition-property: transform;
            transition-duration: 0.15s;
            transition-timing-function: ease;
        }
        .hamburger-inner::before, .hamburger-inner::after {
            content: "";
            display: block;
        }
        .hamburger-inner::before {
            top: -10px; 
        }
        .hamburger-inner::after {
            bottom: -10px; 
        }
/*
* Slider
*/
.hamburger--slider .hamburger-inner {
    top: 2px; 
}
.hamburger--slider .hamburger-inner::before {
    top: 10px;
    transition-property: transform, opacity;
    transition-timing-function: ease;
    transition-duration: 0.15s; 
}
.hamburger--slider .hamburger-inner::after {
    top: 20px; 
}

.hamburger--slider.is-active .hamburger-inner {
    transform: translate3d(0, 10px, 0) rotate(45deg);
}
.hamburger--slider.is-active .hamburger-inner::before {
    transform: rotate(-45deg) translate3d(-5.71429px, -6px, 0);
    opacity: 0;
}
.hamburger--slider.is-active .hamburger-inner::after {
    transform: translate3d(0, -20px, 0) rotate(-90deg); 
}

@media only screen and (min-width: 768px) {
    .main-nav {
        display:block;
        position: fixed;
        top: 0px;
        width: 100%;
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,000000+100&0.65+0,0+100 */
        background: -moz-linear-gradient(top, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
    }
    .main-nav ul {
        text-align: center;
        margin: 30px 0;
        padding: 0;
    }
    .main-nav ul li {
        display:inline-block;
        list-style-type: none;
        text-align: center;
        padding: 0px 30px;     
    }
}
@media only screen and (max-width: 768px) {
    .main-nav{
        background-color: #fff;
        position: fixed;
        top: 0;
        left: 0;
        width: 60%;
        height: 100%;
        -webkit-transition: 0.5s ease-out;
        -moz-transition: 0.5s ease-out;
        -o-transition: 0.5s ease-out;
        transition: 0.5s ease-out;
    }
    .main-nav ul{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        right: 0;
    }
    .main-nav ul li{
        padding: 10px ; 
    }
    .off-canvas{
        background-color: #fff;
        position: fixed;
        top: 0;
        left: -440px;
        width: 60%;
        height: 100%;
    }
    .off-canvas ul{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        right: 0;
    }
    .off-canvas ul li{
        padding: 10px ; 
    }
    .hamnburger-btn{
        position: fixed;
        top: 0;
        left: 0;
        z-index: 99999;
        background-color: #fff;
    }
}
</style>
<?php wp_head(); ?>
</head>

<body>
    <?php get_template_part( 'page-includes/inc', 'header'); ?>