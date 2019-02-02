<div class="panel__title">
  <h3>List of Leave Filed</h3>
</div>
<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content">
        <?= $this->Flash->render(); ?>
        <form method="GET" autocomplete='off'>
          <div class="panel__search panel-search">
            <div class="panel__search-box panel__search-box-input">
              <label class="panel__search-label">Search By Date:</label>
              <select name="date" class="panel__search-input" id="date">
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
              <!-- <input type="text" name="date" class="panel__search-input js-date" readonly> -->
            </div>
            <div class="panel__search-box">
              <input type="submit"  class="panel__search-button" value="search">
            </div>
          </div>
        </form>

        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Last Name, First Name</th>
              <th class="table__head-list">Date Filed</th>
              <th class="table__head-list">Leave Start</th>
              <th class="table__head-list">Leave End</th>
              <th class="table__head-list">Reason</th>
              <th class="table__head-list">Status</th>
              <th class="table__head-list">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($records as $record): ?>
            <tr class="table__body">
              <td class="table__body-list"><?= ucfirst($record['user']['firstname']).' '.ucfirst($record['user']['middlename']).' '.ucfirst($record['user']['lastname']) ?>
              </td>
              <td class="table__body-list"><?= $record['created']->i18nFormat('yyyy-MM-dd') ?></td>
              <td class="table__body-list"><?= $record['date_start']->i18nFormat('yyyy-MM-dd') ?></td>
              <td class="table__body-list"><?= $record['date_end']->i18nFormat('yyyy-MM-dd') ?></td>
              <td class="table__body-list"><?= isset($leave_reason[$record['leave_reason']]) ? $leave_reason[$record['leave_reason']] : '' ?></td>
              
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
  $(function() {
    let date = "<?= !empty($_GET['date']) ? $_GET['date'] : '' ?>"
    $('#date').val(date);

    $('.js-date').datepicker({
      changeMonth: true,
      dateFormat: 'MM',
    });
  });


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
    dom: 'Bfrtip',
    columnDefs: [
        { targets: 0, orderable: false},
        { targets: 2, orderable: false},
        { targets: 3, orderable: false},
        { targets: 4, orderable: false},
        { targets: 5, orderable: false},
        { targets: 6, orderable: false}
    ],
    bLengthChange: false,
    bLengthChange: false,
    buttons: [
      {
        extend: 'excelHtml5',
        text: 'Save as Excel',
        className: 'button button--report',
        title: 'List of Filed Report',
        exportOptions: {
          columns: 'th:not(:last-child)'
        }
      },
      {
        extend: 'pdf',
        text: 'Save as PDF',
        className: 'button button--report',
        title: 'List of Filed Report',
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
              doc.content[1].table.body[i][3].alignment = 'center';
            }
        }
      },
      {
        extend: 'print',
        text: 'Print Report',
        className: 'button button--report',
        title: 'List of Filed Report',
        exportOptions: {
          columns: 'th:not(:last-child)'
        },
        customize: function ( win ) {
            $(win.document.body).css( 'font-size', '12px', 'text-align','center' );
            $(win.document.body).find('table').css('text-align','center' );
            $(win.document.body).find('h1').addClass('h1-title-report');
        }
      },
    ]
  });

  var id = "";
  $('.delete').on('click', function() {
    id = $(this).data('id');
  });

  $('.user-delete').on('click', function() {
    window.location.href = '/admin/user_leaves/delete/'+id;
  });
</script>
