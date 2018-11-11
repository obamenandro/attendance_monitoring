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

  <?= $this->Html->script('plugins/datatables/datatable.button.js') ?>
  <?= $this->Html->script('plugins/datatables/jszip.min.js') ?>
  <?= $this->Html->script('plugins/datatables/datatable.pdfmake.min.js') ?>
  <?= $this->Html->script('plugins/datatables/datatable.pdf.font.js') ?>
  <?= $this->Html->script('plugins/datatables/datatable.html5.min.js') ?>
  <?= $this->Html->script('plugins/datatables/datatable.print.min.js') ?>

  <?= $this->Html->script('/js/chartjs.js') ?>
	<?= $this->Html->script('/js/chartjs-plugin-labels.min.js') ?>

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
