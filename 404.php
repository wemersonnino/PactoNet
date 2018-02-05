<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Odin
 * @since 2.2.0
 */
get_header();
?>

<main id="content" class="<?php echo odin_classes_page_full(); ?>" tabindex="-1" role="main">

    <header class="page-header">
        <h1 class="page-title"><?php _e('Nada Encontrado', 'Pacto Administradora'); ?></h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="page-content">
                <p><?php _e('Parece que nada foi encontrado neste local. Talvez tente uma pesquisa?', 'odin'); ?></p>

                <?php get_search_form(); ?>
            </div><!-- .page-content -->
        </div>
    </div>
    <div class="row">
        <div class="text-center">
            <img alt="erro 404" src="http://pacto.inf.br/wp-content/uploads/2018/02/erro-404.jpg" class="img-responsive"/>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
