<?php

$section_solutions = get_field("section_solutions")

?>

<section class="section-solutions">
    <div class="container">
        <?php if (!empty($section_solutions['title'])): ?>
        <h2><?php echo $section_solutions['title']; ?></h2>
        <?php endif; ?>

        <?php if (!empty($section_solutions['description'])): ?>
        <p><?php echo $section_solutions['description']; ?></p>
        <?php endif; ?>
    </div>
    
    <div class='swiper slide-solutions'>
        <div class='swiper-wrapper'>
            <?php 
                $args = [
                    'post_type' => 'solution',
                    'posts_per_page' => -1,
                ];

                $the_query = new WP_Query( $args );

                if ($the_query->have_posts()):
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
            ?>
            <div class='swiper-slide'>
                <article class="solutions-card">
                    <a href="<?php the_permalink() ?>">
                        <div class="top">
                            <figure>
                                <?php the_post_thumbnail() ?>
                            </figure>

                            <h2><?php the_title() ?></h2>
                        </div>

                        <div class="bottom">
                            <p>Com o marketplace B2B, através de um aplicativo próprio, o avaliador acessa todas as características do veículo para determinar o preço justo.</p>

                            <span class="btn-secondary">Conheça mais <?php get_icon('arrow-right') ?></span>
                        </div>
                    </a>
                </article>
            </div>

            <?php endwhile; endif; wp_reset_postdata(); ?>
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
</section>