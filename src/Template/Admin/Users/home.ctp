<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
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
                data: [<?= $technical1 ?>, <?= $technical2 ?>, <?= $technical3 ?>],
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
            }
        },
       
    };

    window.onload = function() {
        var ctx = document.getElementById('myChart').getContext('2d');
        window.myPie = new Chart(ctx, config);
    };
	</script>