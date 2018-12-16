<div class="panel__title">
  <h3>FACULTY PROFILE 6.09, 3, 12 & 6.10 TRAINING</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content">
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Last Name, First Name</th>
              <th class="table__head-list">Department</th>
              <th class="table__head-list">6.09</th>
              <th class="table__head-list">3.12</th>
              <th class="table__head-list">6.10</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($users as $key => $user): ?>
            <tr>
              <td class="table__body-list"><?= ucfirst($user['lastname']).", ".ucfirst($user['firstname']) ?></td>
              <td class="table__body-list"><?= isset($department[$user['department']]) ? $department[$user['department']] : 'N/A' ?></td>
              <td class="table__body-list"><?= !empty($user['user_checklists'][0]['requirement_id']) ? '✔' : '✖'  ?></td>
              <td class="table__body-list"><?= !empty($user['user_checklists'][1]['requirement_id']) ? '✔' : '✖'  ?></td>
              <td class="table__body-list"><?= !empty($user['user_checklists'][2]['requirement_id']) ? '✔' : '✖'  ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#dataTable').DataTable( {
      dom: 'Bfrtip',
      paging: true,
      autoWidth: true,
      ordering: true,
      columnDefs: [
        { targets: 1, orderable: false},
        { targets: 2, orderable: false},
        { targets: 3, orderable: false},
        { targets: 4, orderable: false},
    ],
      info:     false,
      searching: false,
      buttons: [
        {
          extend: 'excelHtml5',
          text: 'Save as Excel',
          className: 'button button--report',
          title: 'Faculty Profile 6.09, 3, 12 & 6.10 Training',
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          title: 'Faculty Profile 6.09, 3, 12 & 6.10 Training',
          orientation: 'landscape',
          pageSize: 'LEGAL',
          customize: function (doc) {
            var rowCount = document.getElementById("dataTable").rows.length;
            doc.content[1].table.widths =
              Array(doc.content[1].table.body[0].length + 1).join('*').split('');

            for (i = 1; i < rowCount; i++) {
              doc.content[1].table.body[i][1].alignment = 'center';
              doc.content[1].table.body[i][2].alignment = 'center';
              doc.content[1].table.body[i][3].alignment = 'center';
              doc.content[1].table.body[i][4].alignment = 'center';
              doc.content[1].table.body[i][5].alignment = 'center';
            }
          }
        },
        {
          extend: 'print',
          text: 'Print Report',
          className: 'button button--report',
          title: 'Faculty Profile 6.09, 3, 12 & 6.10 Training',
          customize: function ( win ) {
              $(win.document.body).css( 'font-size', '12px', 'text-align','center' );
              $(win.document.body).find('table').css('text-align','center' );
              $(win.document.body).find('h1').addClass('h1-title-report');
          }
        },
      ]
    });
  });

</script>
