<div class="panel__title">
<h3>LIST OF RESIGNED EMPLOYEE</h3>
</div>

<div class="panel__container">
<div class="panel__content">
  <div>
    <div class="form__content" style="position: relative">
      <form method="GET">
        <div class="panel__search" style="position: absolute; width: 100%;left: 15px;z-index:2">
          <div class="panel__search-box">
            <label class="panel__search-label">Name:</label>
            <input type="text" class="panel__search-input" name="firstname">
          </div>
          <div class="panel__search-box">
            <label class="panel__search-label">Resigned Date:</label>
            <input type="text" class="panel__search-input" placeholder="month-year" name="resigned_date">
          </div>
          <div class="panel__search-box">
            <input type="submit" name="" class="panel__search-button" value="search">
          </div>
        </div>
      </form>
      <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
        <thead>
          <tr class="table__head">
            <th class="table__head-list">Last Name, First Name</th>
            <th class="table__head-list">Positions</th>
            <th class="table__head-list">Date Resigned</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($users as $user): ?>
          <tr>
            <td class="table__body-list"><?= ucfirst($user['lastname']).", ".ucfirst($user['firstname']) ?></td>
            <td class="table__body-list"><?= $user['position'] ?></td>
            <td class="table__body-list"><?= !empty($user['resigned_date']) ? date('m-d-Y', strtotime($user['resigned_date'])) : 'N/A' ?></td>
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
        title: 'List Of Resigned Employee',
        footer: true,
      },
      {
        extend: 'pdf',
        text: 'Save as PDF',
        className: 'button button--report',
        title: 'List Of Resigned Employee',
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
        title: 'List Of Resigned Employee',
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
$(function() {
  let resigned_date =  "<?= !empty($_GET['resigned_date']) ? $_GET['resigned_date'] : '' ?>";
  let firstname =  "<?= !empty($_GET['firstname']) ? $_GET['firstname'] : '' ?>";

  $('input[name=resigned_date]').val(resigned_date);
  $('input[name=firstname]').val(firstname);
});
</script>
