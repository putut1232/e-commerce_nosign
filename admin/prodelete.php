<?php 
include('../bagian/connect.php');


$sql="SELECT * from products WHERE id='$_GET[del_id]'";
$results=$connect->query($sql);
$final=$results->fetch_assoc(); 
$foto=$final['picture'];

if (file_exists("../uploads/$foto"))
{
	unlink("../uploads/$foto");
}


$connect->query("DELETE FROM products WHERE id='$_GET[del_id]' ");

echo "<script>alert('Data Terhapus')</script>";
echo "<script>location='productsshow.php'</script>";


 ?>