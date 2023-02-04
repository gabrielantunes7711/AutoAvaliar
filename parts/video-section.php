<?php

$video = get_field('video')

?>



<section class="section-video">
    <div class="container">
        <div class="container-thumbnail">
            <div class="container-play">
                <?php get_icon('play') ?>
            </div>

            <figure>
                <img src="<?php echo $video['thumbnail']['url']; ?>" alt="<?php echo $video['thumbnail']['alt']; ?>" class="cover">
            </figure>

            <h2><?php echo $video['title']; ?></h2>
            <p><?php echo $video['description']; ?></p>
            <a href="<?php echo $video['link']['url']; ?>" target="<?php echo $video['link']['target']; ?>"><?php echo $video['link']['title']; ?> <?php get_icon('arrow-right') ?></a>
        </div>
        
        <div class="container-video">
            <div class="container-close-btn">
                <?php get_icon('close') ?>
            </div>
            <iframe width="80%" height="80%" src="<?php echo $video['video_link']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</section>