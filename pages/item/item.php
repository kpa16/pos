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
            tbody > tr{
                cursor:pointer;
            }
        </style>
    </head>
    <body>
        <div id="content-information">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Items Management
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="box box-primary box-solid  collapsed-box">
                            <div class="btn box-header text-center" data-widget="collapse">
                                <i class="fa fa-plus pull-right"></i>
                                <h3 class="box-title">New Item</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body block-center">
                                <form class="form-horizontal" action="#" method="POST" form-target="form-item">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control"  placeholder="Item Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Stock</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control"  placeholder="Stock" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Warning Stock</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control"  placeholder="Warning Stock" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Price</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control"  placeholder="Price" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <center>
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </center>
                                    </div>
                                </form>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>  
                    <!-- Your Page Content Here -->

                    <!-- Item table-->
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header text-center">
                                <h3 class="box-title"><b>Your List Items</b></h3>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <button class="btn btn-danger pull-left" id="delete-item-data">Delete</button>
                                <table class="table table-hover" id="itemListData">
                                    <thead>
                                        <tr>
                                            <th><input name="select_all" value="1" type="checkbox" onclick="selectAll()"></th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Stock</th>
                                            <th>Warning Stock</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div><!-- /.box-body -->
                        </div>
                    </div>
                    <!-- Item table end-->

                </div>
            </section><!-- /.content -->
        </div>

        <!-- Modal edit-->
        <div id="modalEdit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>Item Name</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="#" method="POST" id="form-item">

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal edit-->


        <script>
            'use strict';
            $(function () {
                for (var i = 1; i <= 30; i++) {
                    $("#itemListData tbody").append('<tr><td></td><td>' + i + '</td><td>Gelas</td><td>30</td><td>5</td><td>25,000</td></tr>');
                }
            });
            $(document).ready(function () {
                $("input[type='checkbox'][name='select_all']").prop('checked', false);
                var modalEdit = $("#modalEdit");
                var tListItemData = $("#itemListData").DataTable({
                    dom: 'Bfrtip',
                    columnDefs: [{
                            targets: 0,
                            searchable: false,
                            orderable: false,
                            className: 'select-checkbox',
                            render: function (data, type, full, meta) {
                                return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
                            }
                        }],
                    order: [[1, 'asc']]
                });
                var apiListItemData = $("#itemListData").dataTable();
                //Data Update
                tListItemData.on('click', 'td', function (e) {
                    var rowIdx = tListItemData.cell(this).index('visible').row;
                    var colIdx = tListItemData.cell(this).index('visible').column;
                    if (colIdx !== 0) {
                        //get data
                        var dataItem = tListItemData.row(rowIdx).data();
                        var formHTML = $('form[form-target="form-item"]').html();
                        var indexDataItem = 2;
                        var formUpdate = $('#form-item');
                        formUpdate.html(formHTML);
                        //change the content of form
                        formUpdate.find('input').each(function () {
                            $(this).val(dataItem[indexDataItem].replace(",", ""));
                            indexDataItem++;
                        });
                        formUpdate.find('button').text('Update');
                        modalEdit.modal('show');
                    }
                });

                //DELETE THE DATA
                $('#delete-item-data').on('click', function () {
                    if ($('input:checked', tListItemData.rows().nodes()).length !== 0) {
                        var dialogConf = confirm('are you sure want to delete ' + $('input:checked', tListItemData.rows().nodes()).length + ' data?');
                        $('input:checked', tListItemData.rows().nodes()).each(function () {
                            var rowIdx = apiListItemData.fnGetPosition($(this).closest('tr')[0]);
                            tListItemData.row(rowIdx).remove().draw();
                        });
                    } else {
                        alert('no data have been selected');
                        return false;
                    }
                });
            });
            function selectAll() {
                if ($("input:checked[name='select_all']").prop('checked')) {
                    $("input[type='checkbox']").prop('checked', true);
                } else {
                    $("input[type='checkbox']").prop('checked', false);
                }
            }
        </script>
    </body>
</html>
