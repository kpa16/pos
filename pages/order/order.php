<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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
</style>
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
                            <b>Date:</b> 
                        </p>
                        <table class="table table-hover table-responsive" id="salesOrder">
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
                            <tfoot>
                                <tr>
                                    <th colspan="3" style="text-align: right">Total Discount :</th>
                                    <th style="text-align: right">0</th>
                                </tr>
                                <tr>
                                    <th colspan="3" style="text-align: right">Subtotal :</th>
                                    <th style="text-align: right">0</th>
                                </tr>
                            </tfoot>
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
                                    <button type="button" class="btn btn-success btn-lg btn-number" id="lstConsmr" data-toggle="modal" data-target="#listConsumer" title="List Consumer"><i class="fa fa-list-ol"></i></button>
                                    <button type="button" class="btn btn-success btn-lg btn-calc" id="check-out" data-target="#modalPayment"><i class="fa fa-check-square-o" title="Payment Order"></i>Payment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title table-responsive">List Items</h3>
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

<!-- Modal Payment -->
<div id="modalPayment" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="text-center">Processing Payment</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead">Amount Due 2/22/2014</p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td id="ckoutsubtotal"></td>
                                    </tr>
                                    <tr>
                                        <th>Discount:</th>
                                        <td id="ckoutdisc"></td>
                                    </tr>
                                    <tr>
                                        <th>Tax (9.3%)</th>
                                        <td id="ckouttax"></td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td id="ckoutall"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="lead">Payment Methods:</p>
                        <!--<img src="dist/img/credit/visa.png" alt="Visa">
                        <img src="dist/img/credit/mastercard.png" alt="Mastercard">
                        <img src="dist/img/credit/american-express.png" alt="American Express">
                        <img src="dist/img/credit/paypal2.png" alt="Paypal">-->

                        <div class="text-center" role="tablist" id="checkouttab">
                            <a role="persentation" data-toggle="tab" href="#cash" aria-controls="cash"><button class="btn btn-primary" type="submit">Cash</button></a>
                            <a role="persentation" data-toggle="tab" href="#debit" aria-controls="debit"><button class="btn btn-success" type="submit">Debit</button></a>
                            <a role="persentation" data-toggle="tab" href="#credit" aria-controls="credit"><button class="btn btn-info" type="submit">Credit</button></a>
                        </div>
                        <div class="well well-sm no-shadow" style="margin-top: 10px;">
                            <div class="tab-content text-center">
                                <div role="tabpanel" class="tab-pane active in" id="cash">
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">Rp</div>
                                                <input type="number" class="form-control" id="amountCash" placeholder="Amount" required/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="debit">
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div>Digit number : </div>
                                                <input type="number" class="form-control" id="numDebit" placeholder="16 Digit Number Debit Card" required/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="credit">
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div>Digit number : </div>
                                                <input type="number" class="form-control" id="numCredit" placeholder="16 Digit Number Credit Card" required/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="row no-print">
                    <div class="col-xs-12">
                        <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                        <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                        <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                    </div>
                </div>
            </div>
            <!--
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            -->
        </div>
    </div>
</div>
<!-- End Modal Payment-->

<!-- Modal Consumer-->
<div id="listConsumer" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>List Consumer <text class="pull-right">6/1/2016</text></h4>
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
                <h4 id="header-disc" class="text-center"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="#">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Discount :</label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-addon">Rp</div>
                                <input type="number" class="form-control" data-disc  placeholder="Discount" />
                                <div class="input-group-addon">%</div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary" data-confirm-disc data-dismiss="modal">Ok</button>
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
<div class="text-center" id="notification-box">
    <div class="alert" style="display:none" id="alert-box">
        <b><text id="notif-header"></text></b><text id="notif-info"></text>
    </div>
</div>

