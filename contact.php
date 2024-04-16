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
			Contact
		</h2>
	</section>	

	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="handler/contact.php" method="POST">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Send Us A Message
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="How Can We Help?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn1 p-lr-15 trans-04 pointer">
							Submit
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<img src="images/icons/location.png">
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Based On
							</span>

							<p class="stext-115 size-213 p-t-18">
								Jaktim Pride
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<img src="images/icons/mobile.png">						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 ">
								
								Lets Talk

							</span>
							<p class="stext-115 size-213 p-t-18">
							<a href="https://api.whatsapp.com/send?phone=+62 813-8148-2806&text=Hai, Saya tertarik dengan produk anda" target="_blank"><p>+62 813-8148-2806</p></a>
							<a href="https://api.whatsapp.com/send?phone=+62 812-8851-5746&text=Hai, Saya tertarik dengan produk anda" target="_blank"><p>+62 812-8851-5746</p></a>
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<img src="images/icons/icon-email.png">
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Sale Support
							</span>

							<p class="stext-115 size-213 p-t-18">
								sabiliutomo@gmail.com
								pututaditama17@gmail.com
							</p>
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