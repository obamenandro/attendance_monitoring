<div class="panel__title">
  <h3>FACULTY PROFILE ON LICENSES</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content">
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">No</th>
              <th class="table__head-list">Name</th>
              <th class="table__head-list">Department</th>
              <th class="table__head-list">Name Of Exam</th>
              <th class="table__head-list">License Number</th>
              <th class="table__head-list">Valid Until</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($users as $user): ?>
            <tr>
              <td class="table__body-list"><?= $user['id'] ?></td>
              <td class="table__body-list"><?= ucfirst($user['user']['lastname']).", ".ucfirst($user['user']['firstname']) ?></td>
              <td class="table__body-list"><?= isset($department[$user['user']['department']]) ? $department[$user['user']['department']] : 'N/A' ?></td>
              <td class="table__body-list"><?= $user['exam_name'] ?></td>
              <td class="table__body-list"><?= $user['license_no'] ?></td>
              <td class="table__body-list"><?= date('d-m-Y', strtotime($user['vali_until'])) ?></td>
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
      paging: false,
      autoWidth: true,
      ordering: false,
      info:     false,
      searching: false,
      buttons: [
        {
          extend: 'excelHtml5',
          text: 'Save as Excel',
          className: 'button button--report',
          title: 'Faculty Profile on Licenses',
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          title: 'Faculty Profile on Licenses',
          customize: function (doc) {
            doc.content[1].table.widths = 
              Array(doc.content[1].table.body[0].length + 1).join('*').split('');
          }
        },
        {
          extend: 'print',
          text: 'Print Report',
          className: 'button button--report',
          title: 'Faculty Profile on Licenses',
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
