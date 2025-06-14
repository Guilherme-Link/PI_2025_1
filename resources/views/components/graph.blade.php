<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="chart-container">
    <canvas id="chart"></canvas>
</div>


<style>

  canvas {
    padding: 20px;
    background-color:rgba(255, 255, 255, 0.38);
  }
  .chart-container {
    height: 50vh;
    width: 70vw;

    padding: 20px ;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
  }

  .chart-container h1 {
    text-align: center;
  }


</style>


<script>

var data = {
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  datasets: [{
    label: "Vendas 2025",
    backgroundColor: "rgba(255,99,132,0.2)",
    borderColor: "rgb(99, 107, 255)",
    borderWidth: 2,
    hoverBackgroundColor: "rgba(255,99,132,0.4)",
    hoverBorderColor: "rgba(255,99,132,1)",
    data: [65, 59, 20, 81, 56, 55, 40],
  }]
};

var options = {
  maintainAspectRatio: false,
  scales: {
    y: {
      stacked: true,
      grid: {
        display: true,
        color: "rgba(2, 6, 10, 0.2)"
      }
    },
    x: {
      grid: {
        display: false
      }
    }
  }
};

new Chart('chart', {
  type: 'line',
  options: options,
  data: data
});


</script>