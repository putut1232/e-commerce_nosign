<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ("bagian/head.php");
?>
<body class="animsition">
	<?php
	include ("bagian/header.php");
?>
		
<!-- Product -->
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">			
					
				</div>
	
				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 ">

					</div>
					</div>
					</div>
					</div>
					
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<?php
				include("bagian/connect.php");
				$id=$_GET['details_id'];
				$sql="Select * from products where id='$id'";
				$results=$connect->query($sql);
				$final=$results->fetch_assoc();
				?>
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
							<div class="slick3 gallery-lb">		
								<div class="item-slick3" data-thumb="./uploads/<?php echo $final['picture'] ?>">
									<div class="wrap-pic-w pos-relative" >
										<img src="./uploads/<?php echo $final['picture'] ?>" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn1 trans-04" href="./uploads/<?php echo $final['picture'] ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								<div class="item-slick3" data-thumb="images/size-chart.jpg">
									<div class="wrap-pic-w pos-relative" >
										<img src="images/size-chart.jpg" alt="IMG-PRODUCT" >
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn1 trans-04" href="images/size-chart.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>				
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $final['name'] ?>
						</h4>

						<span class="mtext-106 cl2">
							Rp. <?php echo $final['price'] ?>
						</span>

						<p class="stext-102 cl3 p-t-23">
							<?php echo $final['description'] ?>
						</p><br>
							<?php 
						$kategori = mysqli_query($connect, "SELECT * FROM categories ORDER BY id DESC");		
						$k = mysqli_fetch_array($kategori)
				 			?>
						<p>Category : <?php echo $k['name'] ?></p><br>		
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-whatsapp"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>						
						<!--  -->
						<div class="p-t-33">
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
								
									<button onclick="location.href='carthandler.php?cart_id=<?php echo $final['id'] ?>&cart_name=<?php echo $final['name'] ?>&cart_price=<?php echo $final['price'] ?>'"class="flex-c-m stext-101 cl0 size-101 bg3 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Add to cart
									</button>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<!-- Footer -->
	<?php
	include('bagian/footer.php');
	?>

</body>
</html>