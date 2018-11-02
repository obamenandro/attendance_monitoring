<div class="panel__title">
  <h3>Leave Report</h3>
</div>
<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content">
        <?= $this->Flash->render(); ?>
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Last Name, First Name</th>
              <th class="table__head-list">Total Leave</th>
              <th class="table__head-list">Used Leave</th>
              <th class="table__head-list">Remaining Leave</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table__body">
              <td class="table__body-list">Digo, Daryll Jame</td>
              <td class="table__body-list">12</td>
              <td class="table__body-list">6</td>
              <td class="table__body-list">6</td>
            </tr>
            <tr class="table__body">
              <td class="table__body-list">Digo, Daryll Jame</td>
              <td class="table__body-list">12</td>
              <td class="table__body-list">6</td>
              <td class="table__body-list">6</td>
            </tr>
            <tr class="table__body">
              <td class="table__body-list">Digo, Daryll Jame</td>
              <td class="table__body-list">12</td>
              <td class="table__body-list">6</td>
              <td class="table__body-list">6</td>
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
        { targets: 1, orderable: false},
        { targets: 2, orderable: false},
        { targets: 3, orderable: false}
    ],
    bLengthChange: false,
    buttons: [
      {
        extend: 'excelHtml5',
        text: 'Save as Excel',
        className: 'button button--report',
        title: 'Leave Report',
      },
      {
        extend: 'pdf',
        text: 'Save as PDF',
        className: 'button button--report',
        title: 'Leave Report',
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
        title: 'Leave Report',
        customize: function ( win ) {
            $(win.document.body).css( 'font-size', '12px', 'text-align','center' );
            $(win.document.body).find('table').css('text-align','center' );
            $(win.document.body).find('h1').addClass('h1-title-report');
        }
      },
    ]
  });
</script>
