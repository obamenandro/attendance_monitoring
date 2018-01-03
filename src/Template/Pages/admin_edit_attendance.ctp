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

          <div class="form">
            <form action="upload.php" method="post" enctype="multipart/form-data">
              <div class="form__content">
                <div class="form__title">
                  <h3>Register Attendance</h3>
                </div>
                <div class="form__data">
                  <div class="form__info">
                    <div class="form__list">
                      <div class="form__label-wrapper">
                        <label class="form__label">ID:</label>
                      </div>
                      <div class="form__input">
                        <input type="text" name="" class="form__inputbox" value="1001" disabled="true"> 
                      </div>
                    </div>
                  </div>
                  <div class="form__info">
                    <div class="form__list">
                      <div class="form__label-wrapper">
                        <label class="form__label">Last Name:</label>
                      </div>
                      <div class="form__input">
                        <input type="text" name="" class="form__inputbox">
                        <span class="form__error">Error</span>
                      </div>
                    </div>

                    <div class="form__list">
                      <div class="form__label-wrapper">
                        <label class="form__label">First Name:</label>
                      </div>
                      <div class="form__input">
                        <input type="text" name="" class="form__inputbox">
                        <span class="form__error">Error</span>
                      </div>
                    </div>

                    <div class="form__list">
                      <div class="form__label-wrapper">
                        <label class="form__label">Middle Name:</label>
                      </div>
                      <div class="form__input">
                        <input type="text" name="" class="form__inputbox">
                        <span class="form__error">Error</span>
                      </div>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Logged In:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox" placeholder="hh:mm">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Logged Out:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox" placeholder="hh:mm">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Status:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                        <select class="form__inputbox">
                          <option selected>-- Select --</option>
                          <option>Undertime</option>
                          <option>Completed</option>
                          <option>Halfday</option>
                        </select>
                        <span class="form__error">Error</span>
                      </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Department:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox">
                      <span class="form__error">Error</span>
                    </div>
                  </div>

                  <div class="form__list">
                    <div class="form__label-wrapper">
                      <label class="form__label">Date:</label>
                    </div>
                    <div class="form__input form__input--fullwidth">
                      <input type="text" name="" class="form__inputbox" placeholder="YYYY-MM-DD">
                      <span class="form__error">Error</span>
                    </div>
                  </div>              

                <div class="form__button">
                  <input type="submit" name="" class="button button--submit" value="Register">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>
</html>