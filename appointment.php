
<?php include_once "header.php"?>

<!-- banner1 -->
	<div class="banner1 jarallax">
		<div class="container">
		</div>
	</div>

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.php">Home</a><i>|</i></li>
				<li>Appointment</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
<!-- icons -->
	<div class="banner-bottom" id="about">
		<div class="container">
					<h2 class="w3_heade_tittle_agile">Appointment</h2>
			        <p class="sub_t_agileits">Make an appointment and we will contact you shortly</p>

					<div class="book-appointment">
						<h4>Make an appointment</h4>
								<form action="#" method="post">
								<div class="left-agileits-w3layouts same">
								<div class="gaps">
									<p>Patient Name</p>
										<input type="text" name="Patient Name" placeholder="" required=""/>
								</div>	
									<div class="gaps">	
									<p>Phone Number</p>
										<input type="text" name="Number" placeholder="" required=""/>
									</div>
									<div class="gaps">
									<p>Email</p>
											<input type="email" name="email" placeholder="" required="" />
									</div>	
									<div class="gaps">
									<p>Symptoms</p>
											<textarea name="About Symptoms" placeholder="" required="" ></textarea>
									</div>
								</div>
								<div class="right-agileinfo same">
								<div class="gaps">
									<p>Select Date</p>		
											<input  id="datepicker1" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="gaps">
									<p>Department</p>	
										<select class="option">
											<option></option>
											<option>Rehab</option>
											<option>Training</option>
										
										</select>
								</div>
								<div class="gaps">
									<p>Gender</p>	
										<select class="option">
											<option></option>
											<option>Male</option>
											<option>Female</option>
										</select>
								</div>
								<div class="gaps">
									<p>Time</p>		
										<input type="text" id="timepicker" name="Time" class="timepicker option" value="">	
								</div>
								</div>
								<div class="clearfix"></div>
											  <input type="submit" value="Make an Appointment">
								</form>
							</div>
					   </div>

		</div>
	</div>
<!-- icons -->


<?php include_once "footer.php"?>