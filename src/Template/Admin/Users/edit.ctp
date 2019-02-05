<div class="panel__title">
  <h3>EDIT EMPLOYEE</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div>
      <?=
        $this->Form->create($userEdit, [
          'enctype' => 'multipart/form-data',
          'type'    => 'POST'
        ]);
      ?>
        <div class="form__content">
          <ul class="form__breadcrumb">
            <li class="form__breadcrumb-item">
              <a href="/admin/users/edit" class="form__breadcrumb-link">
                <span>Add Employee</span>
                <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
              </a>
            </li>
          </ul>
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

            <div class="form__list date-resigned" style="display: none;">
              <div class="form__label-wrapper">
                <label class="form__label">Date Resigned:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('resigned_date', [
                    'type'     => 'text',
                    'required' => false,
                    'div'      => false,
                    'label'    => false,
                    'readonly' => true,
                    'class'    => 'form__inputbox form--date-js',
                    'readonly' => true
                  ]);
                ?>
                <!-- <input type="text" class="form__inputbox form--date-js" readonly name_> -->
                <span class="form__error"><?= $this->Form->error('jobtype'); ?></span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Date Hired</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('date_hired', [
                    'type'     => 'text',
                    'required' => false,
                    'div'      => false,
                    'label'    => false,
                    'readonly' => true,
                    'class'    => 'form__inputbox form--date-js'
                  ]);
                ?>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Department:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('department', [
                    'options'  => $departments,
                    'required' => false,
                    'div'      => false,
                    'label'    => false,
                    'empty'    => 'Select Department',
                    'class'    => 'form__inputbox'
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('department'); ?></span>
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
                <?=
                  $this->Form->control('subject', [
                    'type'     => 'textarea',
                    'class'    => 'form__inputbox form__inputbox--textarea',
                    'label'    => false,
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('subject'); ?></span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">No. of Leave:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('total_leave', [
                    'type'     => 'number',
                    'required' => false,
                    'div'      => false,
                    'label'    => false,
                    'class'    => 'form__inputbox'
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('leave'); ?></span>
              </div>
            </div>
          </div>
          <div class="form__button">
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

  $('#jobtype').on('change', function() {
    if ( $(this).val() == 3 ) {
      $('.date-resigned').show();
    } else {
      $('.date-resigned').hide();
    }
  })

  $(function() {
    if ($('#jobtype').val() == 3) {
      $('.date-resigned').show();
    }
  });
</script>
