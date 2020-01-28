<?php

session_start();
$conn = mysqli_connect("localhost","root","","blogapp");
// include 'conn.php';
if(isset($_POST['login'])){
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$sql="SELECT * from signup WHERE name='$uname' AND passs='$pass'";

// $result=$conn->query($sql);

$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    
    if(mysqli_num_rows($result)==1){
         echo "Login Successful";
        
         $_SESSION['uname']=$_POST['uname'];

         
        if($uname=="saman"){
            header("Location:home.php");
        }
         
         elseif($uname=="abc")
         {
            header("Location:home1.php");
         }
         
        elseif($uname=="qwerty")
        header("Location:home2.php");     

         
        }
    else echo "Login Unsuccessful";
    }

// $_SESSION['uname']=$_POST['uname'];

// header("Location:home.php");



?>