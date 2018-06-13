<div class="panel__title">
  <h3>Employee Detail</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div class="view-info">
      <div class="view-info__content">
        <div class="view-info__title">
          <h3>Employee Status</h3>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Employee Status: </label>
          <span class="view-info__info"> • <?= $jobtype[$employee['jobtype']] ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Designation: </label>
          <span class="view-info__info"> • <?= $designation[$employee['designation']] ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Date Hired: </label>
          <span class="view-info__info"> • <?= $employee['date_hired'] ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Department: </label>
          <span class="view-info__info"> • <?= isset($department[$employee['department']]) ? $department[$employee['department']] : '<span class="not-applicable">N/A</span>' ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Position: </label>
          <span class="view-info__info"> • <?= $employee['position'] ?> </span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Subject: </label>
          <span class="view-info__info"> • <?= $employee['subject'] ?> </span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Leave: </label>
          <span class="view-info__info"> • <?= $employee['total_leave'] ?></span>
        </div>
        
        <div class="view-info__data">
          <label class="view-info__label"> Remaining Leave: </label>
          <span class="view-info__info"> • <?= $employee['total_leave'] - count($employee['user_leaves']) ?></span>
        </div>

        <div class="view-info__title">
          <h3>Employee Information</h3>
        </div>

        <div class="view-info__image">
          <?php if($employee['image'] == NULL): ?>
            <img src="/img/user/default_avatar.png" alt="form-image" class="form__upload-picture">
          <?php else: ?>
            <img src="<?= $employee['image']; ?>" alt="form-image" class="form__upload-picture">
          <?php endif; ?>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Full Name: </label>
          <span class="view-info__info"> • <?= h(ucfirst($employee['firstname']))." ".h(ucfirst($employee['middlename']))." ".h(ucfirst($employee['lastname'])); ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Birthday: </label>
          <span class="view-info__info"> • <?= $employee['birthdate']; ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Address: </label>
          <span class="view-info__info"> • <?= h($employee['address']); ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Contact Number: </label>
          <span class="view-info__info"> • <?= h($employee['contact']); ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Email Address: </label>
          <span class="view-info__info"> • <?= h($employee['email']); ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Place of Birth: </label>
          <span class="view-info__info"> • <?= h($employee['place_of_birth']); ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Citizenship: </label>
          <span class="view-info__info"> • <?= h($employee['place_of_birth']); ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Civil Status: </label>
          <span class="view-info__info"> • <?= $civil_status[$employee['civil_status']]; ?></span>
        </div>

        <div class="view-info__title">
          <h3>Government ID</h3>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> SSS Number: </label>
          <span class="view-info__info"> • <?= !empty($employee['sss_number']) ? $employee['sss_number'] : '<span class="not-applicable">N/A</span>' ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> GSIS Number: </label>
          <span class="view-info__info"> • <?= !empty($employee['gsis_number']) ? $employee['gsis_number'] : '<span class="not-applicable">N/A</span>' ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> TIN Number: </label>
          <span class="view-info__info"> • <?= !empty($employee['tin_number']) ? $employee['tin_number'] : '<span class="not-applicable">N/A</span>' ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Philhealth Number: </label>
          <span class="view-info__info"> • <?= !empty($employee['philhealth_number']) ? $employee['philhealth_number'] : '<span class="not-applicable">N/A</span>' ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Pagibig Number: </label>
          <span class="view-info__info"> • <?= !empty($employee['pagibig_number']) ? $employee['pagibig_number'] : '<span class="not-applicable">N/A</span>' ?></span>
        </div>

        <div class="view-info__title">
          <h3>Educational Attainment</h3>
        </div>
      <?php foreach($employee['user_attainments'] as $key => $attainment): ?>
        <?php if ($attainment['degree'] <= 3): ?>
        <div class="view-info__data view-info__data--attainment">
          <span class="view-info__data-title"><?= isset($degree_name[$attainment['degree']]) ? $degree_name[$attainment['degree']] : '<span class="not-applicable">N/A</span>' ?></span>
          <div class="view-info__data-wrapper">
            <label class="view-info__label"> Name of School: </label>
            <span class="view-info__info"><?= !empty($attainment['school_name']) ? $attainment['school_name'] : '<span class="not-applicable">N/A</span>' ?></span>
          </div>
          <div class="view-info__data-wrapper">
            <label class="view-info__label"> Degree/Course: </label>
            <span class="view-info__info"><?= !empty($attainment['course']) ? $attainment['course'] : '<span class="not-applicable">N/A</span>' ?></span>
          </div>
          <div class="view-info__data-wrapper">
            <label class="view-info__label"> Units Earned: </label>
            <span class="view-info__info"><?= !empty($attainment['units']) ? $attainment['units'] : '<span class="not-applicable">N/A</span>' ?></span>
          </div>
          <div class="view-info__data-wrapper">
            <label class="view-info__label"> Year Graduated: </label>
            <span class="view-info__info"><?= !empty($attainment['year_graduated']) ? $attainment['year_graduated'] : '<span class="not-applicable">N/A</span>' ?></span>
          </div>
        </div>
        <?php else: ?>
          <div class="view-info__data view-info__data--attainment">
            <span class="view-info__data-title"><?= isset($degree_name[$attainment['degree']]) ? $degree_name[$attainment['degree']] : '<span class="not-applicable">N/A</span>' ?></span>
            <div class="view-info__data-wrapper">
              <label class="view-info__label"> Name of School: </label>
              <span class="view-info__info"><?= !empty($attainment['school_name']) ? $attainment['school_name'] : '<span class="not-applicable">N/A</span>' ?></span>
            </div>
            <div class="view-info__data-wrapper">
              <label class="view-info__label"> Highest Year Level Attained: </label>
              <span class="view-info__info"><?= !empty($attainment['level_attained']) ? $attainment['level_attained'] : '<span class="not-applicable">N/A</span>' ?></span>
            </div>
            <div class="view-info__data-wrapper">
              <label class="view-info__label"> Year Graduated: </label>
              <span class="view-info__info"><?= !empty($attainment['year_graduated']) ? $attainment['year_graduated'] : '<span class="not-applicable">N/A</span>' ?></span>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>

      <div class="view-info__data view-info__data--attainment">
        <span class="view-info__data-title">Elegibility</span>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Name of exam: </label>
          <span class="view-info__info"><?= !empty($employee['user_elligibility']['exam_name']) ? $employee['user_elligibility']['exam_name'] : '<span class="not-applicable">N/A</span>' ?></span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> License No.: </label>
          <span class="view-info__info"><?= !empty($employee['user_elligibility']['license_no']) ? $employee['user_elligibility']['license_no'] : '<span class="not-applicable">N/A</span>' ?></span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Valid Until: </label>
          <span class="view-info__info"><?= !empty($employee['user_elligibility']['valid_until']) ? $employee['user_elligibility']['valid_until'] : '<span class="not-applicable">N/A</span>' ?></span>
        </div>
      </div>

      <div class="view-info__title">
        <h3>Latest Work Experience</h3>
      </div>

      <div class="view-info__data view-info__data--attainment">
        <span class="view-info__data-title"><?= !empty($employee['work_experience']['company_name']) ? $employee['work_experience']['company_name'] : '<span class="not-applicable">N/A</span>' ?></span>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Position Title: </label>
          <span class="view-info__info"><?= !empty($employee['work_experience']['position']) ? $employee['work_experience']['position'] : '<span class="not-applicable">N/A</span>' ?></span>
        </div>
        <div class="view-info__data-wrapper view-info__data-wrapper--fullwidth">
          <label class="view-info__label"> Date Start: </label>
          <span class="view-info__info"><?= !empty($employee['work_experience']['start_work']) ? $employee['work_experience']['start_work'] : '<span class="not-applicable">N/A</span>' ?></span>
        </div>
        <div class="view-info__data-wrapper view-info__data-wrapper--fullwidth">
          <label class="view-info__label"> Date End: </label>
          <span class="view-info__info"><?= !empty($employee['work_experience']['end_work']) ? $employee['work_experience']['end_work'] : '<span class="not-applicable">N/A</span>' ?></span>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

<div class="backdrop"></div>

<div class="modal" id="js-modal-add">
  <div class="modal__container">
    <div class="modal__header">
      <div class="modal__close">
        <span class="modal__exit">x</span>
      </div>
      <div class="modal__title">
        <h3>Add Attendance</h3>
      </div>
    </div>

    <div class="modal__content">
      <div class="form">
        <?= $this->Form->create(); ?>
        <div class="form__content">
          <div class="form__data form__data--modal">
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Date:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" name="date" class="form__inputbox js-datepicker js-date" placeholder="YYYY-MM-DD" readonly>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Status:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->input('status', [
                    'options'  => $status,
                    'required' => false,
                    'div'      => false,
                    'label'    => false,
                    'class'    => 'form__inputbox form__inputbox--select'
                  ]);
                ?>
              </div>
            </div>

            <div class="modal__button">
              <?=
                $this->Form->input("Add", [
                'type'  => 'submit',
                'class' => 'button button--submit'
                ]);
              ?>
            </div>
          </div>
        </div>
        <?= $this->Form->end(); ?>
      </div>
    </div>
  </div>
</div>
