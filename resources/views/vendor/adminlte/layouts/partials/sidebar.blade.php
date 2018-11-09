<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/project/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
        <li class="active"><a href="admin.php"><i class="fa fa-dashboard"></i>DASHBOARD</a></li>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i> <span>PATIENT</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="add_patient.php"><i class="fa fa-plus"></i> Add Patient</a></li>
          <li><a href="update_patient.php"><i class="fa fa-user-plus"></i> Update Patient</a></li>
          <li><a href="delete_patient.php"><i class="fa  fa-trash-o"></i> Delete Patient</a></li>
        </ul>
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
          <li><a href="monthly.php"><i class="fa fa-calendar-check-o"></i> Monthly</a></li>
          <li><a href="quarterly.php"><i class="fa fa-calendar-check-o"></i> Quarterly</a></li>
          <li><a href="annually.php"><i class="fa fa-calendar-check-o"></i> Annually</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-calendar"></i>
          <span>EVENTS</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="add_event.php"><i class="fa fa-bookmark"></i> Add event </a></li>
          <li><a href="view_schedule.php"><i class="fa fa-book"></i> View schedule</a></li>
        </ul>
      </li>
      <li class="treeview">
          <li><a href="record.php"><i class="fa fa-book"></i> VIEW RECORDS</a></li>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i> <span>USERS</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="add_user.php"><i class="fa fa-user-secret"></i> Add User </a></li>
          <li><a href="delete_user.php"><i class="fa fa-user-secret"></i> Delete User </a></li>
          <li><a href="update_user.php"><i class="fa fa-user-secret"></i> Update User </a></li>
        </ul>
      </li>
      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-info text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
