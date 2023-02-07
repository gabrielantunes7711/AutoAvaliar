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

  get_template_part("parts/slide-hero"); 

  get_template_part("parts/interested-section"); 

  get_template_part("parts/solutions-section"); 

  get_template_part("parts/partners-section"); 

  get_template_part("parts/video-section"); 

  get_template_part("parts/evaluation-section"); 

  get_template_part("parts/events-section"); 

  get_template_part("parts/news-section"); 

  wp_footer(); 
  
  ?>
</body>
</html>