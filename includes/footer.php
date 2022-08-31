<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Beep Electronics është dyqan me aktivitete kryesisht në internet, i cili shet një gamë të gjerë të produkteve elektornike, qëllimi kryesor i të cilit është automatizimi, në mënyrë që të lehtësojë jetën e qytetarëve. </p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i> Mati 1,Rruga-Shaqir Igrishta, 10000, Prishtinë</a></li>
									<li><a href="#"><i class="fa fa-phone"></i> +383(0)44-221-443</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i> beepelectronics.ks@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
								<li class="active"><a href="index.php">Home</a></li>
						<?php
             
                		$conn = $pdo->open();
                		try{
                  		$stmt = $conn->prepare("SELECT * FROM category");
                  		$stmt->execute();
                  		foreach($stmt as $row){
                    	echo "
                      	<li><a href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
                   		 ";                  
                 			 }
               			 }
                		catch(PDOException $e){
                  		echo "There is some problem in connection: " . $e->getMessage();
               		 	}

                		$pdo->close();

              			?>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="aboutus.php">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="cart_view.php">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="login.php">My Account</a></li>
									<li><a href="cart_view.php">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i>  Beep electronics</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>