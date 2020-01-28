<?php

session_start();
$conn = mysqli_connect("localhost","root","","blogapp");
// include('conn.php');
$username=$_SESSION['uname'];
if($username=='abc'){


?>

<html>

<head>

<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
    #head{
        background-color:cornflowerblue;
        color:white;
        
    }

    hr{
        border: 1px solid cornflowerblue;

    }

    /* #post{
        text-align:center;
    } */

#head{
    background-color:cornflowerblue;
    color:white;
}

#head2{
    text-align:right;

}

#img{
    height:150px;
    width:150px;
    border-radius:100px;
}


#pro3{
    text-align:right;
}

input[type=submit]{
    background-color:cornflowerblue;
    height:30px;
    text-decoration:none;
    margin:4px 2px;
}


input[type=text]{
    
   border: 2px solid cornflowerblue;
    text-decoration:none;
    margin:4px 2px;
}


</style>

</head>

<body>
    <div class="container-fluid">
        <div id="head" class="row">
            <div class="col-xs-6 mr-auto" style="margin-left:30px;"><h2>My Blog</h2></div>
            <div class="col-xs-6" style="margin-right:80px;"><h3><?php    echo "$username"   ?></h3></div>
            <button type="button" class="btn">Date</button>
        <!-- <button type="button" class="btn btn-info">Category</button> -->
        <!-- <div class="col-md-2 ml-auto"><a href="#data.php">Date</a></div>  -->
        <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Blog
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="Blogtecha.php">Tech</a>
    <a class="dropdown-item" href="Blogindiana.php">Indian</a>
    <a class="dropdown-item" href="Bloginternationala.php">International</a>
  </div>
</div> 

<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    News
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="Newstecha.php">Tech</a>
    <a class="dropdown-item" href="Newsindiana.php">Indian</a>
    <a class="dropdown-item" href="Newsinternationala.php">International</a>
  </div>
</div> 

</div>


<br>

<div id="profile" class="row">
    <div class="col-xs-2"> <?php
$username=$_SESSION['uname'];

$sql="SELECT * from signup WHERE name='$username'";

$result=$conn->query($sql);
if($result->num_rows > 0 )
{
    while($row = $result->fetch_assoc()){
        $location = $row["image"];
        echo "<img id='img' src='$location'>";
    }
}
else{
    echo "0 results";
}

$conn->close();

?>

</div>


<div id="pro2" class="col-xs-2">
    <?php
$conn = mysqli_connect("localhost","root","","blogapp");
//include("conn.php");
$username=$_SESSION['uname'];
if(isset($_POST['submit1'])){
    $name= $_FILES['myfile']['name'];
    $tmp_name=$_FILES['myfile']['tmp_name'];

    if($name){
        $location="image/$name";
        move_uploaded_file($tmp_name,$location);

        $query=mysqli_query($conn, "UPDATE signup SET image='$location' WHERE name='$username'");

        header("Location:suc.php");

    }
    else{
        die("Please select a file");
    }
}
echo "<br>";
echo "

<form action='home1.php' method='post' enctype='multipart/form-data'>
<input type ='file' name='myfile'><br>
<input type='submit' name='submit1' value='Change'>
</form>
";


?>
</div>


<div id="pro3" class="col-xs-8 ml-auto">
    <a href="logout.php">Logout</a></div>


</div>
<hr>


<div id="post" class="row ml-auto">
<div class="col-xs-12"><form method="post" action="post.php">
<input type="text" name="title" placeholder="title...">
<input type="text" name="desc" placeholder="describe...">
<input type="text" name="category" placeholder="Blog(Tech/Indian/Internatinal)/News(Tech/Indian/Internatinal)">
<input type="submit" value="post">

</form>
</div>
</div>


<hr>

<div id="body" class="row">

<div class="col-md-12">

<?php $sql="SELECT * FROM posts1 WHERE Category='Blog-International'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<b>"."Title:" .$row["title"]."</b>"."<br>".$row["post"]."<br>"."<i>Posted By--</i><br>"."<b>".$row["name"]."</b>"."<b>".$row["time"]."</b>"."<br>"."<b>".$row["Category"]."</b>";
    
    echo "<hr>";
    echo "<br>";
    }


} else{
    echo "0 results";
}

$conn->close();
?>
<?php } ?>

</div>
