
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('include/head_section.php'); ?>
</head>

<body>
	<!-- Fixed navbar -->
	<?php include('include/header.php'); ?>

	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Contact Us</h1>
                    <p>If you have any query or question, you’ve come to the right place. Reach out to us and get to know more about our services and trainings.</p>
                </div>
    </header>

    <br>
	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-7">
						
						
						<form class="form-light mt-20" role="form">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" placeholder="Your name">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" placeholder="Email address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control" placeholder="Phone number">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Subject</label>
								<input type="text" class="form-control" placeholder="Subject">
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" id="message" placeholder="Write you message here..." style="height:100px;"></textarea>
							</div>
							<button type="submit" class="btn btn-two">Send message</button><p><br/></p>
						</form>
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">Office Address</h3>
								<div class="contact-info">
									<h5>Address</h5>
									<p>IIUISL building:  near Lal-Qilah Restaurant 
										autobahn road, Hyderabad 
									</p>
									
									<h5>Email</h5>
									<p><a href="mailto:info@spst.pk">info@spst.pk</a></p>
									
									<h5>Phone</h5>
									<p><a href="tel:03458880605">+92 345 888 0605</a> </p>
									<h5>Facebook</h5>
									<p><a href="https://www.facebook.com/SPSHyd/"><i class="fa fa-facebook"></i></a> </p>
									
								</div>
							</div> 
						</div> 						
					</div>
				</div>
			</div>
	<!-- /container -->

	 <?php include('include/footer.php'); ?>



	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>
