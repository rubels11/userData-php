<?php

include 'connect.php';

?>


<!DOCTYPE html>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>

</head>
<body>

<div class="container">
<button class ="btn btn-primary my-5"><a href="user.php" class ="text-light"> Add User</a></button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM `user`;";
$result=mysqli_query($con,$sql);
if ($result) 

   while ( $row=mysqli_fetch_assoc($result)){
   $id = $row ['id'];
   $name = $row ['name'];
   $email = $row ['email'];
   $mobile = $row ['mobile'];
   $password = $row ['password'];

   echo ' <tr>
   <th scope="row">'.$id.'</th>
   <td>'.$name.'</td>
   <td>'.$email.' </td>
   <td>'.$mobile.' </td>
   <td>'.$password.' </td>

   <td>
<button type="button" class="btn btn-success"> <a href="update.php?updateid='.$id,'" class="text-light"> Update</button>
   <button type="button" class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light"> Delete</button>
   </td>

 </tr>';
}


?>




  </tbody>
</table>

</div>
    
</body>
</html>