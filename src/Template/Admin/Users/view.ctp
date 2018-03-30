<div class="panel__title">
  <h3>Employee Detail</h3>
</div>


<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div class="view-info">
      <div class="view-info__content">
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
          <span class="view-info__info"> - <?= h(ucfirst($employee['firstname']))." ".h(ucfirst($employee['middlename']))." ".h(ucfirst($employee['lastname'])); ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Birthday: </label>
          <span class="view-info__info"> - <?= $employee['birthdate']; ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Address: </label>
          <span class="view-info__info"> - <?= h($employee['address']); ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Contact Number: </label>
          <span class="view-info__info"> - <?= h($employee['contact']); ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Email Address: </label>
          <span class="view-info__info"> - <?= h($employee['email']); ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Place of Birth: </label>
          <span class="view-info__info"> - <?= h($employee['place_of_birth']); ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Citizenship: </label>
          <span class="view-info__info"> - <?= h($employee['place_of_birth']); ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Civil Status: </label>
          <span class="view-info__info"> - <?= $civilStatus[$employee['civil_status']]; ?></span>
        </div>

        <div class="view-info__title">
          <h3>Government ID</h3>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> SSS Number: </label>
          <span class="view-info__info"> - <?= $employee['governments'][0]['sss_number'] ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> GSIS Number: </label>
          <span class="view-info__info"> - <?= $employee['governments'][0]['gsis_number'] ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> TIN Number: </label>
          <span class="view-info__info"> - <?= $employee['governments'][0]['tin_number'] ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Philhealth Number: </label>
          <span class="view-info__info"> - <?= $employee['governments'][0]['philhealth_number'] ?></span>
        </div>

        <div class="view-info__data">
          <label class="view-info__label"> Pagibig Number: </label>
          <span class="view-info__info"> - <?= $employee['governments'][0]['pagibig_number'] ?></span>
        </div>
      </div>
    </div>

    <div class="form">
      <div class="form__content">
        <div class="form__title">
          <h3>Employee Attendance</h3>
        </div>

        <div class="panel__search">
          <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="panel__search-wrapper">
              <div class="panel__search-box">
                <label class="panel__search-label">ID:</label>
                <input type="text" name="" class="panel__search-input">
              </div>
              <div class="panel__search-box">
                <label class="panel__search-label">Name:</label>
                <input type="text" name="" class="panel__search-input">
              </div>
              <div class="panel__search-box">
                <label class="panel__search-label">Status:</label>
                <input type="text" name="" class="panel__search-input">
              </div>
              <div class="panel__search-box">
                <input type="submit" name="" class="panel__search-button" value="search">
              </div>
            </div>
          </form>
          <div class="panel__add-attendance">
            <a class="button button--add-attendance">Add Attendance</a>
          </div>
        </div>
        <table id="dataTable" class="display table" cellspacing="0" width="100%">
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
                <td class="table__body-list"><span class="table__note"><?= $status[$attendanceList['status']]; ?></span></td>
                <td class="table__body-list">
                  <a class="table__view js-table-edit" id="<?= $attendanceList['id']; ?>">Edit</a>
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
                    <div class="form">
                      <form action="/admin/users/attendanceEdit/<?= $attendanceList['user_id']; ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $attendanceList['id']; ?>">
                        <div class="form__content">
                          <div class="form__data form__data--modal">
                            <div class="form__list form__list--date">
                              <div class="form__label-wrapper">
                                <label class="form__label">Date:</label>
                              </div>
                              <div class="form__input form__input--fullwidth">
                                <input type="text" name="date" class="form__inputbox js-datepicker" placeholder="YYYY-MM-DD" value="<?= date('Y-m-d', strtotime($attendanceList['date'])); ?>">
                                <span class="form__error">Error</span>
                              </div>
                            </div>
                            <div class="form__list">
                              <div class="form__label-wrapper">
                                <label class="form__label">Logged In:</label>
                              </div>
                              <div class="form__input form__input--fullwidth">
                                <input type="text" name="" class="form__inputbox js-timepicker" data-time-format="H:i" placeholder="hh:mm" value="<?= date('h:i', strtotime($attendanceList['timein'])); ?>">
                                <span class="form__error">Error</span>
                              </div>
                            </div>

                            <div class="form__list">
                              <div class="form__label-wrapper">
                                <label class="form__label">Logged Out:</label>
                              </div>
                              <div class="form__input form__input--fullwidth">
                                <input type="text" name="" class="form__inputbox js-timepicker" data-time-format="H:i" placeholder="hh:mm" value="<?= date('h:i', strtotime($attendanceList['timeout'])); ?>">
                                <span class="form__error">Error</span>
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
                                    'class'    => 'form__inputbox',
                                    'value'    => $attendanceList['status']
                                  ]);
                                ?>
                                <span class="form__error">Error</span>
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
            <div class="form__list form__list--date">
              <div class="form__label-wrapper">
                <label class="form__label">Date:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" name="date" class="form__inputbox js-datepicker" placeholder="YYYY-MM-DD">
                <span class="form__error">Error</span>
              </div>
            </div>
            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Logged In:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" name="timeout" class="form__inputbox js-timepicker" data-time-format="H:i" placeholder="hh:mm">
                <span class="form__error">Error</span>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Logged Out:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <input type="text" name="timein" class="form__inputbox js-timepicker" data-time-format="H:i" placeholder="hh:mm">
                <span class="form__error">Error</span>
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
                      'class'    => 'form__inputbox'
                    ]);
                  ?>
                  <span class="form__error">Error</span>
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
    id = $(this).attr('id');
    $('#js-modal-edit-'+id).show();
    $('body').css('overflow-y', 'hidden');
  });

  $('.modal__exit').on('click', function() {
    $('#js-modal-edit-'+id+', #js-modal-add ').hide();
    $('body').css('overflow-y', 'scroll');
  });

  $('.button--add-attendance').on('click', function() {
    $('#js-modal-add').show();
    $('body').css('overflow-y', 'hidden');
  });

  $('.js-datepicker').datepicker({
    format: 'yyyy/mm/dd'
  });

  $('.js-timepicker').on('focus', function() {
    $(this).timepicker()
  })
</script>
