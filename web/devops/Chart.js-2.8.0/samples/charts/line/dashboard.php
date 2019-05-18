<!doctype html>
<html>

<head>
    <title>DASHBOARD</title>
    <script src="../../../dist/Chart.min.js"></script>
    <script src="../../utils.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

    </style>
</head>

<body>
    <div id="titre">Dashboard</div>
    <div id="graph">
        <div class="unite">
            <div class="titre_unit">Unité 1</div>
            <div class="graphs">
                <div class="haut">
                    <div class="block"><canvas id="canvas"></canvas></div>
                    <div class="block"><canvas id="canvas1"></canvas></div>
                    <div class="block"><canvas id="canvas2"></canvas></div>
                    <div class="block"><canvas id="canvas3"></canvas></div>
                    <div class="block"><canvas id="canvas4"></canvas></div>
                </div>
                <div class="bas">
                    <div class="block"><canvas id="canvas5"></canvas></div>
                    <div class="block"><canvas id="canvas6"></canvas></div>
                    <div class="block"><canvas id="canvas7"></canvas></div>
                    <div class="block"><canvas id="canvas8"></canvas></div>
                    <div class="block"><canvas id="canvas9"></canvas></div>
                </div>
            </div>
        </div>
    </div>
</body>
    
<script>
		var config = {
			type: 'line',
			data: {
				labels: ['10h01','10h02','10h03','10h04','10h05','10h06','10h07','10h08','10h09','10h10','10h11','10h12','10h13','10h14','10h15','10h16','10h17','10h18','10h19','10h20'],
				datasets: [{
                    label: 'XOOOBFS',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [<?php echo "10,20,30,40,50,60,70,80,90,100,90,80,70,60,50,40,30,20,10,20"?>],
					fill: false,
				}]
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
		};
    
//-------------------------------------------------------------------------------------------------------------------------------------------------------------
		var config1 = {
			type: 'line',
			data: {
				labels: ['10h01','10h02','10h03','10h04','10h05','10h06','10h07','10h08','10h09','10h10','10h11','10h12','10h13','10h14','10h15','10h16','10h17','10h18','10h19','10h20'],
				datasets: [{
                    label: 'XOOOBFS',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [<?php echo "10,20,30,40,50,60,70,80,90,100,90,80,70,60,50,40,30,20,10,20"?>],
					fill: false,
				}]
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
		};
//-------------------------------------------------------------------------------------------------------------------------------------------------------------
    		var config2 = {
			type: 'line',
			data: {
				labels: ['10h01','10h02','10h03','10h04','10h05','10h06','10h07','10h08','10h09','10h10','10h11','10h12','10h13','10h14','10h15','10h16','10h17','10h18','10h19','10h20'],
				datasets: [{
                    label: 'XOOOBFS',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [<?php echo "10,20,30,40,50,60,70,80,90,100,90,80,70,60,50,40,30,20,10,20"?>],
					fill: false,
				}]
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
		};
//-------------------------------------------------------------------------------------------------------------------------------------------------------------
    		var config3 = {
			type: 'line',
			data: {
				labels: ['10h01','10h02','10h03','10h04','10h05','10h06','10h07','10h08','10h09','10h10','10h11','10h12','10h13','10h14','10h15','10h16','10h17','10h18','10h19','10h20'],
				datasets: [{
                    label: 'XOOOBFS',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [<?php echo "10,20,30,40,50,60,70,80,90,100,90,80,70,60,50,40,30,20,10,20"?>],
					fill: false,
				}]
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
		};
//-------------------------------------------------------------------------------------------------------------------------------------------------------------
    		var config4 = {
			type: 'line',
			data: {
				labels: ['10h01','10h02','10h03','10h04','10h05','10h06','10h07','10h08','10h09','10h10','10h11','10h12','10h13','10h14','10h15','10h16','10h17','10h18','10h19','10h20'],
				datasets: [{
                    label: 'XOOOBFS',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [<?php echo "10,20,30,40,50,60,70,80,90,100,90,80,70,60,50,40,30,20,10,20"?>],
					fill: false,
				}]
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
		};
//-------------------------------------------------------------------------------------------------------------------------------------------------------------
    		var config5 = {
			type: 'line',
			data: {
				labels: ['10h01','10h02','10h03','10h04','10h05','10h06','10h07','10h08','10h09','10h10','10h11','10h12','10h13','10h14','10h15','10h16','10h17','10h18','10h19','10h20'],
				datasets: [{
                    label: 'XOOOBFS',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [<?php echo "10,20,30,40,50,60,70,80,90,100,90,80,70,60,50,40,30,20,10,20"?>],
					fill: false,
				}]
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
							labelString: 'K+ en mg/Litres'
						}
					}]
				}
			}
		};
//-------------------------------------------------------------------------------------------------------------------------------------------------------------
        		var config6 = {
			type: 'line',
			data: {
				labels: ['10h01','10h02','10h03','10h04','10h05','10h06','10h07','10h08','10h09','10h10','10h11','10h12','10h13','10h14','10h15','10h16','10h17','10h18','10h19','10h20'],
				datasets: [{
                    label: 'XOOOBFS',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [<?php echo "10,20,30,40,50,60,70,80,90,100,90,80,70,60,50,40,30,20,10,20"?>],
					fill: false,
				}]
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
							labelString: 'NaCl en g/L'
						}
					}]
				}
			}
		};
