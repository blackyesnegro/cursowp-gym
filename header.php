<!DOCTYPE html>
<html lang="es">
  <head>
  <?php wp_head(); ?>
  </head>

<body >

<header class="site-header">
   <div class="contenedor">
        <div class="barra-navegacion">
            <div class="logo">
                <a href="<?php echo esc_url(site_url('/')) ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo sitio">
                </a>
            </div>
            <?php
                $args = array(
                    'theme_location' => 'menu-principal', 
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
            ?>
        </div>
   </div>
</header>
