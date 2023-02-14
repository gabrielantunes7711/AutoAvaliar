<?php

$slide = get_field('slide');

?>

<?php if (!empty($slide)): ?>
<section class="hero">
    <div class='swiper slide-hero'>
      <div class='swiper-wrapper'>
        <?php foreach($slide as $item) : ?>
          <div class='swiper-slide'>
            <a class="hero-banner" <?php echo (!empty($item['link'])) ? "href='{$item['link']}'" : ''; ?>>
              <div class="container">
                <figure>
                  <img class="cover" src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>">
                </figure>

                <h2><?php echo $item['title']; ?></h2>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="container">
        <div class='slider-btn btn-prev'>
          <?php get_icon('chevron-left'); ?>
        </div>

        <div class='slider-btn btn-next'>
          <?php get_icon('chevron-right'); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
