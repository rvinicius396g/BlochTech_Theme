<?php //seção do conteúdo pra ser inser incluida 
if(have_posts()): while(have_posts() ): the_post();
?>
<div class="card mb-3">
    <h2>ARCHIEVE</h2>
        <div class="card-body">
        <h2>
            <a href="<?php the_permalink( ); ?>"><?=the_title();?></a>     
        </h2>
        <?=the_excerpt();?>
        <a class="btn btn-success" href="<?php the_permalink( ); ?>">Leia Mais</a>
    </div> <!-- FIM CARD BODY-->
</div> <!--FIM CARD -->
<?php
    endwhile; else: endif; ?>