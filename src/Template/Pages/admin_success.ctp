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
  <link rel="stylesheet" type="text/css" href="/js/plugins/jfiler/jquery.filer-dragdropbox-theme.css"/>
  <link rel="stylesheet" type="text/css" href="/css/plugins/font-awesome-4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="/css/style.css"/>
  <script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="/js/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="/js/plugins/jfiler/jquery.filer.min.js"></script>
</head>
<body>

  <header class="header">
    <div class="header__content">
      <div class="header__logo">
        <img src="/img/logo/logo.png" alt="logo" class="header__logo-image">
      </div>
      <div class="header__control">
        <a href="#" class="header__control-link">
          <span>Hi! Admin</span>
        </a>
        <a href="#" class="header__control-link">
          <span>Logout</span>
        </a>
      </div>
    </div>
  </header>

  <main class="main-content">
    <div class="main-content__bgcolor"></div>
    <div class="main-content__content">

      <aside class="sidebar">
        <div class="sidebar__title">
          <h2>MENU</h2>
        </div>
        <nav class="sidebar__menu">
          <ul>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu1</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu2</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu3</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu4</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu5</a>
            </li>
            <li class="sidebar__list">
              <a href="" class="sidebar__item">Menu6</a>
            </li>
          </ul>
        </nav>
      </aside>

      <div class="panel">
        <div class="panel__content">

          <div class="success-msg">
            <div class="success-msg__content">
              <div class="success-msg__title">
                <div class="success-msg__icon">
                  <i class="fa fa-check success-msg__icon-success" aria-hidden="true"></i>
                </div>
                <h2>Successfully Added!</h2>
              </div>
              <div class="success-msg__paragraph">
                <p>You've Successfully added the kung ano man</p>
              </div>
              <div class="success-msg__buttons">
                <div class="success-msg__back">
                  <a href="/admin" class="button button--link">Add More</a>
                </div>
                <div class="success-msg__back">
                  <a href="/employee" class="button button--link">Back to List</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<div class="modal" id="js-modal-edit">
  <div class="modal__container">
    <div class="modal__header">
      <div class="modal__close">
        <span class="modal__exit">x</span>
      </div>
      <div class="modal__title">
        <h3>Edit Attendance</h3>
      </div>
    </div>
  </div>
</div>

</body>
</html>