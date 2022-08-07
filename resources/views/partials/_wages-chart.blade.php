<main class="relative top-0 justify-center w-full px-2 mt-2 md:mt-12 md:px-12">

  @if (empty($shifts->toArray()))
    No shifts have been assigned
  @else
    <div class="overflow-hidden rounded-lg shadow-lg">
      <div class="px-5 py-3 bg-gray-50">Wages Breakdown</div>
      <canvas class="p-10" id="chartLine"></canvas>
    </div>
  <?php
    $groupTotals = ($shifts->map(function($s) {
        $totals = array();
        foreach ($s as $date => $shifts) {
          array_push($totals, $shifts->wage * $shifts->paid_minutes / 60);
        }
        return $totals;
      })->values()
    );
  ?>
    </section>
    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart line -->

    <script>
      function sumArray(array) {
        let sum = 0;
        for (const item of array) {
          sum += item;
        }
        return sum;
      }
      const labels = <?php echo "['" . join("', '", $shifts->keys()->toArray()) . "']" ?>;
      const data = {
        labels: labels,
        datasets: [
          {
            label: "Wages Per Day",
            backgroundColor: "hsl(252, 82.9%, 67.8%)",
            borderColor: "hsl(252, 82.9%, 67.8%)",
            data: <?php echo $groupTotals ?>.map(sumArray),
          },
        ],
      };
    
      const configLineChart = {
        type: "bar",
        data,
        options: {},
      };
      
      var chartLine = new Chart(
        document.getElementById("chartLine"),
        configLineChart
        );
        </script>
    @endif
</main>