<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql = "SELECT * FROM `user` WHERE id='$id'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
   $name = $row ['name'];
   $email = $row ['email'];
   $mobile = $row ['mobile'];
   $password = $row ['password'];

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$sql = "UPDATE user SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";


$result=mysqli_query($con,$sql);
if($result){
//echo "Data updated!";
header('location:display.php');
}  else{
        
        die (mysqli_error($con));
}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>User Dashboard</title>
  </head>
  <body>
   <div class ="container my-5">

   <form method="POST">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class ="form-control"
    placeholder="Enter Name" 
    name ="name" value =<?php echo $name ?>
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" class ="form-control"
    placeholder="Enter email"
    name ="email" value =<?php echo $email ?>>
  </div>
  <div class="form-group">
    <label >Mobile</label>
    <input type="text" class ="form-control"
    placeholder="Enter Mobile No"
    name ="mobile" value =<?php echo $mobile ?>>
  </div>
  <div class="form-group">
    <label >Enter Password</label>
    <input type="text" class ="form-control"
    placeholder="Enter Password"
    name ="password" value =<?php echo $password ?>>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit" >update</button>
</form>

   </div>

    
  </body>
</html>