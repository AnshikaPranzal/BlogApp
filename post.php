<?php

include 'conn.php';
$title=$_POST['title'];
$desc=$_POST['desc'];
$category=$_POST['category'];
session_start();

$username=$_SESSION['uname'];

if($username=="saman"){

$sql="insert into posts(name,title,post,Category) values('$username','$title','$desc','$category')";

$result=$conn->query($sql);

header("Location:home.php");
}

if($username=="abc"){
    $sql="insert into posts1(name,title,post,Category) values('$username','$title','$desc','$category')";

$result=$conn->query($sql);
header("Location:home1.php");
}


if($username=="qwerty"){
    $sql="insert into posts2(name,title,post,Category) values('$username','$title','$desc','$category')";

$result=$conn->query($sql);
header("Location:home2.php");
}

?>