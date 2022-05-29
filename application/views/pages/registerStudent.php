<!DOCTYPE html>

<html>
	
		<head>
			
			<?php include 'templates/head.php';?>

			<style type="text/css">
				
			#student_codes{

				margin-left: 100px;
				margin-top:100px;
			}
			#head{
				margin-left: 60px;
				margin-top: -80px;
			}
			#formSection{

				margin-top: 50px;
				
			}

			#err{

				text-align: center;
				margin-left: 67px;
				font-weight: bold;
				font-size: 16px;
				background-color: none;

			}
			
			#scess{

				text-align: center;
				margin-left: 67px;
				font-weight: bold;
				font-size: 16px;
				background-color: none;
			}

			input::-webkit-outer-spin-button,
			input::-webkit-inner-spin-button {
   				 /* display: none; <- Crashes Chrome on hover */
		    -webkit-appearance: none;
		    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
			}

			@media only screen and (max-width: 700px) {
    
				#student_codes{

					margin-left: 0px;
					margin-top: 0px;
				}

				#err{

				text-align: center;
				margin-left: 0px;
				font-weight: bold;
				font-size: 16px;
				background-color: none;

			}

			#scess{

				text-align: center;
				margin-left: 67px;
				font-weight: bold;
				font-size: 16px;
				background-color: none;
			}

			}

			.Profile_herader{

				font-family: cursive;
				font-size: 25px;
				font-weight: bold;
				margin-left: 20px;
				margin-top: 10px;
				text-align: center;

			}	


			</style>

		</head>

		<body>
			
			<?php include 'templates/header.php';?>
			<?php include 'templates/aside.php';?>	
		
		<div class="container">
			<div class="row">
				<div id="student_codes">

			 <div id="tab1_head" style="margin-top: -80px; position: relative;left: 70px;">
			   
			   <p class="Profile_herader">Student Registration</p>
			   
			   <hr style="height:1px; border:none; color:#000; background-color:#000;">
			
			</div>

					<div id="formSection">

						<?php

						if($this->session->flashdata('successStudent')){

								 echo '<div id="scess" style="background-color:green;" class="alert col-md-12 col-sm-12 alert-success alert-dismissible fade in">'
						    ,'<a href="#" style="color:black font-weight:bold;font-size:24px; " class="close" data-dismiss="alert" aria-label="close">&times;</a>
						 Registration Completed Successfully. </div>';
							}

						?>

						<?php echo validation_errors('<div id="err" style="background-color:green;" class="alert col-md-12 col-sm-12 alert-danger alert-dismissible fade in">'
						    ,'<a href="#" style="color:black font-weight:bold;font-size:24px; " class="close" data-dismiss="alert" aria-label="close">&times;</a>
						     </div>');?>
						
						<?php

						$attributes = array('class' => 'form-horizontal');
						echo form_open('mainPageController/studentvalidation', $attributes); 

						 ?>

						 	<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="student_id">Student ID:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="student_id" required="true" class="form-control" id="student_id" placeholder="Enter Student ID">
							    </div>
							</div>

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="first_name">First Name:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="first_name" required="true" class="form-control" id="first_name" placeholder="Enter First Name">
							    </div>
							</div>

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="last_name">Last Name:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="last_name" required="true" class="form-control" id="last_name" placeholder="Enter Last Name">
							    </div>
							</div>

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="dob">Date of Birth:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="date"  name="dob" required="true" class="form-control" id="dob" placeholder="Enter Date of Birth">
							    </div>
							</div>

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="age">Age:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="age" required="true" class="form-control" id="age" placeholder="Enter Age">
							    </div>
							</div>

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="gen">Gender:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5"> 
							    <div style="margin-top: 7px; margin-left: 5px;">
							      <input type="radio" name="gender" required="true" value="male"> <span>Male</span>
							      <input style="margin-left: 10px;"  type="radio" name="gender" value="female"> <span>Female</span>
							    </div>
							    </div>
							</div>


							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="address">Address:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <textarea name="address" required="true" class="form-control" id="address"> </textarea>
							    </div>
							</div>

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="email">Email ID:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="email" required="true" class="form-control" id="email" placeholder="Enter Email ID">
							    </div>
							</div>

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="phone">Phone No:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="phone" required="true" class="form-control" id="phone" placeholder="Enter Phone Number">
							    </div>
							</div>	

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="nic">NIC Card No:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="nic" required="true" class="form-control" id="nic" placeholder="Enter Phone Number">
							    </div>
							</div>


							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="course">Course :</label>
							    <div class="col-sm-12 col-xs-11 col-md-2">
							    	
							    	    <input list="course_details" id="course" name="course">

										<datalist id="course_details">
										 	<?php 

										 	 	foreach ($this->data['course_details'] as $value) {
														
													echo '<option class="course_details_val" value="'.$value['course_id'].'">'.$value['course_full_title']." (".$value['course_short_title'].")".'</option>';
												
												}
										 	 
										 	 ?>">
										</datalist>

							    </div>

							     <div class="col-sm-12 col-xs-11 col-md-5" style="font-size: 16px; font-weight: bold; color: red;" id="course_name"></div>

							</div>

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="course">Batch No:</label>
							    <div class="col-sm-12 col-xs-11 col-md-2">
							    	
							    	  
							    	<input list="batch" autocomplete="off" required="true" name="batch" id="id2">
									
									<datalist id="batch">

									</datalist>
										

							    </div>

							</div>

							<div class="form-group" style="margin-top: 50px;">
							    <label class="control-label col-sm-2 col-md-5" for="Occupation"></label>
							    <div class="col-sm-12 col-xs-11  col-md-2"> 
							     <input style="font-weight: bold; font-size: 14px;" type="submit"type="button" value="Register" class="btn btn-success form-control">
							    </div>
							</div>						 

						</form>
					
					</div>
				
				</div>

			</div>
		</div>
		
			<?php include 'templates/script.php';?>

			<script type="text/javascript">
				
				window.onload=function(){

					$.ajax({

				      type:'POST',
				      data:{theme_value:"value_2"},
				      url:'<?php echo site_url('mainPageController/theme_id')?>', 
				      success:function(result){

				      
				       var values = result.split(" ");

				       document.getElementById("nav_id_2").style.backgroundColor=values[0];
				       document.getElementById("nav_id").style.backgroundColor=values[0];
				       document.getElementById("as").style.backgroundColor=values[1];

				     
				      }

					}); 


					document.getElementById("course").onmousedown=function(){

						var value = document.getElementById("course").value="";			
						document.getElementById("batch").innerHTML="";
						document.getElementById("id2").value="";

					}


					document.getElementById("course").onchange=function(){

						var value= document.getElementById("course").value;

						

						$.ajax({

						      type:'POST',
						      data:{value:value},
						      url:'<?php echo site_url('mainPageController/get_batch_ids')?>', 
						      success:function(result){

						      	var res = result.split("");

						      	for(var s=0;s<res.length;s++){

						      		document.getElementById("batch").innerHTML+='<option value="'+res[s]+'">';

						      	}

				      		}

						}); 

						$.ajax({

						      type:'POST',
						      data:{course_id:this.value},
						      url:'<?php echo site_url('mainPageController/getCouese_name_forStudent')?>', 
						      success:function(result){

						      	document.getElementById("course_name").innerHTML=result;

				      		}

						}); 


					}
 

					document.getElementById("id1").onclick=function(){

						document.getElementById("id1").value="";
						
					};	



						
				}


			</script>

			<?php

						if($this->session->flashdata('successStudent')){

							 echo '<script type="text/javascript">',
									     '$("#scess").delay(3000).fadeOut(function(){

			
									   
									     });',
									     '</script>';


						}

						?>

					
		</body>

</html>