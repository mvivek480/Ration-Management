<!DOCTYPE html>
<html lang="en">
<?php
include('dbcon.php');
?>
    <head>

        <title>Ration mangement system</title>

		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">

        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="screen">

        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

    </head>
	  <body>
      <div class="row-fluid">
     <div class="span6">
     <div class="alert alert-success">Please Enter The Details Below</div>
       <form class="form-horizontal" method="POST">
     <div class="control-group">
     <label class="control-label" for="inputEmail">unique ILID</label>
     <div class="controls">
     <input type="text" id="inputEmail" name="uid" placeholder="Il_id" required>
   </div>
     </div>
     <div class="control-group">
     <label class="control-label" for="inputPassword">stock</label>
     <div class="controls">
     <input type="text" id="inputEmail" name="qty" placeholder="stock" required>
     </div>
         </div>
     <div class="control-group">
     <div class="controls">

     <button type="submit" name="submit" class="btn btn-success"><i class="icon-signin"></i>&nbsp;submit</button>
     </div>
     </div>
     </form>
     </div>
     <div class="span6">...</div>
     </div>
     <?php
   	if (isset($_POST['submit'])){
    $qty = $_POST['qty'];
    $id =    $_POST['uid'];
    mysql_query("update stock set stock = '$qty' where IL_id = '$id'") or die(mysql_error()); }
    echo '<script language="javascript">';
echo 'alert("updated successfully ")';
echo '</script>';
     ?>

<footer></footer>
