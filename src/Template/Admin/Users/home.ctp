<div class="panel__title">
  <h3>Dashboard</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <h2 class="panel__text-title">Number of Employees per Department</h2>
    <div class="panel__content-count panel__content-count--separator">
      <ul>
        <li class="panel__content-item">
          <span class="panel__content-text">Admin</span>
          <span class="panel__content-number">3</span>
        </li>
        <li class="panel__content-item">
          <span class="panel__content-text">Staff</span>
          <span class="panel__content-number">1</span>
        </li>
        <li class="panel__content-item">
          <span class="panel__content-text">Maintenance</span>
          <span class="panel__content-number">1</span>
        </li>
        <li class="panel__content-item">
          <span class="panel__content-text">GenEd</span>
          <span class="panel__content-number">1</span>
        </li>
        <li class="panel__content-item">
          <span class="panel__content-text">MT</span>
          <span class="panel__content-number">1</span>
        </li>
        <li class="panel__content-item">
          <span class="panel__content-text">MARE</span>
          <span class="panel__content-number">1</span>
        </li>
        <li class="panel__content-item">
          <span class="panel__content-text">NA</span>
          <span class="panel__content-number">1</span>
        </li>
      </ul>
    </div>

    <div class="leave-applicant-monitoring panel__content-count--separator">
      <div class="monitoring-list">
        <ul>
          <span>Applicant Monitoring</span>
          <li class="panel__content-item panel__content-item-applicant">
            <span class="panel__content-text">Applicants Pending</span>
            <span class="panel__content-number">1</span>
          </li>
        </ul>
      </div>
      <div class="monitoring-list">
        <ul>
          <span>Leave Monitoring</span>
          <li class="panel__content-item panel__content-item-leave">
            <span class="panel__content-text">Leaves Pending</span>
            <span class="panel__content-number">1</span>
          </li>
        </ul>
      </div>
    </div>

    <h2 class="panel__text-title">Percentage of Technical Trainings Attended</h2>
      <div class="panel__chart">
        <canvas id="myChart"></canvas>
        <table id="dataTable" class="display table table--attendance-view" cellspacing="0" width="100%" style="margin-top: 20px ">
          <thead>
            <tr class="table__head">
              <th class="table__head-list">Department</th>
              <th class="table__head-list">6.09</th>
              <th class="table__head-list">3.12</th>
              <th class="table__head-list">6.10</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table__body-list">BSMT</td>
              <td class="table__body-list"></td>
              <td class="table__body-list"></td>
              <td class="table__body-list"></td>
            </tr>
            <tr>
              <td class="table__body-list">BSMARE</td>
              <td class="table__body-list"></td>
              <td class="table__body-list"></td>
              <td class="table__body-list"></td>
            </tr>
            <tr>
              <td class="table__body-list">BSMT</td>
              <td class="table__body-list"></td>
              <td class="table__body-list"></td>
              <td class="table__body-list"></td>
            </tr>
          </tbody>
        </table>
      <div>
  </div>
</div>

<script>
  $('#dataTable').DataTable({
    paging: false,
    autoWidth: true,
    ordering: false,
    info:     false,
    searching: false,
  });

    window.chartColors = {
        red: 'rgb(255, 0, 0)',
        green: 'rgb(0, 163, 51)',
        blue: 'rgb(54, 162, 235)'
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [<?= $technical1 ?>, <?= $technical2 ?>, <?= $technical3 ?>],
                labelColor: '#FFF',
                labelFontSize: '16',
                backgroundColor: [
                    window.chartColors.green,
                    window.chartColors.red,
                    window.chartColors.blue
                ],
                label: 'Chart'
            }],
            labels: [
                '6.09 Training Course for Instructors',
                '3.12 Training Course for Assessors',
                '6.10 Simulator Trainer and Assessor Course'
            ]
        },
        options: {
            responsive: true,
            legend: {
                display: true,
                position: 'right',
            },
            animation: false,
            plugins: {
                datalabels: {
                formatter: function(value, context) {
                    var length = Object.keys(context['dataset']['data']).length
                    var total = 0;

                    for ( let a = 0; a < length; a++ ) {
                    var b = context['dataset']['data'][a];
                    total = total + b;
                    }

                    if (value != 0) {
                    return Math.round((value/total)*10000) / 100 + '%';
                    } else {
                    return '';
                    }
                },
                color: "#FFFFFF"
                }
            }
        },
       
    };

    window.onload = function() {
        var ctx = document.getElementById('myChart').getContext('2d');
        window.myPie = new Chart(ctx, config);
    };
	</script>