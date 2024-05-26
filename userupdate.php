<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="tour";

$con=mysqli_connect($db_host,$db_user ,$db_password ,$db_name);

$id=$_GET['updateid'];

$sql="select * from `register` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
$confirmpassword=$row['confirmpassword'];


if(isset($_POST['update']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $confirmpassword=$_POST['confirmpassword'];



    $sql="update `register` set id=$id , name='$name',  email='$email',  password='$password', confirmpassword='$confirmpassword'  where id=$id";
    $result=mysqli_query($con,$sql);
   
    if($result)
    {
      header('location:adminmain.php');
    }
    else{
        die(mysqli_error($con));
    }
   
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custome css file link -->
   <link rel="stylesheet" href="loginstyle.css">

</head>
<body>



</div>
<div class="form-container">
    <form action="" method="post">
        <h3>Update the record</h3>
        <input type="text" name="name" value=<?php echo $name; ?> required placeholder="enter your name">
        <input type="email" name="email" value=<?php echo $email; ?> required placeholder="enter your email">
        <input type="password" name="password" value=<?php echo $password; ?> required placeholder="enter your password">
        <input type="password" name="confirmpassword" value=<?php echo $confirmpassword; ?> required placeholder="confirm your password">
        

        <input type="submit" name="update" value="update" class=form-btn>

       </form>
     </div>
  </div>





<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

