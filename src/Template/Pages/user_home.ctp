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
  <script type="text/javascript" src="/css/node_modules/moment/moment.js"></script>
  <script type="text/javascript" src="/js/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="/js/plugins/jfiler/jquery.filer.min.js"></script>
  <script type="text/javascript" src="/js/calendar.js"></script>
</head>
<body>

  <header class="header">
    <div class="header__content">
      <div class="header__company-name">
        <h1>NAMEI Polytechnic Institute</h1>
      </div>
      <div class="header__control">
        <a href="/admin/users/logout" class="header__control-link">
          <span>Logout</span>
        </a>
      </div>
    </div>
  </header>


  <main class="main-content">
    <div class="main-content__bgcolor"></div>
    <div class="main-content__content">

      <aside class="sidebar">
        <div class="sidebar__content">
          <div class="sidebar__image">
            <img src="/img/upload/laptop-bottom.png" alt="user-image" class="sidebar__user-image">
          </div>

          <div class="sidebar__name">
            <span class="sidebar__user-name">Tan, Denmark Anthony</span>
            <span class="sidebar__position">Quality Assurance</span>
          </div>

          <div class="sidebar__information">
            <ul>
              <li class="sidebar__information-list">
                <label class="sidebar__information-data">Employee ID:</label>
                <span class="sidebar__information-data">1001</span>
              </li>
              <li class="sidebar__information-list">
                <label class="sidebar__information-data">SSS No.:</label>
                <span class="sidebar__information-data">12342342</span>
              </li>
              <li class="sidebar__information-list">
                <label class="sidebar__information-data">TIN No.:</label>
                <span class="sidebar__information-data">12321312</span>
              </li>
              <li class="sidebar__information-list">
                <label class="sidebar__information-data">Department:</label>
                <span class="sidebar__information-data">Justice</span>
              </li>
            </ul>
          </div>
        </div>
      </aside>

      <div class="user-panel">
        <div class="user-panel__content">

          <div class="user-panel__menu">
            <ul>
              <li class="user-panel__menu-list">
                <a href="" class="user-panel__menu-link">
                  <div class="user-panel__menu-text">
                    <i class="fa fa-calendar user-panel__icon" aria-hidden="true"></i>
                    <span>Attendance Record</span>
                    <p class="user-panel__paragraph">
                      you can check your daily time record
                    </p>
                  </div>
                </a>
              </li>
              <li class="user-panel__menu-list">
                <a href="" class="user-panel__menu-link">
                  <div class="user-panel__menu-text">
                    <i class="fa fa-bed user-panel__icon" aria-hidden="true"></i>
                    <span>Leave</span>
                    <p class="user-panel__paragraph">
                      you can check your used and remaining leave
                    </p>
                  </div>
                </a>
              </li>
              <li class="user-panel__menu-list">
                <a href="" class="user-panel__menu-link">
                  <div class="user-panel__menu-text">
                    <i class="fa fa-pencil-square-o user-panel__icon" aria-hidden="true"></i>
                    <span>Schedule</span>
                    <p class="user-panel__paragraph">
                      you can check your schedule
                    </p>
                  </div>
                </a>
              </li>
              <li class="user-panel__menu-list">
                <a href="" class="user-panel__menu-link">
                  <div class="user-panel__menu-text">
                    <i class="fa fa-cogs user-panel__icon" aria-hidden="true"></i>
                    <span>Change Password</span>
                    <p class="user-panel__paragraph">
                      Change your password upon receiving the account
                    </p>
                  </div>
                </a>
              </li>
              <li class="user-panel__menu-list">
                <a href="" class="user-panel__menu-link">
                  <div class="user-panel__menu-text">
                    <i class="fa fa-users user-panel__icon" aria-hidden="true"></i>
                    <span>View Information</span>
                    <p class="user-panel__paragraph">
                      you can check your personal information on this section
                    </p>
                  </div>
                </a>
              </li>
            </ul>
          </div>

          <div class="user-panel__field">
            <div class="calendar">
              <div class="calendar__title">
                <div class="calendar__arrow">
                  <i class="fa fa-chevron-left js-prev"></i>
                </div>
                <div class="calendar__month-name js-yearMonths"></div>
                <div class="calendar__arrow calendar__arrow--next">
                  <i class="fa fa-chevron-right js-next"></i>
                </div>
              </div>
              <div class="calendar__weeks">
                <ul class="js-week"> <!-- SHOW THE WEEKS --> </ul>
              </div>

              <div class="calendar__days js-populate-date">
                <!-- SHOW THE DATES -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

</body>
</html>