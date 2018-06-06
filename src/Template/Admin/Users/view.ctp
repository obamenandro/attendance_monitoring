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

      <div class="view-info__data view-info__data--attainment">
        <span class="view-info__data-title">Doctorate</span>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Name of School: </label>
          <span class="view-info__info">Iskul Bukol</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Degree/Course: </label>
          <span class="view-info__info">Of Course</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Units Earned: </label>
          <span class="view-info__info"><span class="not-applicable">N/A</span></span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Year Graduated: </label>
          <span class="view-info__info">2018</span>
        </div>
      </div>

      <div class="view-info__data view-info__data--attainment">
        <span class="view-info__data-title">Masters</span>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Name of School: </label>
          <span class="view-info__info">Iskul Bukol</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Degree/Course: </label>
          <span class="view-info__info">Of Course</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Units Earned: </label>
          <span class="view-info__info"><span class="not-applicable">N/A</span></span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Year Graduated: </label>
          <span class="view-info__info">2018</span>
        </div>
      </div>

      <div class="view-info__data view-info__data--attainment">
        <span class="view-info__data-title">College</span>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Name of School: </label>
          <span class="view-info__info">Iskul Bukol</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Degree/Course: </label>
          <span class="view-info__info">Of Course</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Highest Year Level Attained: </label>
          <span class="view-info__info">2018</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Year Graduated: </label>
          <span class="view-info__info">2018</span>
        </div>
      </div>

      <div class="view-info__data view-info__data--attainment">
        <span class="view-info__data-title">Secondary</span>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Name of School: </label>
          <span class="view-info__info">Iskul Bukol</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Highest Year Level Attained: </label>
          <span class="view-info__info">2018</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Year Graduated: </label>
          <span class="view-info__info">2018</span>
        </div>
      </div>

      <div class="view-info__data view-info__data--attainment">
        <span class="view-info__data-title">Elementary</span>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Name of School: </label>
          <span class="view-info__info">Iskul Bukol</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Highest Year Level Attained: </label>
          <span class="view-info__info">2018</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Year Graduated: </label>
          <span class="view-info__info">2018</span>
        </div>
      </div>

      <div class="view-info__data view-info__data--attainment">
        <span class="view-info__data-title">Elegibility</span>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Name of exam: </label>
          <span class="view-info__info">Example</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> License No.: </label>
          <span class="view-info__info">2018</span>
        </div>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Valid Until: </label>
          <span class="view-info__info">2018-02-02</span>
        </div>
      </div>

      <div class="view-info__title">
        <h3>Latest Work Experience</h3>
      </div>

      <div class="view-info__data view-info__data--attainment">
        <span class="view-info__data-title">Company Name Dito</span>
        <div class="view-info__data-wrapper">
          <label class="view-info__label"> Position Title: </label>
          <span class="view-info__info">Dogs</span>
        </div>
        <div class="view-info__data-wrapper view-info__data-wrapper--fullwidth">
          <label class="view-info__label"> Date Hired.: </label>
          <span class="view-info__info">2018</span>
        </div>
        <div class="view-info__data-wrapper view-info__data-wrapper--fullwidth">
          <label class="view-info__label"> Date Leave: </label>
          <span class="view-info__info">2018-02-02</span>
        </div>
      </div>
    </div>
    </div>

    <div>
      <div class="form__content">
        <div class="form__title">
          <h3>Employee Attendance</h3>
        </div>

        <div class="panel__search">
          <div class="panel__add-attendance">
            <a class="button button--add-attendance">Add Attendance</a>
          </div>
        </div>
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">ID</th>
              <th class="table__head-list">Date</th>
              <th class="table__head-list">Logged In</th>
              <th class="table__head-list">Logged Out</th>
              <th class="table__head-list">Status</th>
              <th class="table__head-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($attendanceLists as $key => $attendanceList): ?>
              <tr class="table__body">
                <td class="table__body-list"><?= $attendanceList['id']; ?></td>
                <td class="table__body-list"><?= date('Y-m-d', strtotime($attendanceList['date'])); ?></td>
                <td class="table__body-list"><?= date('h:i A', strtotime($attendanceList['timein'])); ?></td>
                <td class="table__body-list"><?= date('h:i A', strtotime($attendanceList['timeout'])); ?></td>
                <td class="table__body-list">
                  <span class="table__note
                    <?php
                      if ( $status[$attendanceList['status']] == 'Leave' ) {
                        echo "table__note--leave";
                      }
                      else if ( $status[$attendanceList['status']] == 'Present' ) {
                        echo "table__note--present";
                      }
                    ?>
                  ">
                  <?= $status[$attendanceList['status']]; ?>
                  </span>
                </td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit table__view--edit" id="<?= $attendanceList['id']; ?>">Edit</a>
                </td>
              </tr>
              <!-- MODAL FOR EDIT -->
              <div class="modal" id="js-modal-edit-<?= $attendanceList['id']; ?>">
                <div class="modal__container">
                  <div class="modal__header">
                    <div class="modal__close">
                      <span class="modal__exit">x</span>
                    </div>
                    <div class="modal__title">
                      <h3>Edit Attendance</h3>
                    </div>
                  </div>

                  <div class="modal__content">
                    <div>
                      <form action="/admin/users/attendanceEdit/<?= $attendanceList['user_id']; ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $attendanceList['id']; ?>">
                        <div class="form__content">
                          <div class="form__data form__data--modal">
                            <div class="form__list">
                              <div class="form__label-wrapper">
                                <label class="form__label">Date:</label>
                              </div>
                              <div class="form__input form__input--fullwidth">
                                <input type="text" name="date" class="form__inputbox js-datepicker" placeholder="YYYY-MM-DD" value="<?= date('Y-m-d', strtotime($attendanceList['date'])); ?>" readonly>
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
                                    'class'    => 'form__inputbox form__inputbox--select',
                                    'value'    => $attendanceList['status']
                                  ]);
                                ?>
                              </div>
                            </div>

                          <div class="modal__button">
                            <input type="submit" name="" class="button button--submit" value="Update">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </tbody>
        </table>
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

<script type="text/javascript">
  var id = "";

  $('.js-table-edit').on('click', function() {
    $('.backdrop').show();
    id = $(this).attr('id');
    $('#js-modal-edit-'+id).css({
      top: 0
    });

    if ( $('#js-modal-edit-'+id).find('.form__inputbox--select').val() > 0) {
      $('#js-modal-edit-'+id).find('.js-timepicker-edit').prop('readonly','readonly');
      $('#js-modal-edit-'+id).find('.js-timepicker-edit').val('00:00')
      $('#js-modal-edit-'+id).find('.js-timepicker-edit').addClass('form__inputbox--select-readonly');
    } else {
      $('#js-modal-edit-'+id).find('.js-timepicker-edit').prop('readonly',false);
      $('#js-modal-edit-'+id).find('.js-timepicker-edit').removeClass('form__inputbox--select-readonly');
    }
   });

  $('.modal__exit').on('click', function() {
    $('.backdrop').hide();
    $('#js-modal-edit-'+id+', #js-modal-add ').css({
      top: '-100%'
    });
  });

  $('.button--add-attendance').on('click', function() {
    $('.backdrop').show();
    $('#js-modal-add').css({
      top: 0
    });
  });

  $('.modal__exit').click(function() {
    loggedin = '';
    loggedout = '';
    $('.js-loggedout-error').removeClass('form__error').text('')
    $('.button--submit').attr('disabled', false).removeClass('button--disabled')
  })

</script>
