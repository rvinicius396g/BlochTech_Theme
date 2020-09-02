<?=get_header();?>
<div class="container">
    <section class="row">
        <article class="col-md-8"> <!--posts-->
            <?php get_template_part( 'includes/section', 'content' );?>
        </article>
        <article class="col-md-4">
            coluna
        </article>
    </section>
</div>

<?=get_footer();?>