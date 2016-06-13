
<div id="content-information">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Your Trend Market
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="col-md-4 col-md-offset-4">
            <div class="box box-primary">
                <div class="row" style="padding-top: 15px;">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-default" id="daterange-btn">
                            <i class="fa fa-calendar"></i> Select Date
                            <i class="fa fa-caret-down"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <form class="form-horizontal" action="#" method="POST" form-target="form-item">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Date:  </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  placeholder="Date" name="dateRange"/>
                            </div>
                        </div>
                    </form>
                </div><!-- /.box-body
        
                <!-- Date and time range -->
                <!--                    <div class="form-group">
                                        <label>Date range button:</label>
                                        <div class="input-group">
                                            <button class="btn btn-default pull-right" id="daterange-btn">
                                                <i class="fa fa-calendar"></i> Date range picker
                                                <i class="fa fa-caret-down"></i>
                                            </button>
                                        </div>
                                    </div> /.form group -->
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header text-center">
                        <h3 class="box-title"><b>Overall Sales Trend</b></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <canvas id="trendChart"></canvas>
                    </div>
                    <div class="box-footer">

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        /*DATEPICKER*/
        function cb(start, end) {
            console.log(start + ' ' + end);
            $('input[name="dateRange"]').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        cb(moment(), moment());

        $('#daterange-btn').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
        }, cb);
        var $trendChart = $('#trendChart');
        var dataJSON = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {label: 'test 1', data: [65, 59, 80, 81, 56, 53, 92]},
                {label: 'test 2', data: [123.14, 90, 12, 76, 56, 12, 97]},
                {label: 'test 3', data: [90, 50, 28, 42, 78, 31, 86]}
            ]
        };
        var colorDatasets = getRandomColor(dataJSON.datasets.length);
        var dataLineChart = {
            labels: dataJSON.labels,
            datasets: dataExtracLine(dataJSON.datasets, colorDatasets)
        };
        var optionLineChart = {
            responsive: true,
            animation: {
                animateScale: true
            },
            tooltips: {
                mode: 'single'
            }
        };

        var trendChart = new Chart($trendChart, {
            type: 'line',
            data: dataLineChart,
            options: optionLineChart
        });
    });
    function dataExtracLine(data, color) {
        var dataLine = [];
        for (var i = 0; i < data.length; i++) {
            dataLine.push({
                label: data[i].label,
                fill: false,
                lineTension: 0.1,
                backgroundColor: setOpacity(color[i], 0.4),
                borderColor: setOpacity(color[i], 1),
                pointBorderWidth: 5,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: setOpacity(color[i], 1),
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 3,
                pointRadius: 2,
                pointHitRadius: 30,
                data: data[i].data //[65, 59, 80, 81, 56, 55, 40]
            });
        }
        return dataLine;
    }
    function RGBARandColorOpacity(opacity) {
        return 'rgba(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + opacity + ')';
    }
    function setOpacity(color, opacity) {
        var getDataColor = color.toString().split(",");
        var getColorOpacity = getDataColor[getDataColor.length - 1].split(")");
        getColorOpacity[0] = opacity.toString();
        getDataColor[getDataColor.length - 1] = getColorOpacity.join(")");
        return getDataColor.join(",");
    }
    function getRandomColor(numColor) {
        var arrColor = [];
        for (var i = 0; i < numColor; i++) {
            arrColor[i] = RGBARandColorOpacity(0.5);
        }
        return arrColor;
    }
</script>