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
              <select class="panel__search-input" name="designation_id">
                <option value="">--</option>
                <option value="1">All</option>
                <option value="2">Month</option>
                <option value="2">Week</option>
                <option value="2">Year</option>
              </select>
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Actions:</label>
              <select class="panel__search-input" name="designation_id">
                <option value="">--</option>
                <option value="">All</option>
                <option value="">Added</option>
                <option value="">Deleted</option>
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
                <th class="table__head-list">Last Name, First Name</th>
                <th class="table__head-list">HR Record</th>
                <th class="table__head-list">Department</th>
                <th class="table__head-list">Action</th>
              </tr>
            </thead>
            <tbody>
                <tr class="table__body">
                  <td class="table__body-list">2018-11-21</td>
                  <td class="table__body-list">Oba, Menandro</td>
                  <td class="table__body-list">Added New employee</td>
                  <td class="table__body-list">Software engineer</td>
                  <td class="table__body-list">Added</td>
                </tr>
                <tr class="table__body">
                  <td class="table__body-list">2018-12-21</td>
                  <td class="table__body-list">Digo, Daryll James</td>
                  <td class="table__body-list">Resigned employee</td>
                  <td class="table__body-list">Front end engineer</td>
                  <td class="table__body-list">Deleted</td>
                </tr>
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
