<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="tour";

$con=mysqli_connect($db_host,$db_user ,$db_password ,$db_name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- boostrap link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="registerform.php" class="text-light"> Add User</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Where To</th>
      <th scope="col">How Many</th>
      <th scope="col">Arrivals</th>
      <th scope="col">Leaving</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
   
  <?php
   
   $sql="Select * from `book_now`";
   $result=mysqli_query($con,$sql);
   
   if($result){  
    while($row=mysqli_fetch_assoc($result))
    {
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $address=$row['address'];
    $whereto=$row['whereto'];
    $howmany=$row['howmany'];
    $arrivals=$row['arrivals'];
    $leaving=$row['leaving'];

echo '<tr>
<th scope="row">'.$id.'</th>
  <td>'.$name.'</td>
  <td>'.$email.'</td>
  <td>'.$phone.'</td>
  <td>'.$address.'</td>
  <td>'.$whereto.'</td>
  <td>'.$howmany.'</td>
  <td>'.$arrivals.'</td>
  <td>'.$leaving.'</td>


  <td>
  <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
  <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
  </td>
</tr>';


}
}
 
?>
 
  </tbody>
</table>
    </div>
</body>
</html>