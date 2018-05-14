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
  <title><?php echo __('Namei Polytechnic Institute'); ?></title>
  <?= $this->Html->css('/js/plugins/bootstrap-datepicker/datepicker.css') ?>
  <?= $this->Html->css('plugins/font-awesome-4.7.0/css/font-awesome.min.css') ?>
  <?= $this->Html->css('/js/plugins/timepicker/jquery.timepicker.min.css') ?>
  <?= $this->Html->css('/js/plugins/datatables/datatables.min.css') ?>
  <?= $this->Html->css('style.css') ?>
  <?= $this->Html->script('jquery-3.1.0.min.js') ?>
  <?= $this->Html->script('jquery.dataTables.min.js') ?>
  <?= $this->Html->script('plugins/bootstrap-datepicker/datepicker.js') ?>
  <?= $this->Html->script('plugins/datatables/datatables.min.js') ?>
  <?= $this->Html->script('plugins/timepicker/jquery.timepicker.min.js') ?>
  <?= $this->Html->script('common.js') ?>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

</head>
<body>

  <main class="main-content">
    <?= $this->element('header') ?>
    <div class="main-content__content">

      <?= $this->element('sidebar') ?>      
      <div class="panel">
        <?= $this->fetch('content') ?>
      </div>
    </div>
  </main>

</body>
</html>
