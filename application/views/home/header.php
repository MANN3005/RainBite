<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FooYes - Quality delivery or takeaway food">
    <meta name="author" content="Ansonika">
    <title>RainBite</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url('assets/img/apple-touch-icon-57x57-precomposed.png');?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url('assets/img/apple-touch-icon-72x72-precomposed.png');?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url('assets/img/apple-touch-icon-114x114-precomposed.png');?>">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url('assets/img/apple-touch-icon-144x144-precomposed.png');?>">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap_customized.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
</head>

<body>
                
    <header class="header  clearfix element_to_stick">
        <div class="container">
            <div id="logo">
                <a href="index.html">
                <img src="<?php echo base_url('assets/img/logo.svg');?>" width="162" height="35" alt="" class="logo_normal">
                <img src="<?php echo base_url('assets/img/logo_sticky.svg');?>" width="162" height="35" alt="" class="logo_sticky">
                </a>
            </div>
            <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
            <ul id="top_menu">
                <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
                <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
            </ul>      <!-- /top_menu -->

            <a href="#0" class="open_close">
                <i class="icon_menu"></i><span>Menu</span>
            </a>
            <nav class="main-menu">
                <div id="header_menu">
                    <a href="#0" class="open_close">
                        <i class="icon_close"></i><span>Menu</span>
                    </a>
                    <a href="index.html"><img src="<?php echo base_url('img/logo.svg');?>" width="162" height="35" alt=""></a>
                </div>
                <ul>
                    <li class="submenu">
                        <a href="<?php echo base_url('Home');?>" class="show-submenu">Home</a>
                    </li>
                    <li class="submenu">
                        <a href="<?php echo base_url('Order');?>" class="show-submenu">Order</a>
                    </li>
                    <li class="submenu">
                        <a href="<?php echo base_url('Blog');?>" class="show-submenu">Blog</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- /header -->