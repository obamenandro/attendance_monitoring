<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=100" />
  <meta name="viewport" content="width=device-width, shrink-to-fit=yes">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <title>NAMEI HRIS</title>
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
        <span class="login__logo-text">NAMEI Polytechnic Institute</span>
        <span class="login__logo-text">HRIS</span>
      </div>

      <div class="login__title">
        <h2 class="login__title-text">HR MANAGER LOGIN</h2>
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
              <i class="fa fa-envelope-o login__icon"></i>
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
          <li class="login__forgot-password login__forgot-password--user">
            <div class="login__forgot-password--user">
              <a href="/users/login" class="login__as-admin-text">Login as Admin?</a>
              <a href="/users/login" class="login__as-admin-text">Login as Employee?</a>
            </div>
            <a class="login__forgot-text">Forgot Password?</a>
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
    <div class="modal" id="js-forgot">
      <div class="modal__container modal__container--forgot-password">
        <div class="modal__header">
          <div class="modal__close">
            <span class="modal__exit">x</span>
          </div>
          <div class="modal__title">
            <h3>Forgot Password</h3>
          </div>
        </div>

        <div class="modal__content">
          <div class="form">
            <?= $this->Form->create('', ['id' => 'form_forgot_password','url' => '/admin/users/forgot_password']); ?>
              <div class="form__content">
                <div class="form__data form__data--modal">
                  <div class="form__label-wrapper">
                    <label class="form__label">Please Type Email Address:</label>
                  </div>
                  <input type="text" name="email" class="form__inputbox">
                  
                  <div class="form__leave-submit">
                    <input type="submit" value="submit" class="button button--submit">
                  </div>
                </div>
              </div>
            <?= $this->Form->end(); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="backdrop" id="backdrop"></div>
  </main>

  <script>
    $('.login__forgot-text').click(function() {
      $('.backdrop').show();
      $('#js-forgot').css({
          top: 0
      });
    });

    $('#forgot_password').on('click', function() {
      $('#form_forgot_password').submit();
    });

    $('.modal__close').click(function() {
      $('.backdrop').hide();
      $('#js-forgot').css({
          top: '-100%'
      })
    })
  </script>

</body>
</html>