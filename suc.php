<html>
    <head>
</head>

<body>

<h2> Uploaded!! 
    <?php
    session_start();
$username= $_SESSION['uname'];

if($username=="saman"){
?>
<a href="home.php">Home</a></h2>

<?php
} ?>
<?php
if($username=="abc"){ ?>
<a href="home1.php">Home</a></h2>

<?php } ?>
<?php
if($username=="qwerty"){ ?>
<a href="home2.php">Home</a></h2>

<?php } ?>
</body>
</html>