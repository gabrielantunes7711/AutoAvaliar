<?php
$testimonies = get_field("testimonies","options");
?>

<?php if ($testimonies['testimonies'] != ""): ?>
<section class="section-testimonies">
  <div class="container">
    <?php if (!empty($testimonies['title'])): ?>
    <h2><?php echo $testimonies['title']; ?></h2>
    <?php endif; ?>

    <div class='swiper slide-testimonies'>
      <div class="container">
          <div class='slider-btn-secondary btn-prev'>
          <?php get_icon('chevron-left'); ?>
          </div>

          <div class='slider-btn-secondary btn-next'>
          <?php get_icon('chevron-right'); ?>
          </div>
      </div>
      <div class='swiper-wrapper'>

        <?php foreach($testimonies['testimonies'] as $item) : ?>
        <div class='swiper-slide'>
          <div class="testimonial-card">
            <blockquote>
              <?php echo get_icon('quotation'); ?>

              <?php if (!empty($item['testimony'])): ?>
              <p><?php echo $item['testimony']; ?></p>
              <?php endif; ?>

              <hr>

              <cite>
                <?php if (!empty($item['name'])): ?>
                <strong><?php echo $item['name']; ?></strong>
                <?php endif; ?>

                <?php if (!empty($item['enterprise'])): ?>
                <span><?php echo $item['enterprise']; ?></span>
                <?php endif; ?>
              </cite>
            </blockquote>

            <div class="right">
              <?php if (!empty($item['link'])): ?>
              <div class="btn-play" data-iframe-src='<?php echo $item['link']; ?>'><?php echo get_icon('play'); ?></div>
              <?php endif; ?>

              <?php if (!empty($item['image'])): ?>
              <figure>
                <img class="cover" src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>">
              </figure>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>