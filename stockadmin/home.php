<?php
include('header.php');
include('session.php');
?>
<body>
 <div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">

    </div>
    </div>
<br><br>
<div class="container">

 <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#"><i class="icon-group icon-large"></i>&nbsp;Ration shop admin</a>
    </div>
    </div>

    <div class="row-fluid">
	<div class="span12">
	<ul id="myTab" class="nav nav-tabs">

    <li class="active"><a href="#welcome" data-toggle="tab"><i class="icon-group icon-large"></i>&nbsp;stock alert</a></li>
    <li><a href="#stock" data-toggle="tab"><i class="icon-user icon-large"></i>&nbsp;stock</a></li>

   <li>
   <a  href="#myModal" data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
	</li>

    </ul>
<a  href="update_stock.php"><button>update stock</button></a>
<a  href="add_item.php"><button>AddItem</button></a>
  </div>

    </div>


<div class="tab-content">

<?php
include('welcome.php');
?>
<?php
include('tab_stock.php');
?>





</div>
<?php
include('modal.php');
?>
</div>
</body>
</html>
