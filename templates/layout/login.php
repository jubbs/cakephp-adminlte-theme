<?php 
use Cake\Core\Configure; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo Configure::read('Theme.title'); ?> | <?php echo $this->fetch('title'); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 
  <!-- Font Awesome -->
  <?php echo $this->Html->css('AdminLTE./plugins/fontawesome-free/css/all.min'); ?>
  <!-- icheck bootstrap -->
  <?php echo $this->Html->css('AdminLTE./plugins/icheck-bootstrap/icheck-bootstrap.min'); ?>
  <!-- Theme style -->
  <?php echo $this->Html->css('AdminLTE./css/adminlte.min'); ?>

  <?php echo $this->fetch('css'); ?>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <a href="<?php echo $this->Url->build(); ?>"><?php echo Configure::read('Theme.logo.large') ?></a>
  </div>




    <?php echo $this->fetch('content'); ?>

    </div>
<!-- /.login-box -->

<!-- jQuery -->
<?php echo $this->Html->script('AdminLTE./plugins/jquery/jquery.min'); ?>
<!-- Bootstrap 4 -->
<?php echo $this->Html->script('AdminLTE./plugins/bootstrap/js/bootstrap.bundle.min'); ?>
<!-- AdminLTE App -->
<?php echo $this->Html->script('AdminLTE./js/adminlte.min'); ?>

</body>
</html>
