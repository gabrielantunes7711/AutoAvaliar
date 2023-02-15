<?php

$page_404 = get_field('page_404','options');

?>

<?php if (!empty($page_404)): ?>
<main class="page-404">
  <?php get_header(); ?>

  <section class="section-404">
    <div class="container">
      <?php if (!empty($page_404['title'])): ?>
      <h1><?php echo $page_404['title']; ?></h1>
      <?php endif; ?>

      <?php if (!empty($page_404['description'])): ?>
      <p><?php echo $page_404['description']; ?></p>
      <?php endif; ?>
    
      <?php if (!empty($page_404['link'])): ?>
      <a href="<?php echo $page_404['link']['url']; ?>" class="btn-secondary" target="<?php echo $page_404['link']['target']; ?>"><?php echo $page_404['link']['title']; ?> <?php get_icon("arrow-right"); ?></a>
      <?php endif; ?>
    </div>
  </section>

  <?php get_footer(); ?>
</main>
<?php endif; ?>