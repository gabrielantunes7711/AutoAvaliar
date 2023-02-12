<?php 

$app_store_link = get_field('app_store_link','options');
$google_play_link = get_field('google_play_link','options');
$google_play_link = get_field('google_play_link','options');
$footer_brand = get_field('footer_brand','options');
$seals = get_field('seals','options');
$facebook = get_field('facebook','options');
$youtube = get_field('youtube','options');
$linkedin = get_field('linkedin','options');
$instagram = get_field('instagram','options');


?>

<footer class="main-footer">
    <div class="container">
        <div class="top">
            <div class="footer-logo">
                <?php if (!empty($footer_brand)): ?>
                <a href="/"><img src="<?php echo $footer_brand['url']; ?>" alt="<?php echo $footer_brand['alt']; ?>"></a>
                <?php endif; ?>
                
                <ul class="footer-social-medias">
                    <?php if (!empty($facebook)): ?>
                    <li>
                        <a href="#"><?php get_icon('facebook'); ?></a>
                    </li>
                    <?php endif; ?>

                    <?php if (!empty($youtube)): ?>
                    <li>
                        <a href="#"><?php get_icon('youtube'); ?></a>
                    </li>
                    <?php endif; ?>

                    <?php if (!empty($linkedin)): ?>
                    <li>
                        <a href="#"><?php get_icon('linkedin'); ?></a>
                    </li>
                    <?php endif; ?>

                    <?php if (!empty($instagram)): ?>
                    <li>
                        <a href="#"><?php get_icon('instagram'); ?></a>
                    </li>
                    <?php endif; ?>       
                </ul>         
            </div>

            <?php
            
            $args = [
                'menu' => 'Menu Rodapé',
                'container' => 'nav'
            ];

            wp_nav_menu($args)
            ?>

            <div class="container-download-apps">
                <?php if (!empty($app_store_link)): ?>
                <a href="<?php echo $app_store_link; ?>"><?php get_icon('app-store'); ?></a>
                <?php endif; ?>

                <?php if (!empty($google_play_link)): ?>
                <a href="<?php echo $google_play_link; ?>"><?php get_icon('google-play'); ?></a>
                <?php endif; ?>
            </div>

            <div class="business-seal">
                <?php  ?>
                <?php 
                if (!empty($seals)): foreach($seals as $item) : ?>
                <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>">
                <?php endforeach; endif; ?>
            </div>
        </div>

        <div class="bottom">
            <span>© Autoavaliar <?php echo date("Y"); ?></span>
            
            <?php
            
            $args = [
                'menu' => 'Menu Políticas do Site',
                'container' => 'nav'
            ];

            wp_nav_menu($args)
            ?>
            
            <?php get_icon('base'); ?>
        </div>
    </div>
</footer>