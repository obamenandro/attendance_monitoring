<div class="panel__title">
  <h3>Attendance Monitoring</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div class="view-info">
      <div class="view-info__content">
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
            <th class="table__head-list">Employee Name</th>
            <th class="table__head-list">Date</th>
            <th class="table__head-list">Status</th>
            <th class="table__head-list">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($attendance_lists as $key => $attendance): ?>
            <tr class="table__body">
                <td class="table__body-list"><?= $attendance['id']; ?></td>
                <td class="table__body-list"><?= ucfirst($attendance['user']['lastname']).", ".ucfirst($attendance['user']['firstname']) ?></td>
                <td class="table__body-list"><?= date('Y-m-d', strtotime($attendance['date'])); ?></td>
                <td class="table__body-list">
                <span class="table__note
                    <?php
                    if ( $status[$attendance['status']] == 'Leave' ) {
                        echo "table__note--leave";
                    }
                    else if ( $status[$attendance['status']] == 'Present' ) {
                        echo "table__note--present";
                    }
                    ?>
                ">
                <?= $status[$attendance['status']]; ?>
                </span>
                </td>
                <td class="table__body-list">
                <a class="table__view js-table-edit table__view--edit" id="<?= $attendance['id']; ?>">Edit</a>
                </td>
            </tr>
            <!-- MODAL FOR EDIT -->
            <div class="modal" id="js-modal-edit-<?= $attendance['id']; ?>">
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
                    <form action="/admin/users/attendanceEdit/<?= $attendance['user_id']; ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $attendance['id']; ?>">
                        <div class="form__content">
                        <div class="form__data form__data--modal">
                            <div class="form__list">
                            <div class="form__label-wrapper">
                                <label class="form__label">Date:</label>
                            </div>
                            <div class="form__input form__input--fullwidth">
                                <input type="text" name="date" class="form__inputbox js-datepicker" placeholder="YYYY-MM-DD" value="<?= date('Y-m-d', strtotime($attendance['date'])); ?>" readonly>
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
                                    'value'    => $attendance['status']
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
          <div class="form__data">
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
                    'empty'    => '- Select Status -',
                    'class'    => 'form__inputbox form__inputbox--select'
                  ]);
                ?>
              </div>
            </div>

            <div class="form__list">
              <div class="form__label-wrapper">
                <label class="form__label">Employee:</label>
              </div>
              <div class="form__input form__input--fullwidth">
                <?=
                  $this->Form->input('user_id', [
                    'options'  => $employee_lists,
                    'required' => false,
                    'div'      => false,
                    'label'    => false,
                    'empty'    => '- Select Employee -',
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

  $('.js-datepicker').datepicker({
    endDate: "today"
  })

</script>
