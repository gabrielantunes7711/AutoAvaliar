<?php

$video = get_field('video')

?>

<?php if (!empty($video)): ?>
<section class="section-video">
    <div class="container">
        <div class="container-thumbnail">
            <?php if (!empty($video['video_link'])): ?>
            <div class="container-play" data-iframe-src='<?php echo $video['video_link']; ?>'>
                <?php get_icon('play') ?>
            </div>
            <?php endif; ?>

            <?php if (!empty($video['thumbnail'])): ?>
            <figure>
                <img src="<?php echo $video['thumbnail']['url']; ?>" alt="<?php echo $video['thumbnail']['alt']; ?>" class="cover">
            </figure>
            <?php endif; ?>

            <?php if (!empty($video['title'])): ?>
            <h2><?php echo $video['title']; ?></h2>
            <?php endif; ?>

            <?php if (!empty($video['description'])): ?>
            <p><?php echo $video['description']; ?></p>
            <?php endif; ?>

            <?php if (!empty($video['link'])): ?>
            <a href="<?php echo $video['link']['url']; ?>" target="<?php echo $video['link']['target']; ?>"><?php echo $video['link']['title']; ?> <?php get_icon('arrow-right') ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>