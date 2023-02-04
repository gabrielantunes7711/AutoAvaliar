<?php

$evaluation = get_field('evaluation')

?>

<?php if (!empty($evaluation)): ?>
<section class="section-evaluation">
    <div class="container">
        <div class='swiper slide-evaluation'>
            <div class='swiper-wrapper'>

                <?php foreach($evaluation as $item) : ?>
                <div class='swiper-slide'>
                    <div class="evaluation-card">
                        <div class="row">
                            <?php if (!empty($item['image'])): ?>
                            <div class="left">
                                <figure>
                                    <img class="cover" src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['alt'] ?>">
                                </figure>
                            </div>
                            <?php endif; ?>

                            <div class="right">
                                <?php if (!empty($item['title'])): ?>
                                <h2><?php echo $item['title'] ?></h2>
                                <?php endif; ?>

                                <?php if (!empty($item['description'])): ?>
                                <p><?php echo $item['description'] ?></p>
                                <?php endif; ?>

                                <?php if (!empty( $item['link']['url'])): ?>
                                <a href="<?php echo $item['link']['url'] ?>" class="btn btn-secondary" target="<?php echo $item['link']['target'] ?>"><?php echo $item['link']['title'] ?> <?php get_icon('arrow-right'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
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
    </div>
</section>
<?php endif; ?>