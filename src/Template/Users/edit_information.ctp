<div class="user-panel__field">
  <div class="panel__content panel__content--users">
    <div class="view-info">
      <div class="view-info__content">
        <div class="view-info__title">
          <h3>Employee Information</h3>
        </div>
          <?= $this->Form->create($userEdit); ?>
          <div class="form__info">
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Last Name:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <?=
                    $this->Form->control('lastname', [
                      'type'     => 'text',
                      'class'    => 'form__inputbox',
                      'label'    => false,
                      'required' => false
                    ]);
                  ?>
                  <span class="form__error"><?= $this->Form->error('lastname');?></span>
                </div>                  
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">First Name:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <?=
                    $this->Form->control('firstname', [
                      'type'     => 'text',
                      'class'    => 'form__inputbox',
                      'label'    => false,
                      'required' => false
                    ]);
                  ?>
                  <span class="form__error"><?= $this->Form->error('firstname');?></span>
                </div>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Middle Name:</label>
              </div>
              <div class="form__input">
                <div class="input text"><input type="text" name="middlename" class="form__inputbox" maxlength="255" id="middlename" value="calangian"></div>                  <span class="form__error"></span>
              </div>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Birth date:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <?=
                  $this->Form->control('birthdate', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'id'       => 'form__date',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('birthdate');?></span>
              </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Address:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <?=
                  $this->Form->control('address', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('address');?></span>
              </div>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Contact Number:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <?=
                  $this->Form->control('contact', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('contact'); ?></span>
              </div>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Email Address:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <?=
                  $this->Form->control('email', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('email'); ?></span>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Place of Birth:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <?=
                  $this->Form->control('place_of_birth', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('place_of_birth'); ?></span>
            </div>
          </div>>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Citizenship:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <?=
                  $this->Form->control('citizenship', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('citizenship'); ?></span>
              </div>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Civil Status:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input select">
                <?=
                  $this->Form->control('civil_status', [
                      'options'  => $civilStatus,
                      'required' => false,
                      'div'      => false,
                      'label'    => false,
                      'class'    => 'form__inputbox'
                  ]);
                ?>
              </div>
          </div>

          <div class="form__title">
            <h3>Government ID</h3>
          </div>

          <div class="form__data">
          
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">SSS Number:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <span class="view-info__info"> - 111111111</span>>
              </div>
            </div>
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">GSIS Number:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <span class="view-info__info"> - 111111111</span>>
              </div>
            </div>
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">TIN Number:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <span class="view-info__info"> - 111111111</span>>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Philhealth Number:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <span class="view-info__info"> - 111111111</span>>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Pagibig Number:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <span class="view-info__info"> - 111111111</span>>
              </div>
            </div>

            <div class="form__title">
              <h3>Upload Image</h3>
            </div>

            <div class="form__data">
              <div class="form__list form__list--uploadimage">
                <div class="form__upload-image">
                  <?php if($employee['image'] == NULL): ?>
                   <img src="/img/user/default_avatar.png" alt="form-image" class="form__upload-picture">
                  <?php else: ?>
                    <img src="<?= $employee['image']; ?>" alt="form-image" class="form__upload-picture">
                  <?php endif; ?>
                </div>
                <div class="form__list-image">
                  <?=
                    $this->Form->control('image', [
                      'type'  => 'file',
                      'id'    => 'input2',
                      'div'   => false,
                      'label' => false,
                      'class' => 'image-upload',
                      'required' => false
                    ]);
                  ?>
                  <span class="form__error"><?= $this->Form->error('image'); ?></span>
                </div>
              </div>
              <div class="form__button">
                <input type="submit" class="button button--submit">
              </div>
            </div>
          <?= $this->Form->end(); ?>
        </div>
      </div>
    </div>
  </div>
</div>