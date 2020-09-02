<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    
    <?php wp_head();?>

</head>
<body <?php body_class();?>>
    <header class="container">
    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
    <img class="img-responsive img-custom-logo" src="<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							echo $image[0]; ?>" alt="Logo do site" style="width: 20%">
    </a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'menu-navegacao-top' 
        ) );
        ?>
    </div>
</nav>
    </header>

