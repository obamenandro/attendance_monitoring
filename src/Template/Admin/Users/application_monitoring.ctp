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
        <h3>Application Monitoring</h3>
        </div>
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
        <thead>
            <tr class="table__head">
            <th class="table__head-list">ID</th>
            <th class="table__head-list">Applicant Name</th>
            <th class="table__head-list">Position</th>
            <th class="table__head-list">Status</th>
            <th class="table__head-list">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($application_lists as $key => $application): ?>
            <tr class="table__body">
                <td class="table__body-list"><?= $application['id']; ?></td>
                <td class="table__body-list"><?= ucfirst($application['lastname']).", ".ucfirst($application['firstname']) ?></td>
                <td class="table__body-list"><?= $application['positions']; ?></td>
                <td class="table__body-list">
                <span class="table__note">
                <?= $application_status[$application['accepted']]; ?>
                </span>
                </td>
                <td class="table__body-list">
                  <a href="/admin/users/view/<?= $application['id'] ?>" class="table__view">View</a>
                  <a href="/admin/users/application_accept/<?= $application['id'] ?>" class="table__view table__view--edit">Accept</a>
                  <a href="/admin/users/application_decline/<?= $application['id'] ?>" class="table__view table__view--delete delete" data-id="">Decline</a>
                </td>
            </tr>>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
  </div>
</div>

<div class="backdrop"></div>

<div class="modal" id="js-modal-add">
  <div class="modal__container modal__container--attendance">
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

<div class="modal" id="js-modal-confirm" style="display: inline-block;">
  <div class="modal__container">
    <div class="modal__header">
      <div class="modal__close">
        <span class="modal__exit">x</span>
      </div>
      <div class="modal__title">
        <h3>Confirmation</h3>
      </div>
    </div>

    <div class="modal__content">
      <div class="modal__content-text">
       <span>Are you sure you want to Delete?</span>
      </div>
      <div class="modal__button">
        <a class="button button--back">Close</a>
        <a class="button button--delete user-delete">Delete</a>
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
    $('#js-modal-edit-'+id+', #js-modal-add, #js-modal-confirm ').css({
      top: '-100%'
    });
  });

  $('.button--back').on('click', function() {
    $('.backdrop').hide();
    $('#js-modal-confirm ').css({
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

  $('.table__view--delete').click(function() {
    $('.backdrop').show();
    $('#js-modal-confirm').css({
      top: 0
    });
  });
  var attendance_id = "";
  $('.delete').on('click', function() {
    attendance_id = $(this).data('id');
  });

  $('.user-delete').on('click', function() {
    window.location.href = '/admin/users/attendance_delete/'+attendance_id;
  });

  $('#dataTable').dataTable({
    info:     false,
    searching: false,
    ordering: false,
    bLengthChange: false,
  });
</script>
