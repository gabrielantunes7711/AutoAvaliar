<?php 

$news = get_field('news');

$args = [
    'post_type' => 'post',
    'posts_per_page' => 5,
];

$the_query = new WP_Query( $args );

if ($the_query->have_posts()):

?>

<section class="section-news">
    <div class="container">
        <?php if (!empty($news['title'])): ?>
        <h2 ><?php echo $news['title']; ?></h2>
        <?php endif; ?>

        <?php if (!empty($news['description'])): ?>
        <p "><?php echo $news['description']; ?></p>
        <?php endif; ?>

        <div class='swiper slide-news'>
          
            <div class='swiper-wrapper'>
                <?php 

                while ($the_query->have_posts()) :
                $the_query->the_post();

                ?>
                <div class='swiper-slide'>
                    <article class="news-card">
                        <figure>
                            <?php the_post_thumbnail(); ?>
                        </figure>

                        <div class="bottom">
                            <div class="new-info">
                                <span class="new-date"><?php ; the_time('d/M/Y')?></span>
                                <span class="reading-time"><?php get_icon('clock'); ?> 5 min. de leitura</span>
                            </div>

                            <h3><?php the_title() ?></h3>
                        
                            <a href="<?php the_permalink() ?>">Saiba mais <?php get_icon('arrow-right'); ?></a>
                        </div>
                    </article>
                </div>
                <?php endwhile; ?>
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
    </div>
</section>
<?php endif; wp_reset_postdata(); ?>