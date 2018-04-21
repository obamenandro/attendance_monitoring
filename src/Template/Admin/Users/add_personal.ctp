<div class="panel__title">
  <h3>PERSONAL DATA</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div>
      <?=
        $this->Form->create($addForm, [
          'enctype' => 'multipart/form-data',
          'type'    => 'POST'
        ]);
      ?>
      <div class="form__content">
        <ul class="form__breadcrumb">
          <li class="form__breadcrumb-item">
            <a href="/admin/users/add" class="form__breadcrumb-link">
              <span>Add Employee</span>
              <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
            </a>
          </li>
          <li class="form__breadcrumb-item">
            <a href="/admin/users/add_personal" class="form__breadcrumb-link">
              <span>Personal Data</span>
            </a>
          </li>
        </ul>

        <div class="form__data">
          <div class="form__info">
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Last Name:</label>
              </div>
              <div class="form__input">
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

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">First Name:</label>
              </div>
              <div class="form__input">
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

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Middle Name:</label>
              </div>
              <div class="form__input">
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

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Address:</label>
            </div>
            <div class="form__input form__input--fullwidth">
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

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Email Address:</label>
            </div>
            <div class="form__input form__input--fullwidth">
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
              <label class="form__label">Contact Number:</label>
            </div>
            <div class="form__input form__input--fullwidth">
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

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Date of Birth:</label>
            </div>
            <div class="form__input form__input--fullwidth">
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
              <label class="form__label">Place of Birth:</label>
            </div>
            <div class="form__input form__input--fullwidth">
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

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Citizenship:</label>
            </div>
            <div class="form__input form__input--fullwidth">
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
                <input type="number" class="form__inputbox"> 
              </div>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">GSIS/SSS Number:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <?=
              $this->Form->control('sss_number', [
                  'type'     => 'text',
                  'class'    => 'form__inputbox',
                  'label'    => false,
                  'required' => false
              ]);
              ?>
              <span class="form__error"><?= $this->Form->error('sss_number'); ?></span>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">TIN Number:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <?=
              $this->Form->control('tin_number', [
                  'type'     => 'text',
                  'class'    => 'form__inputbox',
                  'label'    => false,
                  'required' => false
              ]);
              ?>
              <span class="form__error"><?= $this->Form->error('tin_number'); ?></span>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Philhealth Number:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <?=
              $this->Form->control('philhealth_number', [
                  'type'     => 'text',
                  'class'    => 'form__inputbox',
                  'label'    => false,
                  'required' => false
              ]);
              ?>
              <span class="form__error"><?= $this->Form->error('philhealth_number'); ?></span>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Pagibig Number:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <?=
              $this->Form->control('pagibig_number', [
                  'type'     => 'text',
                  'class'    => 'form__inputbox',
                  'label'    => false,
                  'required' => false
              ]);
              ?>
              <span class="form__error"><?= $this->Form->error('pagibig_number'); ?></span>
            </div>
          </div>
          <div class="form__button">
            <a href="/admin/users/add_educational" class="button button--submit">NEXT</a>
          </div>
        </div>            
      <?= $this->Form->end(); ?>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#form__date, .form--date-js').datepicker({
    format: 'yyyy-mm-dd',
    endDate: '+0d'
  });
</script>
