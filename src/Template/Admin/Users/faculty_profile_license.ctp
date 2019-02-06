<div class="panel__title">
  <h3>FACULTY PROFILE ON LICENSES</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content" style="position:relative">
      <form method="GET">
          <div class="panel__search" style="position: absolute; width: 100%;left: 15px;z-index:2">
            <div class="panel__search-box">
              <label class="panel__search-label">Name:</label>
              <input type="text" name="firstname" class="panel__search-input">
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Department:</label>
              <select class="panel__search-input" name="department">
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
              <input type="submit" class="panel__search-button" value="search">
            </div>
          </div>
        </form>
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Last Name, First Name</th>
              <th class="table__head-list">Department</th>
              <th class="table__head-list">Name Of Exam</th>
              <th class="table__head-list">License Number</th>
              <th class="table__head-list">Valid Until</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($users as $user): ?>
            <tr>
              <td class="table__body-list"><?= ucfirst($user['user']['lastname']).", ".ucfirst($user['user']['firstname']) ?></td>
              <td class="table__body-list"><?= isset($department[$user['user']['department']]) ? $department[$user['user']['department']] : 'N/A' ?></td>
              <td class="table__body-list"><?= $user['exam_name'] ?></td>
              <td class="table__body-list"><?= $user['license_no'] ?></td>
              <td class="table__body-list"><?= date('d-m-Y', strtotime($user['vali_until'])) ?></td>
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
          title: 'Faculty Profile on Licenses',
          footer: true,
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          title: 'Faculty Profile on Licenses',
          orientation: 'landscape',
          pageSize: 'LEGAL',
          footer: true,
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
          footer: true,
          title: 'Faculty Profile on Licenses',
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
  $(function() {
    let department =  "<?= !empty($_GET['department']) ? $_GET['department'] : '' ?>";
    let firstname =  "<?= !empty($_GET['firstname']) ? $_GET['firstname'] : '' ?>";

    $('select[name=department]').val(department);
    $('input[name=firstname]').val(firstname);
  });
</script>
