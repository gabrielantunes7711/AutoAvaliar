<?php
$our_location = get_field('our_location')
?>

<?php if (!$our_location == ""): ?>
<section class="section-our-location">
  <div class="container">
    <header>
      <?php if (!empty($our_location['title'])): ?>
      <h2><?php echo $our_location['title']; ?></h2>
      <?php endif; ?>

      <?php if (!empty($our_location['description'])): ?>
      <p><?php echo $our_location['description']; ?></p>
      <?php endif; ?>
    </header>

    <main>
      <?php if (!empty($our_location['image'])): ?>
      <figure>
        <img src="<?php echo $our_location['image']['url']; ?>" alt="<?php echo $our_location['image']['alt']; ?>">
      </figure>
      <?php endif; ?>

      <div class='swiper slide-our-location'>
        <div class='swiper-wrapper'>
          <?php if (!empty($our_location['our_location'])): foreach($our_location['our_location'] as $item) : ?>
          <div class='swiper-slide'>
            <address class="locales">
              <?php if (!empty($item['country'])): ?>
              <h3><?php echo $item['country']; ?></h3>
              <?php endif; ?>

              <?php if (!empty($item['office'])): ?>
              <strong><?php echo $item['office']; ?></strong>
              <?php endif; ?>

              <?php if (!empty($item['phone'])): ?>
              <span><a href="tel:<?php echo $item['phone']; ?>">Tel: <?php echo $item['phone']; ?></a></span>
              <?php endif; ?>

              <?php if (!empty($item['address'])): ?>
              <span>End: <?php echo $item['address']; ?></span>
              <?php endif; ?>
            </address>
          </div>
          <?php endforeach; endif?>
        </div>
        <div class="container">
          <div class='slider-btn-secondary btn-prev'>
          <?php get_icon('chevron-left'); ?>
          </div>

          <div class='slider-btn-secondary btn-next'>
          <?php get_icon('chevron-right'); ?>
          </div>
        </div>
      </div>
    </main>
  </div>
</section>
<?php endif; ?>