<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
        <!-- custome css file link -->
        <link rel="stylesheet" href="loginstyle.css">
</head>
<body>

<div class="form-container">
    <form action="" method="post">
        <h3>register now</h3>
        <input type="text" name="name" required placeholder="enter your name">
        <input type="email" name="email" required placeholder="enter your email">
        <input type="password" name="password" required placeholder="enter your password">
        <input type="password" name="confirmpassword" required placeholder="confirm your password">
        

        <input type="submit" name="submit" value="register now" class=form-btn>
        <p>already have an account? <a href="loginform.php">login now</a></p>

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
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$confirmpassword=$_REQUEST['confirmpassword'];



$sql="insert into register (name,email,password,confirmpassword) values('$name' , '$email' , '$password','$confirmpassword')";

if(mysqli_query($conn , $sql))
{
  header("location:login.php");
}
}
?>