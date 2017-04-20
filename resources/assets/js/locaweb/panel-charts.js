$(function() {
        $(document).on("sidebar-minimize sidebar-maximize", function() {
                $(window).resize()
            }
        ), $("#panel-charts").highcharts( {
                chart: {
                    type: "column"
                }
                , title: {
                    text: "Março/2017"
                }
                , xAxis: {
                    categories: ["Joana", "Marcela", "Patricia", "Diego"]
                }
                , yAxis: {
                    min:0, title: {
                        text: "Envios"
                    }
                }
                , credits: {
                    text:"Rossina Estamparia", href:"https://rossinaestamparia.com.br", style: {
                        display: "none"
                    }
                }
                , colors:["#bdaa38", "#aa4643 ", "#89a54e"], series:[ {
                    name: "Total de envios contratados", data: [25, 50, 20, 3]
                }
                ]
            }
        ), $("#panel-charts-client").highcharts( {
                chart: {
                    type: "column", width: $("#panel-charts").width()
                }
                , title: {
                    text: "Março/2017"
                }
                , xAxis: {
                    categories: ["29/04 a 28/05", "29/06 a 28/07", "29/08 a 28/09", "29/10 a 28/11"]
                }
                , yAxis: {
                    min:0, title: {
                        text: "Envios"
                    }
                }
                , credits: {
                    text:"Rossina", href:"https://rossinaestamparia.com.br", style: {
                        display: "none"
                    }
                }
                , colors:["#bdaa38", "#aa4643 ", "#89a54e"], series:[ {
                    name: "Mensagens enviadas", data: [30, 15, 30, 30]
                }
                    , {
                        name: "Erros de recebimento", data: [20, 12, 14, 22]
                    }
                    , {
                        name: "Descadastramentos", data: [5, 1, 5, 10]
                    }
                ]
            }
        ), $("#panel-charts-2").highcharts( {
                chart: {
                    type: "line"
                }
                , title: {
                    text: ""
                }
                , xAxis: {
                    categories:["20/05/2017", "21/05/2017", "22/05/2017", "23/05/2017", "24/05/2017", "25/05/2017", "26/05/2017", "27/05/2017"], labels: {
                        rotation: 10, x: -20, step: 1, y: 20, align: "left"
                    }
                    , tickWidth:0
                }
                , yAxis: {
                    min:0, allowDecimals:!1, title: {
                        text: "Quantidade"
                    }
                }
                , legend: {
                    lineHeight: 20
                }
                , plotOptions: {
                    line: {
                        lineWidth:2, marker: {
                            enabled: !1
                        }
                        , states: {
                            hover: {
                                lineWidth: 2
                            }
                        }
                    }
                }
                , credits: {
                    enabled: !1
                }
                , colors:["#25b799", "#d75452 ", "#428bca"], series:[ {
                    name: "Entregues", data: [1200, 5e3, 500, 1e3, 5500, 1800, 2500, 2500]
                }
                    , {
                        name: "Bounces", data: [500, 200, 300, 700, 1600, 500, 200, 500]
                    }
                    , {
                        name: "Aberturas", data: [1e3, 2400, 400, 800, 2400, 1e3, 500, 1500]
                    }
                ], legend: {
                    lineHeight: 20
                }
                , tooltip: {
                    crosshairs: !0, useHTML: !0
                }
            }
        ), $("#panel-chart-pie-errors").highcharts( {
                chart: {
                    width: $("#panel-charts-2").width(), plotBackgroundColor: null, plotBorderWidth: 1, plotShadow: !1
                }
                , title: {
                    text: ""
                }
                , tooltip: {
                    pointFormat:"{series.name}: <b>{point.percentage:.1f}%</b>"
                }
                , colors:["#25b89a", "#aa4643 ", "#89a54e"], plotOptions: {
                    pie: {
                        allowPointSelect:!0, cursor:"pointer", dataLabels: {
                            enabled:!0, format:"<b>{point.name}</b>: {point.percentage:.1f} %", style: {
                                color: Highcharts.theme&&Highcharts.theme.contrastTextColor||"black"
                            }
                        }
                    }
                }
                , credits: {
                    text:"Rossina", href:"https://rossinaestamparia.com.br", style: {
                        display: "none"
                    }
                }
                , series:[ {
                    type: "pie", name: "Compartilhamento do navegador", data: [["Erro 1", 15], ["Erro 2", 35], ["Erro 3", 40]]
                }
                ]
            }
        ), $("#panel-chart-pie-complaints").highcharts( {
                chart: {
                    width: $("#panel-charts-2").width(), plotBackgroundColor: null, plotBorderWidth: 1, plotShadow: !1
                }
                , title: {
                    text: ""
                }
                , tooltip: {
                    pointFormat:"{series.name}: <b>{point.percentage:.1f}%</b>"
                }
                , colors:["#1d937b", "#aa4643 ", "#89a54e"], plotOptions: {
                    pie: {
                        allowPointSelect:!0, cursor:"pointer", dataLabels: {
                            enabled:!0, format:"<b>{point.name}</b>: {point.percentage:.1f} %", style: {
                                color: Highcharts.theme&&Highcharts.theme.contrastTextColor||"black"
                            }
                        }
                    }
                }
                , credits: {
                    text:"Rossina", href:"https://rossinaestamparia.com.br", style: {
                        display: "none"
                    }
                }
                , series:[ {
                    type: "pie", name: "Compartilhamento do navegador", data: [["Den\xfancias", 1], ["Nenhuma den\xfancia", 99]]
                }
                ]
            }
        ), $("#board-chart-1").highcharts( {
                colors:["#1d937b", "#d75553"], chart: {
                    backgroundColor: "#f7f7f7", plotBackgroundColor: "#f7f7f7", plotBorderWidth: 0, plotShadow: !1, spacing: [0, 0, 0, 0], height: 78, width: 78
                }
                , title: {
                    text:"80%", align:"center", verticalAlign:"middle", y:8, style: {
                        fontSize: "22px"
                    }
                }
                , tooltip: {
                    pointFormat:"<b>{point.percentage:.1f}%</b>"
                }
                , plotOptions: {
                    pie: {
                        dataLabels: !1, startAngle: 0, endAngle: 360, center: ["50%", "50%"]
                    }
                }
                , series:[ {
                    type:"pie", name:"Entregues x salta", innerSize:"75%", data:[["Entregues", 80], ["Salta", 20], {
                        name:"Propriedade ou indetectável", y:0, dataLabels: {
                            enabled: !1
                        }
                    }
                    ], size:78
                }
                ], credits: {
                    text:"Rossina", href:"https://rossinaestamparia.com.br", style: {
                        display: "none"
                    }
                }
            }
        ), $("#board-chart-2").highcharts( {
                colors:["#2881ac", "#dddddd"], chart: {
                    backgroundColor: "#f7f7f7", plotBackgroundColor: "#f7f7f7", plotBorderWidth: 0, plotShadow: !1, spacing: [0, 0, 0, 0], height: 78, width: 78
                }
                , title: {
                    text:"50%", align:"center", verticalAlign:"middle", y:8, style: {
                        fontSize: "22px"
                    }
                }
                , tooltip: {
                    pointFormat:"<b>{point.percentage:.1f}%</b>"
                }
                , plotOptions: {
                    pie: {
                        dataLabels: !1, startAngle: 0, endAngle: 360, center: ["50%", "50%"]
                    }
                }
                , series:[ {
                    type:"pie", name:"Abertos", innerSize:"75%", data:[["Abertos", 50], ["N\xe3o abertos", 50], {
                        name:"Propriedade ou indetectável", y:0, dataLabels: {
                            enabled: !1
                        }
                    }
                    ], size:78
                }
                ], credits: {
                    text:"Rossina", href:"https://rossinaestamparia.com.br", style: {
                        display: "none"
                    }
                }
            }
        ), $("#reputation-hard-bounce").highcharts( {
                colors:["#dddddd", "#d75553"], chart: {
                    backgroundColor: "#f7f7f7", plotBackgroundColor: "#f7f7f7", plotBorderWidth: 0, plotShadow: !1, spacing: [0, 0, 0, 0], height: 100
                }
                , title: {
                    text:"10%", align:"center", verticalAlign:"middle", y:8, style: {
                        fontSize: "22px"
                    }
                }
                , tooltip: {
                    pointFormat:"<b>{point.percentage:.1f}%</b>"
                }
                , plotOptions: {
                    pie: {
                        dataLabels: !1, startAngle: 0, endAngle: 360, center: ["50%", "50%"]
                    }
                }
                , series:[ {
                    type:"pie", name:"Abertos", innerSize:"75%", data:[["Ok", 90], ["Hard Bounces", 10], {
                        name:"Propriedade ou indetectável", y:0, dataLabels: {
                            enabled: !1
                        }
                    }
                    ], size:78
                }
                ], credits: {
                    text:"Rossina", href:"https://rossinaestamparia.com.br", style: {
                        display: "none"
                    }
                }
            }
        ), $("#reputation-complaints").highcharts( {
                colors:["#dddddd", "#d75553"], chart: {
                    backgroundColor: "#f7f7f7", plotBackgroundColor: "#f7f7f7", plotBorderWidth: 0, plotShadow: !1, spacing: [0, 0, 0, 0], height: 100
                }
                , title: {
                    text:"0,1%", align:"center", verticalAlign:"middle", y:8, style: {
                        fontSize: "22px"
                    }
                }
                , tooltip: {
                    pointFormat:"<b>{point.percentage:.1f}%</b>"
                }
                , plotOptions: {
                    pie: {
                        dataLabels: !1, startAngle: 0, endAngle: 360, center: ["50%", "50%"]
                    }
                }
                , series:[ {
                    type:"pie", name:"Abertos", innerSize:"75%", data:[["Ok", 90], ["Hard Bounces", 10], {
                        name:"Propriedade ou indetectável", y:0, dataLabels: {
                            enabled: !1
                        }
                    }
                    ], size:78
                }
                ], credits: {
                    text:"Rossina", href:"http://rossinaestamparia.com.br", style: {
                        display: "none"
                    }
                }
            }
        );
        for(var e=[], t=0;
            125>=t;
            t++)switch(t) {
            case 0: e.push("Sem \xedndice");
                break;
            case 25: e.push("0 a 24 P\xe9ssima");
                break;
            case 50: e.push("25 a 49 Ruim");
                break;
            case 75: e.push("50 a 74 Regular");
                break;
            case 100: e.push("75 a 87 Boa");
                break;
            case 112: e.push("Acima de 87 \xd3tima");
                break;
            case 125: e.push("100 Nota m\xe1xima");
                break;
            default: e.push("")
        }
        $("#reputation-history").highcharts( {
                chart: {
                    type: "line"
                }
                , title: {
                    text: ""
                }
                , xAxis: {
                    categories:["20/05/2017", "21/05/2017", "22/05/2017", "23/05/2017", "24/05/2017", "25/05/2017", "26/05/2017", "27/05/2017", "28/05/2017"], labels: {
                        rotation: 10, x: -20, step: 1, y: 20, align: "left"
                    }
                    , tickWidth:0
                }
                , yAxis: {
                    min:0, max:125, allowDecimals:!1, title: {
                        text: null
                    }
                    , tickPositions:[0, 25, 50, 75, 100, 112, 125], categories:e
                }
                , legend: {
                    enabled: !1
                }
                , plotOptions: {
                    line: {
                        lineWidth:2, marker: {
                            enabled: !0, symbol: "circle"
                        }
                        , states: {
                            hover: {
                                enabled: !1
                            }
                        }
                    }
                }
                , credits: {
                    enabled: !1
                }
                , colors:["#303030"], series:[ {
                    data: [0, 25, 30, 120, 55, 110, 0, 95, 125]
                }
                ], tooltip: {
                    crosshairs:!0, useHTML:!0, formatter:function() {
                        var e=this.y<25?"Sem \xedndice": this.y-25;
                        return this.x+"<br>Nota: <b>"+e+"</b>"
                    }
                }
            }
        )
    }

);