<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center"style="padding: 40px 0px 0px 0px;">Welcome to Blood Bank</h1>
						<p class="text-center"style="padding: 10px 0px 0px 0px; font-weight:600">
						Someone’s blood saved my life and made my mom smile – was that you?
					</p>
					
						</div>


						<h2 class="text-center">Find a Donor</h2>
						

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 30px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option>
	
	<optgroup title="Uttar Pradesh" label="&raquo; Uttar Pradesh"></optgroup>
	<option value="Agra" >Agra</option>
	<option value="Aligarh" >Aligarh</option>
	<option value="Ambedkar Nagar" >Ambedkar Nagar</option>
	<option value="Amroha" >Amroha</option>
	<option value="Auraiya" >Auraiya</option>
	<option value="Azamgarh" >Azamgarh</option>
	<option value="Badaun" >Badaun</option>
	<option value="Bahraich" >Bahraich</option>
	<option value="Ballia" >Ballia</option>
	<option value="Balrampur" >Balrampur</option>
	<option value="Banda District" >Banda District</option>
	<option value="Barabanki" >Barabanki</option>
	
	</select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
								<option value="">-- Blood Group --</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 20px 0 0 0;">Every drop counts – Donate Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						Blood from one donation can be divided into two components: red blood cells and plasma. The average adult has about 10 pints of blood, but a typical
						 whole-blood donation is only 1 pint.      Red blood cells have a short shelf life. ... You can donate whole blood every 
						 56 days—and we encourage you to donate as often as possible.
						</p>
						<a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">
							Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end donate section -->
			

			<div class="container">
				<h4 class="text-center" style=" font-weight:Bold ;padding: 50px 0 0 0"> What we Do?</h4>
			<h1 class="text-center"  style="color: Black; font-weight: 700;padding: 10px 0 0 0;">Why Donate Blood?</h1>
				<div class="row">
    				<div class="col">
					
    					<div class="card">
     						<h4 class="text-center red">Demand for blood types</h4>
								<img src="https://cdn0.iconfinder.com/data/icons/hand-color/100/Hand__5-512.png" alt="Our Vision" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								We maintain a regular supply of 
all blood types. We need enough 
of the right types of blood to meet 
day-to day patient needs and to 
cope with emergencies.
								</p>
								<a href="donate.php" class="btn btn-danger btn-lg text-center center-aligned">
							Learn More</a>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h4 class="text-center red">How Blood is used?</h4>
								<img src="https://static.thenounproject.com/png/859747-200.png" alt="Our Vision" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								Blood or the components of blood 
are used to treat patients with 
medical conditions such as 
anaemia, cancer blood disorders, 
and those having surgery.
								</p>
								<a href="donate.php" class="btn btn-danger btn-lg text-center center-aligned">
							Learn More</a>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h4 class="text-center red">How can you help them?</h4>
								<img src="https://cdn0.iconfinder.com/data/icons/blood-donation-flat-outline-life-saving-voluntary/426/blood_donation-512.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								Your blood saves lives. Your blood 
donation is an amazing gift to 
people who need it in an 
emergency or for on-going 
medical treatment. 
								</p>
								<a href="donate.php" class="btn btn-danger btn-lg text-center center-aligned">
							Learn More</a>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>