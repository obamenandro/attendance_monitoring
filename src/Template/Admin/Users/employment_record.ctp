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
              <th class="table__head-list">Highest Educational Attainment with School Attended</th>
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
                <span class="table__body-span"><?= isset($value['user_attainments'][0]['course']) ? $value['user_attainments'][0]['course'] : 'N/A' ?></span>
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
          customize: function (doc) {
            doc.content[1].table.widths = 
              Array(doc.content[1].table.body[0].length + 1).join('*').split('');
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
