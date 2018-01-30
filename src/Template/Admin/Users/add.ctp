<div class="panel__title">
  <h3>Register Information</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div class="form">
      <?=
        $this->Form->create($addForm, [
          'enctype' => 'multipart/form-data',
          'type'    => 'POST'
        ]);
      ?>
        <div class="form__content">
          <div class="form__data">
            <div class="form__info">
              <div class="form__list">
                <div class="form__label-wrapper">
                  <label class="form__label">Last Name:</label>
                </div>
                <div class="form__input">
                  <?=
                    $this->Form->control('User.lastname', [
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
                    $this->Form->control('User.firstname', [
                      'type'     => 'text',
                      'class'    => 'form__inputbox',
                      'label'    => false,
                      'required' => false
                    ]);
                  ?>
                  <span class="form__error"><?= $this->Form->error('User.firstname');?></span>
                </div>
              </div>

              <div class="form__list">
                <div class="form__label-wrapper">
                  <label class="form__label">Middle Name:</label>
                </div>
                <div class="form__input">
                  <?=
                    $this->Form->control('User.middlename', [
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
                <label class="form__label">Birth date:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('User.bday', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'id'       => 'form__date',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('bday');?></span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Address:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('User.address', [
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
                <label class="form__label">Contact Number:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('User.contact', [
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
                <label class="form__label">Email Address:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('User.email', [
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
                <?=
                  $this->Form->control('User.place_of_birth', [
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
                  $this->Form->control('User.citizenship', [
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
                <label class="form__label">Civil Status:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                    $this->Form->control('User.civil_status', [
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

          <div class="form__title">
            <h3>Government ID</h3>
          </div>

          <div class="form__data">

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">SSS Number:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('Government.sss', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('sss'); ?></span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">GSIS Number:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('Government.gsis', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('gsis'); ?></span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">TIN Number:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('Government.tin', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('tin'); ?></span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Philhealth Number:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('Government.philhealth', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('philhealth'); ?></span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Pagibig Number:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('Government.pagibig', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('pagibig'); ?></span>
              </div>
            </div>
          </div>

          <div class="form__title">
            <h3>Position and Department</h3>
          </div>

          <div class="form__data">

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Position</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <textarea name="User[position]" class="form__inputbox form__inputbox--textarea"></textarea>
                <span class="form__error"><?= $this->Form->error('position'); ?></span>
              </div>
            </div>

            <div class="form__list form__list--checkbox">
              <div class="form__label-wrapper">
                <label class="form__label">Deparment:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?php foreach($departments as $department): ?>
                <div class="form__checkbox">
                  <input type="checkbox" name="department_id[]" id="checkbox5" class="form__input-checkbox" value="<?= $department['id'] ?>">
                  <label for="#checkbox5" class="form__input-label"><?= $department['name'] ?></label>
                </div>
                <?php endforeach; ?>
                <span class="form__error"><?= $this->Form->error('department_id'); ?></span>
              </div>
            </div>

            <div class="form__list form__list--checkbox">
              <div class="form__label-wrapper">
                <label class="form__label">Subject:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?php foreach($subjects as $subject): ?>
                <div class="form__checkbox">
                  <input type="checkbox" name="subject_id[]" id="checkbox5" class="form__input-checkbox" value="<?= $subject['id'] ?>">
                  <label for="#checkbox5" class="form__input-label"><?= $subject['name'] ?></label>
                </div>
                <?php endforeach; ?>
                <span class="form__error"><?= $this->Form->error('department_id'); ?></span>
              </div>
            </div>
          </div>


          <div class="form__title">
            <h3>IF MARRIED</h3>
          </div>
          <div class="form__data">
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Name of Spouse:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('User.name_of_spouse', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('name_of_spouse'); ?></span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Number of Children:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('User.number_of_children', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('number_of_children'); ?></span>
              </div>
            </div>
          </div>

        <div class="form__title">
          <h3>Educational Background</h3>
        </div>
          <div class="form__data">
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Educational Attainment:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('User.educational_attainment', [
                    'type'     => 'textarea',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('educational_attainment'); ?></span>
              </div>
            </div>
            <div class="form__list form__list--enumerate">
              <div class="form__label-wrapper">
                <label class="form__label">Seminars training:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('User.trainings', [
                    'type'     => 'textarea',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
              </div>
            </div>
          </div>

        <div class="form__title">
          <h3>Working Experience</h3>
        </div>
          <div class="form__data">
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Eligibility:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?= 
                  $this->Form->control('User.eligibility', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ])
                ?>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Job Type:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('User.jobtype', [
                    'options'  => $jobtype,
                    'required' => false,
                    'div'      => false,
                    'label'    => false,
                    'class'    => 'form__inputbox'
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('jobtype'); ?></span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Designation:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('User.designation', [
                    'options'  => $designation,
                    'required' => false,
                    'div'      => false,
                    'label'    => false,
                    'class'    => 'form__inputbox'
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('designation'); ?></span>
              </div>
            </div>

            <div class="form__list form__list--enumerate">
              <div class="form__label-wrapper">
                <label class="form__label">Work Experience:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <textarea name="User[work_experience]" class="form__inputbox form__inputbox--textarea"></textarea>
              </div>
            </div>
          </div>

          <div class="form__title">
            <h3>Upload Image</h3>
          </div>

          <div class="form__data">
            <div class="form__list form__list--uploadimage">
              <div class="form__upload-image">
                <img src="/img/logo/logo.png" alt="form-image" class="form__upload-picture">
              </div>
              <div class="form__list-image">
                <input type="file" multiple="multiple" name="User[image]" id="input2">  
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
</div>

<script type="text/javascript">
  $('#form__date').datepicker({
    format: 'yyyy-mm-dd'
  });
</script>