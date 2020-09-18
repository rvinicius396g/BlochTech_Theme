<?php //seção do conteúdo pra ser inser incluida

if(have_posts()): while(have_posts() ): the_post();
?>
    
     <p><?=get_the_date('d/m/Y'); ?></p>
     
    <?=the_content();?> 
        <div class="row">
            <section class='col-md-6'><h5 class='tit_Tag'>Tags:<h5\> 
            <?php
            $tags = get_the_tags();
            if($tags):
                foreach ($tags as $tag):
            ?>
                <a class="badge badge-sucess" href="<?=get_tag_link($tag->term_id);?>">
                    <?= $tag->name;?>
                </a>
            <?php
                endforeach;
            endif
                ?>
            </section> <!-- End Tag-->
            <section class='col-md-6'>
                <h5 class='tit_Cat'>Assunto(s):<h5\>  
            <?php 
                $categories = get_the_category();
                if($categories):
                    foreach($categories as $cat):
                ?>
                <a href="<?= get_category_link($cat -> term_id); ?>">
                    <?=$cat->name; ?>
                </a>

                    <?php
                    endforeach;
                endif;
                ?>
            </section> <!-- End Category-->
        </div><!-- End Row-->  
        <section class="col-md-12">
            <?php
                comments_template();
            ?>
        </section>
         
    <?php
    endwhile; else: endif; ?>