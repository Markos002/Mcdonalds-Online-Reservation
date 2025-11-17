@props(['data' => []])

<div class="bg-white p-5 border rounded mb-8">
    <h3 class="text-lg font-semibold mb-3">Sales Income</h3>
    <div id="salesIncomeChart" style="height: 350px;"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/echarts@5"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {

    const salesIncome = @json($data);

    if (!salesIncome || salesIncome.length === 0) {
        document.getElementById('salesIncomeChart').innerHTML = 'No data available';
        return;
    }

    const incomeMonths = salesIncome.map(item => item.month);
    const incomeTotals = salesIncome.map(item => parseFloat(item.totalIncome));

    var lineChart = echarts.init(document.getElementById("salesIncomeChart"));

    lineChart.setOption({
        tooltip: { trigger: "axis" },
        xAxis: { 
            type: "category", 
            data: incomeMonths,
            axisLabel: { rotate: 45 } // rotate labels if too long
        },
        yAxis: { 
            type: "value", 
            name: "Income (₱)" 
        },
        series: [{
            name: "Income",
            type: "line",
            data: incomeTotals,
            smooth: true,
            showSymbol: true,           // show points
            lineStyle: { width: 3 },    // thicker line for visibility
            itemStyle: { color: '#3B82F6' } // color the line
        }]
    });

    // Responsive
    window.addEventListener('resize', () => lineChart.resize());
});
</script>
