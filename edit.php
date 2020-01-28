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
if(isset($_POST['Edit']))
{
    // $sql="select btn_id from posts";



?>

<div id="post" class="row ml-auto">
<div class="col-md-12"><form method="post" action="update.php">
<input type="text" name="title" placeholder="Title"><br>
Enter the title of the post you selected to edit the post<br><br>

<input type="text" name="desc" placeholder="describe...">
<!-- <input type="text" name="category" placeholder="category.."> -->

<input type="submit" value="post" name="Update">

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