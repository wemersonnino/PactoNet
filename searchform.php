<?php
/**
 * The template for displaying Search Form.
 *
 * @package Odin
 * @since 2.2.0
 */
?>


<form method="get" id="searchform" class="form-inline" action="<?php echo esc_url(home_url('/')); ?>" role="search">
    <div class="input-group">
        <input id="password" type="search" class="form-control" name="s" id="s" value="<?php echo get_search_query(); ?>" placeholder="<?php esc_attr_e('Buscar', 'Pacto'); ?>">
        <div class="text-right">
            <button type="submit" class="btn btn-link" value="<?php esc_attr_e('Search', 'odin'); ?>">
            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i> buscar</span>
        </button><!-- /input-group-btn -->
        </div>
    </div><!-- /input-group -->
</form><!-- /searchform -->
