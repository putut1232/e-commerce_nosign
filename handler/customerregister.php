<?php
include("../bagian/connect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$password2=$_POST['password2'];
if ($password==$password2) {
	$sql="INSERT INTO customers(nama, username, password) VALUES('$nama','$email','$password')";
	$connect->query($sql);
	echo "<script> alert('You are registered');
			window.location.href='../customerforms.php';
			</script>";
}else{
	echo "<script> alert('Password did not match');
			window.location.href='../customerforms.php';
			</script>";
}







?>