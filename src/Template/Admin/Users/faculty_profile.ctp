<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<div class="panel__title">
  <h3>FACULTY PROFILE</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content">
        <table id="dataTable" class="display table table--attendance-view table--report" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list" rowspan="2">Department</th>
              <th class="table__head-list" rowspan="2">Name of Faculty</th>
              <th class="table__head-list" colspan="3">Highest Educational Attainment with School Attended</th>
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
            <tr>
              <td class="table__body-list">BSMT</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">BS Marine Transportation NAMEI Polytechnic Institute</td>
              <td class="table__body-list">MA Business Management FEATI</td>
              <td class="table__body-list"></td>
              <td class="table__body-list">NAV 1, NAV 2, SEAM 4</td>
              <td class="table__body-list">PT</td>
            </tr>
            <tr>
              <td class="table__body-list">BSMT</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">BS Marine Transportation NAMEI Polytechnic Institute</td>
              <td class="table__body-list">MA Business Management FEATI</td>
              <td class="table__body-list"></td>
              <td class="table__body-list">NAV 1, NAV 2, SEAM 4</td>
              <td class="table__body-list">PT</td>
            </tr>
            <tr>
              <td class="table__body-list">BSMT</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">BS Marine Transportation NAMEI Polytechnic Institute</td>
              <td class="table__body-list">MA Business Management FEATI</td>
              <td class="table__body-list"></td>
              <td class="table__body-list">NAV 1, NAV 2, SEAM 4</td>
              <td class="table__body-list">PT</td>
            </tr>
            <tr>
              <td class="table__body-list">BSMT</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">BS Marine Transportation NAMEI Polytechnic Institute</td>
              <td class="table__body-list">MA Business Management FEATI</td>
              <td class="table__body-list"></td>
              <td class="table__body-list">NAV 1, NAV 2, SEAM 4</td>
              <td class="table__body-list">PT</td>
            </tr>
            <tr>
              <td class="table__body-list">BSMT</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">BS Marine Transportation NAMEI Polytechnic Institute</td>
              <td class="table__body-list">MA Business Management FEATI</td>
              <td class="table__body-list"></td>
              <td class="table__body-list">NAV 1, NAV 2, SEAM 4</td>
              <td class="table__body-list">PT</td>
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
          title: 'Faculty Profile',
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          title: 'Faculty Profile',
          customize: function (doc) {
            doc.content[1].table.widths = 
              Array(doc.content[1].table.body[0].length + 1).join('*').split('');
          }
        },
        {
          extend: 'print',
          text: 'Print Report',
          className: 'button button--report',
          title: 'Faculty Profile',
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
