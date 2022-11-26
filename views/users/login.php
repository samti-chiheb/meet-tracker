
<div class="forms-container">
  <div class="signin-signup">
    <form action="#" method="post" class="sign-in-form">
      <h2 class="title">Sign in</h2>
      <?php if (!empty($_SESSION['error'])): ?>
      <div class="alert">
        <p><?=$_SESSION['error'][0]?></p>
        <?php unset($_SESSION['error'][0]); ?>
      </div>
      <?php endif; ?>
      <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" id="email" name="email" placeholder="E-mail" required />
      </div>
      <div class="input-field">
        <i class="fas fa-lock"></i>
        <input class="password-field" id="password" name="password" type="password" placeholder="Password" required/>
      </div>
      <input type="submit" value="Login" class="btn solid" />
      <p class="social-text">Or Sign in with social platforms</p>
      <div class="social-media">
        <a href="#" class="social-icon">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-google"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
    </form>
  </div>
</div>

<div class="panels-container">
  <form id="register-link"action=<?= URL.'/users/register' ?>>
  <div class="panel left-panel">
    <div class="content">
      <h3>New here ?</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
        ex ratione. Aliquid!
      </p>
      <button form="register-link" type="submit" class="btn transparent" id="sign-up-btn">
        Sign up
      </button>
    </div>
    <img src="<?=IMG?>/login/undraw_professor_re_mj1s.svg" class="image" alt="" />
  </div>
</div>