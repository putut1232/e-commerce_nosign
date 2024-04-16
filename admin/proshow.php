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
      <h1 style="text-align: center;">
        Halaman Produk
        
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
          $sql="SELECT * from products WHERE id='$id'";
          $results=$connect->query($sql);

          $final=$results->fetch_assoc();        
          ?>

          <h4> Name : <?php echo $final['name']?> </h4><hr><br>

          <h4> Price : Rp. <?php echo $final['price']?> </h4><hr><br>

          <h4> Description : <?php echo $final['description']?> </h4><hr><br>
          <img src="../uploads/<?php echo $final['picture'] ?>" alt="No File" style=" width:300px">

             <?php
             $kat = mysqli_query($connect, "SELECT * FROM categories ");
                     $row = mysqli_fetch_array($kat)
                 ?>
        <h4> Category : <?php echo $row['name']?> </h4><hr><br>
  
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
