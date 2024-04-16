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

      Products

      </h1>
    </section>

    <!-- Main content -->

    <section class="content">

      <!-- Small boxes (Stat box) -->

      <div class="row">

        <div class="col-sm-9">

          <a href="products.php">

          <button style="color:green">Add New</button>

        </a>

          <?php
          include('../bagian/connect.php');
          $sql="Select * from products";;
                              $no = 1;

          $results=$connect->query($sql);

          while($final=$results->fetch_assoc()){ ?>
            <a href="proshow.php?pro_id=<?php echo $final['id']?>">

            <h3><?php echo $no++ ?>: <?php echo $final['name']?></h3><br>
          </a>
          <a href="proupdate.php?up_id=<?php echo $final['id'] ?>">

            <button>Update</button>

          </a>

          <a href="prodelete.php?del_id=<?php echo $final['id'] ?>">

            <button style="color:red">Delete</button>

          </a><hr>

         <?php }

          ?>
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