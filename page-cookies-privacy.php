<?php 
/* Template name: Cookies e Políticas de Privacidade */; 

$dpo = get_field('dpo','options');

?>
  
<?php get_header(); ?>

<main class="page-cookies-privacy">
  <div class="container">
    <div class="typography">
      <div class="container">
        <h1><?php the_title(); ?></h1>

        <?php the_content(); ?>

      </div>
    </div>

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

