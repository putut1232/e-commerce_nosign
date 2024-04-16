<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ("bagian/head.php");
?>
<body class="animsition">
	<?php
	include ("bagian/header.php");
	include ("bagian/slider.php");
?>
	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>
					<?php 
				include("bagian/connect.php");
				$sql="Select * from categories";

				$results=$connect->query($sql); 
				$final1=$results->fetch_assoc()?>
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter="./uploads/<?php echo $final['picture'] ?>">
						<?php echo $final1 ['name'] ?>
					</button>
				</div>
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
					
					</div>
				</div>
			</div>
				<div class="row isotope-grid">
				<?php 
				include("bagian/connect.php");
				$sql="Select * from products";

				$results=$connect->query($sql);
				while ($final=$results->fetch_assoc()) { ?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $final['category_id'] ?>">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="./uploads/<?php echo $final['picture'] ?>" alt="IMG-PRODUCT" style="min-height: 300px; max-height: 300px">

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

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="product.php" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div>
		</div>
	</section>

<?php
include ("bagian/footer.php");
?>
</body>
</html>