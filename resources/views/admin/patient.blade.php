@extends('layout.app')

@section('title')
	ADMIN DASHBOARD
@endsection

@section('main-sidebar')
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
			          <li class="treeview">
			            <li><a href="{{'index'}}"><i class="fa fa-dashboard"></i>DASHBOARD</a></li>
			          </li>
			          <li class="active treeview">
			              <li class="active"><a href="{{'patient'}}"><i class="fa fa-user"></i> PATIENTS</a></li>
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
@endsection
@section('main-content')
	<div class="content-wrapper">
		      <!-- Content Header (Page header) -->
		      <section class="content-header">
		        <h1>
		          PAGSANGHAN HEALTH CARE SYSTEM
		          <small>description here</small>
		        </h1>
		        <ol class="breadcrumb">
		          <li><a href="{{'index'}}"><i class="fa fa-dashboard"></i> Home</a></li>
		          <li class="active"><i class="fa fa-user">Patients</i></li>
		        </ol>
		      </section>

		      <!-- Main content -->

		        <!-- /.row (main row) -->
		      <!-- /.content -->
	</div>
@endsection