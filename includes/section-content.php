<?php //seção do conteúdo pra ser inser incluida 
if(have_posts()): while(have_posts() ): the_post();
?>
<div class="card mb-3">
        <div class="card-body">
        <h2><a href="<?php the_permalink( ); ?>"><?=the_title();?></a></h2>
        <?=the_excerpt();?>
        <?php
            echo "<section class='col-md-12'>";
            // var_dump($tags);
            $categories = get_the_category();
            if($categories != false):
                echo 'Categoria:';
            foreach ($categories as $cat):
            ?>
                <a class="badge badge-sucess" href="<?=get_category_link($cat->term_id);?>">
                    <?= $cat->name;?>
                </a>
            <?php
            endforeach;
            endif;

        ?>
        </section>
        
    </div> <!-- FIM CARD BODY-->
</div> <!--FIM CARD -->
<?php
    endwhile; else: endif; 
    global $wp_query;
        $big  =  999999999;

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?page=%#%',
            'current' => max(1 , get_query_var( 'paged') ),
            'total' => $wp_query -> max_num_pages
            ) );
?>