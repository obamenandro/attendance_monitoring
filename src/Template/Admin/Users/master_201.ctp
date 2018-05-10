
<div class="panel__title">
  <h3>MASTER 201 FILE</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <div>
      <div class="form__content">
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Department</th>
              <th class="table__head-list">Employee Name</th>
              <th class="table__head-list">Position</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table__body-list">Admin</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">President</td>
            </tr>
            <tr>
              <td class="table__body-list">Admin</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">President</td>
            </tr>
            <tr>
              <td class="table__body-list">Admin</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">President</td>
            </tr>
            <tr>
              <td class="table__body-list">Admin</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">President</td>
            </tr>
            <tr>
              <td class="table__body-list">Admin</td>
              <td class="table__body-list">Dela Cruz, Juan</td>
              <td class="table__body-list">President</td>
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
          messageTop:'College Department',
          className: 'button button--report',
          title: 'Master 201 File',
        },
        {
          extend: 'pdf',
          text: 'Save as PDF',
          className: 'button button--report',
          title: 'Master 201 File' + '\n' + 'College Department',
          customize: function (doc) {
            doc.content[1].table.widths = 
              Array(doc.content[1].table.body[0].length + 1).join('*').split('');
          }
        },
        {
          extend: 'print',
          text: 'Print Report',
          className: 'button button--report',
          title: 'Master 201 File' + '</br>' + 'College Department',
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
