<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +383(0)44-221-443</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> beepelectronics.ks@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Mati 1,Rruga-Shaqir Igrishta, 10000, Prishtinë</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-euro"></i> Euro</a></li>
						<?php
            if(isset($_SESSION['user'])){
              $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
              echo '
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="'.$image.'" class="img-circle" width="40" height="40" alt="User Image">
                    <span class="hidden-xs">'.$user['firstname'].' '.$user['lastname'].'</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
					<center>
                    <li class="user-header">
                     <center> <img src="'.$image.'" class="user-image" width="80" height="95" alt="User Image"> </center>

                      <h5>
                        '.$user['firstname'].' '.$user['lastname'].'
						<br>
                        <small>Member since '.date('M. Y', strtotime($user['created_on'])).'</small>
                      </h5>
                    </li>
					</center>
					<center>
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="profile.php" class="btn btn-primary" >Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="logout.php" class="btn btn-primary">Logout</a>
                      </div>
                    </li>
					</center>
                  </ul>
                </li>
              ';
            }
            else{
              echo "
                <li><a href='login.php'>Login</a></li>
                <li><a href='signup.php'>Signup</a></li>
              ";
            }
          ?>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo1.png" alt="" >
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form method="POST" class="navbar-form navbar-left" action="search.php">
									<select class="input-select">
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
										<option value="0">All Categories</option>
										<option value="1"></option>
									</select>
									<form method="POST" class="navbar-form navbar-left" action="search.php">
									<input class="input" type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty cart_count"></div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div id="cart_menu" class="row cart-detail">
											<ul  id="cart_menu" class="row cart-detail"></ul>
												<div class="product-img">
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
										<small><span class="cart_count"></span> Item(s) selected</small>
											<h5>Go to cart</h5>
										</div>
										<div class="cart-btns">
											<a href="cart_view.php">View Cart</a>
											<a href="checkout.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->
										 <?php include 'includes/scripts.php'; ?>
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>