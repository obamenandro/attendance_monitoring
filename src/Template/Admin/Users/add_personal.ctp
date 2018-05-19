<div class="panel__title">
  <h3>PERSONAL DATA</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div>
      <?= $this->Form->create($add_personal, ['type' => 'POST']); ?>
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
                    'value'    => !empty($session_data['lastname']) ? $session_data['lastname'] : !empty($this->request->data['lastname']) ? $this->request->data['lastname'] : '',
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
                    'value'    => !empty($session_data['firstname']) ? $session_data['firstname'] : !empty($this->request->data['firstname']) ? $this->request->data['firstname'] : '',
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
                    'value'    => !empty($session_data['middlename']) ? $session_data['middlename'] : !empty($this->request->data['middlename']) ? $this->request->data['middlename'] : '',
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
                  'value'    => !empty($session_data['address']) ? $session_data['address'] : !empty($this->request->data['address']) ? $this->request->data['address'] : '',
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
                  'value'    => !empty($session_data['email']) ? $session_data['email'] : !empty($this->request->data['email']) ? $this->request->data['email'] : '',
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
                  'value'    => !empty($session_data['contact']) ? $session_data['contact'] : !empty($this->request->data['contact']) ? $this->request->data['contact'] : '',
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
                  'value'    => !empty($session_data['birthdate']) ? $session_data['birthdate'] : !empty($this->request->data['birthdate']) ? $this->request->data['birthdate'] : '',
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
                  'value'    => !empty($session_data['place_of_birth']) ? $session_data['place_of_birth'] : !empty($this->request->data['place_of_birth']) ? $this->request->data['place_of_birth'] : '',
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
                  'value'    => !empty($session_data['citizenship']) ? $session_data['citizenship'] : !empty($this->request->data['citizenship']) ? $this->request->data['citizenship'] : '',
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
                <?=
                  $this->Form->control('gender', [
                      'options'  => $gender,
                      'required' => false,
                      'div'      => false,
                      'label'    => false,
                      'value'    => !empty($session_data['gender']) ? $session_data['gender'] : !empty($this->request->data['gender']) ? $this->request->data['gender'] : '',
                      'empty'    => 'Select Gender',
                      'class'    => 'form__inputbox'
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('gender') ?></span>
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
                    'options'  => $civil_status,
                    'required' => false,
                    'div'      => false,
                    'label'    => false,
                    'value'    => !empty($session_data['civil_status']) ? $session_data['civil_status'] : !empty($this->request->data['civil_status']) ? $this->request->data['civil_status'] : '',
                    'empty'    => 'Select Status',
                    'class'    => 'form__inputbox'
                ]);
              ?>
              <span class="form__error"><?= $this->Form->error('civil_status') ?></span>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">Name of Spouse (if married):</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <?=
                  $this->Form->control('name_of_spouse', [
                      'type'     => 'text',
                      'required' => false,
                      'div'      => false,
                      'label'    => false,
                      'value'    => !empty($session_data['name_of_spouse']) ? $session_data['name_of_spouse'] : !empty($this->request->data['name_of_spouse']) ? $this->request->data['name_of_spouse'] : '',
                      'class'    => 'form__inputbox'
                  ]);
                ?>
              </div>
            </div>
          </div>

          <div class="form__list">
            <div class="form__label-wrapper">
              <label class="form__label">No. of Children:</label>
            </div>
            <div class="form__input form__input--fullwidth">
              <div class="input text">
                <?=
                  $this->Form->control('number_of_children', [
                      'type'     => 'number',
                      'required' => false,
                      'div'      => false,
                      'label'    => false,
                      'value'    => !empty($session_data['number_of_children']) ? $session_data['number_of_children'] : !empty($this->request->data['number_of_children']) ? $this->request->data['number_of_children'] : '',
                      'class'    => 'form__inputbox'
                  ]);
                ?> 
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
                  'value'    => !empty($session_data['sss_number']) ? $session_data['sss_number'] : !empty($this->request->data['sss_number']) ? $this->request->data['sss_number'] : '',
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
                  'value'    => !empty($session_data['tin_number']) ? $session_data['tin_number'] : !empty($this->request->data['tin_number']) ? $this->request->data['tin_number'] : '',
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
                  'value'    => !empty($session_data['philhealth_number']) ? $session_data['philhealth_number'] : !empty($this->request->data['philhealth_number']) ? $this->request->data['philhealth_number'] : '',
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
                  'value'    => !empty($session_data['pagibig_number']) ? $session_data['pagibig_number'] : !empty($this->request->data['pagibig_number']) ? $this->request->data['pagibig_number'] : '',
                  'required' => false
              ]);
              ?>
              <span class="form__error"><?= $this->Form->error('pagibig_number'); ?></span>
            </div>
          </div>
          <div class="form__button">
            <a href="/admin/users/add" class="button button--back">Back</a>
            <input type="submit" class="button button--submit" value="NEXT">
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
