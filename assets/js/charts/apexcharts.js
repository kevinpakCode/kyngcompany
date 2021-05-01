
/*
-----------------------------------------------------
| Line Chart
-----------------------------------------------------
*/
const lineChart = (chartData, selector) => {
  if(chartData&&selector){
    const chartDataInfos = JSON.parse(JSON.stringify(chartData))
    console.log()
    const options = {
      series: chartDataInfos.series,
      chart: {
        height: 450,
        type: 'line',
        zoom: {
          enabled: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'straight'
      },
      title: {
        text: '',
        align: 'left'
      },
      grid: {
        row: {
          colors: ['#f3f3f3', 'transparent'], 
          opacity: 0.5
        },
      },
      xaxis: {
        categories: chartDataInfos.categories,
      }
    }
    const chart = new ApexCharts(document.querySelector(`#${selector}`), options)
    chart.render();
  }
  
}
const lineChartList = $('body').find('[data-chart-line]')
if(lineChartList) {
  lineChartList.each(function(){
    const item = $(this)
    const itemId = item.attr('id')
    const itemData = item.data('chart-line')

    if(itemId&&itemData) {
      lineChart(itemData, itemId)
    }
  })
}


