<?php

include 'conn.php';
$title=$_POST['title'];
$desc=$_POST['desc'];
// $category=$_POST['category'];
session_start();

$username=$_SESSION['uname'];

if($username=="saman"){
    // "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
if(isset($_POST['Update'])){
$sql="UPDATE posts SET post='$desc' WHERE title='$title'";

$result=$conn->query($sql);
}
header("Location:home.php");
}

if($username=="abc"){
    if(isset($_POST['Update'])){
    
    $sql="UPDATE posts1 SET post='$desc' WHERE title='$title'";
$result=$conn->query($sql);
    }
header("Location:home1.php");
}


if($username=="qwerty"){
    if(isset($_POST['Update'])){
    $sql="UPDATE posts2 SET post='$desc' WHERE title='$title'";

$result=$conn->query($sql);
    }
header("Location:home2.php");
}

?>