<script>
    'use strict';
    $(document).ready(function () {
        /*handling prefent default from browser backspace*/
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

        /*HANDLING PAYMENT CHANGE*/
        $('#checkouttab').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
        /*HANDLING PAYMENT CHANGE END*/
        /*FILLING FORM DATA PAYMENT*/
        $('#check-out').click(function (e) {
            e.preventDefault();
            if (tSalesOrder.rows().data().length !== 0) {
                var modalckout = $(this).attr('data-target');
                $(modalckout).modal('show');
            } else {
                alertNotification('alert-warning', 'No Data Selected, ', 'Please select item at least one.');
            }
        });

        $('#modalPayment').on('show.bs.modal', function () {
            //var disc = $(modalckout+' th:nth-child(2)'); 
            //console.log('th:nth-child(1)',$(tSalesOrder.column($("#salesOrder thead th").length).footer()));
            //console.log($('tr:eq(0) th:eq(1)',tSalesOrder.table().footer()).text());
            //console.log($('tr:eq(1) th:eq(1)',tSalesOrder.table().footer()).text());
            var subtotal = $('tr:eq(1) th:eq(1)', tSalesOrder.table().footer()).text();
            var disc = $('tr:eq(0) th:eq(1)', tSalesOrder.table().footer()).text();
            $('#ckoutsubtotal').text(subtotal);
            $('#ckoutdisc').text(disc);
            var tax = 10;
            $('#ckouttax').text('10%');
            var aftertax = parseInt($.normalNum(subtotal.replace(/Rp/g, ''))) + $.caldiv($.calsum(parseInt($.normalNum(subtotal.replace(/Rp/g, ''))), tax), 100);
            $('#ckoutall').text('Rp ' + aftertax.formatMoney(0, 3));
        });

        /*FILLING FORM DATA PAYMENT END*/

        function infoCalculator() {
            $('#howtouseCalc').modal('show');
        }
        //handling disc modal before shown
        $('#disc').click(function (e) {
            if (holdItem === undefined) {
                alertNotification('alert-warning', 'No Data Selected, ', 'Please select item at least one.');
            } else {
                $('#modalDiscount').modal('show');
            }
        });
        /*CONF CALCULATOR START*/
        //focusing calculator
        var calculator = $('#e-calculator');
        calculator.focus();
        /*CONF CALCULATOR END*/
        var holdItem = undefined;
        var qtyNumber = "";
        var tListItem = $("#listItems").DataTable({
            dom: '<<"col-xs-9" f><"col-xs-9 col-xs-offset-3"l><t>p>',
            paging: true,
            searching: true,
            autoWidth: true,
            ordering: false,
            stateSave: true
        });
        var tSalesOrder = $("#salesOrder").DataTable({
            paging: false,
            searching: false,
            ordering: false,
            information: true,
            stateSave: true,
            columnDefs: [
                {"visible": false, "targets": 0}
            ],
            footerCallback: function (row, data, start, end, display) {
                var api = this.api(), data;
                // Remove the formatting to get integer data for summation
                var intVal = function (i) {
                    return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '') * 1 :
                            typeof i === 'number' ?
                            i : 0;
                };
                var colLength = $("#salesOrder thead th").length;
                // Total over all pages
                var total = api
                        .column(colLength)
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                // Total over this page
                var pageTotal = api
                        .column(colLength, {page: 'current'})
                        .data()
                        .reduce(function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);
                var pageTotalDisc = api
                        .column(colLength, {page: 'current'})
                        .data()
                        .reduce(function (a, b) {
                            if (intVal(b) <= 0) {
                                b = intVal(b) * -1;
                            } else {
                                b = 0;
                            }
                            return intVal(a) + b;
                        }, 0);
                // Update footer Discount
                $('tr:eq(0) th:eq(1)', api.table().footer()).html('Rp ' + (pageTotalDisc * -1).formatMoney(0, 3));// + ' ( Rp' + total + ' total)');
                // Update footer total
                $('tr:eq(1) th:eq(1)', api.table().footer()).html('Rp ' + pageTotal.formatMoney(0, 3));// + ' ( Rp' + total + ' total)');
            }
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
            calculator.focus();
        });
        calculator.on('keydown', function (e) {
            if ($('div').hasClass('modal fade in') === false) {
                var char = e.keyCode || e.which;
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
                            if (qtyNumber === '') {
                                qtyNumber = holdItem[1].toString().slice(0, -1);
                            } else {
                                qtyNumber = qtyNumber.slice(0, -1);
                                if (qtyNumber === '') {
                                    qtyNumber = '0';
                                }
                            }
                        } else if (char === 46) {
                            if (dataItemOrder[0].indexOf('$$$') === -1) {
                                dataItemList[2] = parseInt(dataItemList[2]) + parseInt(dataItemOrder[1]);
                                tListItem.row(idxItemList).data(dataItemList).draw();
                                var idxDisc = tListItem.column(0).data().indexOf(dataItemOrder[0] + '$$$');
                                tSalesOrder.row(idxItemOrder).remove().draw();
                            }

                            tSalesOrder.row(idxItemOrder).remove().draw();
                            alertNotification('alert-success', 'Data Removed, ', 'Item : <b>' + dataItemOrder[2] + '</b>, Qty : <b>' + dataItemOrder[1] + '</b>');
                            holdItem = undefined;
                            qtyNumber = "";
                        } else if (char === 13) {
                            e.preventDefault();
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
                                    dataItemOrder[3] = $.calsum($.normalNum(dataItemList[3]), qtyNumber).formatMoney(0, 3);
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
            }
        });
        //handling parameter from modal discount//
        $('*[data-confirm-disc]').on('click', function () {
            var discVal = $('*[data-disc]').val();
            var idxItemOrder = tSalesOrder.column(0).data().indexOf(holdItem[0]);
            var dataOrder = tSalesOrder.row(idxItemOrder).data();
            if (parseInt(dataOrder[1]) !== 0) {
                var idxExistDisc = tSalesOrder.column(0).data().indexOf(dataOrder[0] + '$$$');
                var calResultDisc = $.calsum($.normalNum(dataOrder[3]), discVal);
                var calResult = $.calsum(-1, $.caldiv(calResultDisc, 100));
                var dataDisc = [dataOrder[0] + '$$$', '', dataOrder[2] + ' Discount ' + discVal + '%', calResult];
                if (idxExistDisc !== -1) {
                    tSalesOrder.row(idxExistDisc).data(dataDisc).draw();
                } else {
                    tSalesOrder.row.add(dataDisc).draw();
                }

            } else if (dataOrder[1] !== '') {
                alertNotification('alert-danger', 'Cannot add discount,', 'Discount value are empty');
            } else {
                alertNotification('alert-danger', 'Cannot add discount,', 'Because number qty <b>0</0>');
            }
            calculator.focus();
        });
        $("#num-calcs > button").on('click', function (e) {
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
            } else if (num === 'lstConsmr' || num === 'check-out') {
                calculator.blur();
            } else {
                if (holdItem !== undefined) {
                    var idxItemOrder = tSalesOrder.column(0).data().indexOf(holdItem[0]);
                    var dataItemOrder = tSalesOrder.row(idxItemOrder).data();
                    var idxItemList = tListItem.column(0).data().indexOf(holdItem[0]);
                    var dataItemList = tListItem.row(idxItemList).data();
                    if (num === 'del') {
                        if (dataItemOrder[0].indexOf('$$$') === -1) {
                            dataItemList[2] = parseInt(dataItemList[2]) + parseInt(dataItemOrder[1]);
                            tListItem.row(idxItemList).data(dataItemList).draw();
                            var idxDisc = tListItem.column(0).data().indexOf(dataItemOrder[0] + '$$$');
                            tSalesOrder.row(idxItemOrder).remove().draw();
                        }

                        tSalesOrder.row(idxItemOrder).remove().draw();
                        alertNotification('alert-success', 'Data Removed, ', 'Item : <b>' + dataItemOrder[2] + '</b>, Qty : <b>' + dataItemOrder[1] + '</b>');
                        holdItem = undefined;
                        qtyNumber = "";
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
                                if (qtyNumber === '') {
                                    qtyNumber = holdItem[1].toString().slice(0, -1);
                                } else {
                                    qtyNumber = qtyNumber.slice(0, -1);
                                    if (qtyNumber === '') {
                                        qtyNumber = '0';
                                    }
                                }
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
                                        dataItemOrder[3] = $.calsum($.normalNum(dataItemList[3]), qtyNumber);
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
        $('input[aria-controls="listItems"]').attr('placeholder', 'Search Item');
    });

    function viewHold(holdItem, qty) {
        $("#hold-item").html(JSON.stringify("Hold item : " + holdItem + " Qty : " + qty));
    }
</script>
