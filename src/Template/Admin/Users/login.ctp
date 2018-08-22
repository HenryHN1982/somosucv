
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IFK Capacitación | Iniciar sesión</title>
	<?= $this->Html->meta('icon') ?>

	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<?= $this->Html->css('/assets/admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>
	<!-- Font Awesome -->
	<?= $this->Html->css('/assets/admin-lte/bower_components/font-awesome/css/font-awesome.min.css') ?>
	<!-- Ionicons -->
	<?= $this->Html->css('/assets/admin-lte/bower_components/Ionicons/css/ionicons.min.css') ?>
	<!-- Theme style -->
	<?= $this->Html->css('/assets/admin-lte/dist/css/AdminLTE.min.css') ?>
	<!-- iCheck -->
	<?= $this->Html->css('/assets/admin-lte/plugins/iCheck/square/blue.css') ?>

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>IFK</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicia sesión para comenzar</p>
    
    <?= $this->Flash->render('auth') ?>
       
    <?= $this->Form->create() ?>
    
      <div class="form-group has-feedback">
        <?php echo $this->Form->control('email', [
                    'templates' => ['inputContainer' => '{{content}}'],
                    'label' => false,
                    'class' => 'form-control',
                    'placeholder' => 'Correo'
        ]); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <?php echo $this->Form->control('password', [
                    'templates' => ['inputContainer' => '{{content}}'],
                    'label' => false,
                    'class' => 'form-control',
                    'placeholder' => 'Contraseña'
        ]); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recordarme
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <?= $this->Form->button('Ingresar', ['class' => 'btn btn-primary btn-block btn-flat']) ?>
        </div>
        <!-- /.col -->
        <?= $this->Form->end() ?>
      </div>
    </form>
    <!--
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>-->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<?= $this->Html->script('/assets/admin-lte/bower_components/jquery/dist/jquery.min.js') ?>
<!-- Bootstrap 3.3.7 -->
<?= $this->Html->script('/assets/admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>
<!-- iCheck -->
<?= $this->Html->script('/assets/admin-lte/plugins/iCheck/icheck.min.js') ?>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>