<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Beep electronics - About us </title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<?php include 'includes/header.php'; ?>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<?php include 'includes/navbar.php'; ?>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">About us</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">About us</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
        <div class="container">
        <center>
        <img src="img/logo1.png" alt="LOGO">
        </center>
        <br>
        <br>
        <h3>English</h3>
            <h4>Beep Electronics is a store with mainly online activities, which sells a wide range of electronic products, 
            the main purpose of which is automation, in order to facilitate the lives of citizens. </h4>
             <br>
             <br>

        <h3>Albanian</h3>
            <h4>Beep Electronics është dyqan me aktivitete kryesisht në internet,
             i cili shet një gamë të gjerë të produkteve elektornike, qëllimi kryesor i të cilit është automatizimi, 
             në mënyrë që të lehtësojë jetën e qytetarëve. </h4>
             </div>
	<!-- Contact us -->
	<br>
	<br>
				<center>
			<h1>Contact Us</h1>
			</center>
			<br>
	<br>
    <?php
	
	
	
	if(isset($_GET['sent'])=== true){
		echo '<center><h3>Thank you for contacting us!</h3></center>';
	}
	else{
	if(empty($errors)=== false){
		echo '<ul>';
		foreach($errors as $error){
			echo '<li>',$error,'</li>';
		}
		echo '</ul>';
	}
	
	?>  
        <div class="container">
        <form  action="other.php"method="post"class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your Name" type="text" name="uname"<?php if(isset($_POST['uname'])=== true)
																													 {
		echo 'value="',strip_tags($_POST['uname']),'"';
	}?>
																									>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your Email" type="text" name="uemail"<?php if(isset($_POST['uemail'])=== true){
		 echo 'value="',strip_tags($_POST['uemail']),'"';
	}?>
		>
                            </div>
                          <br>
						  <br>
						  <br>
                            <div class="container">
                                <textarea class="form-control" placeholder="Your message, or any irregularities in the system"name="message"<?php if(isset($_POST['message'])=== true){
	echo 'value="',strip_tags($_POST['message']),'"';	
	}?>
		></textarea>
		<br>
                            </div>
							<center>
                            <div class="col-md-12" class="btn btn-primary">
                                <input type="submit" class="send"  name="put" value="Send">
                            </div>
							</center>
                        </div>
                    </form>
                    </div>
                    <?php
						}
						    ?>
    <!-- End Contact us -->
    
    <!-- SECTION -->

		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<?php include 'includes/newsletter.php'; ?>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<?php include 'includes/footer.php'; ?>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>