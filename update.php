<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="tour";

$con=mysqli_connect($db_host,$db_user ,$db_password ,$db_name);
$id=$_GET['updateid'];
$sql="select * from `book_now` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];
$whereto=$row['whereto'];
$howmany=$row['howmany'];
$arrivals=$row['arrivals'];
$leaving=$row['leaving'];

if(isset($_POST['update']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $address=$_POST['address'];
   $whereto=$_POST['whereto'];
   $howmany=$_POST['howmany'];
   $arrivals=$_POST['arrivals'];
   $leaving=$_POST['leaving'];




    $sql="update `book_now` set id=$id , name='$name',  email='$email',  phone='$phone', address='$address',  whereto='$whereto',  howmany='$howmany',  arrivals='$arrivals',  leaving='$leaving' where id=$id";
    $result=mysqli_query($con,$sql);
   
    if($result)
    {
      header('location:display.php');
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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>


<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
<h1>update record</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

<h1 class="heading-title">update record</h1>

<form  method="post" class="book-form">

   <div class="flex">
      <div class="inputBox">
         <span>name :</span>
         <input type="text" placeholder="enter your name" name="name" value=<?php echo $name; ?>>
      </div>
      <div class="inputBox">
         <span>email :</span>
         <input type="email" placeholder="enter your email" name="email" value=<?php echo $email; ?>>
      </div>
      <div class="inputBox">
         <span>phone :</span>
         <input type="number" placeholder="enter your number" name="phone" value=<?php echo $phone; ?>>
      </div>
      <div class="inputBox">
         <span>address :</span>
         <input type="text" placeholder="enter your address" name="address" value=<?php echo $address; ?>>
      </div>
      <div class="inputBox">
         <span>where to :</span>
         <input type="text" placeholder="place you want to visit" name="whereto" value=<?php echo $whereto; ?>>
      </div>
      <div class="inputBox">
         <span>how many :</span>
         <input type="number" placeholder="number of guests" name="howmany" value=<?php echo $howmany; ?>>
      </div>
      <div class="inputBox">
         <span>arrivals :</span>
         <input type="date" name="arrivals" value=<?php echo $arrivals; ?>>
      </div>
      <div class="inputBox">
         <span>leaving :</span>
         <input type="date" name="leaving">
      </div>
   </div>

   <input type="submit" value="update" class="btn" name="update">

</form>

</section>

<!-- booking section ends -->






<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

