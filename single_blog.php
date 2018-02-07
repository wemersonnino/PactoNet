<?php
/*
  WP Post Template: Blog
  Description: A description e opcional. Escreva se quiser!
 */
?>
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
<?php get_header(); ?> ?>

<main id="blogBlocoMain" class="col-lg-8 col-md-8 col-sm-12"  tabindex="-1" role="main">
    <header>
        <!--<img class="img-responsive wp-image-721 size-full aligncenter" src="http://pacto.inf.br/wp-content/uploads/2018/01/blog-pacto-topo.jpg" alt="" width="1905" height="309" />-->
        <?php echo '<header id="bannerBlog">
            <div class="text-left">
                <h2 class="ft4 fB clWhite">Blog</h2>
            </div>
        </header>'; ?>
    </header> <!-- /Banner blog -->
    <?php
    // Start the Loop.
    while (have_posts()) : the_post();

        /*
         * Include the post format-specific template for the content. If you want to
         * use this in a child theme, then include a file called called content-___.php
         * (where ___ is the post format) and that will be used instead.
         */
        get_template_part('content', get_post_format());

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
    endwhile;
    ?>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
