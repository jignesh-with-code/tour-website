<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="tour";

$conn=mysqli_connect($db_host , $db_user , $db_password , $db_name);

if(!$conn)
{
  die("not connected");
}
else
{
  //  echo "<script>alert('database connectd')</script>";
}


// fetch records in database

$sql="select * from book_now";
$result=mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
    echo '<table class="table table-striped table-hover">';
    echo "<thead>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>name</th>";
    echo "<th>email</th>";
    echo "<th>phone</th>";
    echo "<th>address</th>";
    echo "<th>where_to</th>";
    echo "<th>how_many</th>";
    echo "<th>arrivals</th>";
    echo "<th>leaving</th>";
    echo "<th>Action</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    echo "</thead>";

   echo "<tbody>";
   while($row=mysqli_fetch_assoc($result))
   {
      echo "<tr>";
    echo  "<td>".$row["id"]."</td>";
    echo  "<td>".$row["name"]."</td>";
    echo  "<td>".$row["email"]."</td>";
    echo  "<td>".$row["phone"]."</td>";
    echo  "<td>".$row["address"]."</td>";
    echo  "<td>".$row["whereto"]."</td>";
    echo  "<td>".$row["howmany"]."</td>";
    echo  "<td>".$row["arrivals"]."</td>";
    echo  "<td>".$row["leaving"]."</td>";

    echo '<td> <form action="" method="POST">
    <input type="submit" class="btn btn-danger" name="submit" value="delete"</form>
    </td>';

    echo '<td><form action="" method="POST"><input type="submit" class="btn btn-warning" name="edit" value="edit"</td>';

      echo "</tr>";
   }

   echo "</tbody>";

    echo "</table>";
}



?>

<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="tour";

$conn=mysqli_connect($db_host , $db_user , $db_password , $db_name);

if(!$conn)
{
  die("not connected");
}
else
{
  //  echo "<script>alert('database connectd')</script>";
}

//update records code

if(isset($_REQUEST['update']))
{
    if(($_REQUEST['name']=="") || ($_REQUEST['email']=="") || ($_REQUEST['phone']=="") || ($_REQUEST['address']=="")|| ($_REQUEST['whereto']=="") || ($_REQUEST['howmany']=="")|| ($_REQUEST['arrivals']=="") || ($_REQUEST['leaving']==""))
    {
        echo "<script>alert('not blank fileds')</script>";
    }
    else
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $address=$_REQUEST['address'];
        $whereto=$_REQUEST['whereto'];
        $howmany=$_REQUEST['howmany'];
        $arrivals=$_REQUEST['arrivals'];
        $leaving=$_REQUEST['leaving'];

        $sql2="update book_now set name='$name',  email='$email',  phone='$phone', address='$address',  whereto='$whereto',  howmany='$howmany',  arrivals='$arrivals',  leaving='$leaving' where id = {$_REQUEST['id']}";

        if(mysqli_query($conn , $sql2)) 
        {
            echo "<script>alert('update the records')</script>";
        }
        else{
            echo "<script>alert('not update records error')</script>";
        }
    }
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- end the link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- end the link -->
    <!-- this is css link -->
    <link rel="stylesheet" href="admin.css">
    <!-- end the css link -->
</head>
<body>
    
<div class="container" id="form-div-center">
<div class="row">
    <div class="col-sm-4">

    <?php
       if(isset($_REQUEST['edit']))
       {
        // data retrive code 
        
        $sql1="select * from book_now where id = {$_REQUEST['id']}";
        $result1=mysqli_query($conn , $sql1);
        $row1=mysqli_fetch_assoc($result1);
       }
    
    ?>
        <form action="" method="post" class="center">
            <div class="form-group" id="space">
            <i class="fa-solid fa-user"></i>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php if(isset($row1["name"])) {
                    echo $row1["name"];
                } ?>">
            </div>

            <div class="form-group" id="space">
            <i class="fa-sharp fa-solid fa-envelope"></i>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php if(isset($row1["email"])) {
                    echo $row1["email"];
                } ?>">
            </div>

            <div class="form-group" id="space">
            <i class="fa-sharp fa-solid fa-envelope"></i>
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="<?php if(isset($row1["phone"])) {
                    echo $row1["phone"];
                } ?>">
            </div>


            <div class="form-group" id="space">
            <i class="fa-solid fa-address-card"></i>
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="<?php if(isset($row1["address"])) {
                    echo $row1["address"];
                } ?>">
            </div>




            <div class="form-group" id="space">
            <i class="fa-solid fa-location-crosshairs"></i>
                <label for="whereto">where_to</label>
                <input type="text" name="whereto" id="whereto" class="form-control" value="<?php if(isset($row1["whereto"])) {
                    echo $row1["whereto"];
                } ?>">
                </div>


            <div class="form-group" id="space">
            <i class="fa-solid fa-chart-simple"></i>
                <label for="howmany">how_many</label>
                <input type="text" name="howmany" id="howmany" class="form-control" value="<?php if(isset($row1["howmany"])) {
                    echo $row1["howmany"];
                } ?>">
            </div>

            <div class="form-group" id="space">
            <i class="fa-solid fa-plane-arrival"></i>
                <label for="arrivals">arrivals</label>
                <input type="text" name="arrivals" id="arrivals" class="form-control" value="<?php if(isset($row1["arrivals"])) {
                    echo $row1["arrivals"];
                } ?>">
            </div>

            <div class="form-group" id="space">
            <i class="fa-solid fa-lines-leaning"></i>
                <label for="leaving">leaving</label>
                <input type="text" name="leaving" id="leaving" class="form-control" value="<?php if(isset($row1["leaving"])) {
                    echo $row1["leaving"];
                } ?>">
            </div>

            <input type="hidden" name="id" value="<?php echo $row1['id'] ?>">
            <div class="text-center">
           <button type="submit" class="btn btn-success"  name="update" id="space">Update</button>
           <button type="submit" class="btn btn-primary"  name="insert" id="space">Insert</button>
            </div>
        </form>
    </div>
</div>
</div>


    <!-- end the code update data table code -->



    
</body>
</html>

