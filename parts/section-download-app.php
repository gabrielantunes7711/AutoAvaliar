<?php 

$app_store_link = get_field('app_store_link','options');
$google_play_link = get_field('google_play_link','options');

$app_download = get_field("app_download")

?>

<?php if (!empty($app_download)): ?>
<section class="section-app-download">
    <div class="container">
        <div class="background-column"></div>

        <?php if (!empty($app_download['image'])): ?>
        <figure>
            <img src="<?php echo $app_download['image']['url']; ?>" alt="<?php echo $app_download['image']['alt']; ?>">
        </figure>
        <?php endif; ?>

        <?php if (!empty($app_download['title'])): ?>
        <h2><?php echo $app_download['title']; ?></h2>
        <?php endif; ?>

        <?php if (!empty($app_download['description'])): ?>
        <p><?php echo $app_download['description']; ?></p>
        <?php endif; ?>

        <div class="container-download-apps">
            <?php if (!empty($app_store_link)): ?>
            <a href="<?php echo $app_store_link; ?>"><img src="<?php echo get_img('app-store.svg'); ?>" alt="Logotipo do app store"></a>
            <?php endif; ?>

            <?php if (!empty($google_play_link)): ?>
            <a href="<?php echo $google_play_link; ?>"><img src="<?php echo get_img('google-play.svg'); ?>" alt="Logotipo do google play"></a>
            <?php endif; ?>
        </div>
</section>
<?php endif; ?>