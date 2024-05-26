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
        <h3>admin login</h3>
        <input type="text" name="name" required placeholder="enter your name">
        <input type="password" name="password" required placeholder="enter your password">
       
       <input type="submit" name="submit" value="login" class=form-btn >
       
       <?php
        if(isset($_REQUEST['submit']))
        {
        if(($_REQUEST['name']=="") || ($_REQUEST['password']==""))
       {
          echo "<script>alert('not blank fileds')</script>";
       }
      {
            header("location:adminpage.php");
       }
        }
       ?>
       <!-- <button type="submit" name="submit" value="login" class="form-btn"><a href="admin.php">submit</a></button> -->

    </form>
</div>



</body>
</html>