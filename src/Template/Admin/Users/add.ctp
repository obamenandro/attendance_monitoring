<div class="panel__title">
  <h3>ADD EMPLOYEE</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div>
      <?= $this->Form->create($add_form, ['type' => 'POST']); ?>
        <div class="form__content">
          <ul class="form__breadcrumb">
            <li class="form__breadcrumb-item">
              <a href="/admin/users/add" class="form__breadcrumb-link">
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
                    'value'    => !empty($session_data['jobtype']) ? $session_data['jobtype'] : '',
                    'empty'    => 'Select Status',
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
                    'value'    => !empty($session_data['designation']) ? $session_data['designation'] : '',
                    'empty'    => 'Select Designation',
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
                <?= 
                  $this->Form->control('date_hired', [
                    'type'     => 'text',
                    'class'    => 'form__inputbox form--date-js',
                    'required' => false,
                    'div'      => false,
                    'label'    => false,
                    'value'    => !empty($session_data['date_hired']) ? $session_data['date_hired'] : '',
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('date_hired'); ?></span>
              </div>
            </div>
            
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Deparment:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('department', [
                    'options'  => $departments,
                    'required' => false,
                    'div'      => false,
                    'label'    => false,
                    'value'    => !empty($session_data['department']) ? $session_data['department'] : '',
                    'empty'    => 'Select Deparment',
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
                    'value'    => !empty($session_data['position']) ? $session_data['position'] : '',
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
                    'value'    => !empty($session_data['subject']) ? $session_data['subject'] : '',
                    'required' => false
                  ]);
                ?>
                <span class="form__error"><?= $this->Form->error('subject'); ?></span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Leave:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->control('leave', [
                    'type'     => 'number',
                    'required' => false,
                    'div'      => false,
                    'label'    => false,
                    'value'    => !empty($session_data['leave']) ? $session_data['leave'] : '',
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
</script>
