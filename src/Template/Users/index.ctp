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
      
      <?= $this->element('user_sidebar') ?>   

      <div class="user-panel">
        <div class="user-panel__content">

          <?= $this->element('user_menu') ?>         

          <div class="user-panel__field">
            <div class="calendar">
              <div class="calendar__tab">
                <ul>
                  <li class="calendar__tab-list calendar__tab-list--active" data-index="0">All</li>
                  <li class="calendar__tab-list" data-index="1">Absent</li>
                  <li class="calendar__tab-list" data-index="2">Leave</li>
                </ul>
              </div>
              <div class="calendar__title">
                <div class="calendar__arrow js-prev">
                  <i class="fa fa-chevron-left"></i>
                  prev
                </div>
                <div class="calendar__month-name js-yearMonths"></div>
                <div class="calendar__arrow calendar__arrow--next js-next">
                  next
                  <i class="fa fa-chevron-right"></i>
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