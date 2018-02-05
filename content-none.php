<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<header class="page-header">
	<h1 class="page-title"><?php _e( 'Nada encontrado', 'Pacto Administrativo' ); ?></h1>
</header>

<div class="page-content container">
    <div class="row">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( __( 'pronto para publicar seu primeiro post? <a href="%1$s">Get started here</a>.', 'Pacto Administradora' ), admin_url( 'post-new.php' ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

		<p><?php _e( 'Desculpe, mas nada corresponde aos seus termos de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.', 'Pacto Administradora' ); ?></p>
		<?php get_search_form(); ?>

	<?php else : ?>

		<p><?php _e( 'Parece que não podemos encontrar o que você está procurando. Talvez a pesquisa possa ajudar.', 'Pacto Administradora' ); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>
    </div>
</div><!-- .page-content -->
