<?php 

$logo_mobile = get_field('mobile_brand','option');
$logo_desktop = get_field('desktop_brand','option');
$register_link = get_field('register_link', 'option');

?>

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

<?php get_template_part("parts/popup-login"); ?>

<header class="main-header">
    <div class="container">
      <div class="row">
        <a href="/">
          <?php if (!empty($logo_mobile)): ?>
            <img class="brand-mobile" src="<?php echo $logo_mobile['url'] ?>" alt="<?php echo $logo_mobile['alt'] ?>">
          <?php endif ?>
          
          <?php if (!empty($logo_desktop)): ?>
            <img class="brand-desktop" src="<?php echo $logo_desktop['url'] ?>" alt="<?php echo $logo_desktop['alt'] ?>">
          <?php endif ?>
        </a>

        <div class="right">
          <div class="container-menu-mobile">
            <form class="menu-mobile-search" action="" method="get">
              <input type="search" name="s" id="s" placeholder="Buscar no site">
              
              <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-search.svg" alt="Ícone para fazer pesquisa">

              <button type="submit" class="btn-secondary">Buscar</button>
            </form>

              <?php 
                $args = [
                  'menu' => 'Menu Principal',
                  'container' => 'nav'
                ];

                wp_nav_menu($args);
              ?>
          </div>
          <?php if(!empty($register_link)): ?>
            <a href="<?php echo $register_link['url'] ?>" class="btn-secondary" target="<?php echo $register_link['target'] ?>"><?php echo $register_link['title'] ?></a>
          <?php endif ?>

          <button type="button" class="call-menu-search">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-search.svg" alt="Ícone para fazer pesquisa">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-close.svg" alt="Ícone para fazer pesquisa">
          </button>

          <button type="button" class="mobile-btn">
            <div class="container-hamburger-line">
              <div class="hamburger-line"></div>
              <div class="hamburger-line"></div>
              <div class="hamburger-line"></div>
            </div>
          </button>
        </div>
      </div>
    </div>
  </header>