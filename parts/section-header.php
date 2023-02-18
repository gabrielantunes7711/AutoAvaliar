<?php
$header = get_field('header');
?>

<div class="section-header">
  <div class="container">
    <?php get_template_part('parts/breadcrumb'); ?>

    <div class="bottom">
      <?php if (!empty($header['title'])): ?>
      <h1><?php echo $header['title']; ?></h1>
      <?php endif; ?>

      <?php 
        if (!empty($header['description'])): 
        echo $header['description']; 
        endif; 
       ?>
    </div>
  </div>
</div>