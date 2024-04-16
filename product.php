<!DOCTYPE html>
<html lang="en">
<?php
include ("bagian/head.php");
session_start();

?>
<body class="animsition">
	<?php
	include ("bagian/header.php");
?>
	<br>
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">			
					
				</div>
	
				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 ">

					</div>


				</div>	

				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col4 p-b-27">
						</div>
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
				<?php

				include("bagian/connect.php");
				$sql="select * from products";
				$results=$connect->query($sql);


				while ($final=$results->fetch_assoc()) {


				?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $final['category_id'] ?>">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="./uploads/<?php echo $final['picture'] ?>" alt="IMG-PRODUCT" style="min-height: 100%; max-height: 100%">

							<a href="details.php?details_id=<?php echo $final['id']?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $final['name'] ?>
								</a>

								<span class="stext-105 cl3">
									Rp. <?php echo $final['price'] ?>
								</span>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

				
			</div>

		</div>
	</div>
		

	<?php
	include('bagian/footer.php');
	?>

</body>
</html>