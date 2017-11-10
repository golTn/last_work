<!DOCTYPE html>
<html>
    <head>
        <?php
        include("header_include.php");
        ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <?php
                include("header_body.php");
                ?>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <?php
                include("header_bodyside.php");
                ?>
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
              
                <section class="content">

                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Country_master</h3>
                        </div>
                        <div class="box-body">
                            
                             <!--<button type="button" class="btn btn-xs btn-primary pull-right"  style="margin-right: 5px;">
                <label class="fa fa-plus label-btn-icon"></label>
                &nbsp;<label class="label-btn-fonts"><a href="<?php echo site_url("country/view_country") ?>"> View Records<a></label>
            </button>-->

                            
                            <div class="form-group">    
                                <p align="right"><a href="<?php echo site_url("country/view_country") ?>" class="btn btn-primary" role="button">View Records</a></p>
                                </div>
                            
                            <?php
                
		if(isset($update_data))
		{
		?>
                            
                            <form name="countryfrm" method="POST" action="<?php echo site_url("country/editp")?>" role="form" >
                                <input type="hidden" name="country_id" value="<?php echo $update_data['country_id']?>" />
		
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Country_name</label>
                                    <input type="text" class="form-control"name="country_name"  value="<?php echo $update_data['country_name']?>">
                                </div>

                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                                </div>
                            </form>
                            	<?php
		}
		else
		{
		?>
                             <form name="countryfrm" method="POST" action="<?php echo site_url("country/addp")?>" role="form" >
                                	
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Country_name</label>
                                    <input type="text" class="form-control"name="country_name"  placeholder="Enter Country Name....">
                                </div>

                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                                </div>
                            </form>
	<?php
		}
		?>
                        </div>
                        <!-- /.box-body -->
                     
                    </div>
                    <!-- /.box -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <?php
                include("footer_body.php");
                ?>
            </footer>

            <!-- Control Sidebar -->

            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <?php
        include("footer_include.php");
        ?>
    </body>
</html>
