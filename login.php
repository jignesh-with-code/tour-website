<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
        <!-- custome css file link -->
        <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <h3>login now</h3>
        <input type="email" name="email" required placeholder="enter your email">
        <input type="password" name="password" required placeholder="enter your password">
       
        <input type="submit" name="submit" value="login" class=form-btn>

        <p>dont have an account? <a href="registerform.php">register now</a></p>

    </form>
</div>



</body>
</html>

<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="tour";

$conn=mysqli_connect($db_host , $db_user , $db_password , $db_name);

if(!$conn)
{
    die("database not connected");
}
else{
   // echo "<script>alert('database connectd')</script>";
}

//insert code

if(isset($_REQUEST['submit']))
{
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

$sql="insert into login (email , password) values('$email' , '$password')";

if(mysqli_query($conn , $sql))
{
  header("location:home.php");
}
}
?>