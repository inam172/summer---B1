<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Blood bank Management System</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link href="css/lightbox.css" rel="stylesheet" />
	<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="h_bg">
		<div class="wrap"></div>
		<div class="nav_bg">
			<div class="wrap">
				<?php require('header.php'); ?>
			</div>
			<div>
			</div>
			<div>
				<!-- Corousel  -->
				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="./Images/slider/g02.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h2>Salute!</h2>
								<p>Every Blood Donar is a Life Saver</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="./Images/slider/g01.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h2>Donate Blood!</h2>
								<p>Opportunities knock the door sometimes, so don’t let it go and donate blood</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="./Images/slider/g03.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h2>Donate blood and get real blessings</h2>
								<p>Sometimes money cannot save life but donated blood can"</p>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
			<div class="container my-5">
				<div class="row">
					<div class="col-md-6 body__left animate__bounceIn">
						<h2>WHO MAY DONATE BLOOD?</h2>
						<p class="my-4">Blood donation is a healthy habit that helps blood renewal and it is not hazardous at all. The volume of blood collected from a donor is about 450ml, this volume is compensated within 24hrs of donation and body replace the lost red cells within several weeks. Eligible healthy donors (age 18 to 60 years, having Hb >12gm/dl and weight >45) male can donate blood every 4 months interval and female every 6 months interval. Platelet Apheresis donor’s age should be 18 to 60 years weight >50kg and has not taken the medicine Plavix/Ticlid for last 14 days.</p>
					</div>
					<div class="col-md-6 body__right animate__animated animate__fadeInLeft">
						<img src="./Images/222m.png" alt="" class="ml-5">
					</div>
				</div>


				<div class="row my-5">
					<div class="col-md-6 body__left2 animate__backInDown">
						<h2 class="my-4">SOME INSTRUCTIONS PRIOR BLOOD DONATION:</h2>
						<ul class="prior">
							<li><i class="fas fa-check-circle"></i> Do not donate blood on an empty stomach.</li>
							<li><i class="fas fa-check-circle"></i> Maintain a gap of 30 min after meal.</li>
							<li><i class="fas fa-check-circle"></i> Drink water (2 glass) before blood donation</li>
							<li><i class="fas fa-check-circle"></i> Good sleep on the previous night.</li>
							<li><i class="fas fa-check-circle"></i> Do not donate blood if you have fever, taking antibiotics or aspirin or antihistamine or insulin.</li>
							<li><i class="fas fa-check-circle"></i> Do not take alcohol 24hrs prior blood donation.</li>
							<li><i class="fas fa-check-circle"></i> Do not smoke 30 min before or after blood donation.</li>
							<li><i class="fas fa-check-circle"></i> Avoid driving, vigorous exercise or playing tennis for at least 2-3hrs after blood donation.</li>
						</ul>


					</div>
					<div class="col-md-6 body__left2 animate__animated animate__fadeInLeft">
						<h2 class="my-4">SOME INSTRUCTIONS AFTER BLOOD DONATION: </h2>
						<ul class="prior">
							<li><i class="fas fa-check-circle"></i> Eat and Drink something before leaving the blood donor area.</li>
							<li><i class="fas fa-check-circle"></i> If there is bleeding from phlebotomy site raise arm and apply pressure to the site.</li>
							<li><i class="fas fa-check-circle"></i> Drink more fluid for next 4 hours.</li>
							<li><i class="fas fa-check-circle"></i> If the symptom persist either telephone or returns to the blood bank or see a doctor.</li>
							<li><i class="fas fa-check-circle"></i> If fainting or dizziness occur either lie down or sit with the head between the knees.</li>
							<li><i class="fas fa-check-circle"></i> Remove bandage after 1 hour</li>
							<li><i class="fas fa-check-circle"></i> Resume all normal activity if asymptomatic.</li>
						</ul>
					</div>
				</div>
				<div class="my-5 collection">
					<h2>COLLECTION OF BLOOD:</h2>
					<p class="my-5">Prior to blood donation, we do a screening process of the donor which consists of confidential medical examinations including medical history, hemoglobin examination, blood pressure, weight , pulse and temperature check . Then, a small amount of blood sample is taken for grouping, check for infectious diseases and cross matching. If all tests are okay then the donor is asked to donate blood. All our materials used in blood donation are strictly sterile and disposable.</p>
					<p class="pb-5">Single Donor Apheresis Platelet (SDP) are prepared by connecting the donor to a machine and selectively collecting the platelet and returning the remaining blood components back to the donor.</p>
					<div class="my-5">

					</div>
				</div>
			</div>
		
</body>

</html>