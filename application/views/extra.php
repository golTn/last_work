
                <tr>
                    <td>Country name:</td>
                    <td>

                        <select name="country_id" id="country_id">

                            <?php
                            foreach ($country_list as $country) {
                                if ($country->country_id == $update_data['country_id']) {
                                    ?>
                                    <option value="<?php echo $country->country_id; ?>" selected ><?php echo $country->country_name; ?></option>
                                    <?php
                                } else {
                                    ?>
                                    <option value="<?php echo $country->country_id; ?>"><?php echo $country->country_name; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>State name:</td>
                    <td>
                        <select name="state_id" id="state_id">

    <?php
    foreach ($state_list as $state) {
        if ($state->state_id == $update_data['state_id']) {
            ?>
                                    <option value="<?php echo $state->state_id; ?>"selected="selected"><?php echo $state->state_name; ?></option>
                                    <?php
                                } else {
                                    ?>
                                    <option value="<?php echo $state->state_id; ?>"><?php echo $state->state_name; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>City name:</td>
                    <td>
                        <select name="city_id" id="city_id">

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
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit"/>
                    </td>
                </tr>

            </table>
        </form>

    <?php
} else {
    ?>

        <form name="reg" method="POST" action="<?php echo site_url('hotel/addp') ?>" enctype="multipart/form-data" >
            <table>
                <tr>
                    <td>name</td>
                    <td><input type="text" name="name"/></td>
                </tr>

                <tr>
                    <td>email</td>
                    <td><input type="text" name="email"/></td>
                </tr>

                <tr>
                    <td>mobile</td>
                    <td><input type="text" name="mobile"/></td>
                </tr>
                <tr>
                    <td>star</td>
                    <td><input type="text" name="star"/></td>
                </tr>

                <tr>
                    <td>image</td>
                    <td><input type="file" name="image" size="20" /></td>
                </tr>
                <tr>
                    <td></td>
                </tr>

                <tr>
                    <td><label>State Name</label></td>
                    <td><select name="state_id" id="state_id">
                            <option></option>

                        </select></td>
                </tr>

                <tr>
                    <td><label>City Name</label></td>
                    <td><select name="city_id" id="city_id"><option></option></select></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit"/>
                    </td>
                </tr>

            </table>
        </form>

    <?php
}
?>

