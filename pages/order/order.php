<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Order Page</title>

        <style>
            .table td,
            .table th
            {
                text-align:left;
            }

            .table#salesOrder td + td + td,
            .table th + th + th
            {
                text-align:right;
                font-weight: bold;

            }
            tbody > tr{
                cursor:pointer;
            }
            #notification-box{
                position:fixed;
                bottom:0;
                z-index: 101;
            }
        </style>
    </head>
    <body>
        <div id="content-information">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Order
                    <small>Sales Invoice</small>
                </h1>

                <ol class="breadcrumb">
                    <li>
                        <a href="#" title="How To Use" data-toggle="modal" data-target="#howtouseCalc"><i class="fa fa-info-circle fa-lg"></i></a>
                        How To Use
                    </li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-8" id="e-calculator" tabindex="1">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">List Orders</h3>
                            </div>
                            <div class="box-body">
                                <!-- Row List Order-->
                                <p class="text-right">
                                    <b>Date:</b> <?php echo date('l Y/m/d H:i:s') ?>
                                </p>
                                <table class="table table-hover" id="salesOrder">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Qty</th>
                                            <th>Name</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                <!-- End Row List Order-->
                            </div><!-- ./box-body -->
                            <div class="box box-calc">
                                <div class="box-body">
                                    <div class="col-md-12">
                                        <p class="text-center" id="hold-item"></p>
                                        <div class="btn-group-vertical" id="num-calcs">
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="num-48">0</button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="num-57">9</button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="num-56">8</button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" style="border-top-left-radius: 4px;" id="num-55">7</button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="num-8" title="Delete Qty"><i class="fa fa-arrow-left"></i></button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="num-54">6</button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="num-53">5</button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="num-52">4</button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="clear" title="Clear Data Order"><b>C</b></button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="num-51">3</button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="num-50">2</button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="num-49">1</button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="num-13" title="Storing Selected Item"><i class="fa fa-check"></i></button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="del" title="Delete Selected Item"><i class="fa fa-times"></i></button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" id="disc" title="Discount Selected Item"><i class="fa fa-ticket"></i></button>
                                            <button type="button" class="btn btn-success btn-lg btn-number" data-toggle="modal" data-target="#listConsumer" title="List Consumer"><i class="fa fa-list-ol"></i></button>
                                            <button type="button" class="btn btn-success btn-lg btn-calc"><i class="fa fa-check-square-o" title="Payment Order"></i>Payment</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">List Items</h3>
                            </div>
                            <div class="box-body">
                                <table id="listItems" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>4</td>
                                            <td>Skop</td>
                                            <td>30</td>
                                            <td>12,000</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Tali</td>
                                            <td>30</td>
                                            <td>53,000</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Gunting</td>
                                            <td>30</td>
                                            <td>6,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.box-body -->
                        </div>
                    </div>
                </div>
                <!-- Your Page Content Here -->
            </section>
        </div>
        <!-- Modal Consumer-->
        <div id="listConsumer" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>List Consumer <p class="pull-right"><?php echo date('l Y/m/d'); ?></p></h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Consumer-->

        <!-- Modal Discount -->
        <div id="modalDiscount" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 id="header-disc">Discount Item's</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="#">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Discount :</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">Rp</div>
                                        <input type="number" class="form-control"  placeholder="Discount" maxlength="3" min="0" max="100">
                                        <div class="input-group-addon">%</div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn-primary">Ok</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Discount -->

        <!-- Modal Calculator-->
        <div id="howtouseCalc" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="text-center"><b>How To Use Calculator</b></h4>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center">From Your Keyboard</h4>
                        <table class="table table-bordered table-striped">
                            <colgroup><col class="col-xs-2"> <col class="col-xs-6"> </colgroup>
                            <thead>
                                <tr>
                                    <td><b>Button</b></td>
                                    <td><b>Description</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><kbd>Delete</kbd></td>
                                    <td>Delete Selected Item From List Order</td>
                                <tr>
                                <tr>
                                    <td><kbd>Num 0~9</kbd></td>
                                    <td>Fill the QTY based the number typed</td>
                                <tr>
                                <tr>
                                    <td><kbd>Backspace</kbd></td>
                                    <td>Deleting QTY Number (qty 20 to 2)</td>
                                <tr>
                                <tr>
                                    <td><kbd>Enter</kbd></td>
                                    <td>Adding Desire Item and Qty to Table Order</td>
                                <tr>
                            </tbody>
                        </table>
                        <h4 class="text-center">From Button Calculator</h4>
                        <table class="table table-bordered table-striped">
                            <colgroup><col class="col-xs-2"> <col class="col-xs-6"> </colgroup>
                            <thead>
                                <tr>
                                    <td><b>Button</b></td>
                                    <td><b>Description</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><kbd><i class="fa fa-arrow-left"></i></kbd></td>
                                    <td>Deleting QTY Number (qty 20 to 2)</td>
                                </tr>
                                <tr>
                                    <td><kbd><i class="fa fa-ticket"></i></kbd></td>
                                    <td>Add Desired Discount for Customer</td>
                                </tr>
                                <tr>
                                    <td><kbd><i class="fa fa-times"></i></kbd></td>
                                    <td>Delete Selected Item From List</td>
                                </tr>
                                <tr>
                                    <td><kbd><i class="fa fa-check"></i></kbd></td>
                                    <td>Adding Desire Item and Qty to Table Order</td>
                                </tr>
                                <tr>
                                    <td><kbd>C</kbd></td>
                                    <td>Clear All Data Order</td>
                                </tr>
                                <tr>
                                    <td><kbd><i class="fa fa-list-ol"></i></kbd></td>
                                    <td>List Data Consumer On That Day</td>
                                </tr>
                                <tr>
                                    <td><kbd><i class="fa fa-check-square-o"></i></kbd></td>
                                    <td>Closing Order Consumer</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Modal Calculator-->

        <!-- notification -->
        <div class="row" id="notification-box">

            <div class="col-md-12 text-center">
                <div class="alert" style="display:none" id="alert-box">
                    <b><text id="notif-header"></text></b><text id="notif-info"></text>
                </div>
            </div>
        </div>
    </section><!-- /.content -->
