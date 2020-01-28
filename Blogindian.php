<?php
$conn = mysqli_connect("localhost","root","","blogapp");
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
        <div class="col-md-10" style="text-align:center;"><h2>Feeds</h2></div>
        <button type="button" class="btn">Date</button>
        <!-- <button type="button" class="btn btn-info">Category</button> -->
        <!-- <div class="col-md-2 ml-auto"><a href="#data.php">Date</a></div>  -->
        <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Blog
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="Blogtech.php">Tech</a>
    <a class="dropdown-item" href="Blogindian.php">Indian</a>
    <a class="dropdown-item" href="Bloginternational.php">International</a>
  </div>
</div> 

<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    News
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="Newstech.php">Tech</a>
    <a class="dropdown-item" href="Newsindian.php">Indian</a>
    <a class="dropdown-item" href="Newsinternational.php">International</a>
  </div>
</div> 

        <div class="col-xs-6"></div>
</div>
<br>

<hr>

<div id="body" class="row">

<div class="col-md-12">

<?php $sql="SELECT * FROM posts WHERE Category='Blog-Indian'";
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

// $conn->close();
?>



</div>



</div>

</div>


<div class="container-fluid">

<div id="head" class="row">
    <!-- <div class="col-md-12" style="text-align:center;"><h2>Feeds</h2></div> -->

    <div class="col-xs-6"></div>
</div>
<br>

<hr>

<div id="body" class="row">

<div class="col-md-12">

<?php $sql="SELECT * FROM posts1 WHERE Category='Blog-Indian'";
$result = $conn->query($sql);

if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
    echo "<b>"."Title:" .$row["title"]."</b>"."<br>".$row["post"]."<br>"."<i>Posted By--</i><br>"."<b>".$row["name"]."</b>"."<b>".$row["time"]."</b>";

echo "<hr>";
echo "<br>";
}


} else{
echo "0 results";
}

// $conn->close();
?>



</div>



</div>

</div>

<div class="container-fluid">

<div id="head" class="row">
    <!-- <div class="col-md-12" style="text-align:center;"><h2>Feeds</h2></div> -->

    <div class="col-xs-6"></div>
</div>
<br>

<hr>

<div id="body" class="row">

<div class="col-md-12">

<?php $sql="SELECT * FROM posts2 WHERE Category='Blog-Indian'";
$result = $conn->query($sql);

if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
    echo "<b>"."Title:" .$row["title"]."</b>"."<br>".$row["post"]."<br>"."<i>Posted By--</i><br>"."<b>".$row["name"]."</b>"."<b>".$row["time"]."</b>";

echo "<hr>";
echo "<br>";
}


} else{
echo "0 results";
}

$conn->close();
?>



</div>



</div>

</div>
<!-- <div class="card">
<div class="row">
<div class="col-md-6" style="text-align:center"><br> -->



<!-- <div id="info"> -->
    <!-- <h2>Login</h2><br>


    <form action="login.php" method="post">
        <label>Username:</label>
        <input type="text" name="uname" placeholder="User name"><br><br>
        <label>Password:</label>
        <input type="text" name="pass" placeholder="Password"><br><br>

        <button style="background-color:#ff00ff ; color:white;" type="submit" name="login"><b>Login</b></button>

</form>
</div> -->
<!-- </div> -->


<!-- <div class="col-md-4" style="text-align:center;"><br>
    
    <div id="info">
<h2>Signup</h2><br> -->

<!-- <form action="signup.php" method="post">
        <label>Username:</label>
        <input type="text" name="uname" placeholder="User name"><br><br>
        <label>Password:</label>
        <input type="text" name="pass" placeholder="Password"><br><br>

        <button style="background-color:#ff00ff ; color:white;" type="submit" name="login"><b>Signup</b></button>

</form> -->

</div>
</div>
</div>
</div>
</body>
    </html>