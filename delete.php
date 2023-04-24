<?php

include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET ['deleteid'];

$sql= "DELETE from user where id=$id";
$result=mysqli_query($con,$sql);
if($result){
header('location:display.php');
}
else
{
    Die (mysqli_errno($con));

}


}




?>