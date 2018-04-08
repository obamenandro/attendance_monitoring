<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=100" />
  <meta name="viewport" content="width=device-width, shrink-to-fit=yes">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <title>Attendance Monitoring</title>
  <link rel="stylesheet" type="text/css" href="/js/plugins/jquery-ui-1.12.1/jquery-ui.css"/>
  <link rel="stylesheet" type="text/css" href="/js/plugins/jquery-ui-1.12.1/jquery-ui.theme.css"/>
  <link rel="stylesheet" type="text/css" href="/css/plugins/font-awesome-4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="/css/style.css"/>
  <script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="/js/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
</head>
<body>

  <main class="login">
    <div class="login__content">
      <div class="login__logo">
        <img src="/img/logo/logo.png" alt="logo" class="login__image">
      </div>

      <div class="login__title">
        <h2 class="login__title-text">LOGIN</h2>
      </div>
      <div class="login__flash">
        <?= $this->Flash->render() ?>
      </div>
      <?= $this->Form->create(); ?>
        <ul class="login__form">
          <li class="login__list">
            <div class="login__label-wrap">
              <label class="login__label">Email</label>
            </div>
            <div class="login__input-wrap">
               <?= 
                $this->Form->control('email', [
                  'class'       =>'login__input',
                  'required'    => false,
                  'placeholder' => __('Email'),
                  'label'       => false
                ]);
              ?>
              <i class="fa fa-envelope login__icon"></i>
            </div>
          </li>

          <li class="login__list">
            <div class="login__label-wrap">
              <label class="login__label">Password</label>
            </div>
            <div class="login__input-wrap">
              <?= 
                $this->Form->control('password', [
                  'type'        => 'password',
                  'class'       =>'login__input',
                  'required'    => false,
                  'placeholder' => __('Password'),
                  'label'       => false
                ]); 
              ?>
              <i class="fa fa-lock login__icon"></i>
            </div>
          </li>

          <li class="login__button">
            <div class="login__label-wrap">
              <?= 
                $this->Form->submit('Login', [
                  'class' => 'button button--submit'
                ]);
              ?>
            </div>
          </li>
        </ul>
      <?= $this->Form->end(); ?>
    </div>
  </main>

</body>
</html>