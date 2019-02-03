<div class="panel__title">
  <h3>LIST OF EMPLOYEE</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content">
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Last Name, First Name</th>
              <th class="table__head-list">Positions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($users as $user): ?>
            <tr>
              <td class="table__body-list"><?= ucfirst($user['lastname']).", ".ucfirst($user['firstname']) ?></td>
              <td class="table__body-list"><?= $user['position'] ?></td>
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

<script>
  $(document).ready(function() {
    var table = $('#dataTable').DataTable( {
      dom: 'Bfrtip',
      paging: true,
      autoWidth: true,
      ordering: true,
      info:     false,
      searching: false,
      buttons: [
        {
          extend: 'excelHtml5',
          text: 'Save as Excel',
          className: 'button button--report',
          title: 'List Of Employee',
          footer: true,
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          footer: true,
          title: 'List Of Employee',
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
          footer: true,
          title: 'List Of Employee',
          customize: function ( win ) {
              $(win.document.body).css( 'font-size', '12px', 'text-align','center' );
              $(win.document.body).find('table').css('text-align','center' );
              $(win.document.body).find('h1').addClass('h1-title-report');
          }
        },
      ]
    });
    var info = table.page.info();
    $('.table__footer').html('Total row: '+ info['recordsTotal'])
  });

</script>
