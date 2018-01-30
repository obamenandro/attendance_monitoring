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
                    'id'       => 'form__date',
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
                    'id'       => 'form__date',
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
                    'id'       => 'form__date',
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
                    'id'       => 'form__date',
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
                  $this->Form->control('sss', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'id'       => 'form__date',
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
                  $this->Form->control('gsis', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'id'       => 'form__date',
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
                  $this->Form->control('tin', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'id'       => 'form__date',
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
                  $this->Form->control('philhealth', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'id'       => 'form__date',
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
                  $this->Form->control('pagibig', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox',
                    'id'       => 'form__date',
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
                <textarea class="form__inputbox form__inputbox--textarea"></textarea>
                <span class="form__error">Error</span>
              </div>
            </div>

            <div class="form__list form__list--checkbox">
              <div class="form__label-wrapper">
                <label class="form__label">Deparment:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <!-- <div class="form__checkbox">
                  <input type="checkbox" name="" id="checkbox1" class="form__input-checkbox">
                  <label for="#checkbox1" class="form__input-label">Math Department</label>
                </div>
                <div class="form__checkbox">
                  <input type="checkbox" name="" id="checkbox2" class="form__input-checkbox">
                  <label for="#checkbox2" class="form__input-label">Science Department</label>
                </div>
                <div class="form__checkbox">
                  <input type="checkbox" name="" id="checkbox3" class="form__input-checkbox">
                  <label for="#checkbox3" class="form__input-label">IT Department</label>
                </div>
                <div class="form__checkbox">
                  <input type="checkbox" name="" id="checkbox4" class="form__input-checkbox">
                  <label for="#checkbox4" class="form__input-label">HRM Department</label>
                </div>
                <div class="form__checkbox">
                  <input type="checkbox" name="" id="checkbox5" class="form__input-checkbox">
                  <label for="#checkbox5" class="form__input-label">Accounting Department</label>
                </div>
                <div class="form__checkbox">
                  <input type="checkbox" name="" id="checkbox5" class="form__input-checkbox">
                  <label for="#checkbox5" class="form__input-label">Accounting Department</label>
                </div> -->
                <?php foreach($departments as $department): ?>
                <div class="form__checkbox">
                  <input type="checkbox" name="" id="checkbox5" class="form__input-checkbox">
                  <label for="#checkbox5" class="form__input-label">Accounting Department</label>
                </div>
                <?php endforeach; ?>
                <span class="form__error">Error</span>
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
                <input type="text" name="" class="form__inputbox">
                <span class="form__error">Error</span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Number of Children:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" name="" class="form__inputbox">
                <span class="form__error">Error</span>
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
                <input type="text" name="" class="form__inputbox">
                <span class="form__error">Error</span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Honors and Rewards:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" name="" class="form__inputbox">
              </div>
            </div>

            <div class="form__list form__list--enumerate">
              <div class="form__label-wrapper">
                <label class="form__label">Seminars training:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" name="" class="form__inputbox">
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" name="" class="form__inputbox">
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" name="" class="form__inputbox">
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
                <input type="text" name="" class="form__inputbox">
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Job Type:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <select class="form__inputbox">
                  <option>-- Job Type</option>
                  <option>Full Time</option>
                  <option>Part Time</option>
                  <option>Resigned</option>
                </select>
                <span class="form__error">Error</span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Designation:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <select class="form__inputbox">
                  <option>-- Designation</option>
                  <option>Teaching</option>
                  <option>Non-Teaching</option>
                </select>
                <span class="form__error">Error</span>
              </div>
            </div>

            <div class="form__list form__list--enumerate">
              <div class="form__label-wrapper">
                <label class="form__label">Work Experience:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" name="" class="form__inputbox">
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" name="" class="form__inputbox">
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" name="" class="form__inputbox">
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
                <input type="file" multiple="multiple" name="files[]" id="input2">  
              </div>
            </div>
            <div class="form__button">
              <input type="submit" name="" class="button button--submit">
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