<?php
$this->layout = false;
?>

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
        <h2 class="login__title-text">USER LOGIN</h2>
      </div>
      <form>
        <ul class="login__form">
          <li class="login__list">
            <div class="login__label-wrap">
              <label class="login__label">Email</label>
            </div>
            <div class="login__input-wrap">
							<input type="text" class="login__input">
            </div>
          </li>

          <li class="login__list">
            <div class="login__label-wrap">
              <label class="login__label">Password</label>
            </div>
            <div class="login__input-wrap">
							<input type="password" class="login__input">
            </div>
          </li>

          <li class="login__button">
            <div class="login__label-wrap">
							<input type="submit" class="button button--submit">
            </div>
          </li>
        </ul>
			</form>
    </div>
  </main>

</body>
</html>