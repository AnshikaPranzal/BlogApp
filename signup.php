<?php
$conn = mysqli_connect("localhost","root","","blogapp");
// include 'conn.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$sql="insert into signup(name,passs) values('$uname','$pass')";

$result=$conn->query($sql);
header("Location:index1.php");


?>