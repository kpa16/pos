
<div id="content-html">
    <div style="width: 75%;">
        <canvas id="canvas"></canvas>
        <progress id="animationProgress" max="1" value="0" style="width: 100%"></progress>
    </div>
    <br>
    <br>
    <button id="randomizeData">Randomize Data</button>
    <button id="addDataset">Add Dataset</button>
    <button id="removeDataset">Remove Dataset</button>
    <button id="addData">Add Data</button>
    <button id="removeData">Remove Data</button>
    <script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100);
        };
        var randomColorFactor = function () {
            return Math.round(Math.random() * 255);
        };
        var randomColor = function (opacity) {
            return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
        };

        var $progress = $('#animationProgress');

        var config = {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                        label: "My First dataset ",
                        data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                        fill: false,
                        borderDash: [5, 5],
                    }, {
                        label: "My Second dataset ",
                        data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                    }]
            },
            options: {
                title: {
                    display: true,
                    text: "Chart.js Line Chart - Animation Progress Bar"
                },
                animation: {
                    duration: 2000,
                    onProgress: function (animation) {
                        $progress.attr({
                            value: animation.animationObject.currentStep / animation.animationObject.numSteps,
                        });
                    },
                    onComplete: function (animation) {
                        window.setTimeout(function () {
                            $progress.attr({
                                value: 0
                            });
                        }, 2000);
                    }
                },
                tooltips: {
                    mode: 'label',
                },
                scales: {
                    xAxes: [{
                            scaleLabel: {
                                show: true,
                                labelString: 'Month'
                            }
                        }],
                    yAxes: [{
                            scaleLabel: {
                                show: true,
                                labelString: 'Value'
                            },
                        }]
                }
            }
        };

        $.each(config.data.datasets, function (i, dataset) {
            dataset.borderColor = randomColor(0.4);
            dataset.backgroundColor = randomColor(0.5);
            dataset.pointBorderColor = randomColor(0.7);
            dataset.pointBackgroundColor = randomColor(0.5);
            dataset.pointBorderWidth = 1;
        });

        window.onload = function () {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };

        $('#randomizeData').click(function () {
            $.each(config.data.datasets, function (i, dataset) {
                dataset.data = dataset.data.map(function () {
                    return randomScalingFactor();
                });

            });

            window.myLine.update();
        });

        $('#addDataset').click(function () {
            var newDataset = {
                label: 'Dataset ' + config.data.datasets.length,
                borderColor: randomColor(0.4),
                backgroundColor: randomColor(0.5),
                pointBorderColor: randomColor(0.7),
                pointBackgroundColor: randomColor(0.5),
                pointBorderWidth: 1,
                data: [],
            };

            for (var index = 0; index < config.data.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            config.data.datasets.push(newDataset);
            window.myLine.update();
        });

        $('#addData').click(function () {
            if (config.data.datasets.length > 0) {
                var month = MONTHS[config.data.labels.length % MONTHS.length];
                config.data.labels.push(month);

                $.each(config.data.datasets, function (i, dataset) {
                    dataset.data.push(randomScalingFactor());
                });

                window.myLine.update();
            }
        });

        $('#removeDataset').click(function () {
            config.data.datasets.splice(0, 1);
            window.myLine.update();
        });

        $('#removeData').click(function () {
            config.data.labels.splice(-1, 1); // remove the label first

            config.data.datasets.forEach(function (dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myLine.update();
        });
    </script>
</div>