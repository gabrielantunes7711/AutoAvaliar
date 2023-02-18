<?php 
/* Template name: Mapa do Site */; 
?>
  
<?php get_header(); ?>

<main class="page-site-map">
  <div class="container">
    <h1>Mapa do site</h1>

    <?php
            
    $args = [
        'menu' => 'Menu Mapa do Site',
        'container' => 'nav'
    ];

    wp_nav_menu($args)
    ?>
  </div>
</main>

<?php get_footer(); ?>

