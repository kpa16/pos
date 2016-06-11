<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Point Of Sales</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="font-awesome-4.6.1/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="ionic-v2.0.1/css/ionicons.min.css">
        <!-- DataTable -->
        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/cust.css">
        <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">
                <!-- Logo -->
                <a href="index2.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">POS</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Point Of Sales</span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications Menu -->
                            <li class="dropdown notifications-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- Inner Menu: contains the notifications -->
                                        <ul class="menu">
                                            <li><!-- start notification -->
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li><!-- end notification -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">Administrator</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="pages/user/profile.php" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Administrator</p>
                            <!-- Status -->
                            <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
                        </div>
                    </div>

                    <!-- search form (Optional) -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu" id="menu-page">
                        <li class="header">MODULE</li>
                        <!-- Optionally, you can add icons to the links -->
                        <li><a href="pages/dashboardldr/dashboardTemplate.php"><i class="fa fa-newspaper-o"></i> <span>Stock Dashboard</span></a></li>
                        <li><a href="#"><i class="fa fa-user"></i> <span>User Registered</span><i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#">User Registration</a></li>
                                <li><a href="#">Registration Verification</a></li>
                                <li><a href="#">Forgot & Reset Password</a></li>
                                <li><a href="#">User Profile Display & Edit</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-gear"></i> <span>Application</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#">Application Configuration</a></li>
                                <li><a href="#">Module/Feature Activation</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-code-fork"></i> <span>Branch Management</span></a></li>
                        <li><a href="#"><i class="fa fa-eye"></i> <span>Operator Management</span></a></li>
                        <li><a href="pages/item/item.php"><i class="fa fa-cube"></i> <span>Item Management</span></a></li>
                        <li><a href="#"><i class="fa fa-cubes"></i> <span>Stock Management</span></a>
                            <ul class="treeview-menu">
                                <li><a href="#">Purchase Item</a></li>
                                <li><a href="#">Transfer In Item</a></li>
                                <li><a href="#">Transfer Out Item</a></li>
                                <li><a href="#">Adjust Item</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-user-plus"></i> <span>Customer Management</span></a></li>
                        <li><a href="#"><i class="fa fa-truck"></i> <span>Supplier Management</span></a></li>
                        <li><a href="pages/order/order.php"><i class="fa fa-edit"></i> <span>POS</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-newspaper-o"></i> <span>Stock Report</span><i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#">Branch Stock Report</a></li>
                                <li><a href="#">Overall Stock Report</a></li>
                                <li><a href="#">Branch Stock Movement Report</a></li>
                                <li><a href="#">Overall Stock Movement Report</a></li>
                            </ul>
                        </li>
                        <li class="treeview"><a href="#"><i class="fa fa-newspaper-o"></i> <span>Sales Dashboard</span><i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="pages/dashboardldr/dashboardTemplate.php">Monthly Branch Sales Dashboard</a></li>
                                <li><a href="pages/dashboardldr/dashboardTemplate.php">Weekly Branch Sales Dashboard</a></li>
                                <li><a href="pages/dashboardldr/dashboardTemplate.php">Daily Branch Sales Dashboard</a></li>
                                <li><a href="pages/dashboardldr/dashboardTemplate.php">Monthly Branch Profit Dashboard</a></li>
                                <li><a href="#">Weekly Branch Profit Dashboard</a></li>
                                <li><a href="#">Daily Branch Profit Dashboard</a></li>
                                <li><a href="#">Overall Sales Trend</a></li>
                                <li><a href="#">Overall Profit Trend</a></li>
                                <li><a href="#">Branch Sales Trend</a></li>
                                <li><a href="#">Branch Profit Trend</a></li>
                            </ul>
                        </li>
                        <li><a href="pages/dashboardldr/dashboardTemplate.php"><i class="fa fa-newspaper-o"></i> <span>Stock Dashboard</span></a></li>
                    </ul><!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" id="page-content-menu">
                <!-- INFORMATION OF THE PAGE MENU-->
            </div><!-- /.content-wrapper -->
            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark" hidden>
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane active" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                        </ul><!-- /.control-sidebar-menu -->

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul><!-- /.control-sidebar-menu -->

                    </div><!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Some information about this general settings option
                                </p>
                            </div><!-- /.form-group -->
                        </form>
                    </div><!-- /.tab-pane -->
                </div>
            </aside><!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <!-- REQUIRED JS SCRIPTS -->
        <!-- jQuery 2.1.4 -->
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- chart 
        <script src="plugins/chartjs/Chart.min.js"></script>
        -->
        <script src="plugins/chartjs/Chart.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaLbcKL-Bx5R39OWnPFdp_w-O5djZhzBI&libraries=places" async defer></script>
        <script>
            var tarContent = $("#page-content-menu");
            $(document).ready(function () {
                tarContent.load('pages/order/order.php');
                $('a').on('click', function (e) {
                    e.preventDefault();
                    var link = $(this).attr('href');
                    if (link !== '#') {
                        tarContent.load(link);
                    }
                });
                /*
                 var statePg = window.location.href.split('#');
                 if (statePg[1] !== '') {
                 $("#menu-page li").removeClass("active");
                 $('a[href="#' + statePg[1] + '"]').parent("li").addClass("active");
                 tarContent.load(statePg[1] + '.php');
                 } else {
                 //tarContent.load('pages/dashboard/dashboard.php');
                 e.preventDefault();
                 }
                 
                 $("#menu-page>li>a").on("click", function (e) {
                 if ($(this).parents("#menu-page").length === 1) {
                 var link = $(this).attr('href').replace('#', '');
                 var ckState = $(this).attr('href').split("#");
                 if (link !== '#' && ckState[1] !== undefined) {
                 tarContent.empty();
                 $("#menu-page li").removeClass("active");
                 $(this).parent("li").addClass("active");
                 tarContent.load(link + '.php');
                 if ($("body").hasClass("sidebar-open")) {
                 $("body").removeClass("sidebar-open").removeClass("sidebar-collapse").trigger("collapsed.pushMenu");
                 }
                 } else {
                 e.preventDefault();
                 }
                 }
                 
                 //$("body").hasClass("sidebar-collapse"); ? $("body").removeClass("sidebar-collapse").trigger("expanded.pushMenu"); : $("body").addClass("sidebar-collapse").trigger("collapsed.pushMenu"); : $("body").hasClass("sidebar-open"); ? $("body").removeClass("sidebar-open").removeClass("sidebar-collapse").trigger("collapsed.pushMenu"); : $("body").addClass("sidebar-open").trigger("expanded.pushMenu");
                 */
            }).ajaxStart(function () {
                tarContent.addClass('loader');
            }).ajaxSuccess(function (data) {
                tarContent.removeClass('loader');
            }).ajaxError(function (event, jqhr, gatau) {
                tarContent.php('<div class="row text-center">' + jqhr.responseText + '</div>');
            });
            jQuery.calsum = function calsum(price, qty) {
                var result = price * qty;
                return result;
            };
            jQuery.caldiv = function caldiv(price, qty) {
                var result = price / qty;
                return result;
            };
            jQuery.caldec = function caldec(price, qty) {
                var result = price - qty;
                return result;
            };
            jQuery.calinc = function calinc(price, qty) {
                var result = price + qty;
                return result;
            };
            jQuery.normalNum = function normalNum(num) {
                return num.replace(/,/g, '');
            };
            Number.prototype.formatMoney = function (n, x) {
                var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
                return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
            };
        </script>
    </body>
</html>
