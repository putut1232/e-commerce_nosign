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
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/contact.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
		Customers
		</h2>
	</section>	

	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="handler/customerlogin.php" method="POST">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Log in
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="Password">
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn1 p-lr-15 trans-04 pointer" name="login">
							Log in
						</button>
					</form>
				</div>

				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="handler/customerregister.php" method="POST">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Register
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="nama" placeholder="Write Your Name">
						</div>

						<div class="bor8 m-b-30">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password" placeholder="Password">
						</div>
						<div class="bor8 m-b-30">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" name="password2" placeholder="Confirm Password">
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn1 p-lr-15 trans-04 pointer">
							Submit
						</button>
					</form>
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