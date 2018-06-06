<div class="user-panel__field">
  <div class="panel__content panel__content--users">
    <div class="view-info">
      <div class="view-info__content">
        <?= $this->Flash->render(); ?>
        <div class="view-info__title">
          <h3>PROFILE</h3>
        </div>

        <ul class="form__breadcrumb">
          <li class="form__breadcrumb-item">
            <a class="form__breadcrumb-link">
              <span>Personal Data</span>
            </a>
          </li>
        </ul>
        <?=
          $this->Form->create($userEdit, [
            'type'    => 'POST',
            'enctype' => 'multipart/form-data',
          ]);
        ?>
        <div class="form">

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
                <div class="input text">
                  <?=
                    $this->Form->control('middlename', [
                      'type'     => 'text',
                      'class'    => 'form__inputbox',
                      'label'    => false,
                      'required' => false
                    ]);
                  ?>
                  <span class="form__error"><?= $this->Form->error('middlename');?></span>
              </div>
            </div>
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
              <label class="form__label">Date of Birth:</label>
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
              <label class="form__label">Gender:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input select">
                <select class="form__inputbox">
                  <option>select</option>
                  <option>Male</option>
                  <option>Female</option>
                <select>
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
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Name of Spouse (if married):</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <input type="text" class="form__inputbox">
              </div>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">No. of Children:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <input type="number" class="form__inputbox" min="0">
              </div>
            </div>
          </div>
        </div>

        <div class="user-panel__note-form-wrapper">
          <span class="user-panel__note-form">Government ID</span>
        </div>

        <div class="form">
          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">GSIS/SSS No.</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <?=
                  $this->Form->control('sss_number', [
                    'type'     => 'number',
                    'div'      => false,
                    'label'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox',
                    'readonly' => true
                  ]);
                ?>
              </div>
            </div>
          </div>
          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Tin No.</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <?=
                  $this->Form->control('tin_number', [
                    'type'     => 'number',
                    'div'      => false,
                    'label'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox',
                    'readonly' => true
                  ]);
                ?>
              </div>
            </div>
          </div>
          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Philhealth No.</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <?=
                  $this->Form->control('philhealth_number', [
                    'type'     => 'number',
                    'div'      => false,
                    'label'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox',
                    'readonly' => true
                  ]);
                ?>
              </div>
            </div>
          </div>
          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Pagibig No.</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <?=
                  $this->Form->control('pagibig_number', [
                    'type'     => 'number',
                    'div'      => false,
                    'label'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox',
                    'readonly' => true
                  ]);
                ?>
              </div>
            </div>
          </div>
        </div>

        <div class="form__button">
          <input type="submit" class="button button--submit" value="NEXT">
        </div>

        <?= $this->Form->end(); ?>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#form__date").datepicker({
    format: 'yyyy-mm-dd',
    endDate: '+0d'
  });
</script>
