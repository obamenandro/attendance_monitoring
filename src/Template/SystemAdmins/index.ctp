<div class="panel__title">
    <h3>Statistics</h3>
</div>

<div class="panel__container">
    <div class="panel__content">
        <div class="panel__content-count">
            <ul>
                <li class="panel__content-item">
                    <span class="panel__content-text">TOTAL USERS</span>
                    <span class="panel__content-number"><?= $total_users ?></span>
                </li>
                <li class="panel__content-item">
                    <span class="panel__content-text">ADMINS</span>
                    <span class="panel__content-number"><?= $admin ?></span>
                </li>
                <li class="panel__content-item">
                    <span class="panel__content-text">HR</span>
                    <span class="panel__content-number"><?= $hr ?></span>
                </li>
                <li class="panel__content-item">
                    <span class="panel__content-text">EMPLOYEE</span>
                    <span class="panel__content-number"><?= $employee ?></span>
                </li>
            </ul>
        </div>
        <div class="panel__chart">
            <canvas id="myChart"></canvas>
        <div>
    </div>
</div>

<script>
  window.chartColors = {
      red: 'rgb(255, 0, 0)',
      green: 'rgb(0, 163, 51)',
      blue: 'rgb(54, 162, 235)',
      orange: 'rgb(255, 165, 1)',
      violet: 'rgb(238, 130, 238)',
      aqua: 'rgb(76, 215, 195)'
  };

  var config = {
      type: 'pie',
      data: {
          datasets: [{
              data: [<?= $teaching ?>, <?= $no_teaching ?>, <?= $mt ?>,<?= $mare ?>, <?= $gened ?>, <?= $staff ?>],
              labelColor: '#FFF',
              labelFontSize: '16',
              backgroundColor: [
                  window.chartColors.green,
                  window.chartColors.red,
                  window.chartColors.blue,
                  window.chartColors.orange,
                  window.chartColors.violet,
                  window.chartColors.aqua
                  
              ],
              label: 'Chart'
          }],
          labels: [
              'Teaching',
              'Non Teaching',
              'MT',
              'MARE',
              'GenEd',
              'Staff'
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
                  return Math.round((value/total)*10000) / 100;
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