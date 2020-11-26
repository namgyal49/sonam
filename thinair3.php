<!DOCTYPE html>
<?php 
include ('accommodationformconnection.php');

?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" 
    type="image/png" 
    href="./logo.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,  />
    <meta name="description" content="Accommodation Form | Ladakh Bike Rental">
    
    <meta name="author" content="">
        <title>Accommodation Form</title>
<!-- 	    
		<link rel="shortcut icon" href="http://www.ladakhbikerental.com/uploads/ladakhbikerental_com/company/main/5911b8d5ba4b3159_fav_ladakh.png" type="image/x-icon">
		<link rel="icon" href="http://www.ladakhbikerental.com/uploads/ladakhbikerental_com/company/main/5911b8d5ba4b3159_fav_ladakh.png" type="image/x-icon">
		<link rel="canonical" href="http://www.ladakhbikerental.com/forms/accommodation-form" /> -->
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Template CSS -->
    <link href="template.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="theme-ii.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<style>

		body{
			background-color:#ccc;
		}
	</style>
        	</head>
            <body>

<h2> <centre><span>Accommodation Form</span> </centre></h2>	<section id="customForms" class="bookform content contact_form formarea customFormArea"
style="margin-left: 30%;margin-right: 30%;">
<!-- <form action="http://www.ladakhbikerental.com/forms/accommodation-form" name="forms" onSubmit="return form_validation();" enctype="multipart/form-data" method="post" accept-charset="utf-8"> -->
<form action="thinair3.php" method="POST">
	<input type="hidden" name="csrf_test_name" value="a800cc59c2fe22c9629463e47ef0a076" />
					<div id="page-wrapper" class="customeFomPanel">
						<div class="customeFormOuter">

							
							<div class="form-group customeFormInput">
								<label for="Name">Name <span class="required">*</span></label><div class="customeFormField ">
									<input type="text" class="form-control error_remove" name="names" id="contact_name" value=""  placeholder="Your Name"/>
									<span id="contact_name_error" class="validation_error"></span>
								</div>
							</div>

							<div class="form-group customeFormInput"> 
								<label for="Email">  Email  <span class="required">*</span></label>								<div class="customeFormField  ">
									<input type="text" class="form-control error_remove" name="email" id="email" value="" placeholder="Your Email" />
									<span id="email_error" class="validation_error"></span>
								</div>  
							</div>

							<div class="form-group customeFormInput">
								<label for="Mobile">Phone <span class="required">*</span></label>								<div class="customeFormField  ">
									<input type="text" class="form-control error_remove" name="phone" id="phone" value="" placeholder="Your Phone" />
									<span id="phone_error" class="validation_error"></span> 
								</div> 
							</div>


														<div class="form-group customeFormInput">
								<label for="Accommodation">
									Accommodation																		<span class="required">*</span>
																	</label>
                                <div class="customeFormField">
					    								    			<select class="form-control error_remove" name="accommodation" id="fe_id7"><option value="Hotels"  >Hotels</option><option value="Camps"  >Camps</option><option value="Guest House"  >Guest House</option></select>
																		<span id="fe_id7_error" class="validation_error"></span>
																	</div>
								
								
							</div>
														<div class="form-group customeFormInput">
								<label for="Check In">
									Check In																		<span class="required">*</span>
																	</label>
                                <div class="customeFormField">
					    								    			<input type="text" class="form-control datepicker error_remove" name="check_in" id="fe_id11" placeholder="in_date" required/>
																		
																	</div>
								
								
							</div>
														<div class="form-group customeFormInput">
								<label for="Check  Out">
									Check  Out																		<span class="required">*</span>
																	</label>
                                <div class="customeFormField">
					    								    			<input type="text" class="form-control datepicker error_remove" name="check_out" id="fe_id12" placeholder="out_date" required />
																		
																	</div>
								
								
							</div>
														<div class="form-group customeFormInput">
								<label for="Type">
									Type																		<span class="required">*</span>
																	</label>
                                <div class="customeFormField">
					    								    			<select class="form-control error_remove" name="typess" id="fe_id13"><option value="Luxury"  >Luxury</option><option value="Deluxe"  >Deluxe</option><option value="Budget "  >Budget </option></select>
																		<span id="fe_id13_error" class="validation_error"></span>
																	</div>
								
								
							</div>


							<div class="form-group customeFormInput">
								<label for="Type">
									Vehicles																		<span class="required">*</span>
																	</label>
                                <div class="customeFormField">
					    								    			<select class="form-control error_remove" name="vehicles" id="fe_id13"><option value="Bike"  >Bike</option><option value="Car"  >Car</option><option value="Rafting "  >Rafting </option><option value="jeepsafari"  >Jeep Safari</option></select>
																		<span id="fe_id13_error" class="validation_error"></span>
																	</div>
								
								
							</div>


														<div class="form-group customeFormInput">
								<label for="Places">
									Places																		<span class="required">*</span>
																	</label>
                                <div class="customeFormField">
					    								    			<select class="form-control error_remove" name="places" id="fe_id14"><option value="Leh"  >Leh</option><option value="Nubra"  >Nubra</option><option value="Kargil"  >Kargil</option><option value="Zanskar"  >Zanskar</option><option value="Lamayuru"  >Lamayuru</option><option value="Alchi"  >Alchi</option><option value="Pangong"  >Pangong</option><option value="Tsomoriri"  >Tsomoriri</option><option value="Tsokar"  >Tsokar</option><option value="Serchu"  >Serchu</option><option value="Kelong"  >Kelong</option><option value="Jispa"  >Jispa</option><option value="Manali"  >Manali</option></select>
																		<span id="fe_id14_error" class="validation_error"></span>
																	</div>
								
								
							</div>
														<div class="form-group customeFormInput">
								<label for="Comments">
									Comments																		<span class="required">*</span>
																	</label>
                                <div class="customeFormField">
					    								    			<textarea class="form-control error_remove" name="coments" id="fe_id18" placeholder=""></textarea>
																		<span id="fe_id18_error" class="validation_error"></span>
																	</div>
								
								
							</div>
							
                            
						</div>


						

						<div class="formActionBox">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary"> 
												
							
							<!-- <input type="reset" name="reset" value="Reset" class="btn btn-primary">
													<input type="hidden" name="hotel_id" value="">
							<input type="hidden" name="referral_url" value="">
							<input type="hidden" name="target" value=""> -->

						</div>
						
					</div>
					</form>				</section>
							</div>
						



        	

			        </div>
    </div>
</section>
</body>
</html>