

<?php

session_start();
$conn = mysqli_connect("localhost","root","","blogapp");
// include('conn.php');
$username=$_SESSION['uname'];



?>

<html>

<head>

<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>

<div class="table-responsive m-t-10">
                            <form class="form-group" method='post' style="margin-bottom: -5px;">
                  Start Date <input class="form-group" type='date' class='dateFilter' name='dateFrom' value='<?php if(isset($_POST['dateFrom'])) echo $_POST['dateFrom']; ?>'>

                  End Date <input class="form-group" type='date' class='dateFilter' name='dateTo' value='<?php if(isset($_POST['dateTo'])) echo $_POST['dateTo']; ?>'>

                  <input type='submit' name='but_search' value='Search'>
                </form> 
                               <table id="myTable"  class="table table-bordered table-striped dataTable no-footer" role="grid">
                                    <!--<table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">-->
                                    <thead>
                                        <tr>
                                          <th>Date</th>
                                          <th>Customer Name</th>
                                          <th>Company</th>
                                          <th>Userid</th>
                                          <th>Address</th>
                                          <th>Area</th>
                                          <th>Contact</th>
                                          <th style="display:none">Location</th>
                                          <th style="display:none">Product Id</th>
                                          <th>Software Id</th>
                                          <th>Product Key</th>
                                          <th>Validity</th>
                                          <th>Unpaid Amount</th>
                                          <th>Action</th>
                                          <th>Enab/Disa</th>
                                          <th >Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot style="display:none">
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Userid</th>
                                            <th>Address</th>
                                            <th>Area</th>
                                            <th>Contact</th>
                                            <th>Software</th>
                                            <th>Location</th>
                                            <th>Product Id</th>
                                            <th>Validity</th>
                                            <th>Unpaid Amount</th>
                                            <th>Action</th>
                                            <th>Enab/Disa</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                  $ses = $_SESSION["userid"];
                                  $result = mysqli_query($con, "select id from cmp_user where userid='$ses'");
                                  while ($res = mysqli_fetch_array($result)) {
                                      $uid =$res['id'];
                                  }
                                  ?>

                                            <?php
                                             $dateFrom = date('Y-m-d', strtotime($_POST['dateFrom']));
                                             $dateTo = date('Y-m-d', strtotime($_POST['dateTo']));
                                            $result= mysqli_query($con, "select * from cmp_customer");
                                            while ($res = mysqli_fetch_array($result)) {
                                                if (date('Y-m-d', strtotime($res['date']))>$dateFrom && date('Y-m-d', strtotime($res['date'])) < $dateTo) {
                                                    ?>
                                                echo "<tr>"; ?>
                                            <td><?php echo $res["date"]; ?></td>
                                            <td><?php echo $res["c_name"]; ?></td>
                                            <td><?php echo $res["company"]; ?></td>
                                            <td><?php echo $res["userid"]; ?></td>
                                            <td><?php echo substr($res["address"], 0, 15); ?></td>
                                            <td><?php echo substr($res["zipcode"], 0, 15); ?></td>
                                            <td><?php echo $res["contact"]; ?></td>
                                            <td style="display:none"><?php echo $res["location"]; ?></td>
                                            <td style="display:none"><?php echo substr($res["productid"], 0, 15); ?></td>
                                            <td><?php echo substr($res["softwareid"], 0, 15); ?></td>
                                            <td><?php echo substr($res["productkey"], 0, 15); ?></td>
                                            <td><?php echo $res["Validity"]; ?></td>
                                            <td><?php echo $res["unpaidamt"]; ?></td>
                                            <td><A class='btn btn-outline-success btn-sm' href="update_customer.php?id=<?php echo $res['id']; ?>">Edit</A></td>
                                            <?php if ($res["status"] == 1) {
                                                        ?>
                                                 <td> <a class='btn btn-success btn-sm' onclick="return confirm('Are you sure want Disable this Customer ?')" href="customerstatusdisable.php?userid=<?php echo $res['userid']; ?>">Enable
                                                </a></td>
                                                <?php
                                                    } else { ?>
                                             <td><a class='btn btn-danger btn-sm' onclick="return confirm('Are you sure want Enable this Customer ?')" href="customerstatus.php?userid=<?php echo $res['userid']; ?>">Disable
                                                </a></td>

                                                 <?php } ?>
                                            <td><a class='btn btn-outline-danger btn-sm' onclick="return confirm('Are you sure want delete this Customer ?')" href="delete_customer.php?id=<?php echo $res['id']; ?>">Delete
                                                <i class="fa fa-trash" title="Delete" ></i></a></td>
                                          <?php echo "</tr>";
                                                }
                                            } ?>


                                    </tbody>
                                </table>
                            </div>
                                        </body>
                                        </html>