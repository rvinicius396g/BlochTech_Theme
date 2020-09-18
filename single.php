<?=get_header();?>
<div class="container">
    <section class="row">
        <article class="col-md-8 card mt-2"> <!--posts-->
            <h1><?= the_title(); ?></h1>
             
            <?php get_template_part( 'includes/section', 'blogcontent' );?>
        </article>
        <article class="col-md-4"> <!-- coluna -->
        <?php if(is_active_sidebar('sidebar-right') ):?>
                <?php dynamic_sidebar( 'sidebar-right' ); ?>
            <?php endif ?>
        </article>
    </section>
</div>

<?=get_footer();?>