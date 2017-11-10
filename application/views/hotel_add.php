<!DOCTYPE html>
<html>
    <head>
        <?php
        include("header_include.php");
        ?>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
               <script>
            $("document").ready(function () {
                //$("#state").hide();
                $("#country_id").change(function () {
                    $("#state_id").show();
                    var id = $(this).val();
                    $("#city_id").html('');
                    $.ajax({
                        url: "<?php echo site_url("hotel/drop_state") ?>",
                        type: "POST",
                        data: {country_id: id},
                        success: function (result) {
                            //alert(result);
                            $("#state_id").html(result);
                        }

                    });
                });

            });
        </script>
        <script>
            $("document").ready(function () {
                //$("#state").hide();
                $("#state_id").change(function () {
                    $("#city_id").show();
                    var id = $(this).val();
                    $.ajax({
                        url: "<?php echo site_url("hotel/drop_city") ?>",
                        type: "POST",
                        data: {state_id: id},
                        success: function (result) {
                            //alert(result);
                            $("#city_id").html(result);
                        }

                    });
                });

            });
        </script>


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
                                <p align="right"><a href="<?php echo site_url("hotel/view_hotel") ?>" class="btn btn-primary" role="button">View Records</a></p>
                            </div>

                            <?php
                            if (isset($update_data)) {
                                ?>

                               <form name="reg" method="POST" action="<?php echo site_url('hotel/editp') ?>" enctype="multipart/form-data" role="form">
            <input type="hidden" name="hotel_id" value="<?php echo $update_data['hotel_id'] ?>"/>
            <div class="form-group">
                <label>Hotel Name</label>
                <input class="form-control" type="text" name="name" value="<?php echo $update_data['name'] ?>"/></td>  
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" name="email" value="<?php echo $update_data['email'] ?>"/>    
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input class="form-control" type="text" name="mobile" value="<?php echo $update_data['mobile'] ?>"/>
            </div>
            <div class="form-group">
                <label>star</label>
                <input class="form-control" type="text" name="star" value="<?php echo $update_data['star'] ?>"/>
            </div>
            <div class="form-control">
                <label>image</label>
                    <input type="file" name="image" value="<?php echo $update_data['image'] ?>"/>
            </div>
            
            
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Country_name</label>                                     
                                        <select name="country_id" id="country_id" class="form-control">
                                            <?php
                                            foreach ($country_list as $country) {
                                                if ($country->country_id == $update_data['country_id']) {
                                                    ?>
                                                    <option selected value="<?php echo $update_data['country_id'] ?>"><?php echo $country->country_name ?></option>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <option value="<?php echo $update_data['country_id'] ?>"><?php echo $country->country_name ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>             
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>State Name</label>
                                        <select name="state_id" id="state_id" class="form-control">
                                        <?php
                                        foreach ($state_list as $state) {
                                            if ($state->state_id == $update_data['state_id']) {
                                                ?>
                                               <!-- <option selected value="<?//php echo $state->state_id ?>"> <?php //echo $state->state_name ?></option>-->
                                             <option value="<?php echo $state->state_id; ?>"selected="selected"><?php echo $state->state_name; ?></option>
                                    <?php
                                } else {
                                    ?>
                                    <option value="<?php echo $state->state_id; ?>"><?php echo $state->state_name; ?></option>
                                    <?php
                                }
                            }
                            ?>
                                        </select></div>
                                    
                                    <div class="form-group">
                                        <label>City Name</label>
                                         <select name="city_id" id="city_id" class="form-control">

    <?php
    foreach ($city_list as $city) {
        if ($city->city_id == $update_data['city_id']) {
            ?>
                                             <option value="<?php echo $city->city_id; ?>"selected="selected"><?php echo $city->city_name; ?></option>
                                    <?php
                                } else {
                                    ?>
                                    <option value="<?php echo $city->city_id; ?>"><?php echo $city->city_name; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                                    </div>
                                </form>
                                <?php
                            } else {
                                ?>
 <form name="reg" method="POST" action="<?php echo site_url('hotel/addp') ?>" enctype="multipart/form-data" role="form">
       
                             <div class="form-group">
                                 <label>name</label>
                                 <input type="text" name="name" class="form-control"/>
                             </div>
     
       <div class="form-group">
                                 <label>email</label>
                                 <input type="text" name="email" class="form-control"/>
                             </div>
       <div class="form-group">
                                 <label>mobile</label>
                                 <input type="text" name="mobile" class="form-control"/>
                             </div>
       <div class="form-group">
                                 <label>star</label>
                                 <input type="text" name="star" class="form-control"/>
                             </div>
     <div class="form-group">
         <label>image</label>
         <input type="file" name="image" size="20" class="form-control"/>
     </div>
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Select Country_name</label>
                                        <select name="country_id" class="form-control" id="country_id">
                                            <option >--select--</option>
                                            <?php
                                            foreach ($country_list as $country) {
                                                ?>
                                                <option value="<?php echo $country->country_id ?>" ><?php echo $country->country_name ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Select State Name</label>
                                <select name="state_id" id="state_id" class="form-control">
                                        <option></option>
                                       
                                    </select>
                                    </div>

                                    <div class="form-group">
                                        <label>City Name</label>
                                        <select name="city_id" id="city_id" class="form-control"><option></option></select>
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
