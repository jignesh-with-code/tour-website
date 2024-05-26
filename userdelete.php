<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="tour";

$con=mysqli_connect($db_host,$db_user ,$db_password ,$db_name);

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $sql="delete from `register` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
       // echo"deleted sucessfully";
       header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>