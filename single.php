<?=get_header();?>
<div class="container">
    <section class="row">
        <article class="col-md-8 card mt-2"> <!--posts-->
            <h1><?= the_title(); ?></h1>
            <?php if(has_post_thumbnail( ) ): ?>
                <img class='img-thumbnail img-fluid' src="<?= the_post_thumbnail_url( ); ?>" alt="<?= the_title();?>">
            <?php endif; ?>
            <?php get_template_part( 'includes/section', 'blogcontent' );?>
        </article>
        <article class="col-md-4"> <!-- coluna -->
            coluna
        </article>
    </section>
</div>

<?=get_footer();?>