<?php 

$logo_mobile = get_field('mobile_brand','option');
$logo_desktop = get_field('desktop_brand','option');
$register_link = get_field('register_link', 'option');

?>

<header class="main-header">
    <div class="container">
      <div class="row">
        <a href="#">
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

              <button type="submit" class="btn btn-secondary">Buscar</button>
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
            <a href="<?php echo $register_link['url'] ?>" class="btn btn-secondary" target="<?php echo $register_link['target'] ?>"><?php echo $register_link['title'] ?></a>
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