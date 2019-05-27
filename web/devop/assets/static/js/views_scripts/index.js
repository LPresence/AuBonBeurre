import automatonAPI from '../api/automatons.mjs'
//var MONTHS = [];
var configTempCuve = {
    type: 'line',
    data: {
        labels: [],
        datasets: [
            {
                label: 'Automate 1',
                backgroundColor: '#ff0000' ,
                borderColor: '#FF0000',
                data: [10,20,30,40,50,60,70,80,90,100,90,80,70,60,50,40,30,20,10,50],
                fill: false,
            },
        ]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: ''
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Month'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Value'
                }
            }]
        }
    }
};

/**
 * {
        label: 'Automate 1',
        backgroundColor: '#ff0000' ,
        borderColor: '#FF0000',
        data: [10,20,30,40,50,60,70,80,90,100,90,80,70,60,50,40,30,20,10,50],
        fill: false,
    },
 */

let chartConfigs = [
    {
        type: 'line',
        data: {
            labels: [],
            datasets: []
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Température cuve'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Temp en degrés'
                    }
                }]
            }
        }
    },
    {
        type: 'line',
        data: {
            labels: [],
            datasets: []
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Température extérieure'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Temp en degrés'
                    }
                }]
            }
        }
    },
    {
        type: 'line',
        data: {
            labels: [],
            datasets: []
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Poids du lait en cuve'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Poids en Kg'
                    }
                }]
            }
        }
    },
    {
        type: 'line',
        data: {
            labels: [],
            datasets: []
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Poids du produit fini réalisé'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Poids en Kg'
                    }
                }]
            }
        }
    },
    {
        type: 'line',
        data: {
            labels: [],
            datasets: []
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Mesure pH'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Taux de pH'
                    }
                }]
            }
        }
    },
    {
        type: 'line',
        data: {
            labels: [],
            datasets: []
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Mesure K+'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'K+ en mg/l'
                    }
                }]
            }
        }
    },
    {
        type: 'line',
        data: {
            labels: [],
            datasets: []
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Concentration de NaCl'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'NaCl en g/l'
                    }
                }]
            }
        }
    },
    {
        type: 'line',
        data: {
            labels: [],
            datasets: []
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Niveau bactérien salmonelle'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'exprimé en ppm'
                    }
                }]
            }
        }
    },
    {
        type: 'line',
        data: {
            labels: [],
            datasets: []
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Niveau bactérien	E-coli'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'exprimé en ppm'
                    }
                }]
            }
        }
    },
    {
        type: 'line',
        data: {
            labels: [],
            datasets: []
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Niveau bactérien Listéria'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'exprimé en ppm'
                    }
                }]
            }
        }
    }
];
function initiateCharts(){
   return new Promise((resolve, reject)=>{
    let i=1;
    chartConfigs.forEach(element => {
        var ctx = document.getElementById("canvas"+i).getContext("2d");
        window.myLine = new Chart(ctx, element);
        i++
    });
    if(i=10){
        resolve('Charts successfully initiated :)')
    }else{
        reject()
    }
   })
};
function getData(payload = null){
    if(!payload){
        payload = {
            search : 1
        }
    }
    automatonAPI.getBy(payload).then((res)=>{
        return res
    });

};
function populateCharts(){
    /*chartsConfig.forEach((chart)=>{
        if(chart.data.datasets.length === 0 && chat.data.labels === 0){
            //create datasets
            //add data
        }else{
            //add data
        }
    }*/
    let automatons = getData();
    if(!chartConfigs){
        console.log('crete dataset')
    }else{
        console.log('add data')
    }
}

(function () {

    //document.getElementsByClassName('canvas').forEach((element)=>{
                      //  var ctx = element.getContext('2d');
                        //window.charts[i++] = new Chart(ctx, config);
                    //})
                   
    initiateCharts().then(response=>{
        console.log(response)
        //populate
        let automatons = getData();
        populateCharts(automatons);
        console.log(automatons)
    })
    $( "#switchUnit" ).click(function() {
        var e = document.getElementById("unit-select");
        var unit_id = e.options[e.selectedIndex].value;
        console.log(unit_id)
        let automatons = populateCharts({search:unit_id})
        console.log(automatons)
        //update les datasets de chaques config des graph, voir 
    });
})();