//-------------------------------------------------------------------------------------------------------------------------------------------------------------
        		var config7 = {
			type: 'line',
			data: {
				labels: ['10h01','10h02','10h03','10h04','10h05','10h06','10h07','10h08','10h09','10h10','10h11','10h12','10h13','10h14','10h15','10h16','10h17','10h18','10h19','10h20'],
				datasets: [{
                    label: 'XOOOBFS',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [<?php echo "10,20,30,40,50,60,70,80,90,100,90,80,70,60,50,40,30,20,10,20"?>],
					fill: false,
				}]
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
							labelString: 'En ppm'
						}
					}]
				}
			}
		};
//-------------------------------------------------------------------------------------------------------------------------------------------------------------
        		var config8 = {
			type: 'line',
			data: {
				labels: ['10h01','10h02','10h03','10h04','10h05','10h06','10h07','10h08','10h09','10h10','10h11','10h12','10h13','10h14','10h15','10h16','10h17','10h18','10h19','10h20'],
				datasets: [{
                    label: 'XOOOBFS',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [<?php echo "10,20,30,40,50,60,70,80,90,100,90,80,70,60,50,40,30,20,10,20"?>],
					fill: false,
				}]
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
							labelString: 'En ppm'
						}
					}]
				}
			}
		};
//-------------------------------------------------------------------------------------------------------------------------------------------------------------
        		var config9 = {
			type: 'line',
			data: {
				labels: ['10h01','10h02','10h03','10h04','10h05','10h06','10h07','10h08','10h09','10h10','10h11','10h12','10h13','10h14','10h15','10h16','10h17','10h18','10h19','10h20'],
				datasets: [{
                    label: 'XOOOBFS',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [<?php echo "10,20,30,40,50,60,70,80,10,100,90,80,70,60,50,40,30,20,10,20"?>],
					fill: false,
				}]
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
							labelString: 'En ppm'
						}
					}]
				}
			}
		};
//-------------------------------------------------------------------------------------------------------------------------------------------------------------

    
    window.onload = function(){
    var ctx = document.getElementById("canvas").getContext("2d");
    window.myLine = new Chart(ctx, config);
        
    var ctx1 = document.getElementById("canvas1").getContext("2d");
    window.myLine = new Chart(ctx1, config1);
    
    var ctx2 = document.getElementById("canvas2").getContext("2d");
    window.myLine = new Chart(ctx2, config2);
    
    var ctx3 = document.getElementById("canvas3").getContext("2d");
    window.myLine = new Chart(ctx3, config3);
        
    var ctx4 = document.getElementById("canvas4").getContext("2d");
    window.myLine = new Chart(ctx4, config4);
        
    var ctx5 = document.getElementById("canvas5").getContext("2d");
    window.myLine = new Chart(ctx5, config5);
        
    var ctx6 = document.getElementById("canvas6").getContext("2d");
    window.myLine = new Chart(ctx6, config6);
        
    var ctx7 = document.getElementById("canvas7").getContext("2d");
    window.myLine = new Chart(ctx7, config7);
        
    var ctx8 = document.getElementById("canvas8").getContext("2d");
    window.myLine = new Chart(ctx8, config8);
        
    var ctx9 = document.getElementById("canvas9").getContext("2d");
    window.myLine = new Chart(ctx9, config9);
    }
	</script>
    
</html>
