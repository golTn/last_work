   <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>Admin_panel/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Krupali Makadiya</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
   
            <li>
          <a href="<?php echo site_url("country/view_country") ?>">
            <i class="fa fa-th"></i> <span>Country_master</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
            <li>
          <a href="<?php echo  site_url("state/view_state")?>">
            <i class="fa fa-th"></i> <span>State_master</span>
            <span class="pull-right-container">
              </span>
          </a>
        </li>
        
            <li>
                <a href="<?php echo site_url("city/view_city")?>">
                    <i class="fa fa-th"></i> <span>City_master</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
            <li>
          <a href="<?php echo site_url("hotel/index")?>">
            <i class="fa fa-th"></i> <span>Hotel Master</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
           
          <li>
          <a href="<?php echo site_url("file_upload/index")?>">
            <i class="fa fa-th"></i> <span>File Upload</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
      
   </section>
    <!-- /.sidebar -->
     