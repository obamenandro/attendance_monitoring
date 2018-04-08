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
  <?= $this->Html->css('plugins/font-awesome-4.7.0/css/font-awesome.min.css') ?>
  <?= $this->Html->css('style.css') ?>
</head>
<body>

    <div class="missing-controller">
        <div class="missing-controller__wrapper">
            <i class="fa fa-exclamation-triangle missing-controller__icon"></i>
            <span class="missing-controller__title">404 Not Found</span>
            <p class="missing-controller__paragraph">
                The URL you want to access is not existing, Please Check the url.
            </p>
        </div>
    </div>

</body>
</html>