</div>

<script>
    'use strict';
    $(function () {
        $(document).on('keydown', function (e) {
            if (e.which === 8 && !$(e.target).is("input:not([readonly]):not([type=radio]):not([type=checkbox]), textarea, [contentEditable], [contentEditable=true]")) {
                e.preventDefault();
            }
        });
        /*ANIMATION NOTIFICATION*/
        var classAlertBefore = '';
        function alertNotification(selectorAlert, notifHeader, notifInfo) {
            var icon = "";
            if (selectorAlert === 'alert-success') {
                icon = '<i class="icon fa fa-check"></i>';
            } else if (selectorAlert === 'alert-danger') {
                icon = '<i class="icon fa fa-ban"></i>';
            } else if (selectorAlert === 'alert-info') {
                icon = '<i class="icon fa fa-info"></i>';
            } else if (selectorAlert === 'alert-warning') {
                icon = '<i class="icon fa fa-warning"></i>';
            }
            console.log('class before ' + classAlertBefore + ' selected class ' + selectorAlert);
            if (classAlertBefore !== selectorAlert) {
                $('#alert-box').removeClass(classAlertBefore);
                classAlertBefore = selectorAlert;
            }

            $('#alert-box').addClass(selectorAlert);
            $('.alert.' + selectorAlert).stop(true).hide();
            $('.alert.' + selectorAlert).fadeIn('slow').delay(10000).fadeOut('slow');
            $('.alert.' + selectorAlert).find('#notif-header').html(icon + notifHeader);
            $('.alert.' + selectorAlert).find('#notif-info').html(notifInfo);
        }
        /*END ANIMATION NOTIFICATION*/
        function infoCalculator() {
            $('#howtouseCalc').modal('show');
        }
        /*CALCULATOR START*/
        //focusing calculator
        $('#e-calculator').focus();

        var holdItem = undefined;
        var qtyNumber = "";
        var tListItem = $("#listItems").DataTable({
            responsive: true,
            dom: '<"pull-left"f>t<"bottom"ip>',
            paging: true,
            searching: true,
            autoWidth: true,
            ordering: false
        });
        var tSalesOrder = $("#salesOrder").DataTable({
            responsive: true,
            paging: false,
            searching: false,
            ordering: false,
            information: true,
            columnDefs: [
                {"visible": false, "targets": 0}
            ]
        });

        $("#listItems tbody").on('click', 'tr', function (e) {
            var dataItem = tListItem.row(this).data();
            if (holdItem !== undefined) {
                if (dataItem[0] !== holdItem[0]) {
                    qtyNumber = "";
                }
            }
            var isExistOrder = tSalesOrder.column(0).data().indexOf(dataItem[0]), rowOrder;
            if (isExistOrder === -1) {
                var item = [dataItem[0], 0, dataItem[1], 0];
                var itemNewOrder = tSalesOrder.row.add(item).draw();
                rowOrder = itemNewOrder.node();
                holdItem = item;
            } else {
                holdItem = tSalesOrder.row(isExistOrder).data();
                rowOrder = tSalesOrder.row(isExistOrder).node();
            }
            alertNotification('alert-info', 'Item Selected ', '<b>Name : </b>' + holdItem[2]);
            $("#salesOrder tbody>tr").removeClass("highlight");
            $(rowOrder).addClass("highlight");
            $('#e-calculator').focus();
            //viewHold(holdItem, qtyNumber);
        });
        $("#e-calculator").on('keydown', function (e) {
            var char = e.keyCode;
            var whiteList = [46, 48, 49, 50, 51, 52, 53, 53, 55, 56, 57, 8, 13];
            if ($.inArray(char, whiteList) !== -1) {
                if (holdItem !== undefined) {
                    var idxItemOrder = tSalesOrder.column(0).data().indexOf(holdItem[0]);
                    var dataItemOrder = tSalesOrder.row(idxItemOrder).data();
                    var idxItemList = tListItem.column(0).data().indexOf(holdItem[0]);
                    var dataItemList = tListItem.row(idxItemList).data();
                    $("#num-calcs>button").removeClass('hover');
                    var id = undefined;
                    if (char >= 48 && char <= 57) {
                        id = String.fromCharCode(char).toString();
                        qtyNumber += String.fromCharCode(char).toString();
                    } else if (char === 8) {
                        e.preventDefault();
                        id = 'del';
                        qtyNumber = qtyNumber.slice(0, -1);
                    } else if (char === 46) {
                        dataItemList[2] = parseInt(dataItemList[2]) + parseInt(dataItemOrder[1]);
                        tListItem.row(idxItemList).data(dataItemList).draw();
                        alertNotification('alert-success', 'Data Removed, ', 'Item : <b>' + dataItemOrder[2] + '</b>, Qty : <b>' + dataItemOrder[1] + '</b>');
                        tSalesOrder.row(idxItemOrder).remove().draw();
                        holdItem = undefined;
                        qtyNumber = "";
                    } else if (char === 13) {
                        if (qtyNumber.length === 0) {
                            alertNotification('alert-warning', 'QTY not fill, ', 'Please fill qty.');
                            return false;
                        } else {
                            //update the data from hold item
                            //check data if overflow the stock
                            var totalQty = parseInt(dataItemOrder[1]) + parseInt(dataItemList[2]);
                            if (parseInt(qtyNumber) > totalQty) {
                                qtyNumber = "";
                                alertNotification('alert-danger', 'Out of MAX QTY, ', 'Your input higher than number exist QTY Items.');
                                return false;
                            } else if (parseInt(qtyNumber) < 0) {
                                alert('qty cant be less than zero');
                                return false;
                            } else {
                                if (parseInt(dataItemOrder[1]) !== 0) {
                                    //store if data still exist
                                    dataItemList[2] = parseInt(dataItemList[2]) + parseInt(dataItemOrder[1]);
                                    dataItemOrder[1] = 0;
                                    tSalesOrder.row(idxItemOrder).data(dataItemOrder).draw();
                                    tListItem.row(idxItemList).data(dataItemList).draw();
                                }

                                //update the qty data
                                dataItemOrder[1] = parseInt(qtyNumber);
                                dataItemList[2] = dataItemList[2] - parseInt(qtyNumber);
                                //update the price
                                dataItemOrder[3] = calculate(dataItemList[3], parseInt(qtyNumber));
                                tSalesOrder.row(idxItemOrder).data(dataItemOrder).draw();
                                tListItem.row(idxItemList).data(dataItemList).draw();
                                alertNotification('alert-success', 'Data Stored, ', 'Item : <b>' + dataItemOrder[2] + '</b>, Qty : <b>' + dataItemOrder[1] + '</b>');
                            }
                            qtyNumber = "";
                            holdItem = undefined;
                        }

                    }
                    //begin from here
                    $("#num-" + id).addClass('hover');
                    //viewHold(holdItem, qtyNumber);
                    alertNotification('alert-info', 'Data Valid, ', 'Selected Item : <b>' + holdItem[2] + '</b>, Quantity input : <b>' + qtyNumber + '</b>');
                } else {
                    /*PLEASE SELECT ITEM FIRST*/
                    alertNotification('alert-warning', 'No Data Selected, ', 'Please select item at least one.');
                }

            }
        });
        $("#num-calcs>button").on('click', function (e) {
            var num = $(this).attr('id');
            $(this).removeClass('hover');
            if (num === 'clear') {
                //before its been clear data should restore
                var tableData = tSalesOrder.rows().data();
                for (var i = 0; i < tableData.length; i++) {
                    var idxDataSalesOrder = tableData.row(i).data();
                    var idxRowItemList = tListItem.column(0).data().indexOf(idxDataSalesOrder[0]);
                    var dataRowItemList = tListItem.row(idxRowItemList).data();
                    var updatedRowItemList = dataRowItemList;
                    updatedRowItemList[2] = parseInt(updatedRowItemList[2]) + parseInt(idxDataSalesOrder[1]);
                    tListItem.row(idxRowItemList).data(updatedRowItemList).draw();
                }
                holdItem = undefined;
                qtyNumber = "";
                tSalesOrder.clear().draw();
//                        viewHold(holdItem, qtyNumber);
            } else {
                if (holdItem !== undefined) {
                    var idxItemOrder = tSalesOrder.column(0).data().indexOf(holdItem[0]);
                    var dataItemOrder = tSalesOrder.row(idxItemOrder).data();
                    var idxItemList = tListItem.column(0).data().indexOf(holdItem[0]);
                    var dataItemList = tListItem.row(idxItemList).data();
                    if (num === 'del') {
                        dataItemList[2] = parseInt(dataItemList[2]) + parseInt(dataItemOrder[1]);
                        tListItem.row(idxItemList).data(dataItemList).draw();
                        tSalesOrder.row(idxItemOrder).remove().draw();
                        alertNotification('alert-success', 'Data Removed, ', 'Item : <b>' + dataItemOrder[2] + '</b>, Qty : <b>' + dataItemOrder[1] + '</b>');
                        holdItem = undefined;
                        qtyNumber = "";
                    } else if (num === 'disc') {
                        $('#header-disc').html('Discount For Item ' + dataItemOrder[2]);
                        $('#modalDiscount').modal('show');
                    } else if (num.substring(0, 4) === 'num-') {
                        var subStrChar = num.substring(4, num.length);
                        var char = parseInt(subStrChar);
//                        alert(char);
                        var whiteList = [48, 49, 50, 51, 52, 53, 53, 55, 56, 57, 8, 13];
                        if ($.inArray(char, whiteList) !== -1) {

                            $("#num-calcs>button").removeClass('hover');
                            var id = undefined;
                            if (char >= 48 && char <= 57) {
                                qtyNumber += String.fromCharCode(char).toString();
                            } else if (char === 8) {
                                e.preventDefault();
                                qtyNumber = qtyNumber.slice(0, -1);
                            } else if (char === 46) {
                                dataItemList[2] = parseInt(dataItemList[2]) + parseInt(dataItemOrder[1]);
                                tListItem.row(idxItemList).data(dataItemList).draw();
                                tSalesOrder.row(idxItemOrder).remove().draw();
                            } else if (char === 13) {
                                if (qtyNumber.length === 0) {
                                    alertNotification('alert-warning', 'QTY not fill, ', 'Please fill qty.');
                                    return false;
                                } else {
                                    //update the data from hold item
                                    //check data if overflow the stock
                                    var totalQty = parseInt(dataItemOrder[1]) + parseInt(dataItemList[2]);
                                    if (parseInt(qtyNumber) > totalQty) {
                                        qtyNumber = "";
                                        alertNotification('alert-danger', 'Out of MAX QTY, ', 'Your input higher than number exist QTY Items.');
                                        return false;
                                    } else if (parseInt(qtyNumber) < 0) {
                                        alert('qty cant be less than zero');
                                        return false;
                                    } else {
                                        if (parseInt(dataItemOrder[1]) !== 0) {
                                            //store if data still exist
                                            dataItemList[2] = parseInt(dataItemList[2]) + parseInt(dataItemOrder[1]);
                                            dataItemOrder[1] = 0;
                                            tSalesOrder.row(idxItemOrder).data(dataItemOrder).draw();
                                            tListItem.row(idxItemList).data(dataItemList).draw();
                                        }

                                        //update the qty data
                                        dataItemOrder[1] = parseInt(qtyNumber);
                                        dataItemList[2] = dataItemList[2] - parseInt(qtyNumber);
                                        //update the price
                                        dataItemOrder[3] = calculate(dataItemList[3], parseInt(qtyNumber));
                                        tSalesOrder.row(idxItemOrder).data(dataItemOrder).draw();
                                        tListItem.row(idxItemList).data(dataItemList).draw();
                                        alertNotification('alert-success', 'Data Stored, ', 'Item : <b>' + dataItemOrder[2] + '</b>, Qty : <b>' + dataItemOrder[1] + '</b>');
                                    }
                                    qtyNumber = "";
                                    holdItem = undefined;
                                }
                            }
                            //viewHold(holdItem, qtyNumber);
                            alertNotification('alert-info', 'Data Valid, ', 'Selected Item : <b>' + holdItem[2] + '</b>, Quantity input : <b>' + qtyNumber + '</b>');

                        }
                    }
                } else {
                    /*PLEASE SELECT ITEM FIRST*/
                    alertNotification('alert-warning', 'No Data Selected, ', 'Please select item at least one.');
                }
            }
        });
        $("#salesOrder tbody").on('click', 'tr', function (e) {
            $("#salesOrder tbody>tr").removeClass("highlight");
            $(this).addClass("highlight");

            var data = tSalesOrder.row(this).data();
            if (holdItem !== undefined) {
                if (data[1] !== holdItem[1]) {
                    qtyNumber = "";
                }
            }
            holdItem = data;
            alertNotification('alert-info', 'Item Selected ', '<b>Name : </b>' + holdItem[2] + ', <b>Qty : </b>' + holdItem[1]);
//                    viewHold(holdItem, qtyNumber);
        });
        $('input[aria-controls="listItems"]').attr('placeholder', 'Search Item').css({'display': 'inline-block', 'width': '100%'});
    });

    function viewHold(holdItem, qty) {
        $("#hold-item").html(JSON.stringify("Hold item : " + holdItem + " Qty : " + qty));
    }
    function calculate(price, qty) {
        var tempPrice = price.replace(",", "");
        var result = tempPrice * qty;
        return result.formatMoney(0, 3);
    }
    Number.prototype.formatMoney = function (n, x) {
        var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
        return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
    };
</script>
</body>
</html>
