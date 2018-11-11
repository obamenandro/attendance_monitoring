<div class="panel__title">
  <h3>Dashboard</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
    <h2 class="panel__text-title">Percentage of Technical Trainings Attended</h2>
      <div class="panel__chart">
        <canvas id="myChart"></canvas>
      <div>
  </div>
</div>

<script>
    window.chartColors = {
        red: 'rgb(255, 0, 0)',
        green: 'rgb(0, 163, 51)',
        blue: 'rgb(54, 162, 235)'
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                // data: [<?= $technical1 ?>, <?= $technical2 ?>, <?= $technical3 ?>],
                data: [200,120, 50],
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