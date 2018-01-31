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
                <label class="form__label">Birth date:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('bday', [
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
                <label class="form__label">GSIS Number:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('gsis_number', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('gsis_number'); ?></span>
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
                <textarea name="position" class="form__inputbox form__inputbox--textarea"></textarea>
                <span class="form__error"><?= $this->Form->error('position'); ?></span>
              </div>
            </div>
            <?php if(!$departments->isEmpty()): ?>
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
            <?php endif; ?>
            <?php if(!$subjects->isEmpty()): ?>
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
            <?php endif; ?>
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
                  $this->Form->control('name_of_spouse', [
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
                  $this->Form->control('number_of_children', [
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
                  $this->Form->control('educational_attainment', [
                    'type'     => 'textarea',
                    'class'    => 'form__inputbox',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('educational_attainment'); ?></span>
              </div>
            </div>
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Seminars training:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('trainings', [
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
                  $this->Form->control('eligibility', [
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
                  $this->Form->control('jobtype', [
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
                  $this->Form->control('designation', [
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

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Work Experience:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <textarea name="work_experience" class="form__inputbox form__inputbox--textarea"></textarea>
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
                <input type="file" multiple="multiple" name="image" id="input2">
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
    format: 'yyyy-mm-dd',
    endDate: '+0d'
  });
</script>
