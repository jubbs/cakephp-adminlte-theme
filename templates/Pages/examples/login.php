<?php 
use Cake\Core\Configure;
$this->layout = 'AdminLTE.login'; ?>


<!-- /.login-logo -->
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="AdminLTE./index3.html" method="post">
      <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-8">
          <div class="icheck-primary">
            <input type="checkbox" id="remember">
            <label for="remember">
              Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <?php if (Configure::read('Theme.login.show_social')) : ?>
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary"><i class="fab fa-facebook mr-2"></i> Sign in using
          Facebook</a>
        <a href="#" class="btn btn-block btn-danger"><i class="fab fa-google-plus mr-2"></i> Sign in using
          Google+</a>
      </div>
      <!-- /.social-auth-links -->
    <?php endif; ?>

    <?php if (Configure::read('Theme.login.show_remember')) : ?>
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
    <?php endif; ?>
    <?php if (Configure::read('Theme.login.show_register')) : ?>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    <?php endif; ?>




    <!-- /.social-auth-links -->



  </div>
  <!-- /.login-card-body -->
</div>