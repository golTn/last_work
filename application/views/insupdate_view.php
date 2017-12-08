<?php
//echo validation_errors();

$updateid = isset($updateid) ? $updateid : '';
echo $updateid;

if($updateid == '')
{
  echo form_open('news/create');
}
else
{
  echo form_open('news/update/'.$updateid);
}

if(!isset($update))
{
  $update['title'] = NULL;
  $update['slug'] = NULL;
  $update['text'] = NULL;
}
?>

<label for="title">Title</label>
<input type="input" name="title" value="<?php echo $update['title']; ?>" /><br />

<label for="text">Text</label>
<textarea name="text" ><?php echo set_value('text'); ?></textarea><br />

<label for="text">Select</label>
<select name="select">
  <option <?php
  if($update['text'] == 'text1')
  {
    echo "selected";
  }
  ?> value="text1">text1</option>
  <option <?php
  if($update['text'] == 'text2')
  {
    echo "selected";
  }
  ?> value="text2">text2</option>
</select>
<br />

<input type="submit" name="submit" value="Create news item" />

</form>