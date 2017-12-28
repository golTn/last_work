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
                            <h3 class="box-title">File_master</h3>

                            
                        </div>
                        <div class="box-body">
                           <form role="form" method="post" name="new_student_upload_form" action="<?php echo site_url("file_upload/do_upload") ?>"  enctype="multipart/form-data">
             <div class="form-group">
                 <label for="exampleInputFile">Name</label><br>
                  <input type="text" id="exampleInputFile" name="name">
                </div>
                               <div class="form-group">
                  <label for="exampleInputFile">Upload File</label>
                  <input type="file" id="exampleInputFile" name="image">
                </div>
         
             <div class="box-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
              </div>
    </form>



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
