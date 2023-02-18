<?php
$section_banner = get_field('section-banner')
?>

<?php if ($section_banner != ""): ?>
<div class="section-banner">
  <?php if (!empty($section_banner['image'])): ?>
  <figure>
    <img src="<?php echo $section_banner['image']['url']; ?>" alt="<?php echo $section_banner['image']['alt']; ?>" class="cover">
  </figure>
  <?php endif; ?>

  <?php if (!empty($section_banner['title'])): ?>
  <h2><?php echo $section_banner['title']; ?></h2>
  <?php endif; ?>
</div>
<?php endif; ?>