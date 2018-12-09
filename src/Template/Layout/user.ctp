<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=100" />
  <meta name="viewport" content="width=device-width, shrink-to-fit=yes">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <link rel="icon" href="/img/logo/namei_logo.ico">
  <title><?php echo __('Namei Polytechnic Institute'); ?></title>
  <?= $this->Html->css('/js/plugins/bootstrap-datepicker/datepicker.css') ?>
  <?= $this->Html->css('plugins/font-awesome-4.7.0/css/font-awesome.min.css') ?>
  <?= $this->Html->css('/js/plugins/timepicker/jquery.timepicker.min.css') ?>
  <?= $this->Html->css('/js/plugins/datatables/datatables.min.css') ?>
  <?= $this->Html->css('style.css') ?>
  <?= $this->Html->script('jquery-3.1.0.min.js') ?>
  <?= $this->Html->script('jquery.dataTables.min.js') ?>
  <?= $this->Html->script('plugins/moment/moment.js') ?>
  <?= $this->Html->script('plugins/bootstrap-datepicker/datepicker.js') ?>
  <?= $this->Html->script('plugins/datatables/datatables.min.js') ?>
  <?= $this->Html->script('plugins/timepicker/jquery.timepicker.min.js') ?>
  <?= $this->Html->script('common.js') ?>
  <?= $this->Html->script('calendar.js') ?>
</head>
<body>

  <?= $this->element('user_header') ?>  
  <main class="main-content">
    <div class="main-content__bgcolor"></div>
    <div class="main-content__content">
      <?= $this->element('user_sidebar') ?>   
  
      <div class="user-panel">
        <div class="user-panel__content">
          <?= $this->element('user_menu') ?>   
          <?= $this->fetch('content') ?>
        </div>
      </div>
    </div>
  </main>

</body>
</html>
