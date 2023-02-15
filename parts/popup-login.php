<div class="popup-login <?php echo (!is_page("home")) ? "close" : "" ?>">
   
   <button type="button">
    Acesse sua conta
    <?php get_icon('arrow-down') ?>
   </button>

   <form action="">
    <span class="close-btn">
      <?php get_icon('close') ?>
    </span>

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