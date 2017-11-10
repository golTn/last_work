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
                            <h3 class="box-title">Hotel_master</h3>

                           
                        </div>
                        <div class="box-body">
                            <div class="form-group">    
                                <p align="right"><a href="<?php echo site_url("hotel/add_hotel") ?>" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-plus"></span>Add Records</a></p>
                            </div>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    
                        <td>id</td>
                        <td>name</td>
                        <td>email</td>
                        <td>mobile</td>
                        <td>star</td>
                        <td>image</td>
                        <td>country</td>
                        <td>state</td>
                        <td>city</td>
                        <td>Action</td>
                                    </tr>           
                                </thead>
                              <?php
foreach ($hotel_list as $hotel) {
    ?>

                                    <tbody>
                                      <tr>
                            <td><?php echo $hotel->hotel_id ?></td>
                            <td><?php echo $hotel->name ?></td>
                            <td><?php echo $hotel->email ?></td>
                            <td><?php echo $hotel->mobile ?></td>
                            <td><?php echo $hotel->star ?></td>

                            <td><img src="<?php echo base_url() ?>upload/<?php echo $hotel->image ?>" height="80" width="80"/></td>
                            <td><?php echo $hotel->country_id ?></td>
                            <td><?php echo $hotel->state_id ?></td>
                            <td><?php echo $hotel->city_id ?></td>


                            <td>
                                <a href="<?php echo site_url("hotel/del/$hotel->hotel_id") ?>">DELETE</a>
                                <a href="<?php echo site_url("hotel/edit_data/$hotel->hotel_id") ?>">EDIT</a></td>
                        </tr>
                                    </tbody>
                                    <?php
                                }
                                ?>
                            </table>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            Footer
                        </div>
                        <!-- /.box-footer-->
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




