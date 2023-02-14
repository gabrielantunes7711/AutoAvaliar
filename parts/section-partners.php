<?php

$partners = get_field('partners');

?>

<?php if (!empty($partners)): ?>
<section class="section-partners">
    <div class="container">
        <?php if (!empty($partners['title'])): ?>
        <h2><?php echo $partners['title'] ?></h2>
        <?php endif; ?>

        <div class="container-slide-partners">
            <div class='swiper slide-partners'>
                <div class='swiper-wrapper'>

                    <?php foreach($partners['partners'] as $item) : ?>
                    <div class='swiper-slide'>
                        <a <?php echo $item['partner_link'] ? "href='{$item['partner_link']}'" : ''; ?> target="_blank">
                        
                        <?php if (!empty($item['partner_image'])) : ?>
                        <figure>
                            <img src="<?php echo $item['partner_image']['url']  ?>" alt="<?php echo $item['partner_image']['alt']  ?>">
                        </figure>
                        <?php endif; ?>
                        </a>
                    </div>
                    <?php endforeach; ?>

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
<?php endif; ?>