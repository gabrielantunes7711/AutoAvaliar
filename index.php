<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>AutoAvaliar</title>

  <?php wp_head(); ?>
</head>
<body>
  <?php get_header(); ?>

  <?php get_template_part("parts/popup-login"); ?>

  <?php get_template_part("parts/slide-hero"); ?>

  <?php get_template_part("parts/interested-section"); ?>

  <?php get_template_part("parts/solutions-section"); ?>

  <?php get_template_part("parts/partners-section"); ?>

  <?php wp_footer(); ?>
</body>
</html>