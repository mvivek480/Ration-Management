<div class="tab-pane fade"id="stock">



                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;STOCK</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th>item</th>
                                    <th>locationid</th>
                                    <th>Location</th>
                                    <th>stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
							$query=mysql_query("select * from stock")or die(mysql_error());
							while($row=mysql_fetch_array($query)){
							$id=$row['IL_id'];
							?>

								<tr class="del<?php echo $id ?>">

                                       <td><?php echo $row['item']; ?></td>
                                       <td><?php echo $row['L_id']; ?></td>
                                       <td><?php echo $row['Location']?></td>
                                       <td> <?php echo $row['stock'];?></td>
                                       <td width="100"><button><a href='update_stock.php'>update</button></td>

                                </tr>
								<?php } ?>





                            </tbody>
                        </table>





</div>
