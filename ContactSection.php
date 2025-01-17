<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Contact_style.css">

	<!-- *******  Font Awesome Icons Link  ******* -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	<!-- *******  Link To Goggle Fonts  *******  -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Contact Section</title>
</head>
<body>
	
	<video autoplay muted loop id="background-video">
        <source src="1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
	<div class="container">
		<main class="row">
			
			<!--     Left Section (Column) Starts    -->

			<section class="col left">
				
				<!-- Title Starts    -->

				<div class="contactTitle">
					<h2>Get In HART</h2>
					<p>Tharindu Pathiraja (23DA2-0042) <br>A creative software engineer crafting sleek, innovative web applications.</p>
				</div>

				<!--  *******   Title Ends   *******  -->

				<!--  *******   Contact Info Starts   *******  -->

				<div class="contactInfo">
					
					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="details">
							<span>Phone</span>
							<span>0714308284</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="details">
							<span>Email</span>
							<span>thpathi@gmail.com</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="details">
							<span>Location</span>
							<span>68/78 hospital road godawelawtta, polgahawela</span>
						</div>
					</div>

				</div>

				<!--  *******   Contact Info Ends   *******  -->

				<!--  *******   Social Media Starts   *******  -->

				<div class="socialMedia">
					<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
					<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
				</div>

				<!--  *******   Social Media Ends   *******  -->

			</section>

			<!--  *******   Left Section (Column) Ends   *******  -->

			<!--  *******   Right Section (Column) Starts   *******  -->

			<section class="col right">
				
				<!--  *******   Form Starts   *******  -->

				<form class="messageForm" action="send_email.php" method="POST">
						<div class="inputGroup halfWidth">
							<input type="text" name="name" required="required">
							<label>Your Name</label>
						</div>

						<div class="inputGroup halfWidth">
							<input type="email" name="email" required="required">
							<label>Email</label>
						</div>

						<div class="inputGroup fullWidth">
							<input type="text" name="subject" required="required">
							<label>Subject</label>
						</div>

						<div class="inputGroup fullWidth">
							<textarea name="message" required="required"></textarea>
							<label>Say Something</label>
						</div>

						<div class="inputGroup fullWidth">
							<button type="submit">Send Message</button>
						</div>
				</form>

				<!--  *******   Form Ends   *******  -->
			</section>

			<!--  *******   Right Section (Column) Ends   *******  -->

		</main>
	</div>
</body>
</html>
