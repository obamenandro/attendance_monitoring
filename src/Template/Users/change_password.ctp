<div class="user-panel__field">

  <div class="user-panel__menu">
    <div class="form">

    <div class="user-panel__title">
      <h2>Change Password</h2>
    </div>

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