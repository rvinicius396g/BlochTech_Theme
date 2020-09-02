<?php //seção do conteúdo pra ser inser incluida

if(have_posts()): while(have_posts() ): the_post();
?>
    
     <p><?=get_the_date('d/m/Y'); ?></p>
     
    <?=the_content();?>

    <?php
        
        echo "<section class='col-md-12'>";
        echo "<h5 class='tit_Tags'>Tags: <h5\>";
        $tags = get_the_tags();
            foreach ($tags as $tag):
        ?>
            <a class="badge badge-sucess" href="<?=get_tag_link($tag->term_id);?>">
                <?= $tag->name;?>
            </a>
    <?php
            endforeach;
        echo "</section>";
        echo "<section class='col-md-12'>
            <h5 class='tit_Cat'>
                Categoria: 
            <h5\>";   
        $categories = get_the_category();
        foreach($categories as $cat):
        ?>
        <a href="<?= get_category_link($cat -> term_id); ?>">
            <?=$cat->name; ?>
        </a>

        <?php
        endforeach;
        echo "</section>";
        
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        echo "<section class='col-md-12 sectionAutor'>";
            echo "Autor: $fname $lname <br/>";
            echo get_the_author_meta('description');
        echo "</section>";
        
        ?>
        
    <?php //comments_template(); ?>
    <?php
    endwhile; else: endif; ?>