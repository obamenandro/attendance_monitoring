<div class="panel__title">
<h3>EDUCATIONAL ATTAINMENT AND LATEST WORK EXPERIENCE</h3>
</div>

<div class="panel__container">
<?= $this->Flash->render(); ?>
<div class="panel__content">
<div>
  <?= $this->Form->create('', ['type' => 'POST']); ?>
    <div class="form__content">
    <ul class="form__breadcrumb">
      <li class="form__breadcrumb-item">
      <a href="/admin/users/edit" class="form__breadcrumb-link">
          <span>Edit Employee</span>
          <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
      </a>
      </li>
      <li class="form__breadcrumb-item">
      <a href="/admin/users/edit_personal" class="form__breadcrumb-link">
          <span>Personal Data</span>
          <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
      </a>
      </li>
      <li class="form__breadcrumb-item">
      <a href="/admin/users/edit_educational" class="form__breadcrumb-link">
          <span>Educational Attainment and Latest Work Experience</span>
          <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
      </a>
      </li>
    </ul>

      <div class="form">
      <div class="form__user-title">
        <span>DOCTORATE</span>
      </div>
      <div class="js-wrapper-append">
        <div class="js-wrapper-doctorate">
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Name of School:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Doctorate.school_name', [
                    'type'     => 'text',
                    'div'      => false,
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox',
                    'value'    => isset($educational[1]) && !empty($educational[1]['school_name'])
                              ? $educational[1]['school_name'] : ''
                  ]);
                ?>
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-title">
            <div class="form__label-wrapper">
              <label class="form__label">Degree/Course:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Doctorate.course', [
                    'type'     => 'text',
                    'div'      => false,
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox',
                    'value'    => isset($educational[1]) && !empty($educational[1]['course'])
                              ? $educational[1]['course'] : ''
                  ]);
                ?>
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label">Units Earned:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                <?=
                  $this->Form->control('Doctorate.units', [
                    'type'     => 'number',
                    'div'      => false,
                    'error'    => false,
                    'required' => false,
                    'class'    => 'form__inputbox',
                    'value'    => isset($educational[1]) && !empty($educational[1]['units'])
                              ? $educational[1]['units'] : ''
                  ]);
                ?>
              </div>
            </div>
          </div>
          <div class="form__list form__list--user-range">
            <div class="form__label-wrapper">
              <label class="form__label form__label--secondcolumn ">Year Graduated:</label>
            </div>
            <div class="form__input">
              <div class="input text">
                 <?=
                    $this->Form->control('Doctorate.year_graduated', [
                      'type'     => 'text',
                      'div'      => false,
                      'error'    => false,
                      'required' => false,
                      'readonly' => true,
                      'class'    => 'form__inputbox form__year-graduated',
                      'value'    => isset($educational[1]) && !empty($educational[1]['year_graduated'])
                                ? $educational[1]['year_graduated'] : ''
                    ]);
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="form">
      <div class="form__user-title">
        <span>Masters</span>
      </div>
      <div class="js-wrapper-append js-wrapper-masters">
        <div class="form__list form__list--user-title">
          <div class="form__label-wrapper">
            <label class="form__label">Name of School:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Master.school_name', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($educational[2]) && !empty($educational[2]['school_name'])
                            ? $educational[2]['school_name'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-title">
          <div class="form__label-wrapper">
            <label class="form__label">Degree/Course:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Master.course', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($educational[2]) && !empty($educational[2]['course'])
                            ? $educational[2]['course'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label">Units Earned:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Master.units', [
                  'type'     => 'number',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($educational[2]) && !empty($educational[2]['units'])
                            ? $educational[2]['units'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label form__label--secondcolumn">Year Graduated:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Master.year_graduated', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'readonly' => true,
                  'class'    => 'form__inputbox form__year-graduated',
                  'value'    => isset($educational[2]) && !empty($educational[2]['year_graduated'])
                            ? $educational[2]['year_graduated'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
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
              <?=
                $this->Form->control('College.school_name', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($educational[3]) && !empty($educational[3]['school_name'])
                            ? $educational[3]['school_name'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-title">
          <div class="form__label-wrapper">
            <label class="form__label">Degree/Course:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('College.course', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($educational[3]) && !empty($educational[3]['course'])
                            ? $educational[3]['course'] : ''
                ]);
              ?>
            </div>
            <span class="form__error form__error-required">Please fill up Degree/Course</span>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label">Year Graduated:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('College.year_graduated', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'readonly' => true,
                  'class'    => 'form__inputbox form__year-graduated',
                  'value'    => isset($educational[3]) && !empty($educational[3]['year_graduated'])
                            ? $educational[3]['year_graduated'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label form__label--secondcolumn">Highest Yr/Level Attained:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('College.level_attained', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($educational[3]) && !empty($educational[3]['level_attained'])
                            ? $educational[3]['level_attained'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
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
              <?=
                $this->Form->control('Secondary.school_name', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($educational[4]) && !empty($educational[4]['school_name'])
                            ? $educational[4]['school_name'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label">Year Graduated:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Secondary.year_graduated', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'readonly' => true,
                  'class'    => 'form__inputbox form__year-graduated',
                  'value'    => isset($educational[4]) && !empty($educational[4]['year_graduated'])
                            ? $educational[4]['year_graduated'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label form__label--secondcolumn">Highest Yr/Level Attained:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Secondary.level_attained', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($educational[4]) && !empty($educational[4]['level_attained'])
                            ? $educational[4]['level_attained'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
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
              <?=
                $this->Form->control('Elementary.school_name', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($educational[5]) && !empty($educational[5]['school_name'])
                            ? $educational[5]['school_name'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label">Year Graduated:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Elementary.year_graduated', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'readonly' => true,
                  'class'    => 'form__inputbox form__year-graduated',
                  'value'    => isset($educational[5]) && !empty($educational[5]['year_graduated'])
                            ? $educational[5]['year_graduated'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label">Highest Yr/Level Attained:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Elementary.level_attained', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($educational[5]) && !empty($educational[5]['level_attained'])
                            ? $educational[5]['level_attained'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
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
              <?=
                $this->Form->control('Elegibility.exam_name', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($eligibility[0]) && !empty($eligibility[0]['exam_name'])
                            ? $eligibility[0]['exam_name'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label">License No.:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Elegibility.license_no', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($eligibility[0]) && !empty($eligibility[0]['license_no'])
                            ? $eligibility[0]['license_no'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label form__label--secondcolumn">Valid Until:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Elegibility.valid_until', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox js-datepicker-elegibility',
                  'value'    => isset($eligibility[0]) && !empty($eligibility[0]['valid_until'])
                            ? $eligibility[0]['valid_until'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="form">
      <div class="form__user-title">
        <span>Latest Work Experience</span>
      </div>
      <div class="js-wrapper-append">
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label">From (mm/dd/yyyy):</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Work_experience.start_work', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox js-datepicker-from',
                  'readonly' => true,
                  'value'    => isset($work_experience[0]) && !empty($work_experience[0]['start_work'])
                            ? date('m/d/Y', strtotime($work_experience[0]['start_work'])) : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-range">
          <div class="form__label-wrapper">
            <label class="form__label form__label--secondcolumn">To (mm/dd/yyyy):</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Work_experience.end_work', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox js-datepicker-from',
                  'readonly' => true,
                  'value'    => isset($work_experience[0]) && !empty($work_experience[0]['end_work'])
                            ? date('m/d/Y', strtotime($work_experience[0]['end_work'])) : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-title">
          <div class="form__label-wrapper">
            <label class="form__label">Position Title:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Work_experience.position', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($work_experience[0]) && !empty($work_experience[0]['position'])
                            ? $work_experience[0]['position'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
        <div class="form__list form__list--user-title">
          <div class="form__label-wrapper">
            <label class="form__label">Company:</label>
          </div>
          <div class="form__input">
            <div class="input text">
              <?=
                $this->Form->control('Work_experience.company_name', [
                  'type'     => 'text',
                  'div'      => false,
                  'error'    => false,
                  'required' => false,
                  'class'    => 'form__inputbox',
                  'value'    => isset($work_experience[0]) && !empty($work_experience[0]['company_name'])
                            ? $work_experience[0]['company_name'] : ''
                ]);
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form__button">
      <a class="button button--back">Back</a>
      <input type="submit" class="button button--submit" value="NEXT">
    </div>
  <?= $this->Form->end(); ?>
</div>
</div>
</div>

<script type="text/javascript">
     $('.button--back').click(function() {
        window.history.back()
    })

    $('.form__year-graduated').datepicker({
        format: 'yyyy',
        minViewMode: "years",
        viewMode: "years",
        endDate: "today"
    }).attr('readonly','readonly');

    $('.js-datepicker-from, .js-datepicker-to').datepicker({
        endDate: "today",
    }).attr('readonly','readonly');

    $('.js-datepicker-elegibility').datepicker({
        startDate: "today"
    }).attr('readonly','readonly');

</script>
