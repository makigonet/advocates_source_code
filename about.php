

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
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
										<a class="nav-link cus-a" href="contact.php">CONTACT </a>
									</li>
									<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
										<li class="">
											<a class="nav-link cus-a" href="user_dashboard.php">DASHBOARD</a>
										</li>
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

</head>
<body>
	<?Php 
	include("db_con/dbCon.php"); ?>
	<!-- END nav -->
	<!-- <section    class="hero-wrap hero-wrap-2" style="background-image: url('images/preview.jpg');" data-stellar-background-ratio="0.5"> -->
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end">
				<div class="col-md-4 ftco-animate pb-2">
					<h1 class="mb-0 bread">About US</h1>
				
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container mb-4 mt-4">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 pl-md-5 pt-md-5">
					<div class="row justify-content-start py-4 ">
						<div class="col-md-12 heading-section ftco-animate">

							<h3 class="mb-4">Welcome to Mbeya online Advocate Appointment services</h3>
                            <img src="images/upload/osaa4.jpg" alt="" style="width:450px;height auto;position:relative;top:0.4rem;">
						
						<div class="div">
							<div><br>
							<p>One of the greatest benefits of the Online system for searching and appointment of advocates
                                 is its power to reach thousands of potential clients through internet.
						Online system for searching and appointment of advocates will advertise your exposure that you possess.
                         A number of best advocates are found in our area but due to lack of information we could not get them. 
						Unfortunately we became trapped to false and odd people who do not deserve to solve our legal problems.<p>
						 That’s why this Online system for searching and appointment of Advocates will dedicate to advertise your skill
                          and aptitude so that clients will have convenience to contact you with the help of this website.
                   Thousand and lakhs of people are connected to internet and use internet in mobiles, personal computers, 
                    laptops and many more electronic equipments.So, this website will be easy to expand 
                    your connectivity to the clients to resolve their legal issues.</p>
							</div>
							<div>
								<img src="images/upload/advocate.jpeg" alt="">
							</div>
						</div>                           
				 <div class="row ftco-counter py-5" id="section-counter">
			 <div class="col-md-8 col-lg-6 d-flex justify-content-center counter-wrap ftco-animate">
			<div class="block-18">
			</div>
		</div>
     
				
	</section>
		<div class="overlay"></div>
		<div class="container" style="height: 100px;">
			<div class="row justify-content-center">
				<div class="col-md-8 text-center mt-4">
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