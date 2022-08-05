<section class="relative top-0 justify-center w-full px-2 mt-2 md:mt-12 md:px-12">
    <div class="overflow-hidden rounded-lg shadow-lg">
      <div class="px-5 py-3 bg-gray-50">Wages Breakdown</div>
      <canvas class="p-10" id="chartLine"></canvas>
    </div>
    
    </section>
    </section>
    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Chart line -->
    <script>
      const labels = ["January", "February", "March", "April", "May", "June"];
      const data = {
        labels: labels,
        datasets: [
          {
            label: "My First dataset",
            backgroundColor: "hsl(252, 82.9%, 67.8%)",
            borderColor: "hsl(252, 82.9%, 67.8%)",
            data: [0, 10, 5, 2, 20, 30, 45],
          },
        ],
      };
    
      const configLineChart = {
        type: "line",
        data,
        options: {},
      };
    
      var chartLine = new Chart(
        document.getElementById("chartLine"),
        configLineChart
      );
    </script>