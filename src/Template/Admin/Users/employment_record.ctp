<div class="panel__title">
  <h3>EMPLOYMENT RECORD</h3>
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
              <th class="table__head-list">Highest Educational Attainment with School Attended</th>
              <th class="table__head-list">Designation</th>
              <th class="table__head-list">Date Hired</th>
              <th class="table__head-list">Status</th>
              <th class="table__head-list">Date of Birth</th>
              <th class="table__head-list">Contact No.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table__body-list">1</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">
                <span class="table__body-span">MA Management</span>
                <span class="table__body-span">BS Marine Transportation</span>
              </td>
              <td class="table__body-list">Department Head/ Instructor</td>
              <td class="table__body-list">6/12/2018</td>
              <td class="table__body-list">FT</td>
              <td class="table__body-list">8/8/1986</td>
              <td class="table__body-list">09785415689</td>
            </tr>
            <tr>
              <td class="table__body-list">1</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">
                <span class="table__body-span">MA Management</span>
                <span class="table__body-span">BS Marine Transportation</span>
              </td>
              <td class="table__body-list">Department Head/ Instructor</td>
              <td class="table__body-list">6/12/2018</td>
              <td class="table__body-list">FT</td>
              <td class="table__body-list">8/8/1986</td>
              <td class="table__body-list">09785415689</td>
            </tr>
            <tr>
              <td class="table__body-list">1</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">
                <span class="table__body-span">MA Management</span>
                <span class="table__body-span">BS Marine Transportation</span>
              </td>
              <td class="table__body-list">Department Head/ Instructor</td>
              <td class="table__body-list">6/12/2018</td>
              <td class="table__body-list">FT</td>
              <td class="table__body-list">8/8/1986</td>
              <td class="table__body-list">09785415689</td>
            </tr>
            <tr>
              <td class="table__body-list">1</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">
                <span class="table__body-span">MA Management</span>
                <span class="table__body-span">BS Marine Transportation</span>
              </td>
              <td class="table__body-list">Department Head/ Instructor</td>
              <td class="table__body-list">6/12/2018</td>
              <td class="table__body-list">FT</td>
              <td class="table__body-list">8/8/1986</td>
              <td class="table__body-list">09785415689</td>
            </tr>
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
