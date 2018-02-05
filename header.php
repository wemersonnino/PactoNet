<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta property="og:locale" content="pt_BR">
        <meta property="og:title" content="Pacto Administradora - A Pacto esta onde você precisa, ao seu lado.">
        <meta property="og:url" content="http://pactonet.com.br">
        <meta property="og:site_name" content="Pacto Administradora Ltda">
        <meta property="article:publisher" content="https://pt-br.facebook.com/PactoAdministradora/">
        <meta property="fb:admins" content="https://www.facebook.com/@PactoAdministradora">
        <meta name="keywords" content="Consultoria, Administração, Pessoal, Empresa, Contabil, Financeiro, Jurídico,Administrativo, Seguradora, Pacto, condomínio,condomínios.conservadora;">
        <meta name="robots" content="follow">
        <meta name="theme-color" content="#ffffff">
        <meta name="description" content="Pacto Administradora tem como objetivo oferecer o máximo de assistência, executando funções administrativas do síndico.">
        <meta class="foundation-mq">
        <meta name="msapplication-TileColor" content="#003e82">
        <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet" media="all" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css" rel="stylesheet" media="all"/>
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" />
        <?php if (!get_option('site_icon')) : ?>
            <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <a id="skippy" class="sr-only sr-only-focusable" href="#content">
            <div class="container">
                <span class="skiplink-text"><?php _e('Skip to content', 'odin'); ?></span>
            </div>
        </a>

        <div class="container">
            <div class="row">
                <header id="navMenu">
                    <div class="container">
                        <div class="row">
                            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                                <div class="container">
                                    <div id="main-navigation" class="navbar navbar-default">
                                        <div class="navbar-header">
                                            <?php odin_the_custom_logo(); ?>
                                        </div> <!-- Logo Img -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
                                                <span class="sr-only"><?php _e('Toggle navigation', 'odin'); ?></span>
                                                <i class="fa fa-bars clBlue fa-2x" aria-hidden="true"></i>
                                            <!--<span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>-->
                                            </button>
                                            <a class="navbar-brand visible-xs-block" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                                <?php bloginfo('name'); ?>
                                            </a>
                                        </div>
                                        <nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">

                                            <?php
                                            wp_nav_menu(
                                                    array(
                                                        'theme_location' => 'main-menu',
                                                        'depth' => 2,
                                                        'container' => 'div',
                                                        'container_id' => 'bs-example-navbar-collapse-1 navbar-collapse',
                                                        'menu_class' => 'nav navbar-nav',
                                                        'fallback_cb' => 'Odin_Bootstrap_Nav_Walker::fallback',
                                                        'walker' => new Odin_Bootstrap_Nav_Walker()
                                                    )
                                            );
                                            ?>
                                            <ul class="nav navbar-nav espaceBox acessOnlineBtn">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle acessOnline" type="button" id="acessoOnLine" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span>Acesso Online</span> <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <form action="" method="post" id="formAcessOnline" data-toggle="validator" role="form">
                                                            <div class="col-md-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="usernameAcessOnLine" name="username" placeholder="Seu e-mail" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="password" class="form-control" id="inputSenhaAcessOnLine" name="Password" placeholder="Senha" data-error="Por favor, insira a senha correta." required>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                                <div class="clearfix"></div><br>
                                                                <div class="col-md-12 col-sm-12 text-center">
                                                                    <button id="submit" type="submit" class="btn btn-primary btn-lg">
                                                                        Enviar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </ul>

                                        </nav><!-- .navbar-collapse -->
                                    </div><!-- #main-navigation-->
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
        <div class="clearfix"></div><br><br><br>

        <div class="clearfix"></div>
        <main class="container-fluid">
            <section class="row">
                <div id="wrapper">
                    
