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

  <?= $this->element('header') ?>
  <?= $this->Flash->render(); ?>
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
        <div class="user-panel__container">
          <div class="user-panel__content">

            <div class="user-panel__greetings">
              <p class="user-panel__subtitle">
                Change Password
              </p>
            </div>

            <div class="user-panel__menu">
              <div class="form">
                <?= $this->Form->create($userChangePassword, ['type' => 'POST']); ?>
                  <div class="form__content">
                    <div class="form__list form__list--block">
                      <label class="form__label">Old Password</label>
                      <?=
                        $this->Form->controll('old_password', [
                          'type'     => 'password',
                          'class'    => 'form__inputbox',
                          'required' => false,
                          'label'    => false
                        ]);
                      ?>
                      <span class="form__error"><?= $this->Form->error('old_password');?></span>
                    </div>

                    <div class="form__list form__list--block">
                      <label class="form__label">New Password</label>
                      <?=
                        $this->Form->input('new_password', [
                          'type'     => 'password',
                          'class'    => 'form__inputbox',
                          'required' => false,
                          'label'    => false
                        ]);
                      ?>
                      <span class="form__error"><?= $this->Form->error('new_password');?></span>
                    </div>

                    <div class="form__list form__list--block">
                      <label class="form__label">Confirm Password</label>
                      <?=
                        $this->Form->input('confirm_password', [
                          'type'     => 'password',
                          'class'    => 'form__inputbox',
                          'required' => false,
                          'label'    => false
                        ]);
                      ?>
                      <span class="form__error"><?= $this->Form->error('confirm_password');?></span>
                    </div>

                    <div class="modal__button">
                      <input type="submit" name="" class="button button--submit" value="Update">
                    </div>
                  </div>
                <?= $this->Form->end(); ?>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>
</html>
