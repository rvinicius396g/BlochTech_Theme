<?=get_header();?>
<div class="container">
    <section class="row">
        <article class="col-md-8"> <!--posts-->
            <?php get_template_part( 'includes/section', 'content' );?>
        </article>
        <article class="col-md-4 sidebarRight">
            <!-- coluna -->
            <?php if(is_active_sidebar('sidebar-right') ):?>
                <?php dynamic_sidebar( 'sidebar-right' ); ?>
            <?php endif ?>
        </article>
    </section>
</div>

<?=get_footer();?>