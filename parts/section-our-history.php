<?php
$our_history = get_field('our_history');
$count = 1;
?>

<section class="our-history">
  <div class="container">
    <header>
      <?php if (!empty($our_history['title'])): ?>
      <h2><?php echo $our_history['title']; ?></h2>
      <?php endif; ?>

      <?php if (!empty($our_history['description'])): ?>
      <p><?php echo $our_history['description']; ?></p>
      <?php endif; ?>
    </header>

    <main>
      <div class="left">
        <div class="navigation-wrapper">
          <div class='slider-btn-secondary btn-prev'>
            <?php get_icon('chevron-left'); ?>
          </div>

          <div class='slider-btn-secondary btn-next'>
            <?php get_icon('chevron-right'); ?>
          </div>
        </div>

        <ul class="scrollbar-styled">
          <?php if (!empty($our_history['our_history_item'])): foreach($our_history['our_history_item'] as $item) : ?>
          <li>
            <a href="#ourHistory<?php echo $count; ?>" <?php echo $count == 1 ? "class='selected first-item'" : ""; echo $count == count($our_history['our_history_item']) ? "class='last-item'" : "";?>>
              <?php if (!empty($item['year'])): ?>
              <strong><?php echo $item['year']; ?></strong>
              <?php endif; ?>

              <?php if (!empty($item['important_point'])): ?>
              <span><?php echo $item['important_point']; ?></span>
              <?php endif; ?>
            </a>
          </li>
          <?php $count++; endforeach; endif; ?>
        </ul>
      </div>

      <?php $count = 1; ?>

      <?php if (!empty($our_history['our_history_item'])): foreach($our_history['our_history_item'] as $item) : ?>
      <div class="our-history-card" id="ourHistory<?php echo $count; ?>">
        <?php if (!empty($item['image'])): ?>
        <figure>
          <img class="cover" src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>">
        </figure>
        <?php endif; ?>

        <div class="description-wrapper">
          <?php 
            if (!empty($item['description'])): 
            echo $item['description']; 
            endif; 
          ?>
        </div>
      </div>
      <?php $count++; endforeach; endif ?>
    </main>
  </div>
</section>