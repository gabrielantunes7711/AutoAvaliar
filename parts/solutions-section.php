<section class="section-solutions">
    <div class="container">
        <h2>Soluções</h2>
        <p>Nam vel ultricies ligula. Integer dignissim laoreet libero, eget iaculis enim tincidunt vel.</p>
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

                            <a href="<?php the_permalink() ?>" class="btn btn-secondary">Conheça mais <?php get_icon('arrow-right') ?></a>
                        </div>
                    </a>
                </article>
            </div>

            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <div class="container">
        <div class='slider-btn slider-btn-secondary btn-prev'>
          <?php get_icon('chevron-left'); ?>
        </div>

        <div class='slider-btn slider-btn-secondary btn-next'>
          <?php get_icon('chevron-right'); ?>
        </div>
      </div>
    </div>
</section>