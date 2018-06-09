<div class="panel__title">
  <h3>EMPLOYMENT RECORD</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content form__content--report">
        <div class="panel__search panel__search--report">
          <div class="panel__search-box">
            <label class="panel__search-label">ID:</label>
            <input type="text" name="" class="panel__search-input">
          </div>
          <div class="panel__search-box">
            <label class="panel__search-label">Name:</label>
            <input type="text" name="" class="panel__search-input">
          </div>
          <div class="panel__search-box">
            <input type="submit" name="" class="panel__search-button" value="search">
          </div>
        </div>
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">No</th>
              <th class="table__head-list">Name</th>
              <th class="table__head-list">Highest Educational Attainment</th>
              <th class="table__head-list">Designation</th>
              <th class="table__head-list">Date Hired</th>
              <th class="table__head-list">Status</th>
              <th class="table__head-list">Date of Birth</th>
              <th class="table__head-list">Contact No.</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($users as $key => $value): ?>
            <tr>
              <td class="table__body-list"><?= $value['id'] ?></td>
              <td class="table__body-list"><?= ucfirst($value['lastname']).", ".ucfirst($value['firstname']) ?></td>
              <td class="table__body-list">
                <span class="table__body-span">
                  <?php 
                    if (!empty($value['user_attainments'])) {
                      if ($value['user_attainments'][0]['degree'] >= 4 && 
                        !empty($value['user_attainments'][0]['level_attained'])) {
                        echo $value['user_attainments'][0]['level_attained'];
                      } elseif(!empty($value['user_attainments'][0]['course']) && $value['user_attainments'][0]['degree'] <= 3) {
                        echo $value['user_attainments'][0]['course'];
                      } else {
                        echo "N/A";  
                      }
                    } else {
                      echo "N/A";
                    }
                  ?>
                  </span>
                <!-- <span class="table__body-span">BS Marine Transportation</span> -->
              </td>
              <td class="table__body-list"><?= isset($designation[$value['designation']]) ? $designation[$value['designation']] : 'N/A' ?></td>
              <td class="table__body-list"><?= !empty($value['date_hired']) ? date('m/d/Y', strtotime($value['date_hired'])) : 'N/A' ?></td>
              <td class="table__body-list"><?= isset($jobtype[$value['jobtype']]) ? $jobtype[$value['jobtype']] : 'N/A' ?></td>
              <td class="table__body-list"><?= !empty($value['birthdate']) ? date('m/d/Y', strtotime($value['birthdate'])) : 'N/A' ?></td>
              <td class="table__body-list"><?= $value['contact'] ?></td>
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
          title: 'Employment Record',
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          title: 'Employment Record',
          orientation: 'landscape',
          pageSize: 'LEGAL',
          alignment: 'center',
          customize: function (doc) { 
            var rowCount = document.getElementById("dataTable").rows.length;
            doc.content[1].table.widths = 
              Array(doc.content[1].table.body[0].length + 1).join('*').split('');

            for (i = 1; i < rowCount; i++) {
              doc.content[1].table.body[i][0].alignment = 'center';
              doc.content[1].table.body[i][1].alignment = 'center';
              doc.content[1].table.body[i][2].alignment = 'center';
              doc.content[1].table.body[i][3].alignment = 'center';
              doc.content[1].table.body[i][4].alignment = 'center';
              doc.content[1].table.body[i][5].alignment = 'center';
              doc.content[1].table.body[i][6].alignment = 'center';
              doc.content[1].table.body[i][7].alignment = 'center';
            }
          }
        },
        {
          extend: 'print',
          text: 'Print Report',
          className: 'button button--report',
          title: 'Employment Record',
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
