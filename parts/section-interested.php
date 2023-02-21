<?php 
 $args = [
  'post_type' => 'for_who',
  'posts_per_page' => -1,
];

$the_query = new WP_Query( $args );

if ($the_query->have_posts()):

$count = 1;
$for_who_section = get_field('for_who_section')

?>

<section class="for-who">
    <div class="container">
      <?php if (!empty($for_who_section['title'])): ?>
      <h2><?php echo $for_who_section['title']; ?></h2>
      <?php endif; ?>
      
      <?php if (!empty($for_who_section['description'])): ?>
      <p><?php echo $for_who_section['description']; ?></p>
      <?php endif; ?>
    
      <div class="for-who-infos">
        <ul class="left scrollbar-styled">
          <?php
          while ($the_query->have_posts()) :
              $the_query->the_post();

          $for_who_call = get_field("for_who_call");
          ?>
          <li>  
            <a href="#forWhoCard<?php echo $count ?>" class="info-choice <?php echo $count == "1" ? "selected" : ''; ?>">
              <div class="container-icon">
                <?php if (!empty($for_who_call['icon'])): ?>
                <img src="<?php echo $for_who_call['icon']['url']; ?>" alt="<?php echo $for_who_call['icon']['alt']; ?>">
                <?php endif; ?>
              </div>
              
              <?php if (!empty($for_who_call['interested_party'])): ?>
              <h3><?php echo $for_who_call['interested_party']; ?></h3>
              <?php endif; ?>
            </a>
          </li>

        <?php $count++; endwhile; ?>
        </ul>

        <?php $count = 1; ?>

        <div class="right">
          <?php
          while ($the_query->have_posts()) :
              $the_query->the_post();

          $for_who_call = get_field("for_who_call");
          ?>
          <div class="for-who-card" id="forWhoCard<?php echo $count ?>">

            <?php if (!empty($for_who_call['thumbnail'])): ?>
            <figure>
              <img class="cover" src="<?php echo $for_who_call['thumbnail']['url']; ?>" alt="<?php echo $item['thumbnail']['alt']; ?>">
            </figure>
            <?php endif; ?>

            <div class="info-text">
              <?php if (!empty($for_who_call['synopsis'])): ?>
              <p><?php echo $for_who_call['synopsis']; ?></p>
              <?php endif; ?>
            
              <a href="<?php the_permalink(); ?>" class="btn-secondary">
                Saiba mais
                <?php get_icon('arrow-right') ?>
              </a>
            </div>
          </div>

          <?php $count++; endwhile; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; wp_reset_postdata(); ?>