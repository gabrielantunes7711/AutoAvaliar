<?php
$our_numbers = get_field('our-numbers')
?>

<?php if ($our_numbers != ""): ?>
<section class="section-our-numbers">
  <div class="container">
    <div class="left">
      <?php if (!empty($our_numbers)): foreach($our_numbers['our-numbers'] as $item) : ?>
      <div class="our-numbers-card">
        <span data-number="<?php echo $item['number']; ?>">0</span>
        <span><?php echo $item['description']; ?></span>
      </div>
      <?php endforeach; endif; ?>
    </div>

    <header>
      <?php if (!empty($our_numbers['title'])): ?>
      <h2><?php echo $our_numbers['title']; ?></h2>
      <?php endif; ?>

      <?php if (!empty($our_numbers['description'])): ?>
      <p><?php echo $our_numbers['description']; ?></p>
      <?php endif; ?>
    </header>
  </div>
</section>
<?php endif; ?>