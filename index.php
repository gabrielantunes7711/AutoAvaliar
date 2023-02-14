<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>
</head>
<body>
  <?php 
  
  get_header(); 

  get_template_part("parts/popup-login"); 

  get_template_part("parts/section-hero"); 

  get_template_part("parts/section-interested"); 

  get_template_part("parts/section-solutions"); 

  get_template_part("parts/section-partners"); 

  get_template_part("parts/section-video"); 

  get_template_part("parts/section-evaluation"); 

  get_template_part("parts/section-events"); 

  get_template_part("parts/section-news"); 

  get_template_part("parts/section-download-app"); 

  get_footer();

  wp_footer(); 
  
  ?>
</body>
</html>