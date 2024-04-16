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
        Update Produk
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-3">
        </div>

        <div class="col-sm-6">
        <form role="form" action="proupdatehandler.php" method="post" enctype="multipart/form-data">
          <?php
          $newid=$_GET['up_id'];

          include('../bagian/connect.php');

          $sql="Select * from products WHERE id='$newid'";

          $results=$connect->query($sql);

          $final=$results->fetch_assoc();


          ?>
          <h1>Products</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Product Name" value="<?php echo $final['name'] ?>" name="name">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Price" value="<?php echo $final['price'] ?>" name="price">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" name="file" value=" <?php echo $final['picture'] ?>">
                  <img src="../uploads/<?php echo $final['picture'] ?>" alt="No File" style=" width:300px">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" class="form-control" rows="10" placeholder="Enter Description" value="<?php echo $final['description'] ?>" name="description"></textarea>
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" name="category" required="">
            <option value="">--Pilih--</option>
            <?php 
              $kategori = mysqli_query($connect, "SELECT * FROM categories ORDER BY id DESC");
              while($r = mysqli_fetch_array($kategori)){
             ?>
             <option value="<?php echo $r['id'] ?>"><?php echo $r['name'] ?></option>
            <?php } ?>
          </select>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" value="<?php echo $final['id'] ?>" name="form_id">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
              </div>
            </form>
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
