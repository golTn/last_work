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
                                <p align="right"><a href="<?php echo site_url("file_upload/add_file") ?>" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-plus"></span><label>Add records</label></a> 
                                </p>    
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td><label>File_id</label></td>
                                        <td><label>Name</label></td>
                                        <td><label>File_name</label></td>
                                        <td><label>Action<label></td>
                                    </tr>           
                                </thead>
                                <?php
                                foreach ($file_list as $file) {
                                    ?>
                                    <tbody>
                                    <td><?PHP echo $file->file_id; ?></td>
                                    <td><?php echo $file->name; ?></td>
                                    <td><img src="<?php echo base_url() ?>attachment/<?php echo $file->image ?>" height="80" width="80"/></td>
                                    <td><!--<a href="<?php echo site_url("country/edit_data/$country->country_id"); ?>"
                                           onclick="return confirm('you want to edit...........')" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="<?php echo site_url("country/del/$country->country_id"); ?>" 
                                           onclick="return confirm('you want to delete...........?')" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-remove"></span></a>
                                   --> </td>
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
