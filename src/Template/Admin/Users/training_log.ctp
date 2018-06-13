<div class="panel__title">
  <h3>TRAINING PLAN</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content form__content--report">
        <form method="GET">      
          <div class="panel__search panel__search--report">
            <div class="panel__search-box">
              <label class="panel__search-label">ID:</label>
              <input type="text" name="user_id" class="panel__search-input" value="<?= isset($_GET['user_id']) ? $_GET['user_id'] : '' ?>">
            </div>
            <div class="panel__search-box">
              <label class="panel__search-label">Name:</label>
              <input type="text" name="firstname" class="panel__search-input" value="<?= isset($_GET['firstname']) ? $_GET['firstname'] : '' ?>">
            </div>
            <div class="panel__search-box">
              <input type="submit" name="" class="panel__search-button" value="search">
            </div>
          </div>
        </form>
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Trainings/Seminars Attended</th>
              <th class="table__head-list">Conducted By/at</th>
              <th class="table__head-list">Date Conducted</th>
              <th class="table__head-list">Attended By</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($users as $user): ?>
            <tr>
              <td class="table__body-list"><?= $user['attended'] ?></td>
              <td class="table__body-list"><?= $user['conducted_by'] ?></td>
              <td class="table__body-list"><?= $user['date'] ?></td>
              <td class="table__body-list"><?= ucfirst($user['user']['lastname']).', '.ucfirst($user['user']['firstname']) ?></td>
            </tr>
            <?php endforeach ?>
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
      info:     false,
      searching: false,
      columnDefs: [
          { targets: 1, orderable: false},
          { targets: 3, orderable: false }
      ],
      buttons: [
        {
          extend: 'excelHtml5',
          text: 'Save as Excel',
          className: 'button button--report',
          title: 'Training Log',
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          title: 'Training Log',
          customize: function (doc) {
            var rowCount = document.getElementById("dataTable").rows.length;
            doc.content[1].table.widths =
              Array(doc.content[1].table.body[0].length + 1).join('*').split('');

            // for (i = 1; i < rowCount; i++) {
            //   doc.content[1].table.body[i][0].alignment = 'center';
            //   doc.content[1].table.body[i][1].alignment = 'center';
            //   doc.content[1].table.body[i][2].alignment = 'center';
            //   doc.content[1].table.body[i][3].alignment = 'center';
            // }
          }
        },
        {
          extend: 'print',
          text: 'Print Report',
          className: 'button button--report',
          title: 'Training Log',
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
