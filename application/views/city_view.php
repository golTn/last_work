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
                <!-- Content Header (Page header) -->


                <section class="content">

                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">City_master</h3>


                        </div>
                        <div class="box-body">
                            <div class="form-group">    
                                <p align="right"><a href="<?php echo site_url("city/add_city") ?>" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-plus"></span> Add Records</a></p>
                            </div>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td>city_id</td>
                                        <td>country_name</td>
                                        <td>state_name</td>
                                        <td>city_name</td>
                                        <td>Action</td>
                                    </tr>           
                                </thead>
                                <?php
                                foreach ($city_list as $city) {
                                    ?>

                                    <tbody>
                                    <td><?PHP echo $city->city_id; ?></td>
                                    <td><?PHP echo $city->country_name; ?></td>
                                    <td><?PHP echo $city->state_name; ?></td>
                                    <td><?PHP echo $city->city_name; ?></td>
                                    <td><a href="<?php echo site_url("city/del/$city->city_id"); ?>" 
                                           onclick="return confirm('you want to delete...........?')">DELETE</a>||
                                        <a href="<?php echo site_url("city/edit_data/$city->city_id"); ?>"
                                           onclick="return confirm('you want to edit...........')">EDIT</a>

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



