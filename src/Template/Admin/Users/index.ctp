<div class="panel__title">
  <h3>Employee List</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div>
      <div class="form__content">
        <form method="GET">
          <div class="panel__search">
            <div class="panel__search-box">
              <label class="panel__search-label">ID:</label>
              <input type="text" name="user_id" class="panel__search-input" value="<?= !empty($_GET['user_id']) ? $_GET['user_id'] : '' ?>">
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Name:</label>
              <input type="text" name="firstname" class="panel__search-input" value="<?= !empty($_GET['firstname']) ? $_GET['firstname'] : '' ?>">
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Designation:</label>
              <select class="panel__search-input" name="designation_id">
                <option value="">--</option>
                <option value="1" <?= !empty($_GET['designation_id']) && $_GET['designation_id'] == 1 ? 'selected' : '' ?>>Teaching</option>
                <option value="2" <?= !empty($_GET['designation_id']) && $_GET['designation_id'] == 2 ? 'selected' : '' ?>>Non Teaching</option>
              </select>
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Department:</label>
              <select class="panel__search-input" name="department" id="department">
                <option value="">--</option>
                <option value="1">GenEd</option>
                <option value="2">BSMT</option>
                <option value="3">BSMARe</option>
                <option value="4">BSNA</option>
                <option value="5">Admin</option>
                <option value="6">Staff</option>
                <option value="7">Maintenance Personnel</option>
              </select>
            </div>
            <div class="panel__search-box">
              <input type="submit" name="" class="panel__search-button" value="search">
            </div>
          </div>
          </form>

          <table id="dataTable" class="display table table--list-employee" style="width: 100%">
            <thead>
              <tr class="table__head">
                <th class="table__head-list">ID</th>
                <th class="table__head-list">Last Name, First Name</th>
                <th class="table__head-list">Position</th>
                <th class="table__head-list">Department</th>
                <th class="table__head-list">Designation</th>
                <th class="table__head-list">Date Hired</th>
                <th class="table__head-list">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($users as $user): ?>
                <tr class="table__body">
                  <td class="table__body-list"><?= $user['id'] ?></td>
                  <td class="table__body-list"><?= $user['lastname'].", ".$user['firstname'] ?></td>
                  <td class="table__body-list"><?= $user['position'] ?></td>
                  <td class="table__body-list"><?= isset($departments[$user['department']]) ?
                  $departments[$user['department']] : '<span class="not-applicable">N/A</span>' ?></td>
                  <td class="table__body-list"><?= isset($designation[$user['designation']]) ?
                  $designation[$user['designation']] : '<span class="not-applicable">N/A</span>' ?></td>
                  <td class="table__body-list"><?= !empty($user['date_hired']) ? $user['date_hired'] : '<span class="not-applicable">N/A</span>' ?></td>
                  <td class="table__body-list">
                    <a href="/admin/users/view/<?= $user['id'] ?>" class="table__view">View</a>
                    <a href="/admin/users/edit/<?= $user['id'] ?>" class="table__view table__view--edit">Edit</a>
                    <a href="/admin/users/delete/<?= $user['id'] ?>" class="table__view table__view--delete delete" data-id="<?= $user['id'] ?>">Delete</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <td class="table__footer"></td>
              </tr>
            </tfoot>
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
  $(function() {
    let department = "<?php echo !empty($_GET['department']) ? $_GET['department'] : '' ?>"

    $('#department').val(department);
  });
  let table = $('#dataTable').dataTable({
    dom: 'Bfrtip',
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
    buttons: [
        {
          extend: 'excelHtml5',
          text: 'Save as Excel',
          className: 'button button--report',
          title: 'List Of Employee',
          exportOptions: {
            columns: 'th:not(:last-child)'
          }
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          title: 'List Of Employee',
          exportOptions: {
            columns: 'th:not(:last-child)'
          },
          customize: function (doc) {
            var rowCount = document.getElementById("dataTable").rows.length;
            doc.content[1].table.widths =
              Array(doc.content[1].table.body[0].length + 1).join('*').split('');

            for (i = 1; i < rowCount; i++) {
              doc.content[1].table.body[i][0].alignment = 'center';
              doc.content[1].table.body[i][1].alignment = 'center';
              doc.content[1].table.body[i][2].alignment = 'center';
            }
          }
        },
        {
          extend: 'print',
          text: 'Print Report',
          className: 'button button--report',
          title: 'List Of Employee',
          exportOptions: {
            columns: 'th:not(:last-child)'
          },
          customize: function ( win ) {
              $(win.document.body).css( 'font-size', '12px', 'text-align','center' );
              $(win.document.body).find('table').css('text-align','center' );
              $(win.document.body).find('h1').addClass('h1-title-report');
          }
        },
      ],
    bLengthChange: false,
  });

  $('html').delegate('.table__view--delete','click', function() {
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
  })

  var user_id = "";
  $('html').delegate('.delete','click', function() {
    user_id = $(this).data('id');
  });

  $('html').delegate('.user-delete','click', function() {
    window.location.href = '/admin/users/delete/'+user_id;
  });
  $('.table__footer').html('Results: '+ table.fnGetData().length);
</script>
