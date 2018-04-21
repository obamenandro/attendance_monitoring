<div class="panel__title">
  <h3>ADD EMPLOYEE</h3>
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

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Leave:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="number" class="form__inputbox">
              </div>
            </div>
          </div>
          <div class="form__button">
            <a href="/admin/users/add_personal" class="button button--submit">NEXT</a>
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
