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

<?php
if(isset($_POST['Delete1']))
{
    // $sql="select btn_id from posts";



?>

<div id="post" class="row ml-auto">
<div class="col-md-12"><form method="post" action="delete.php">
<input type="text" name="title" placeholder="Title"><br>
Title of the post you want to delete<br><br>

<!-- <input type="text" name="desc" placeholder="describe..."> -->
<!-- <input type="text" name="category" placeholder="category.."> -->

<input type="submit" value="Delete" name="Delete">

</form>
<?php
// if(isset($_POST['Edit']))
// {
//     $sql="select btn_id from posts";


}
?>    

</div>
</div>


<hr>
</body>
</html>