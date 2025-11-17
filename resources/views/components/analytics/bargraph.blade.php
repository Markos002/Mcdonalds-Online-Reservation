@props(['data' => []])

<div class="bg-white p-5 border rounded mb-8">
    <div class="min-w-[700px] md:min-w-[600px] lg:min-w-full">
        <div id="salesChart" style="height: 400px; width: 100%;"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/echarts@5"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var chartDom = document.getElementById('salesChart');
    if (!chartDom) return;

    var myChart = echarts.init(chartDom);

    const chartData = @json($data);

    const formattedData = chartData.map(item => ({
        Month: item.month,    
        Completed: item.completed ?? 0,
        Cancelled: item.cancelled ?? 0
    }));

    var option = {
        color: ['#8FE5A6', '#FFE83A'],
        tooltip: { trigger: 'axis' },
        legend: {
            orient: 'vertical',
            right: 10,
            top: 'center',
            textStyle: { color: '#333', fontSize: 12 }
        },
        dataset: {
            dimensions: ['Month', 'Completed', 'Cancelled'],
            source: formattedData
        },
        grid: { right: '20%' },
        xAxis: { type: 'category' },  
        yAxis: {},
        series: [
            { type: 'bar' },
            { type: 'bar' }
        ]
    };

    myChart.setOption(option);
    window.addEventListener('resize', () => myChart.resize());
});
</script>
