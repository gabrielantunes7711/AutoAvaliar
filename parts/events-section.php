<?php 

$section_events = get_field('section_events');

$current_date = date("Ymd");

$args = [
    'post_type' => 'evento',
    'posts_per_page' => -1,
    'meta_query' => [
        'key' => 'final_date',
        'value' => $current_date,
        'compare' => '>',
        'type' => 'date',
    ]
];

$the_query = new WP_Query( $args );

if ($the_query->have_posts()):

?>

<section class="section-events">
    <div class="container">
        <div class="row">
            <div class="left">
                <?php if (!empty($section_events['title'])): ?>
                <h2 class="section-title"><?php echo $section_events['title']; ?></h2>
                <?php endif; ?>

                <?php if (!empty($section_events['description'])): ?>
                <p class="section-description"><?php echo $section_events['description']; ?></p>
                <?php endif; ?>
            </div>

            <div class='swiper slide-events'>
                <div class='swiper-wrapper'>
                    <?php 
                        while ($the_query->have_posts()) :
                        $the_query->the_post();

                        $events = get_field('events');

                        $initial_date = date_i18n("d M", strtotime($events['initial_date']));
                        $initial_day = explode(" ", $initial_date)[0];
                        $initial_month = explode(" ", $initial_date)[1];

                        $final_date = date_i18n("d M", strtotime($events['final_date']));
                        $final_day = explode(" ", $final_date)[0];
                        $final_month = explode(" ", $final_date)[1];
                     
                    ?>

                    <div class='swiper-slide'>
                        <article class="event-card">
                            <figure>
                                <?php the_post_thumbnail() ?>
                            </figure>

                            <div class="bottom">
                                <span class="container-date">
                                    <span class="day"><?php echo $initial_day; ?></span> <span class="month"><?php echo $initial_month; ?></span>
                                    -
                                    <span class="day"><?php echo $final_day; ?></span> <span class="month"><?php echo $final_month; ?></span>
                                </span>

                                <h3><?php the_title() ?></h3>

                                <span><?php echo $events['address']; ?></span>

                                <a class="btn btn-secondary" href="<?php the_permalink() ?>">Saiba mais <?php get_icon('arrow-right') ?></a>
                            </div>
                        </article>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; wp_reset_postdata(); ?>