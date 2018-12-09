<?= $this->Html->css('style.css') ?>
<div class="panel__container" style="max-width: 600px; margin: 0 auto;">
  <div class="panel__content">
    <div class="success-msg">
      <div class="success-msg__content">
        <div class="success-msg__title">
          <div class="success-msg__icon">
            <i class="fa fa-check success-msg__icon-success" aria-hidden="true"></i>
          </div>
          <h2>Successfully Send!</h2>
        </div>
        <div class="success-msg__paragraph">
          <p>Your application has been successfully submitted!</p>
        </div>
        <div class="success-msg__buttons">
          <div class="success-msg__back" style="width: 100%">
            <a href="/users/login" class="button button--link">Go to login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  body {
    background: rgba(45, 49, 52, 0.3);
  }
  .panel__content {
    border: 1px 1px 3px #757575;
  }
</style>