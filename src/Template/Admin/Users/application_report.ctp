<div class="panel__title">
  <h3>Application Report</h3>
</div>

<div class="panel__container">
  <?= $this->Flash->render(); ?>
  <div class="panel__content">
    <div class="view-info">
      <div class="view-info__content">
        <div class="form__content" style="position: relative">
        <form method="GET">
          <div class="panel__search panel-search" style="position: absolute; width: 100%;left: 15px;z-index:2; top: 30px; text-align: left; ">
            <div class="panel__search-box panel__search-box-input">
              <label class="panel__search-label" style="width: 25%;">Status:</label>
              <select class="panel__search-input">
                  <option value="">--</option>
                  <option value="">Pending</option>
                  <option value="">Accepted</option>
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
                <th class="table__head-list">ID</th>
                <th class="table__head-list">Applicant Name</th>
                <th class="table__head-list">Position</th>
                <th class="table__head-list">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($application_lists as $key => $application): ?>
            <tr class="table__body">
                <td class="table__body-list"><?= $application['id']; ?></td>
                <td class="table__body-list"><?= ucfirst($application['lastname']).", ".ucfirst($application['firstname']) ?></td>
                <td class="table__body-list"><?= $application['positions']; ?></td>
                <td class="table__body-list">
                <span class="table__note">
                    <?= $application_status[$application['accepted']]; ?>
                </span>
                </td>
            </tr>>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
  </div>
</div>


<script type="text/javascript">
  $('#dataTable').dataTable({
    bLengthChange: false,
    dom: 'Bfrtip',
    paging: true,
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
        title: 'Application Monitoring Report',
    },
    {
        extend: 'pdf',
        text: 'Save as PDF',
        className: 'button button--report',
        title: 'Application Monitoring Report',
        customize: function (doc) {
            var rowCount = document.getElementById("dataTable").rows.length;
            doc.content[1].table.widths = 
                Array(doc.content[1].table.body[0].length + 1).join('*').split('');

            for (i = 1; i < rowCount; i++) {
                doc.content[1].table.body[i][0].alignment = 'center';
                doc.content[1].table.body[i][1].alignment = 'center';
                doc.content[1].table.body[i][2].alignment = 'center';
                doc.content[1].table.body[i][3].alignment = 'center';
            }
        }
    },
    {
        extend: 'print',
        text: 'Print Report',
        className: 'button button--report',
        title: 'Application Monitoring Report',
        customize: function ( win ) {
                $(win.document.body).css( 'font-size', '12px', 'text-align','center' );
                $(win.document.body).find('table').css('text-align','center' );
                $(win.document.body).find('h1').addClass('h1-title-report');
            }
        },
    ]
  });
</script>
