<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("handler/customersession.php");
include ("bagian/head.php");
?>
<body class="animsition">
	<?php
	include ("bagian/header.php");
?>
	<!-- Shoping Cart -->
	<div class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Action</th>
									<th class="column-2">Name</th>
									<th class="column-3">Price</th>
									<th class="column-5">Quantity</th>
								</tr>
								<?php 
								$total=0;
								if (isset($_SESSION['cart'])) {
									
									foreach ($_SESSION['cart'] as $key => $value) {
									$total=$total+$value['item_price']*$value['quantity'];
								?>
								<tr class="table_row">
									<td class="column-1">
										<div class="">
											<form action="cartremove.php" method="POST">
											<button class="btn btn-sm btn-outline-danger" name="remove">Remove</button>
											<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
											</form>
										</div>
									</td>
									<form action="cart2update.php" method="POST">
									<td class="column-2"><?php echo $value['item_name'] ?></td>
									<td class="column-3">Rp. <?php echo $value['item_price'] ?></td>
									<td class="column-5"><?php echo $value['quantity'] ?></td>


									
									
											</form>
										</td>
								</tr>
								<?php }
									
								} ?>
							</table>
						</div>
						<div >
							<div >
							</div><div>
							</div>
						</form>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									Rp. <?php echo $total ?>
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									We will serve you with our heart.
								</p>
								
								<div class="p-t-15">
								</form>	

									
									<form action="handler/orderhandler.php" method="POST">
									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Address">
									</div>

									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="phone" placeholder="Phone number">
									</div>
									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" name="payment">
											<option value="cash">Cash on delivery</option>
											<option value="paypal">Paypal</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
									
									
										
								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									Rp. <?php echo $total ?>
								</span>
							</div>
						</div>
						<input type="hidden" name="total" value="<?php echo $total ?>">
						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn1 p-lr-15 trans-04 pointer" type="submit" name="placeorder">
							Place Order
						</button>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	include('bagian/footer.php');
	?>
</body>
</html>