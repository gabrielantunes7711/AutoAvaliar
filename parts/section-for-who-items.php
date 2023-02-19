<?php
$for_who = get_field('for_who');
?>

<?php if (!$for_who == ""): ?>
<section class="section-for-who-items">
  <div class="container">
    <div class="items-wrapper">
      <?php if (!empty($for_who)) : foreach($for_who as $item) : ?>
      <article class="for-who-items-card">
        <a href="#">
          <div class="icon-wrapper">
            <?php if (!empty($item['icon'])): ?>
            <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>">
            <?php endif; ?>
          </div>

          <?php if (!empty($item['title'])): ?>
          <h2><?php echo $item['title']; ?></h2>
          <?php endif; ?>
          
          <?php if (!empty($item['description'])): ?>
          <p><?php echo $item['description']; ?></p>
          <?php endif; ?>

          <?php if (!empty($item['call'])): ?>
          <span><?php echo $item['call']; ?> <?php echo get_icon('arrow-right'); ?></span>
          <?php endif; ?>
        </a>
      </article>
      <?php endforeach; endif ?>
    </div>
  </div>
</section>
<?php endif; ?>