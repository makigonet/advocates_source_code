<?php
	session_start();
	
	include("db_con/dbCon.php");
	
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> 
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">
		<title></title>
	</head>
	<body>
		<header class="customnav bg-success">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<img src="images/upload/osaa3.jpg" alt="" style="width:45px;height auto;position:relative;top:1.5rem;float: left; position: relative;">
						<nav class="navbar navbar-expand-lg ">
							<a class="navbar-brand cus-a" href="index.php">ONLINE SYSTEM FOR  SEARCHING AND APPOINTMENT OF ADVOCATES</a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto ">
									<li class="active">
										<a class="nav-link cus-a" href="index.php">HOME <span class="sr-only">(current)</span></a>
									</li>
									<li class="">
										<a class="nav-link cus-a" href="lawyers.php">ADVOCATES</a><!--lawyers.html page-->

			
									</li>
									<li class="">
										<a class="nav-link cus-a" href="about.php">ABOUT</a>
									</li>
									<li class="">
										<a class="nav-link cus-a" href="contact.php">CONTACT </a>
									</li>
									<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
										<!-- <li class="">
											<a class="nav-link cus-a" href="admin_dashboard.php">DASHBOARD</a>
										</li> -->
										<li class="">
											<a class="nav-link cus-a" href="logout.php">LOGOUT</a>
										</li>
										<?php }else{ ?>
										<li class="">
											<a class="nav-link cus-a" href="login.php">LOGIN</a>
										</li>
										<li>
											<a class="nav-link cus-a" href="Register.php" role="button" aria-haspopup="true" aria-expanded="false">
												REGISTER
											</a>
											
										</li>
									<?php }?>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="banner">
				<div class="container">
					<div class="row">
						<div class="col-md">
							<div class="banner_content">
								<h1>Search Your Suitable Advocate Here !</h1>
							<!-- <button>	<a href="searchLawyer.php"type="submit" class="btn btn-md btn-primary "><i class="fa fa-search"></i>&nbsp; Find Advocate</a>lawyers.html page -->
							</div>
							

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- <section class="lawyerscard">
			<div class="container">
				<div class="row">
					<?php
						include_once 'db_con/dbCon.php';
						$conn = connect();
						
						$result = mysqli_query($conn,"SELECT * FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id AND user.status='Active'");
						
						while($row = mysqli_fetch_array($result)) {
						?>
						<div class="col-md-4">
							<div class="card" style="width: 18rem;">
								<img src="images/upload/<?php echo $row["image"]; ?>" class="card-img-top cusimg img-fluid" alt="img">
								<div class="card-body">
									<h5 class="card-title"><?php echo $row["first_Name"]; ?> <?php echo $row["last_Name"]; ?></h5> 
									<h6 class="card-title"><?php echo $row["speciality"]; ?></h6> 
									<h6 class="card-title"><span><?php echo $row["practise_Length"]; ?></span></h6> 
									
									<a class="btn btn-sm btn-info" href="send_mail_client.php.php?u_id=<?php echo $row["u_id"]; ?>"><i class="fa fa-street-view"></i>&nbsp; View Full Profile</a>
								</div>
							</div>
						</div>
						<?php
						}
					?>
				</div>
			</div>
		</section> -->
		<section class="our mision">
			<div class="container">
				<div class="row">
					<div class="col-md-7 ml-auto">
						<br>
						<h2>OUR MISSION</h2>
				<p>Our online system services as a comprehensive platform for individuals          
				  seeking legal assistance.it offers a user friendly interface where users      
				  can search for advocates based on their specific requirements,                
			    	such as practice areas, experience, location and ratings.The system provides  
				  detailed profiles of advocates, including their educational background, areas 
				  of expertise,professionals achievements and client reviews.Additionally,     
				  our system offers features that enhence the user experience. Users can       
				  schedule appointmens with Advocates directly through the platform,eliminating 
				  the need for time-consuming phone calls or office visits.the system also     
				  provides a secure messaging system, enambling seamless communication        
				  between clients and advocates.                                               

                 </p>
					 <br>

					 <h2>OUR SERVICES </h2>
						<p>Our vision is to create an efficient and user freiendly online 
						system that revolutionilices the way individuals search 
						dor and appoint advocates.We aim to empower people by providing
						 them with easy access to legal professionals who can effectively
						  address their legalprofessionalas who can effectivel address
						   their legal needs.
					</p>

					<br><br>
					

				


						
					</div>
					<div class="col-md-4">
					<div class="row">
					<div class="col-md-12">
					
						<form action="db_con/db_login.php" method="POST"  id="validateForm">
							<br>
							<h2>Hello !!! <i class="fas fa-hand-paper"></i></h2><hr/>
							<h4>Login here to find suitable Advocates or User Request <i class="fas fa-hand-point-down"></i></h4>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter your Valid Email address">
							</div>
							<div class="form-group">
								<label for="num">Password</label>
								<input type="password" class="form-control" name="passord" id="passord" placeholder="Enter your  Valid Password">
							</div>

							<input name="login" type="submit" class="btn btn-block btn-success" value="Login" />
							<!--after signup redirect user dashboard page-->
						</form>
					</div>
					</div>
					<br>
						<!-- <h2><a class="btn btn-block btn-success" href="lawyer_register.php">REGISTER AS ADVOCATES</a>redirect Advocate register page<h2> -->
					
						<h2><a class="btn btn-block btn-success" href="Register.php"> REGISTER </a><!--redirect user register page--><h2>
					</div>
				</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="bg-success">
			<div class="container">
				<div class="row">
					<div class="col">
						<h5>All rights reserved. 2023</h5>
					</div>
				</div>
			</div>
		</footer>
		<!-- Optional JavaScript -->
		<!-- jQuery -->
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>
