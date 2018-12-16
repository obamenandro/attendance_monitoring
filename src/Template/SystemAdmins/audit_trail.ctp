<div class="panel__title">
  <h3>Audit Trail</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div>
      <div class="form__content">
        <form method="GET">
          <div class="panel__search" style="text-align: center; padding: 20px 0;">
            <div class="panel__search-box">
              <label class="panel__search-label">Date:</label>
              <select class="panel__search-input" name="date">
                <option value="">--</option>
                <option value="all" <?= isset($_GET['date']) && $_GET['date'] == 'all' ? 'selected' : ''?>>All</option>
                <option value="month" <?= isset($_GET['date']) && $_GET['date'] == 'month' ? 'selected' : ''?>>Month</option>
                <option value="week" <?= isset($_GET['date']) && $_GET['date'] == 'week' ? 'selected' : ''?>>Week</option>
                <option value="year" <?= isset($_GET['date']) && $_GET['date'] == 'year' ? 'selected' : ''?>>Year</option>
              </select>
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Actions:</label>
              <select class="panel__search-input" name="action">
                <option value="">--</option>
                <option value="all" <?= isset($_GET['action']) && $_GET['action'] == 'all' ? 'selected' : ''?>>All</option>
                <option value="added" <?= isset($_GET['action']) && $_GET['action'] == 'added' ? 'selected' : ''?>>Added</option>
                <option value="delete" <?= isset($_GET['action']) && $_GET['action'] == 'delete' ? 'selected' : ''?>>Deleted</option>
                <option value="update" <?= isset($_GET['action']) && $_GET['action'] == 'update' ? 'selected' : ''?>>Updated</option>
                <option value="report" <?= isset($_GET['action']) && $_GET['action'] == 'report' ? 'selected' : ''?>>Report</option>
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
                <th class="table__head-list">Date</th>
                <th class="table__head-list">Name</th>
                <th class="table__head-list">Page</th>
                <th class="table__head-list">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($logs as $key => $log): ?>
                <tr class="table__body">
                  <td class="table__body-list"><?= $log['created']; ?></td>
                  <td class="table__body-list"><?= $log['user']['firstname']; ?></td>
                  <td class="table__body-list"><?= $log['page']; ?></td>
                  <td class="table__body-list"><?= $log['action']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>

<script>

  $('#dataTable').dataTable({
    info:     false,
    searching: false,
    ordering: true,
    dom: 'Bfrtip',
    columnDefs: [
        { targets: 0, orderable: true},
        { targets: 1, orderable: true},
        { targets: 2, orderable: false},
        { targets: 3, orderable: false},
        { targets: 4, orderable: false}
    ],
    bLengthChange: false,
    buttons: [
        {
          extend: 'excelHtml5',
          text: 'Save as Excel',
          className: 'button button--report',
          title: 'AUDIT TRAIL',
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          title: 'AUDIT TRAIL',
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
          title: 'AUDIT TRAIL',
          customize: function ( win ) {
              $(win.document.body).css( 'font-size', '12px', 'text-align','center' );
              $(win.document.body).find('table').css('text-align','center' );
              $(win.document.body).find('h1').addClass('h1-title-report');
          }
        },
      ]
  });

</script>
