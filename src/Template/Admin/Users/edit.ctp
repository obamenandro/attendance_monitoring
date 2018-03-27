<div class="panel__title">
  <h3>Edit Information</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div class="form">
      <?=
        $this->Form->create($userEdit, [
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
                    'required' => false,
                    'value'    => $government->sss_number
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
                    'required' => false,
                    'value'    => $government->gsis_number
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
                    'required' => false,
                    'value'    => $government->tin_number
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
                    'required' => false,
                    'value'    => $government->philhealth_number
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
                    'required' => false,
                    'value'    => $government->pagibig_number
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
                <?=
                  $this->Form->control('position', [
                    'type'     => 'textarea',
                    'class'    => 'form__inputbox form__inputbox--textarea',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('position'); ?></span>
              </div>
            </div>

            <div class="form__list form__list--checkbox">
              <div class="form__label-wrapper">
                <label class="form__label">Deparment:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?php if(!$departments->isEmpty()): ?>
                <div class="form__input form__input--fullwidth">
                  <?php foreach($departments as $department): ?>
                  <div class="form__checkbox">
                    <input type="checkbox" name="department_id[]" id="checkbox5" class="form__input-checkbox" value="<?= $department['id'] ?>" <?= isset($userDepartments[$department['id']]) ? 'checked' : '' ?>>
                    <label for="#checkbox5" class="form__input-label"><?= $department['name'] ?></label>
                  </div>
                  <?php endforeach; ?>
                  <span class="form__error"><?= $this->Form->error('department_id'); ?></span>
                </div>
                <?php else: ?>
                <label class="form__input-label">No Departments available</label>
                <?php endif; ?>
              </div>
            </div>
            <div class="form__list form__list--checkbox">
              <div class="form__label-wrapper">
                <label class="form__label">Subject:</label>
              </div>
              <?php if(!$subjects->isEmpty()): ?>
              <div class="form__input form__input--fullwidth">
                <?php foreach($subjects as $subject): ?>
                <div class="form__checkbox">
                  <input type="checkbox" name="subject_id[]" id="checkbox5" class="form__input-checkbox" value="<?= $subject['id'] ?>">
                  <label for="#checkbox5" class="form__input-label"><?= $subject['name'] ?></label>
                </div>
                <?php endforeach; ?>
                <span class="form__error"><?= $this->Form->error('department_id'); ?></span>
              </div>
              <?php else: ?>
              <label class="form__input-label">No Subjects available</label>
              <?php endif; ?>
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
                    'type'     => 'number',
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
                    'class'    => 'form__inputbox form__inputbox--textarea',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('educational_attainment'); ?></span>
              </div>
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
                  ]);
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
              <?=
                  $this->Form->control('work_experience', [
                    'type'     => 'textarea',
                    'class'    => 'form__inputbox form__inputbox--textarea',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('work_experience'); ?></span>
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
                <input type="submit" name="" class="button button--submit">
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  $("#form__date").datepicker({
    format: 'yyyy-mm-dd',
    endDate: '+0d'
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('.form__upload-picture').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $(".image-upload").change(function(){
      readURL(this);
  });
</script>
