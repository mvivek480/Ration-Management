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
    <div class="span12">
    <ul id="myTab" class="nav nav-tabs">

      <li class="active">s><i class="icon-group icon-large"></i>&nbsp;stock</a></li>






      </ul>
      <table>
        <thead>
            <tr>

                <th>Location</th>
                                          <th>Locationid</th>

<th>item</th>
                <th>stock</th>

            </tr>
        </thead>
<tbody>

</tbody>
<?php
$query=mysql_query("select * from stock")or die(mysql_error());
while($row=mysql_fetch_array($query)){

?>

  <

                         <td><?php echo $row['Location']; ?></td>

                         <td> <?php echo $row['L_id'];?></td>
                        <td><?php echo $row['item'];?></td>
                         <td><?php echo $row['stock'];?></td>

                        
                  </tr>
  <?php } ?>





</tbody>
       </table>
    </div>
