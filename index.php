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

  <?php get_template_part("parts/slide-hero"); ?>

  <?php get_template_part("parts/interested-section"); ?>

  <div class="popup-login">
    <span class="close-btn">
      <?php get_icon('close') ?>
    </span>

   <button type="button">
    Acesse sua conta
    <?php get_icon('arrow-down') ?>
   </button>

   <form action="">
    <span>Acesse sua conta</span>

    <div class="container-input">
      <label for="">E-mail</label>
      <input type="email" name="email" id="loginEmail" placeholder="Digite seu e-mail">
    </div>

    <div class="container-input container-password">
      <label for="">Senha</label>
      <input type="password" name="password" id="loginPassword" placeholder="Informe a senha">
      <button type="button"><?php get_icon('open-eye') ?></button>
    </div>

    <div class="bottom">
      <div class="container-checkbox">
        <label for="loginConnected">Manter conectado</label>
        <input type="checkbox" name="connected" id="loginConnected">
      </div>

      <a href="#">Esqueceu sua senha?</a>

      <span>
        Ainda não tem conta?
        <a href="#">Cadastre-se</a>
      </span>

      <button type="submit" class="btn">Acesse</button>
    </div>
   </form>
  </div>

  <?php wp_footer(); ?>
</body>
</html>