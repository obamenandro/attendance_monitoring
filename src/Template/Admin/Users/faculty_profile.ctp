<div class="panel__title">
  <h3>FACULTY PROFILE</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content" style="position: relative">
        <form method="GET">
          <div class="panel__search" style="position: absolute; width: 80%;left: 15px;z-index:2; top: 10px; text-align: left; ">
            <div class="panel__search-box">
              <label class="panel__search-label">Department:</label>
              <input type="text" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Highest Educational:</label>
              <input type="text" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">status:</label>
              <input type="text" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <input type="submit" name="" class="panel__search-button" value="search">
            </div>
          </div>
        </form>
        <table id="dataTable" class="display table table--attendance-view table--report" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list" rowspan="2">Department</th>
              <th class="table__head-list" rowspan="2">Last Name, First Name</th>
              <th class="table__head-list" colspan="3">Highest Educational Attainment</th>
              <th class="table__head-list" rowspan="2">Subjects Being Taught</th>
              <th class="table__head-list" rowspan="2">Status</th>
            </tr>
            <tr class="table__head">
              <th class="table__head-list">Bachelors</th>
              <th class="table__head-list">Masters</th>
              <th class="table__head-list">Doctorate</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($users as $user): ?>
            <tr>
              <td class="table__body-list"><?= isset($department[$user['department']]) ?
              $department[$user['department']] : 'N/A' ?></td>
              <td class="table__body-list"><?= ucfirst($user['lastname']).", ".ucfirst($user['firstname']) ?></td>
              <?php if(!empty($user['user_attainments'])): ?>
              <td class="table__body-list"><?= isset($user['user_attainments'][0]['degree']) && $user['user_attainments'][0]['degree'] == 3 ? $user['user_attainments'][0]['course'] : 'N/A' ?></td>
              <td class="table__body-list"><?= isset($user['user_attainments'][1]['degree']) && $user['user_attainments'][1]['degree'] == 2 ? $user['user_attainments'][1]['course'] : 'N/A' ?></td>
              <td class="table__body-list"><?= isset($user['user_attainments'][2]['degree']) && $user['user_attainments'][2]['degree'] == 1 ? $user['user_attainments'][2]['course'] : 'N/A' ?></td>
              <?php else: ?>
                <td class="table__body-list">N/A</td>
                <td class="table__body-list">N/A</td>
                <td class="table__body-list">N/A</td>
               <?php endif; ?>
              <td class="table__body-list"><?= !empty($user['subject']) ? $user['subject'] : 'N/A' ?></td>
              <td class="table__body-list"><?= isset($jobtype[$user['jobtype']]) ? $jobtype[$user['jobtype']] : 'N/A' ?></td>
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
          title: 'Faculty Profile',
          footer: true,
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          title: 'Faculty Profile',
          orientation: 'landscape',
          pageSize: 'LEGAL',
          footer: true,
          customize: function (doc) {
            var rowCount = document.getElementById("dataTable").rows.length;
            doc.content[1].table.widths =
              Array(doc.content[1].table.body[0].length + 1).join('*').split('');
          }
        },
        {
          extend: 'print',
          text: 'Print Report',
          className: 'button button--report',
          title: 'Faculty Profile',
          footer: true,
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
