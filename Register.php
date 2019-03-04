<?php
include('header.php');
?>
<body>
 <div class="navbar  navbar-fixed-top">
    <div class="navbar-inner1">

    </div>
    </div>
<div class="container">

<br>
<br>
<br>
<br>


<div class="thumbnail">
     <div class="row">
	<div class="span3 offset1">.</div>
    <div class="span8">
	<br>

	<div class="alert alert-info"><strong><i class="icon-file"></i>&nbsp;Please Fill up all the details Below</strong></div>

	 <form class="form-horizontal" method="POST">
    <div class="control-group">
    <label class="control-label" for="inputEmail">FirstName</label>
    <div class="controls">
    <input type="text" class="span4" name="fn" id="inputEmail" placeholder="FirstName" required>
    </div>
    </div>
	  <div class="control-group">
    <label class="control-label" for="inputEmail">LastName</label>
    <div class="controls">
    <input type="text" class="span4" name="ln" id="inputEmail" placeholder="LastName" required>
    </div>
    </div>

	  <div class="control-group">
    <label class="control-label" for="inputEmail">Location_id</label>
    <div class="controls">
    <input type="text" class="span1" name="Location_id" id="inputEmail" placeholder="Locationid" required>
    </div>
    </div>

	 <div class="control-group">
    <label class="control-label" for="inputEmail">SEX</label>
    <div class="controls">
	<select class="span2" name="SEX" required>
	<option></option>
	<option>Male</option>
	<option>Female</option>
	</select>
    </div>
    </div>

	  <div class="control-group">
    <label class="control-label" for="inputEmail">Location</label>
    <div class="controls">
    <input type="text" class="span4" name="Location" id="inputEmail" placeholder="example:eraniel" required>
    </div>
    </div>

	  <div class="control-group">
    <label class="control-label" for="inputEmail">Email Adress</label>
    <div class="controls">
    <input type="text" class="span4" name="email" id="inputEmail" placeholder="Email Address" required>
    </div>
    </div>


	  <div class="control-group">
    <label class="control-label" for="inputEmail">Contact Number</label>
    <div class="controls">
    <input type="text" class="span4" name="c_number" id="inputEmail" placeholder="Contact Number" required>
    </div>
    </div>

    <div class="control-group">
    <div class="controls">

    <button type="submit" name="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Submit</button>
    </div>
    </div>
    </form>
	</div>
    <div class="span2">.</div>
    </div>
	</div>
	   <div class="navbar navbar-inverse">
    <div class="navbar-inner ">
   <center id="color_white">

   </center>
    </div>
    </div>

	<?php





	function generateRandomString($length = 4) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString = $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}if (isset($_POST['submit'])){
	$fn=$_POST['fn'];
	$ln=$_POST['ln'];
	$L_id=$_POST['Location_id'];
	$gender=$_POST['SEX'];
	$address=$_POST['Location'];
	$email=$_POST['email'];
	$c_number=$_POST['c_number'];



$strr=generateRandomString();







	mysql_query("insert into reg_member (firstname,lastname,L_id,address,gender,email,c_number,date,uid)
	values('$fn','$ln','$L_id','$address','$gender','$email','$c_number',NOW(),'$strr')
	")or die(mysql_error());
	session_start();
	$_SESSION['strr']

	?>
	<script type="text/javascript">
	alert('you are sucessfully registered');

	alert('<?php echo $strr; ?>');
	window.location="final.php";
	</script>

	<?php
	}
	?>


</div>
</body>
</html>
