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
                  <h3>Employee List</h3>
                </div>

                <div class="panel__search">
                  <div class="panel__search-box">
                    <label class="panel__search-label">ID:</label>
                    <input type="text" name="" class="panel__search-input">
                  </div>
                  <div class="panel__search-box">
                    <label class="panel__search-label">Name:</label>
                    <input type="text" name="" class="panel__search-input">
                  </div>
                  <div class="panel__search-box">
                    <label class="panel__search-label">Status:</label>
                    <input type="text" name="" class="panel__search-input">
                  </div>
                  <div class="panel__search-box">
                    <input type="submit" name="" class="panel__search-button" value="search">
                  </div>
                </div>

                <div class="table">
                  <ul class="table__head">
                    <li class="table__head-list">Id</li>
                    <li class="table__head-list">Name</li>
                    <li class="table__head-list">Position</li>
                    <li class="table__head-list">Department</li>
                    <li class="table__head-list">Status</li>
                    <li class="table__head-list">Designation</li>
                    <li class="table__head-list">Date Hired</li>
                    <li class="table__head-list">Action</li>
                  </ul>

                  <ul class="table__body">
                    <li class="table__body-list">1001</li>
                    <li class="table__body-list">Menandro</li>
                    <li class="table__body-list">Teacher</li>
                    <li class="table__body-list">Department of Justice</li>
                    <li class="table__body-list">Married</li>
                    <li class="table__body-list">Sample</li>
                    <li class="table__body-list">2018-01-02</li>
                    <li class="table__body-list"><a href="#" class="table__view">View</a></li>
                  </ul>

                  <ul class="table__body">
                    <li class="table__body-list">1002</li>
                    <li class="table__body-list">Dave</li>
                    <li class="table__body-list">Teacher</li>
                    <li class="table__body-list">Department of Justice</li>
                    <li class="table__body-list">Married</li>
                    <li class="table__body-list">Sample</li>
                    <li class="table__body-list">2018-01-02</li>
                    <li class="table__body-list"><a href="#" class="table__view">View</a></li>
                  </ul>

                  <ul class="table__body">
                    <li class="table__body-list">1003</li>
                    <li class="table__body-list">Heidee</li>
                    <li class="table__body-list">Teacher</li>
                    <li class="table__body-list">Department of Justice</li>
                    <li class="table__body-list">Married</li>
                    <li class="table__body-list">Sample</li>
                    <li class="table__body-list">2018-01-02</li>
                    <li class="table__body-list"><a href="#" class="table__view">View</a></li>
                  </ul>

                  <ul class="table__body">
                    <li class="table__body-list">1004</li>
                    <li class="table__body-list">Paw</li>
                    <li class="table__body-list">Teacher</li>
                    <li class="table__body-list">Department of Justice</li>
                    <li class="table__body-list">Married</li>
                    <li class="table__body-list">Sample</li>
                    <li class="table__body-list">2018-01-02</li>
                    <li class="table__body-list"><a href="#" class="table__view">View</a></li>
                  </ul>

                  <ul class="table__body">
                    <li class="table__body-list">1004</li>
                    <li class="table__body-list">Paw</li>
                    <li class="table__body-list">Teacher</li>
                    <li class="table__body-list">Department of Justice</li>
                    <li class="table__body-list">Married</li>
                    <li class="table__body-list">Sample</li>
                    <li class="table__body-list">2018-01-02</li>
                    <li class="table__body-list"><a href="#" class="table__view">View</a></li>
                  </ul>

                  <ul class="table__body">
                    <li class="table__body-list">1004</li>
                    <li class="table__body-list">Paw</li>
                    <li class="table__body-list">Teacher</li>
                    <li class="table__body-list">Department of Justice</li>
                    <li class="table__body-list">Married</li>
                    <li class="table__body-list">Sample</li>
                    <li class="table__body-list">2018-01-02</li>
                    <li class="table__body-list"><a href="#" class="table__view">View</a></li>
                  </ul>
                </div>

              </div>
            </form>

          </div>
        </div>
        <div class="pagination">
          <ul>
            <li class="pagination__list">
              <a href="" class="pagination__link"><<</a>
            </li>
            <li class="pagination__list">
              <a href="" class="pagination__link">1</a>
            </li>
            <li class="pagination__list">
              <a href="" class="pagination__link">2</a>
            </li>
            <li class="pagination__list">
              <a href="" class="pagination__link">3</a>
            </li>
            <li class="pagination__list">
              <a href="" class="pagination__link">>></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>
</body>
</html>