<div class="panel__title">
  <h3>Change Password</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <?= $this->Form->create($userNewPassword, ['type' => 'POST']); ?>
      <div class="form__content">
        <div class="form__data">
          <div class="form__info">
            <div class="form__list form__list--center">
              <div class="form__label-wrapper">
                <label class="form__label">New Password:</label>
              </div>
              <div class="form__input">
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
            </div>
            <div class="form__list form__list--center">
              <div class="form__label-wrapper">
                <label class="form__label">Confirm New Password:</label>
              </div>
              <div class="form__input">
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
            </div>
          </div>
          <div class="form__button">
            <input type="submit" class="button button--submit">
          </div>
        </div>
      </div>
    <?= $this->Form->end(); ?>
  </div>
</div>

