	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('title')</title>
		<!-- Tell the browser to be responsive to screen width -->
	    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	    <!-- Bootstrap 3.3.7 -->
	    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	    <!-- Font Awesome -->
	    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
	    <!-- Ionicons -->
	    <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
	    <!-- Theme style -->
	    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
	    <!-- AdminLTE Skins. Choose a skin from the css/skins
	         folder instead of downloading all of them to reduce the load. -->
	    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
	    <!-- Morris chart -->
	    <link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css') }}">
	    <!-- jvectormap -->
	    <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
	    <!-- Date Picker -->
	    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
	    <!-- Daterange picker -->
	    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
	    <!-- bootstrap wysihtml5 - text editor -->
	    <link rel="stylesheet" href="{{ asset('<plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

	    <!-- Google Font -->
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
	<body class="hold-transition skin-purple sidebar-mini">
	<div class="wrapper">
		<!--THIS IS THE MAIN HEADER-->
			@section('main-header')
					<header class="main-header">
				      <!-- Logo -->
				      <a href="#" class="logo">
				        <!-- logo for regular state and mobile devices -->
				        <span class="logo-lg"><b>RHU</b></span>
				      </a>
				      <!-- Header Navbar: style can be found in header.less -->
				      <nav class="navbar navbar-static-top">
				        <!-- Sidebar toggle button-->
				        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				          <span class="sr-only">Toggle navigation</span>
				        </a>

				        <div class="navbar-custom-menu">
				          <ul class="nav navbar-nav">
				            <!-- Notifications: style can be found in dropdown.less -->
				            <li class="dropdown notifications-menu">
				              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				                <i class="fa fa-bell-o"></i>
				                <span class="label label-warning">10</span>
				              </a>
				              <ul class="dropdown-menu">
				                <li class="header">You have 10 notifications</li>
				                <li>
				                  <!-- inner menu: contains the actual data -->
				                  <ul class="menu">
				                    <li>
				                      <a href="#">
				                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
				                      </a>
				                    </li>
				                    <li>
				                      <a href="#">
				                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
				                        page and may cause design problems
				                      </a>
				                    </li>
				                    <li>
				                      <a href="#">
				                        <i class="fa fa-users text-red"></i> 5 new members joined
				                      </a>
				                    </li>
				                    <li>
				                      <a href="#">
				                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
				                      </a>
				                    </li>
				                    <li>
				                      <a href="#">
				                        <i class="fa fa-user text-red"></i> You changed your username
				                      </a>
				                    </li>
				                  </ul>
				                </li>
				                <li class="footer"><a href="#">View all</a></li>
				              </ul>
				            </li>
				            <!-- Tasks: style can be found in dropdown.less -->
				            <li class="dropdown tasks-menu">
				              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				                <i class="fa fa-flag-o"></i>
				                <span class="label label-danger">9</span>
				              </a>
				              <ul class="dropdown-menu">
				                <li class="header">You have 9 tasks</li>
				                <li>
				                  <!-- inner menu: contains the actual data -->
				                  <ul class="menu">
				                    <li><!-- Task item -->
				                      <a href="#">
				                        <h3>
				                          Design some buttons
				                          <small class="pull-right">20%</small>
				                        </h3>
				                        <div class="progress xs">
				                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
				                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
				                            <span class="sr-only">20% Complete</span>
				                          </div>
				                        </div>
				                      </a>
				                    </li>
				                    <!-- end task item -->
				                    <li><!-- Task item -->
				                      <a href="#">
				                        <h3>
				                          Create a nice theme
				                          <small class="pull-right">40%</small>
				                        </h3>
				                        <div class="progress xs">
				                          <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
				                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
				                            <span class="sr-only">40% Complete</span>
				                          </div>
				                        </div>
				                      </a>
				                    </li>
				                    <!-- end task item -->
				                    <li><!-- Task item -->
				                      <a href="#">
				                        <h3>
				                          Some task I need to do
				                          <small class="pull-right">60%</small>
				                        </h3>
				                        <div class="progress xs">
				                          <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
				                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
				                            <span class="sr-only">60% Complete</span>
				                          </div>
				                        </div>
				                      </a>
				                    </li>
				                    <!-- end task item -->
				                    <li><!-- Task item -->
				                      <a href="#">
				                        <h3>
				                          Make beautiful transitions
				                          <small class="pull-right">80%</small>
				                        </h3>
				                        <div class="progress xs">
				                          <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
				                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
				                            <span class="sr-only">80% Complete</span>
				                          </div>
				                        </div>
				                      </a>
				                    </li>
				                    <!-- end task item -->
				                  </ul>
				                </li>
				                <li class="footer">
				                  <a href="#">View all tasks</a>
				                </li>
				              </ul>
				            </li>
				            <!-- User Account: style can be found in dropdown.less -->
				            <li class="dropdown user user-menu">
				              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				                <img src="{{ ('dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
				                <span class="hidden-xs">Admin</span>
				              </a>
				              <ul class="dropdown-menu">
				                <!-- User image -->
				                <li class="user-header">
				                  <img src="/project/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
				                  <p>
				                    ADMIN
				                    <small>Pagsanghan RHU</small>
				                  </p>
				                </li>
				                <!-- Menu Body -->
				                <!-- Menu Footer-->
				                <li class="user-footer">
				                  <div class="pull-left">
				                    <a href="#" class="btn btn-default btn-flat">Profile</a>
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
			@show
		<!--/THIS IS THE END OF MAIN HEADER-->

		<!--THIS IS THE MAIN SIDEBAR-->
			@section("main-sidebar")
				<aside class="main-sidebar">
			    <!-- sidebar: style can be found in sidebar.less -->
			      <section class="sidebar">
			        <!-- Sidebar user panel -->
			        <div class="user-panel">
			          <div class="pull-left image">
			            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
			          </div>
			          <div class="pull-left info">
			            <p>Admin</p>
			            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			          </div>
			        </div>
			        <!-- search form -->
			        <form action="#" method="get" class="sidebar-form">
			          <div class="input-group">
			            <input type="text" name="q" class="form-control" placeholder="Search...">
			            <span class="input-group-btn">
			                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
			                  </button>
			                </span>
			          </div>
			        </form>
			        <!-- /.search form -->
			        <!-- sidebar menu: : style can be found in sidebar.less -->
			        <ul class="sidebar-menu" data-widget="tree">
			          <li class="header">MAIN NAVIGATION</li>
			          <li class="active treeview">
			            <li class="active"><a href="{{'index'}}"><i class="fa fa-dashboard"></i>DASHBOARD</a></li>
			          </li>
			          <li class="treeview">
			              <li><a href="{{'patient'}}"><i class="fa fa-user"></i> PATIENTS</a></li>
			          </li>
			          <li class="treeview">
			            <a href="#">
			              <i class="fa fa-angle-left pull-right"></i>
			              <i class="fa fa-file-excel-o"></i><span>REPORTS</span>
			              <span class="pull-right-container">
			                <span class="label label-primary pull-right"></span>
			              </span>
			            </a>
			            <ul class="treeview-menu">
			              <li><a href="{{'monthly'}}"><i class="fa fa-calendar-check-o"></i> Monthly</a></li>
			              <li><a href="{{'quarterly'}}"><i class="fa fa-calendar-check-o"></i> Quarterly</a></li>
			              <li><a href="{{'annually'}}"><i class="fa fa-calendar-check-o"></i> Annually</a></li>
			            </ul>
			          </li>
			          <li class="treeview">
			              <li><a href="{{'event'}}"><i class="fa fa-calendar"></i> EVENTS</a></li>
			          </li>
			          <li class="treeview">
			              <li><a href="{{'record'}}"><i class="fa fa-book"></i> VIEW RECORDS</a></li>
			          </li>
			         <li class="treeview">
			              <li><a href="{{'user'}}"><i class="fa fa-users"></i> USERS</a></li>
			          </li>
			          <li class="header">LABELS</li>
			          <li><a href="#"><i class="fa fa-info text-red"></i> <span>Important</span></a></li>
			          <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
			          <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
			        </ul>
			      </section>
			    <!-- /.sidebar -->
			    </aside>
			@show
		<!--/THIS IS THE END OF MAIN SIDEBAR-->

		<!--THIS IS THE MAIN CONTENT-->
			@section('main-content')
			<div class="content-wrapper">
		      <!-- Content Header (Page header) -->
		      <section class="content-header">
		        <h1>
		          PAGSANGHAN HEALTH CARE SYSTEM
		          <small>description here</small>
		        </h1>
		        <ol class="breadcrumb">
		          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		          <li class="active">Dashboard</li>
		        </ol>
		      </section>

		      <!-- Main content -->
		      <section class="content">
		        <!-- Small boxes (Stat box) -->
		        <div class="row">
		          <div class="col-lg-3 col-xs-6">
		            <!-- small box -->
		            <div class="small-box bg-aqua">
		              <div class="inner">
		                <h3>130</h3>

		                <p>New Patient</p>
		              </div>
		              <div class="icon">
		                <i class="ion ion-ios-people"></i>
		              </div>
		              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		            </div>
		          </div>
		          <!-- ./col -->
		          <div class="col-lg-3 col-xs-6">
		            <!-- small box -->
		            <div class="small-box bg-green">
		              <div class="inner">
		                <h3>53<sup style="font-size: 20px"></sup></h3>

		                <p>New Reports</p>
		              </div>
		              <div class="icon">
		                <i class="ion ion-stats-bars"></i>
		              </div>
		              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		            </div>
		          </div>
		          <!-- ./col -->
		          <div class="col-lg-3 col-xs-6">
		            <!-- small box -->
		            <div class="small-box bg-yellow">
		              <div class="inner">
		                <h3>13</h3>

		                <p>Brgy</p>
		              </div>
		              <div class="icon">
		                <i class="ion ion-pie-graph"></i>
		              </div>
		              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		            </div>
		          </div>
		          <!-- ./col -->
		          <div class="col-lg-3 col-xs-6">
		            <!-- small box -->
		            <div class="small-box bg-red">
		              <div class="inner">
		                <h3>65</h3>

		                <p>Visitors</p>
		              </div>
		              <div class="icon">
		                <i class="ion ion-person-add"></i>
		              </div>
		              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		            </div>
		          </div>
		          <!-- ./col -->
		        </div>
		        <!-- /.row -->
		        <!-- Main row -->
		        <div class="row">
		          <!-- Left col -->
		          <section class="col-lg-7 connectedSortable">
		            <!-- TO DO List -->
		            <div class="box box-primary">
		              <div class="box-header">
		                <i class="ion ion-clipboard"></i>

		                <h3 class="box-title">To Do List</h3>
		              </div>
		              <!-- /.box-header -->
		              <div class="box-body">
		                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
		                <ul class="todo-list">
		                  <li>
		                    <!-- drag handle -->
		                    <span class="handle">
		                          <i class="fa fa-ellipsis-v"></i>
		                          <i class="fa fa-ellipsis-v"></i>
		                        </span>
		                    <!-- checkbox -->
		                    <input type="checkbox" value="">
		                    <!-- todo text -->
		                    <span class="text">Design a nice theme</span>
		                    <!-- Emphasis label -->
		                    <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
		                    <!-- General tools such as edit or delete-->
		                    <div class="tools">
		                      <i class="fa fa-edit"></i>
		                      <i class="fa fa-trash-o"></i>
		                    </div>
		                  </li>
		                  <li>
		                        <span class="handle">
		                          <i class="fa fa-ellipsis-v"></i>
		                          <i class="fa fa-ellipsis-v"></i>
		                        </span>
		                    <input type="checkbox" value="">
		                    <span class="text">Make the theme responsive</span>
		                    <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
		                    <div class="tools">
		                      <i class="fa fa-edit"></i>
		                      <i class="fa fa-trash-o"></i>
		                    </div>
		                  </li>
		                  <li>
		                        <span class="handle">
		                          <i class="fa fa-ellipsis-v"></i>
		                          <i class="fa fa-ellipsis-v"></i>
		                        </span>
		                    <input type="checkbox" value="">
		                    <span class="text">Let theme shine like a star</span>
		                    <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
		                    <div class="tools">
		                      <i class="fa fa-edit"></i>
		                      <i class="fa fa-trash-o"></i>
		                    </div>
		                  </li>
		                  <li>
		                        <span class="handle">
		                          <i class="fa fa-ellipsis-v"></i>
		                          <i class="fa fa-ellipsis-v"></i>
		                        </span>
		                    <input type="checkbox" value="">
		                    <span class="text">Let theme shine like a star</span>
		                    <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
		                    <div class="tools">
		                      <i class="fa fa-edit"></i>
		                      <i class="fa fa-trash-o"></i>
		                    </div>
		                  </li>
		                </ul>
		              </div>
		              <!-- /.box-body -->
		              <div class="box-footer clearfix no-border">
		                <div class="box-tools pull-left">
		                  <ul class="pagination pagination-sm inline">
		                    <li><a href="#">&laquo;</a></li>
		                    <li><a href="#">1</a></li>
		                    <li><a href="#">2</a></li>
		                    <li><a href="#">3</a></li>
		                    <li><a href="#">&raquo;</a></li>
		                  </ul>
		                </div>
		                <button type="button" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Add item</button>
		              </div>
		            </div>
		            <!-- /.box -->
		            <!-- Logs -->
		            <div class="box box-danger">
		              <div class="box-header">
		                <i class="ion ion-laptop"></i>
		                <h3 class="box-title">Latest Activities</h3>
		              </div>
		              <!-- /.box-header -->
		              <div class="box-body">
		                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
		                <table class="table">
		                  <thead class="thead-light">
		                    <tr>
		                      <th scope="col">ID</th>
		                      <th scope="col">BRGY</th>
		                      <th scope="col">TIME</th>
		                      <th scope="col">DATE</th>
		                    </tr>
		                  </thead>
		                  <tbody>
		                    <tr>
		                      <th scope="row">1</th>
		                      <td>Mark</td>
		                      <td>Otto</td>
		                      <td>@mdo</td>
		                    </tr>
		                    <tr>
		                      <th scope="row">2</th>
		                      <td>Jacob</td>
		                      <td>Thornton</td>
		                      <td>@fat</td>
		                    </tr>
		                    <tr>
		                      <th scope="row">3</th>
		                      <td>Larry</td>
		                      <td>the Bird</td>
		                      <td>@twitter</td>
		                    </tr>
		                  </tbody>
		                </table>
		              </div>
		              <!-- /.box-body -->
		              <div class="box-footer clearfix no-border">
		                <div class="box-tools pull-left">
		                  <ul class="pagination pagination-sm inline">
		                    <li><a href="#">&laquo;</a></li>
		                    <li><a href="#">1</a></li>
		                    <li><a href="#">2</a></li>
		                    <li><a href="#">3</a></li>
		                    <li><a href="#">&raquo;</a></li>
		                  </ul>
		                </div>
		              </div>
		            </div>
		            <!-- /.box -->
		          </section>
		          <!-- /.Left col -->
		          <!-- right col (We are only adding the ID to make the widgets sortable)-->
		          <section class="col-lg-5 connectedSortable">
		          <!--slider carousel -->
		          <div class="box-body">
		                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                          <ol class="carousel-indicators">
		                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                          </ol>
		                          <div class="carousel-inner">
		                            <div class="item active">
		                              <img src="http://placehold.it/900x400/39CCCC/ffffff&amp;text=I+Love+PAGSANGHAN" alt="First slide">

		                              <div class="carousel-caption">
		                              </div>
		                            </div>
		                            <div class="item">
		                              <img src="http://placehold.it/900x400/3c8dbc/ffffff&amp;text=I+Love+RHU" alt="Second slide">

		                              <div class="carousel-caption">
		                              </div>
		                            </div>
		                            <div class="item">
		                              <img src="http://placehold.it/900x400/f39c12/ffffff&amp;text=I+Love+HEALTH" alt="Third slide">

		                              <div class="carousel-caption">
		                              </div>
		                            </div>
		                          </div>
		                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                            <span class="fa fa-angle-left"></span>
		                          </a>
		                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                            <span class="fa fa-angle-right"></span>
		                          </a>
		                        </div>
		                      </div>
		                  <!-- /.box -->
		            <!-- Calendar -->
		            <div class="box box-solid bg-green-gradient">
		              <div class="box-header">
		                <i class="fa fa-calendar"></i>

		                <h3 class="box-title">Calendar</h3>
		                <!-- tools box -->
		                <div class="pull-right box-tools">
		                  <!-- button with a dropdown -->
		                  <div class="btn-group">
		                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
		                      <i class="fa fa-bars"></i></button>
		                    <ul class="dropdown-menu pull-right" role="menu">
		                      <li class="divider"></li>
		                      <li><a href="#">View calendar</a></li>
		                    </ul>
		                  </div>
		                  <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
		                  </button>
		                  <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
		                  </button>
		                </div>
		                <!-- /. tools -->
		              </div>
		              <!-- /.box-header -->
		              <div class="box-body no-padding">
		                <!--The calendar -->
		                <div id="calendar" style="width: 100%"></div>
		              </div>
		              <!-- /.box-body -->
		              <div class="box-footer text-black">
		                <div class="row">
		                  <div class="col-sm-6">
		                    <!-- Progress bars -->
		                    <div class="clearfix">
		                      <span class="pull-left">Task #1</span>
		                      <small class="pull-right">90%</small>
		                    </div>
		                    <div class="progress xs">
		                      <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
		                    </div>

		                    <div class="clearfix">
		                      <span class="pull-left">Task #2</span>
		                      <small class="pull-right">70%</small>
		                    </div>
		                    <div class="progress xs">
		                      <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
		                    </div>
		                  </div>
		                  <!-- /.col -->
		                  <div class="col-sm-6">
		                    <div class="clearfix">
		                      <span class="pull-left">Task #3</span>
		                      <small class="pull-right">60%</small>
		                    </div>
		                    <div class="progress xs">
		                      <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
		                    </div>

		                    <div class="clearfix">
		                      <span class="pull-left">Task #4</span>
		                      <small class="pull-right">40%</small>
		                    </div>
		                    <div class="progress xs">
		                      <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
		                    </div>
		                  </div>
		                  <!-- /.col -->
		                </div>
		                <!-- /.row -->
		              </div>
		            </div>
		            <!-- /.box -->
		          </section>
		          <!-- right col -->
		        </div>
		        <!-- /.row (main row) -->

		      </section>
		      <!-- /.content -->
		    </div>
		    @show
		<!--THIS IS THE END MAIN CONTENT-->

		<!--THIS IS THE MAIN FOOTER-->
			@section('main-footer')
				<footer class="main-footer">
				    <div class="pull-right hidden-xs">
				      <b>Version</b> 1.0
				    </div>
				    <strong>Copyright &copy; 2018-2019 <a href="https://adminlte.io">Pagsanghan Samar</a>.</strong> All rights
				    reserved.
			  	</footer>
			@show
		<!--THIS IS THE END MAIN FOOTER-->

		<!--THIS IS THE CONTROL SIDEBAR-->
			@section('control-sidebar')
			<aside class="control-sidebar control-sidebar-dark">
	    <!-- Create the tabs -->
	    <!-- Tab panes -->
			    <div class="tab-content">
			      <!-- Home tab content -->
			      <div class="tab-pane" id="control-sidebar-home-tab">
			      </div>
			      <!-- /.tab-pane -->
			      <!-- Stats tab content -->
			      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
			      <!-- /.tab-pane -->
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
			          </div>
			          <!-- /.form-group -->

			          <div class="form-group">
			            <label class="control-sidebar-subheading">
			              Allow mail redirect
			              <input type="checkbox" class="pull-right" checked>
			            </label>

			            <p>
			              Other sets of options are available
			            </p>
			          </div>
			          <!-- /.form-group -->

			          <div class="form-group">
			            <label class="control-sidebar-subheading">
			              Expose author name in posts
			              <input type="checkbox" class="pull-right" checked>
			            </label>

			            <p>
			              Allow the user to show his name in blog posts
			            </p>
			          </div>
			          <!-- /.form-group -->

			          <h3 class="control-sidebar-heading">Chat Settings</h3>

			          <div class="form-group">
			            <label class="control-sidebar-subheading">
			              Show me as online
			              <input type="checkbox" class="pull-right" checked>
			            </label>
			          </div>
			          <!-- /.form-group -->

			          <div class="form-group">
			            <label class="control-sidebar-subheading">
			              Turn off notifications
			              <input type="checkbox" class="pull-right">
			            </label>
			          </div>
			          <!-- /.form-group -->

			          <div class="form-group">
			            <label class="control-sidebar-subheading">
			              Delete chat history
			              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
			            </label>
			          </div>
			          <!-- /.form-group -->
			        </form>
			      </div>
	      <!-- /.tab-pane -->
	    		</div>
	  		</aside>
			@show
		<!--THIS IS THE END OF CONTROL SIDEBAR-->
		<div class="control-sidebar-bg"></div>
	</div>
	

	<!-- jQuery 3 -->
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- DataTables -->
  <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- Morris.js charts -->
  <script src="{{ asset('bower_components/raphael/raphael.min.js') }}"></script>
  <script src="{{ asset('bower_components/morris.js/morris.min.js') }}"></script>
  <!-- Sparkline -->
  <script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
  <!-- jvectormap -->
  <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <!-- datepicker -->
  <script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <!-- Slimscroll -->
  <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('dist/js/demo.js') }}"></script>


  <!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
 </script>
</body>
</html>