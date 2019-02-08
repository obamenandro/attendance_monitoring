
<div class="panel__title">
  <h3>MASTER 201 FILE</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content" style="position: relative">
        <form method="GET">
          <div class="panel__search panel-search" style="position: absolute; width: 100%;left: 15px;z-index:2; top: 30px; text-align: left; ">
            <div class="panel__search-box" style="width: 29%">
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
              <input type="submit" name="" class="panel__search-button" value="search">
            </div>
          </div>
        </form>
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Department</th>
              <th class="table__head-list">Last Name, First Name</th>
              <th class="table__head-list">Position</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($users as $user): ?>
              <tr>
                <td class="table__body-list"><?= isset($department[$user['department']]) ? $department[$user['department']] : 'N/A' ?></td>
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
          messageTop:'College Department',
          className: 'button button--report',
          title: 'Master 201 File',
          footer: true,
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          title: 'Master 201 File' + '\n' + 'College Department',
          footer: true,
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
          title: 'Master 201 File College Department',
          footer: true,
          customize: function ( win ) {
              $(win.document.body).css( 'font-size', '12px', 'text-align','center' );
              $(win.document.body).find('table').css('text-align','center' );
              $(win.document.body).find('h1').addClass('h1-title-report');
              // $(win.document.body).find('tr').each( function(index) {
              //     $(this).find('td:first').html(index);
              // });
          }
        },
      ]
    });
    var info = table.page.info();
    $('.table__footer').html('Total row: '+ info['recordsTotal'])
    $(function() {
      let department =  "<?= !empty($_GET['department']) ? $_GET['department'] : '' ?>";
      let firstname =  "<?= !empty($_GET['firstname']) ? $_GET['firstname'] : '' ?>";

      $('select[name=department]').val(department);
      $('input[name=firstname]').val(firstname);
    });
  });
</script>
