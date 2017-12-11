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
                            <h3 class="box-title"><label>Country_master</label></h3>

                        </div>
                        <div class="box-body">
                            <div class="form-group">    
                                <p align="right"><a href="<?php echo site_url("country/add_country") ?>" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-plus"></span><label>Add records</label></a> 
                                    &nbsp; <a href="<?php echo site_url("country/import") ?>" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-import"></span><label>Imports</label></a></p>
                            </div>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td><label>Country_id</label></td>
                                        <td><label>Country_name</label></td>
                                        <td><label>Status</label></td>
                                        <td><label>Action<label></td>
                                    </tr>           
                                </thead>
                                <?php
                                foreach ($country_list as $country) {
                                    ?>
                                    <tbody>
                                    <td><?PHP echo $country->country_id; ?></td>
                                    <td><?PHP echo $country->country_name; ?></td>
                                    <td><?php
                                           if ($country->status=='0' ) {
                                               ?>

                                        <a href="<?php echo site_url("country/update_status_active/$country->country_id") ?>" class="btn btn-success" role="button"><label>Active</label></a>
                                            <?php
                                        } else
                                            {
                                            ?>
                                        <a href="<?php echo site_url("country/update_status_deactive/$country->country_id") ?>" class="btn btn-danger" role="button"><label>Deactive</label></a>
                                            <?php
                                        }
                                        ?></td>
                                    <td><a href="<?php echo site_url("country/edit_data/$country->country_id"); ?>"
                                           onclick="return confirm('you want to edit...........')" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="<?php echo site_url("country/del/$country->country_id"); ?>" 
                                           onclick="return confirm('you want to delete...........?')" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-remove"></span></a>

                                    </td>

                                    </tbody>
                                    <?php
                                }
                                ?>
                            </table>

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
