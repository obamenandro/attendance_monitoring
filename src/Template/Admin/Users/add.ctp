<div class="panel__title">
  <h3>PROFILE</h3>
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
          <div class="form__data">
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Status:</label>
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
                <label class="form__label">Date Hired</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" class="form__inputbox form--date-js">
              </div>
            </div>
            
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Deparment:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <select class="form__inputbox">
                  <option>--select</option>
                  <option>GenEd</option>
                  <option>BSMT</option>
                  <option>BSMarE</option>
                  <option>BSNA</option>
                  <option>Admin</option>
                  <option>Staff</option>
                  <option>Maintenance Personnel</option>
                </select>
              </div>
            </div>

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

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Subject:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <textarea class="form__inputbox form__inputbox--textarea"></textarea>
              </div>
            </div>
          </div>

          <div class="form__title">
            <h3>Personal Data</h3>
          </div>

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
          </div>

          <div class="form__title">
            <h3>Government ID</h3>
          </div>

          <div class="form__data">

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
          </div>

          <div class="form__title">
            <h3>Educational Attainment</h3>
          </div>

          <div class="form">
          <div class="form__user-title">
            <span>DOCTORATE</span>
          </div>
          <div class="js-wrapper-append">
            <div class="form__list form__list--user-title">
              <div class="form__label-wrapper">
                <label class="form__label">Name of School:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-title">
              <div class="form__label-wrapper">
                <label class="form__label">Degree/Course:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label">Units Earned:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label form__label--secondcolumn ">Year Graduated:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox">
                </div>
              </div>
            </div>
          </div>
          <div class="form__list-addform">
            <a class="button button--addform">Add</a>
          </div>
        </div>

        <div class="form">
          <div class="form__user-title">
            <span>Masters</span>
          </div>
          <div class="js-wrapper-append">
            <div class="form__list form__list--user-title">
              <div class="form__label-wrapper">
                <label class="form__label">Name of School:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-title">
              <div class="form__label-wrapper">
                <label class="form__label">Degree/Course:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label">Units Earned:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label form__label--secondcolumn">Year Graduated:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox">
                </div>
              </div>
            </div>
          </div>
          <div class="form__list-addform">
            <a class="button button--addform">Add</a>
          </div>
        </div>

        <div class="form">
          <div class="form__user-title">
            <span>College</span>
          </div>
          <div class="js-wrapper-append">
            <div class="form__list form__list--user-title">
              <div class="form__label-wrapper">
                <label class="form__label">Name of School:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-title">
              <div class="form__label-wrapper">
                <label class="form__label">Degree/Course:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label">Year Graduated:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label form__label--secondcolumn">Highest Yr/Level Attained:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox">
                </div>
              </div>
            </div>
          </div>
          <div class="form__list-addform">
            <a class="button button--addform">Add</a>
          </div>
        </div>

        <div class="form">
          <div class="form__user-title">
            <span>Secondary</span>
          </div>
          <div class="js-wrapper-append">
            <div class="form__list form__list--user-title">
              <div class="form__label-wrapper">
                <label class="form__label">Name of School:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label">Year Graduated:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label form__label--secondcolumn">Highest Yr/Level Attained:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox">
                </div>
              </div>
            </div>
          </div>
          <div class="form__list-addform">
            <a class="button button--addform">Add</a>
          </div>
        </div>

        <div class="form">
          <div class="form__user-title">
            <span>Elementary</span>
          </div>
          <div class="js-wrapper-append">
            <div class="form__list form__list--user-title">
              <div class="form__label-wrapper">
                <label class="form__label">Name of School:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label">Year Graduated:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label">Highest Yr/Level Attained:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox">
                </div>
              </div>
            </div>
          </div>
          <div class="form__list-addform">
            <a class="button button--addform">Add</a>
          </div>
        </div>

        <div class="form">
          <div class="form__user-title">
            <span>Elegibility</span>
          </div>
          <div class="js-wrapper-append">
            <div class="form__list form__list--user-title">
              <div class="form__label-wrapper">
                <label class="form__label">Name of Exam:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label">License No.:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label form__label--secondcolumn">Valid Until:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox">
                </div>
              </div>
            </div>
          </div>
          <div class="form__list-addform">
            <a class="button button--addform">Add</a>
          </div>
        </div>

        <div class="form">
          <div class="form__user-title">
            <span>Work Experience</span>
          </div>
          <div class="js-wrapper-append">
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label">From (mm/dd/yyyy):</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-range">
              <div class="form__label-wrapper">
                <label class="form__label form__label--secondcolumn">To (mm/dd/yyyy):</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox">
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-title">
              <div class="form__label-wrapper">
                <label class="form__label">Position Title:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
            <div class="form__list form__list--user-title">
              <div class="form__label-wrapper">
                <label class="form__label">Company:</label>
              </div>
              <div class="form__input">
                <div class="input text">
                  <input type="text" class="form__inputbox"> 
                </div>
              </div>
            </div>
          </div>
          <div class="form__list-addform">
            <a class="button button--addform">Add</a>
          </div>
        </div>

          <div class="form__title">
            <h3>Upload Image</h3>
          </div>

          <div class="form__data">
            <div class="form__list form__list--uploadimage">
              <div class="form__upload-image">
                <img src="/img/user/default_avatar.png" alt="form-image" class="form__upload-picture">
              </div>
              <div class="form__list-image">
                <?=
                  $this->Form->control('image', [
                    'type'  => 'file',
                    'id'    => 'input2',
                    'div'   => false,
                    'label' => false,
                    'class' => 'image-upload'
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('image'); ?></span>
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
  $('#form__date, .form--date-js').datepicker({
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

  $('.button--addform').on('click', function() {
    var a = $(this).parent().parent().find('.js-wrapper-append').html();
    $(a).insertAfter($(this).parent().parent().find('.js-wrapper-append'))
  })

</script>
