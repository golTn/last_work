   <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>Admin_panel/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
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
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url("country/view_country") ?>"><i class="fa fa-circle-o"></i> Country_master</a></li>
            <li><a href="<?php echo  site_url("state/view_state")?>"><i class="fa fa-circle-o"></i> State_master</a></li>
            <li><a href="<?php echo site_url("city/view_city")?>"><i class="fa fa-circle-o"></i> City_master</a></li>
            <li><a href="<?php echo site_url("hotel/index")?>"><i class="fa fa-circle-o"></i> Hotel_master</a></li>
          </ul>
        </li>
        
        
    </section>
    <!-- /.sidebar -->