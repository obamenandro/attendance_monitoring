<div class="panel__title">
  <h3>List of Leave Filed</h3>
</div>
<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content">
        <?= $this->Flash->render(); ?>
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">ID</th>
              <th class="table__head-list">Last Name, First Name</th>
              <th class="table__head-list">Date Filed</th>
              <th class="table__head-list">Leave Start</th>
              <th class="table__head-list">Leave End</th>
              <th class="table__head-list">Status</th>
              <th class="table__head-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($records as $record): ?>
            <tr class="table__body">
              <td class="table__body-list"><?= $record['id'] ?></td>
              <td class="table__body-list"><?= ucfirst($record['user']['firstname']).' '.ucfirst($record['user']['middlename']).' '.ucfirst($record['user']['lastname']) ?>
              </td>
              <td class="table__body-list"><?= $record['created']->i18nFormat('yyyy-MM-dd') ?></td>
              <td class="table__body-list"><?= $record['date_start']->i18nFormat('yyyy-MM-dd') ?></td>
              <td class="table__body-list"><?= $record['date_end']->i18nFormat('yyyy-MM-dd') ?></td>
              <td class="table__body-list">
                <span class="table__body-<?= $record['status'] == 1 ? 'approved' : 'disapproved' ?>"><?= $record['status'] == 1 ? 'APPROVED' : 'REJECTED' ?></span>
              </td>
              <td class="table__body-list">
                <a class="table__view table__view--delete delete" data-id="<?= $record['id'] ?>" style="width: 40%;">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
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
<div class="backdrop"></div>
<script>
  $('.table__view--delete').click(function() {
    $('.backdrop').show();
    $('#js-modal-confirm').css({
        top: 0
    });
  })

  $('.modal__close, .button--back').click(function() {
    $('.backdrop').hide();
    $('#js-modal-confirm').css({
      top: '-100%'
    })
    $('#js-modal-disapproved-'+id).css({
        top: '-100%'
    })
  });

  $('#dataTable').dataTable({
    info:     false,
    searching: false,
    ordering: true,
    columnDefs: [
        { targets: 0, orderable: false},
        { targets: 2, orderable: false},
        { targets: 3, orderable: false},
        { targets: 4, orderable: false},
        { targets: 5, orderable: false},
        { targets: 6, orderable: false}
    ],
    bLengthChange: false,
  });

  var id = "";
  $('.delete').on('click', function() {
    id = $(this).data('id');
  });

  $('.user-delete').on('click', function() {
    window.location.href = '/admin/user_leaves/delete/'+id;
  });
</script>
