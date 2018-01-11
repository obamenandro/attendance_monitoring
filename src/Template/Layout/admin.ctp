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
  <link rel="icon" href="/img/logo/namei_logo.ico">
  <title><?php echo __('Attendance Monitoring'); ?></title>
  <?= $this->Html->css('/js/plugins/jquery-ui-1.12.1/jquery-ui.css') ?>
  <?= $this->Html->css('/js/plugins/jquery-ui-1.12.1/jquery-ui.theme.css') ?>
  <?= $this->Html->css('/js/plugins/jfiler/jquery.filer-dragdropbox-theme.css') ?>
  <?= $this->Html->css('plugins/font-awesome-4.7.0/css/font-awesome.min.css') ?>
  <?= $this->Html->css('style.css') ?>
  <?= $this->Html->script('jquery-3.1.0.min.js') ?>
  <?= $this->Html->script('plugins/jquery-ui-1.12.1/jquery-ui.min.js') ?>
  <?= $this->Html->script('plugins/jfiler/jquery.filer.min.js') ?>
</head>
<body>

  <?= $this->element('header') ?>

  <main class="main-content">
    <div class="main-content__content">

      <?= $this->element('sidebar') ?>
      <div class="panel">
        <?= $this->fetch('content') ?>
      </div>
    </div>
  </main>

</body>
</html>
