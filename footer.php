<footer class="container card">
    <section class="row card-body mt-1">
        <article class="col-md-6">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'=>'menu-navegacao-footer',
                        'menu_class'=>'footer-bar'
                    )
                );
            ?>
        </article>
        <article class="col-md-4">
                widgets
            <?php if(is_active_sidebar('footer-widget-right') ):?>
                <?php dynamic_sidebar( 'footer-widget-right' ); ?>
            <?php endif ?>
        </article>
    </section>
</footer>


<?php wp_footer();?>
</body>
</html>