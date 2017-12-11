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
                            <h3 class="box-title"><label>State_master</label></h3>


                        </div>
                        <div class="box-body">
                            <div class="form-group">    
                                <p align="right"><a href="<?php echo site_url("state/add_state") ?>" class="btn btn-primary" role="button" ><span class="glyphicon glyphicon-plus"></span></a>
                                    <a href="<?php echo site_url("state/import_state") ?>" class="btn btn-primary" role="button" ><span class="glyphicon glyphicon-import"></span></a>
                                    <a href="<?php echo site_url("state/export_file") ?>" class="btn btn-primary" role="button" ><span class="glyphicon glyphicon-export"></span></a></p>
         
         
                            </div>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <td><label>State_id</label></td>
                                        <td><label>country_name</label></td>
                                        <td><label>State_name</label></td>
                                        <td><label>Status</label></td>
                                        <td><label>Action</label></td>
                                    </tr>           
                                </thead>
                                <?php
                                foreach ($state_list as $state) {
                                    ?>

                                    <tbody>
                                    <td><?PHP echo $state->state_id; ?></td>
                                    <td><?PHP echo $state->country_name; ?></td>
                                    <td><?PHP echo $state->state_name; ?></td>
                                    <td>    <?php
                                           if ($state->status=='0' ) {
                                               ?>

                                        <a href="<?php echo site_url("state/update_status_active/$state->state_id") ?>" class="btn btn-success" role="button"><label>Active</label></a>
                                            <?php
                                        } else
                                            {
                                            ?>
                                        <a href="<?php echo site_url("state/update_status_deactive/$state->state_id") ?>" class="btn btn-danger" role="button"><label>Deactive</label></a>
                                            <?php
                                        }
                                        ?></td>
                                    <td>  <a href="<?php echo site_url("state/edit_data/$state->state_id"); ?>"
                                             onclick="return confirm('you want to edit...........')" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="<?php echo site_url("state/del/$state->state_id"); ?>" 
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




