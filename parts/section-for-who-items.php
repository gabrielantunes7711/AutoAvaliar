<?php

$args = [
  'post_type' => 'for_who',
  'posts_per_page' => -1,
];

$the_query = new WP_Query( $args );

if ($the_query->have_posts()):
?>

<section class="section-for-who-items">
  <div class="container">
    <div class="items-wrapper">

      <?php
      while ($the_query->have_posts()) :
        $the_query->the_post();

      $for_who_call = get_field('for_who_call');
      ?>

      <article class="for-who-items-card">
        <a href="<?php the_permalink(); ?>">
          <div class="icon-wrapper">
            <?php if (!empty($for_who_call['icon'])): ?>
            <img src="<?php echo $for_who_call['icon']['url']; ?>" alt="<?php echo $for_who_call['icon']['alt']; ?>">
            <?php endif; ?>
          </div>

          <?php if (!empty($for_who_call['interested_party'])): ?>
          <h2><?php echo $for_who_call['interested_party']; ?></h2>
          <?php endif; ?>
          
          <?php if (!empty($for_who_call['synopsis'])): ?>
          <?php echo $for_who_call['synopsis']; ?>
          <?php endif; ?>

          <span>Saiba mais <?php echo get_icon('arrow-right'); ?></span>
        </a>
      </article>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php endif; wp_reset_postdata(); ?>