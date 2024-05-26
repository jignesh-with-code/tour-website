<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="tour";

$conn=mysqli_connect($db_host,$db_user ,$db_password ,$db_name);

if(!$conn)
{
   die("not connected database");
}
else{
  //echo "<script>alert('database connectd')</script>";
}

if(isset($_REQUEST['submit']))
{
    //insert query code
   $name=$_REQUEST['name'];
   $email=$_REQUEST['email'];
   $phone=$_REQUEST['phone'];
   $address=$_REQUEST['address'];
   $whereto=$_REQUEST['whereto'];
   $howmany=$_REQUEST['howmany'];
   $arrivals=$_REQUEST['arrivals'];
   $leaving=$_REQUEST['leaving'];




    $sql="insert into book_now values('' , '$name' , '$email' , '$phone' , '$address' , '$whereto' , '$howmany' ,  '$arrivals' , '$leaving' )";

    if(mysqli_query($conn,$sql))
    {
        //echo "<script>alert('Tour Booked Sucessfully')</script>";
        header("location:home.php");
    }
    else{
        echo "<script>alert('records not inserted')</script>";
    }
}


?>