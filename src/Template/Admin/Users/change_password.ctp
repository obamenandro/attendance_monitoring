<div class="panel__container" style="padding: 30px 10px 25px 3%;">
<div class="user-panel__field panel__content">

  <div class="form-edit-info">
    <div class="form">
    <div class="user-panel__title view-info__title">
      <h2>CHANGE PASSWORD</h2>
    </div>
      <?= $this->Flash->render(); ?>
      <form>
        <div class="form__content">
          <div class="form__list form__list--block">
            <label class="form__label">Old Password</label>
            <div class="form__input-wrapper">
              <?=
                $this->Form->controll('old_password', [
                  'type'     => 'password',
                  'class'    => 'form__inputbox',
                  'required' => false,
                  'label'    => false
                ]);
              ?>
              <i class="fa fa-lock form__icon"></i>
              <span class="form__error"><?= $this->Form->error('old_password');?></span>
            </div>
          </div>

          <div class="form__list form__list--block">
            <label class="form__label">New Password</label>
            <div class="form__input-wrapper">
              <?=
                $this->Form->input('new_password', [
                  'type'     => 'password',
                  'class'    => 'form__inputbox',
                  'required' => false,
                  'label'    => false
                ]);
              ?>
              <i class="fa fa-lock form__icon"></i>
              <span class="form__error"><?= $this->Form->error('new_password');?></span>
            </div>
          </div>

          <div class="form__list form__list--block">
            <label class="form__label">Confirm Password</label>
            <div class="form__input-wrapper">
              <?=
                $this->Form->input('confirm_password', [
                  'type'     => 'password',
                  'class'    => 'form__inputbox',
                  'required' => false,
                  'label'    => false
                ]);
              ?>
              <i class="fa fa-lock form__icon"></i>
              <span class="form__error"><?= $this->Form->error('confirm_password');?></span>
            </div>
          </div>

          <div class="modal__button">
            <input type="submit" name="" class="button button--submit" value="Update">
          </div>
        </div>
      <?= $this->Form->end(); ?>
    </div>

  </div>
</div>

<div class="modal" id="js-modal-success" style="display: inline-block;">
  <div class="modal__container">
    <div class="modal__header">
      <div class="modal__close">
        <span class="modal__exit">x</span>
      </div>
      <div class="modal__title">
        <h3>Changed Password</h3>
      </div>
    </div>

    <div class="modal__content">
      <div class="modal__content-text">
       <span>You've Successfully Changed Your Password</span>
      </div>
      <div class="modal__button">
        <a href="/users/edit_information" class="button button--submit">OK</a>
      </div>
    </div>
  </div>
</div>
<div class="backdrop"></div>

</div>
<script>
  // $('.button--submit').click(function() {
  //   $('.backdrop').show();
  //   $('#js-modal-success').css({
  //       top: 0
  //   });
  // })

  // $('.modal__close').click(function() {
  //   $('.backdrop').hide();
  //   $('#js-modal-success').css({
  //     top: '-100%'
  //   })
  // })
</script>
