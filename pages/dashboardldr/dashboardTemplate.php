
<div id="content-information">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Weekly Branch Sales Dashboard
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header text-center">
                        <h3 class="box-title"><b>Weekly Branch Sales Chart</b></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <canvas id="branchSalesChart"></canvas>
                    </div>
                    <div class="box-footer">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header text-center">
                        <h3 class="box-title"><b>Weekly Branch Sales Progress</b></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered" id="myDashboard">
                            <thead>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box collapse" id="collapseLineChart">
                <div class="box-header text-center">
                    <h3 class="box-title"><b>Detail Item Sales</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <canvas id="branchItemBarChart" height="50px"></canvas>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        /*THIS CONFIGURATION FOR TABLE DASHBOARD*/
        var selectorTable = '#myDashboard';
        var $detItemBranchSale = $('#detailItemBranchSales');
        //for column name table
        var colName = ['Branch', 'Progress', 'Sales'];
        //target idx column colored progress bar
        var idxTargetColor = 1;
        //this data must same length from chart label
        var datatableJSON = [['1', '30', 'Rp 75,000,000'], ['2', '45', 'Rp 130,000,000'], ['3', '20', 'Rp 20,000,000'], ['4', '50', 'Rp 250,000,000'], ['5', '78', 'Rp 500,000,000'], ['6', '90', 'Rp 700,000,000']];



        /*THIS CONFIGURATION FOR PIE CHART*/
        var pieDataJSON = {
            title: 'Add Your Title Here',
            label: ["1", "2", "3", "4", "5", "6"],
            data: [12, 19, 3, 5, 2, 3]
        };
        var bgColor = getRandomColorRGB(pieDataJSON.label.length);
        var $pieChart = $('#branchSalesChart');
        var pieChart = new Chart($pieChart, {
            type: 'pie',
            responsive: true,
            animation: {
                animateScale: true
            },
            events: ['click'],
            data: {
                labels: pieDataJSON.label,
                datasets: [{
                        label: pieDataJSON.label,
                        data: pieDataJSON.data,
                        backgroundColor: bgColor,
                        borderWidth: 1.2,
                        mode: 'highlight'
                    }]
            },
            options: {
                maintainAspectRatio: true,
                responsiveAnimationDuration: 1000,
                title: {
                    display: true,
                    text: pieDataJSON.title
                },
                tooltips: {
                    mode: 'label',
                    enabled: true,
//                    callbacks: {
//                        beforeTitle: function (tooltipsData) {
//                            return JSON.stringify(tooltipsData) + '...beforeTitle';
//                        }
//                    }
                    custom: function (tooltips) {
                        // Hide if no tooltip
                        if (!tooltips.opacity) {
                            return;
                        }

                        console.log(tooltips);
                    }
                },
                legend: {
                    display: true,
                    position: 'bottom', //top|bottom
                    fullWidth: true,
                    onClick: function (event, legendItem) {

                    }
                }
            }
        });



        /*ELEMENT SELECTOR FOR COLLAPSE LINE*/
        var $collapseLineChart = $('#collapseLineChart');
        /*THIS CONFIGURATION FOR LINE CHART*/
        var barDataJSON = {
            title: 'Item in sales Branch 1 (Weekly)',
            labels: ["Item 1", "Item 2", "Item 3", "Item 4", "Item 5", "Item 6", "Item 7"],
            datasets: [
                {label: 'Branch 1', data: [65, 59, 80, 81, 56, 53, 92]}
            ]
        };
        var itemBgColor = getRandomColorRGB(barDataJSON.labels.length);
        var $barChart = $('#branchItemBarChart');
        var lineChart = new Chart($barChart, {
            type: 'bar',
            responsive: true,
            animation: {
                animateScale: true
            },
            data: {
                labels: barDataJSON.labels,
                datasets: [{
                        label: barDataJSON.datasets[0].label,
                        data: barDataJSON.datasets[0].data,
                        backgroundColor: itemBgColor,
                        borderWidth: 1.2,
                        mode: 'highlight'
                    }]
            },
            options: {
                maintainAspectRatio: true,
                responsiveAnimationDuration: 1000,
                title: {
                    display: true,
                    text: barDataJSON.title
                },
                tooltips: {
                    mode: 'label'
                },
                legend: {
                    display: true,
                    position: 'bottom', //top|bottom
                    fullWidth: true
                }
            }
        });

        $pieChart.on('click', function (evt) {
            //            var dataChart = myChart.getDatasetAtEvent(evt);  
            //            console.log(dataChart);

            $collapseLineChart.collapse();
            /*
             var sesuatu = myChart.generateLegend();
             console.log(sesuatu);
             /*
             var activepoint = myChart.getElementsAtEvent(evt);
             var seen = [];
             console.log(activepoint);
             JSON.stringify(activepoint, function (key, val) {
             if (val !==null && typeof val === "object") {
             if (seen.indexOf(val) >= 0) {
             return;
             }
             seen.push(val);
             }
             return val;
             });
             console.log(seen);//[94].label
             */
        });
        //filling dashboard table
        fillDashboardTable(selectorTable, colName, bgColor, idxTargetColor, datatableJSON);
    });
    function RGBrandomColor(opacity) {
        return 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
    }
    function getRandomColorRGB(numColor) {
        var arrColor = [];
        for (var i = 0; i < numColor; i++) {
            arrColor[i] = RGBrandomColor(0.5);
        }
        console.log(arrColor);
        return arrColor;
    }
    /*FILING PROGRESS BAR TABLE*/
    function fillDashboardTable(selector, colNames, bgColors, idxtargetColor, datas) {
        var $table = selector;
        var $tableHead = $($table + ' thead');
        var $tableBody = $($table + ' tbody');
        var dataArr = datas;
        var targetBg = idxtargetColor;
        //set thead column
        var colName = colNames;
        var bgColor = bgColors;
        $tableHead.append('<tr></tr>');
        //console.log($('tr', $tableHead));
        for (var i = 0; i < colName.length; i++) {
            $('tr', $tableHead).append('<th>' + colName[i] + '</th>');
        }
        for (var i = 0; i < dataArr.length; i++) {
            $tableBody.append('<tr></tr>');
            for (var j = 0; j < dataArr[i].length; j++) {
                if (j === targetBg) {
                    $('tr:eq(' + i + ')', $tableBody).append('<td><div class="progress progress-xs"><div class="progress-bar"  style="width: ' + dataArr[i][j] + '%; background-color:' + bgColor[i] + '"></div></div></td>');
                } else {
                    $('tr:eq(' + i + ')', $tableBody).append('<td>' + dataArr[i][j] + '</td>');
                }
            }
        }
    }
</script>