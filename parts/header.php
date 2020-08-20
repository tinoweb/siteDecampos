<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DeCampos Security</title>
    
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- <div class="preloader"></div> -->

    <div class="page-wrapper">
        <header class="main-header header-style-one">
            <div class="top-header">
                <!-- <div class="container">
                    <div class="left-info">
                        <p><i class="cameron-icon-email"></i><a href="mailto:support@example.com">support@example.com</a></p>
                    </div>
                    <div class="right-info">
                        <ul class="info-block">
                            <li><i class="cameron-icon-support"></i><a href="#">(0121) 268 3610</a></li>
                            <li><a href="cart.html" class="cart-btn"><i class="cameron-icon-shopping-bag"></i><span class="count-text">(0)</span></a></li>
                        </ul>
                    </div>
                </div> -->
            </div><!-- /.top-header -->
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="index.php">
                            <img width="198" height="95" src="images/resources/logo-1-1.jpeg" class="main-logo" alt="Awesome Image"/>
                            <img style="width: 171px;height: 84px;" src="images/resources/logo-1-2.png" class="stricky-logo" alt="Awesome Image"/>
                        </a>

                        <button class="menu-toggler" data-target=".header-style-one .main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div>

                    <?php
                        function active($currect_page){
                            $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
                            $url = end($url_array);  
                            if($currect_page == $url){
                                echo 'current'; //class name in css 
                            } 
                        }
                    ?>

                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <li class="<?php active('index.php');?>">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="<?php active('sobrenos.php');?>">
                                <a href="sobrenos.php">Sobre Nós</a>                            
                            </li>
                            <li class="<?php active('servicos.php');?>">
                                <a href="servicos.php">Serviços</a>
                            </li>
                            <li class="<?php active('contato.php');?>">
                                <a href="contato.php">Contato</a>
                            </li>
                        </ul>
                    </div>

                    <div class="right-side-box">
                        <div class="social">
                            <a target="_blank" href="https://www.facebook.com/decampossecurit"><i class="fa fa-facebook-f"></i></a>
                            <a target="_blank" href="https://www.instagram.com/decampos_security/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>