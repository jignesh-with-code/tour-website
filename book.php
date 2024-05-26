<?php
  include("header.php");
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
<h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

<h1 class="heading-title">book your trip!</h1>

<form action="book_form.php" method="post" class="book-form">

   <div class="flex">
      <div class="inputBox">
         <span>name :</span>
         <input type="text" placeholder="enter your name" name="name" required>
      </div>
      <div class="inputBox">
         <span>email :</span>
         <input type="email" placeholder="enter your email" name="email" required>
      </div>
      <div class="inputBox">
         <span>phone :</span>
         <input type="number" placeholder="enter your number" name="phone" required>
      </div>
      <div class="inputBox">
         <span>address :</span>
         <input type="text" placeholder="enter your address" name="address" required>
      </div>
      <div class="inputBox">
         <span>where to :</span>
         <input type="text" placeholder="place you want to visit" name="whereto" required>
      </div>
      <div class="inputBox">
         <span>how many :</span>
         <input type="number" placeholder="number of guests" name="howmany" required>
      </div>
      <div class="inputBox">
         <span>arrivals :</span>
         <input type="date" name="arrivals" require>
      </div>
      <div class="inputBox">
         <span>leaving :</span>
         <input type="date" name="leaving" require>
      </div>
   </div>

   <input type="submit" value="submit" class="btn" name="submit">

</form>

</section>

<!-- booking section ends -->



<?php
  include("footer.php");
?>


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

