<?=get_header();?>
<div class="container"> 
    <h1>Archieve</h1>
    <?php get_template_part( 'includes/section', 'archive' );?>
    <?php// previous_post_link(); ?>
    <?php// next_post_link(); ?>

    <?php
        global $wp_query;
        $big  =  999999999;

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?page=%#%',
            'current' => max(1 , get_query_var( 'paged') ),
            'total' => $wp_query -> max_num_pages
            ) );
    ?>
</div>

<?=get_footer();?>