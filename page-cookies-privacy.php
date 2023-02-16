<?php 
/* Template name: Cookies e Políticas de Privacidade */; 

$dpo = get_field('dpo','options');

?>
  
<?php get_header(); ?>

<main class="page-cookies-privacy">
  
  <?php 

    if (is_page(230)): 
    get_template_part('parts/section-cookies-policy');
    endif; 

    if (is_page(251)): 
    get_template_part('parts/section-privacies-policy');
    endif; 
  ?>

  <div class="container">
    <?php if ($dpo != ""): ?>
      <div class="dpo-in-charge">
        <?php if (!empty($dpo['title'])): ?>
        <strong><?php echo $dpo['title']; ?></strong>
        <?php endif; ?>

        <?php if (!empty($dpo['description'])): ?>
        <p><?php echo $dpo['description']; ?></p>
        <?php endif; ?>
      </div>
      <?php endif; ?>
  </div>

  <?php get_footer(); ?>
</main>

