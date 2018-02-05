<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<div class="clearfix"></div><br><br><br>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div id="blogBlocoMain" class="col-lg-12 col-md-12 col-sm-12">
        <div class="container">
            <section class="col-md-12 col-sm-12">
                <div class="clearfix"></div><br><br><br>
                <div class="col-md-12 col-sm-12">
                    <div class="text-uppercase text-capitalize fB">
                        <?php
                        if (is_single()) :
                            the_title('<h1 class="entry-title ft3 text-uppercase text-capitalize fB">', '</h1>');
                        else :
                            the_title('<h2 class="entry-title ft2"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                        endif;
                        ?>
                    </div>
                    <div class="text-left">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="datePost">
                                <p class="clWhite fR text-center">
                                    <?php if ('post' == get_post_type()) : ?>
                                    <div class="entry-meta clWhite">
                                        <?php odin_posted_on(); ?>
                                    </div><!-- .entry-meta -->
                                    <div class="clearfix"></div>
                                <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div><!-- /Date post -->
                    <div class="clearfix"></div><br>
                    
                        <?php if (is_search()) : ?>
                        
                    <div class="entry-summary text-capitalize text-justify fR">
                            <?php the_excerpt(); ?>
                        </div><!-- .entry-summary -->
                    <?php else : ?>
                        <div class="entry-content text-capitalize text-justify fR">
                            <?php
                            the_content(__('continue lendo <span class="meta-nav">&rarr;</span>', 'Pacto Administradora'));
                            wp_link_pages(array(
                                'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'odin') . '</span>',
                                'after' => '</div>',
                                'link_before' => '<span>',
                                'link_after' => '</span>',
                            ));
                            ?>
                        </div><!-- .entry-content -->
                    <?php endif; ?>
                    </p><!-- /Text post -->
                    <div class="clearfix"></div><br>    
                </div>
            </section>
        </div>
    </div>


    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <footer class="entry-meta">
                <div class="row">
                    <?php if (in_array('category', get_object_taxonomies(get_post_type()))) : ?>
                        <span class="cat-links"><?php echo __('Posted in:', 'odin') . ' ' . get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'odin')); ?></span>
                    <?php endif; ?>
                    <?php the_tags('<span class="tag-links">' . __('Tagged as:', 'odin') . ' ', ', ', '</span>'); ?>
                    <?php if (!post_password_required() && ( comments_open() || get_comments_number() )) : ?>
                        <span class="comments-link"><?php comments_popup_link(__('Deixe um comentáriot', 'Pacto Administradora'), __('1 Comment', 'odin'), __('% Comments', 'odin')); ?></span>
                    <?php endif; ?>
                </div>
            </footer>
        </div>
    </div>
    
    <div class="clearfix"></div>
</article><!-- #post-## -->
<div class="clearfix"></div>