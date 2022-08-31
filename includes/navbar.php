<ul class="main-nav nav navbar-nav" class="dropdown-menu" role="menu">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="aboutus.php">About Us</a></li>
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