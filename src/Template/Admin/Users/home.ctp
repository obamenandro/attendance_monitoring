<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<div class="panel__title">
  <h3>Home</h3>
</div>

<div class="panel__container">
  <div class="panel__content">
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
                data: [10, 20, 30],
                backgroundColor: [
                    window.chartColors.green,
                    window.chartColors.red,
                    window.chartColors.blue
                ],
                label: 'Chart'
            }],
            labels: [
                '3.12',
                '6.09',
                '6.10'
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