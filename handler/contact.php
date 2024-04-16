<?php
include("../bagian/connect.php");
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO contact(email,msg) VALUES('$email','$msg')";


if($email=['email'] AND $msg=['msg']){
  header('location: ../index.php');
$connect->query($sql);
}

?>