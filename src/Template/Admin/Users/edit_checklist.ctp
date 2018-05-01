<div class="panel__title">
  <h3>EDIT CHECKLIST</h3>
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
              <span>Educational Attainment</span>
              <i class="fa fa-chevron-right form__breadcrumb-icon"></i>
            </a>
          </li>
          <li class="form__breadcrumb-item">
            <a href="/admin/users/edit_checklist" class="form__breadcrumb-link">
              <span>Checklist</span>
            </a>
          </li>
        </ul>
        
        <div class="form">
          <div class="user-panel__note">
            <p class="user-panel__note-content">Please check the requirements that already pass to HR Department:</p>
          </div>
          <div class="checklist">
            <ul>
              <li class="checklist__list">
                <div class="checklist__box">
                  <input type="checkbox" class="checklist__input" checked>
                  <label class="checklist__label">Recent ID Pictures</label>
                </div>
              </li>
              <li class="checklist__list">
                <div class="checklist__box">
                  <input type="checkbox" class="checklist__input" checked>
                  <label class="checklist__label">TOR</label>
                </div>
              </li>
              <li class="checklist__list">
                <div class="checklist__box">
                  <input type="checkbox" class="checklist__input">
                  <label class="checklist__label">Diploma</label>
                </div>
              </li>
              <li class="checklist__list">
                <div class="checklist__box">
                  <input type="checkbox" class="checklist__input">
                  <label class="checklist__label">Certificate form Past Employers</label>
                </div>
              </li>
              <li class="checklist__list">
                <div class="checklist__box">
                  <input type="checkbox" class="checklist__input">
                  <label class="checklist__label">Result of Government Exam Passed</label>
                </div>
              </li>
              <li class="checklist__list">
                <div class="checklist__box">
                  <input type="checkbox" class="checklist__input">
                  <label class="checklist__label">License</label>
                </div>
              </li>
              <li class="checklist__list">
                <div class="checklist__box">
                  <input type="checkbox" class="checklist__input">
                  <label class="checklist__label">Seminars, Trainings, and Attended Certificates</label>
                </div>
              </li>
              <li class="checklist__list">
                <div class="checklist__box">
                  <input type="checkbox" class="checklist__input">
                  <label class="checklist__label">Government Issued IDs</label>
                </div>
              </li>
            </ul>
            
            <div class="checklist__for-technical">
              <span class="checklist__for-technical-title">For Technical Instructors Only:</span>
              <ul>
                <li class="checklist__list">
                  <div class="checklist__box">
                    <input type="checkbox" class="checklist__input">
                    <label class="checklist__label">6.09 (Training Course for Instructors)</label>
                  </div>
                </li>
                <li class="checklist__list">
                  <div class="checklist__box">
                    <input type="checkbox" class="checklist__input">
                    <label class="checklist__label">3.12 (Assessment, Examination and Certification for Seafarers)</label>
                  </div>
                </li>
                <li class="checklist__list">
                  <div class="checklist__box">
                    <input type="checkbox" class="checklist__input">
                    <label class="checklist__label">6.10 (Training Program for Instructor and Assessor Conducting Simulator-Based Training and Assessment)</label>
                  </div>
                </li>
              </ul>
            </div>
          </div>    
        </div>
      <div class="form__button">
        <a href="/admin/users/edit_educational" class="button button--back">Back</a>
        <a href="/admin/users/edit_picture" class="button button--submit">NEXT</a>
      </div>
    <?= $this->Form->end(); ?>
  </div>
</div>
</div>