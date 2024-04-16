<?php
include "../bagian/connect.php";
$getId = $_GET['pro_id'];
$rows = [];
$getProdukDetail = mysqli_query($connect, "SELECT * FROM order_details as A INNER JOIN products as B ON A.product_id=B.id WHERE A.order_id=$getId");
while($row=mysqli_fetch_assoc($getProdukDetail)){
  $rows[] = $row;
}

?>
<!DOCTYPE html>
<html>
<?php
include('adminpartials/session.php');
include('adminpartials/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php
  include('adminpartials/header.php');
  include('adminpartials/aside.php');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Order Details
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-9">

          <?php
          include('../bagian/connect.php');
          $id=$_GET['pro_id'];
          $sql="SELECT * from orders INNER JOIN customers ON orders.customer_id=customers.id WHERE orders.id='$id'";
          $results=$connect->query($sql);

          $final=$results->fetch_assoc();        
          ?>
          <h4> Customer : <?php echo $final['nama']?> </h4><hr><br>
           <h4> No Telpon : <?php echo $final['phone']?> </h4><hr><br>

          <h4> Total Belanja : <?php echo $final['total']?> </h4><hr><br>

          <h4> Alamat : <?php echo $final['address']?> </h4><hr><br>

        </div>
        <div class="col-sm-9">
          <?php foreach($rows as $order) : ?>
          <h4> Nama Produk : <?= $order['name'] ?></h4><br>
          
          <h4> Jumlah : <?= $order['quantity'] ?> pcs</h4><hr><br>
          <?php endforeach; ?>
        </div>      
<div class="col-sm-3">
  
  </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include('adminpartials/footer.php');
 ?>
</body>
</html>
