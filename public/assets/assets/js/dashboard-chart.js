var dataSales = [31, 40, 28, 51, 42, 65, 45];
var optionsSales = {
series: [{
    name: 'Sales Order',
    data: dataSales
}],
chart: {
    height: '170px',
    type: 'area',
    toolbar: {
        show: false
    },
    sparkline: {
        enabled: true
    }
},
stroke: {
    curve: 'smooth',
    width: 2,
    colors: ['#4567E2']
},
fill: {
    colors: ['#4567E2'],
    gradient: {
        shade: 'light',
        type: "vertical",
        shadeIntensity: 0.5,
        gradientToColors: undefined,
        inverseColors: true,
        opacityFrom: 1,
        opacityTo: 0,
        stops: [0, 100]
    }
},
title: {
    text: '$30.5K',
    offsetX: 65,
    offsetY: 15,
    style: {
    fontSize: '24px',
    cssClass: 'apexcharts-yaxis-title'
    }
},
subtitle: {
    text: 'Sales Order',
    offsetX: 65,
    offsetY: 45,
    style: {
    fontSize: '14px',
    cssClass: 'apexcharts-yaxis-title'
    }
},
tooltip: {
    x: {
        show: false
    },
},
};

var chartsales = new ApexCharts(document.querySelector("#chartsales"), optionsSales);
chartsales.render();

var dataInq = [31, 55, 30, 65, 45, 75];
var optionsInq = {
series: [{
    name: 'Visitor',
    data: dataInq
}],
chart: {
    height: '170px',
    type: 'area',
    toolbar: {
        show: false
    },
    sparkline: {
        enabled: true
    }
},
stroke: {
    curve: 'smooth',
    colors: ['#FF6C4C'],
    width: 2
},
fill: {
    colors: ['#FF6C4C'],
    gradient: {
        shade: 'light',
        type: "vertical",
        shadeIntensity: 0.5,
        gradientToColors: undefined,
        inverseColors: true,
        opacityFrom: 1,
        opacityTo: 0,
        stops: [0, 100]
    }
},
title: {
    text: '214.4K',
    offsetX: 65,
    offsetY: 15,
    style: {
    fontSize: '24px',
    cssClass: 'apexcharts-yaxis-title'
    }
},
subtitle: {
    text: 'Visitor',
    offsetX: 65,
    offsetY: 45,
    style: {
    fontSize: '14px',
    cssClass: 'apexcharts-yaxis-title'
    }
},
tooltip: {
    x: {
        show: false
    },
},
};

var chartinq = new ApexCharts(document.querySelector("#chartinq"), optionsInq);
chartinq.render();

var dataSess = [25, 35, 55, 35, 30, 40, 60];
var optionsSess = {
series: [{
    name: 'Session',
    data: dataSess
}],
chart: {
    height: '180px',
    type: 'bar',
    toolbar: {
        show: false
    },
    sparkline: {
        enabled: true
    }
},
colors: [function({ value, seriesIndex, w }) {
    if (value < 55) {
        return '#CCCCCC'
    } else {
        return '#FF6C4C'
    }
}],
plotOptions: {
    bar: {
        endingShape: 'rounded',
        columnWidth: '50%'
    }
},
tooltip: {
    x: {
        show: false
    },
},
};

var chartsess = new ApexCharts(document.querySelector("#sparkBar"), optionsSess);
chartsess.render();

var optionsTix = {
    series: [65],
    chart: {
    height: 190, // 210 localhost
    type: 'radialBar',
  },
  plotOptions: {
    radialBar: {
      hollow: {
        size: '80%',
        margin: 10
      }
    },
  },
  labels: ['Ticket Sales'],
  };

  var chart = new ApexCharts(document.querySelector("#ticketChart"), optionsTix);
  chart.render();

  var optionsOrder = {
    series: [44, 55, 67, 83],
    chart: {
    height: 300,
    type: 'radialBar',
  },
  colors: ['#FF6C4C', '#6c757d', '#ffc107', '#4567E2'],
  plotOptions: {
    radialBar: {
      dataLabels: {
        name: {
          fontSize: '22px',
        },
        value: {
          fontSize: '16px',
        },
        total: {
          show: true,
          label: 'Total'
        }
      }
    }
  },
  legend: {
    show: true,
    position: 'bottom',
  },
  labels: ['Bronze', 'Silver', 'Gold', 'Platinum'],
  };

  var chart = new ApexCharts(document.querySelector("#chartOrder"), optionsOrder);
  chart.render();