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
			   
			   <p class="Profile_herader">Create Accounts</p>
			   
			   <hr style="height:1px; border:none; color:#000; background-color:#000;">
			
			</div>

					<div id="formSection">

						<?php

						if($this->session->flashdata('successAccounts')){

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
						echo form_open('mainPageController/uservalidation', $attributes); 

						 ?>

						 
						<div class="form-group">
							    
							    <label class="control-label col-sm-2 col-md-5" for="course_id">Course:</label>
							    <div class="col-sm-12 col-xs-11 col-md-2">

							   		 <input list="department_data" id="course_id" name="course_id">

										<datalist id="department_data">
										 	<?php 

										 	 	foreach ($this->data['batch_details'] as $value) {
														
													echo '<option class="course_details_val" value="'.$value['course_id'].'">'.$value['course_full_title']." (".$value['course_short_title'].")".'</option>';
												
												}
										 	 
										 	 ?>">
										</datalist>

							    </div>

							     <div class="col-sm-12 col-xs-11 col-md-5" style="font-size: 16px; font-weight: bold; color: red;" id="course_name"></div>

						</div>


						<div class="form-group">
							    
							    <label class="control-label col-sm-2 col-md-5" for="batch_data">Batch No:</label>
							    <div class="col-sm-12 col-xs-11 col-md-2">
							      
							      <input list="batch_data" id="batch_data2" name="batch_data">

										<datalist id="batch_data">


										 	
										</datalist>

							    </div>


						</div>

						<div class="form-group">
							    
							    <label class="control-label col-sm-2 col-md-5" for="student_data">Student:</label>
							    <div class="col-sm-12 col-xs-11 col-md-2">
							      
							      <input list="student_data" id="student_data2" name="student_data">

										<datalist id="student_data">

										 	
										</datalist>

							    </div>


							    <div class="col-sm-12 col-xs-11 col-md-5"  style="font-size: 16px; font-weight: bold; color: red;margin-bottom: 20px;" id="student_name"></div>

						</div>

							
							<div class="form-group">
								    <label class="control-label col-sm-2 col-md-5" for="username">Username:</label>
								    <div class="col-sm-12 col-xs-11 col-md-4">
								      <input type="text"  name="username" required="true" class="form-control" id="username">
								    </div>
								    <div id="display_status" style="font-size: 14px; font-weight: bold; color: red;border: 2px solid green; display: none;position: relative;top: 5px;" class="col-sm-12 col-xs-11 col-md-3"></div>
							</div>

							<div class="form-group">
								    <label class="control-label col-sm-2 col-md-5" for="password">Password:</label>
								    <div class="col-sm-12 col-xs-11 col-md-4">
								      <input type="text"  name="password" required="true" class="form-control" id="password">
								    </div>
							</div>
							
							
							<div class="form-group" style="margin-top: 50px;">
							    <label class="control-label col-sm-2 col-md-5" for="Occupation"></label>
							    <div class="col-sm-12 col-xs-11  col-md-2"> 
							     <input style="font-weight: bold; font-size: 14px;" type="submit"type="button" value="Create" class="btn btn-success form-control" id="submitBTn">
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

					document.getElementById("course_id").onmousedown=function(){

						this.value="";
					}

					document.getElementById("course_id").onchange=function(){

						$.ajax({

					      type:'POST',
					      data:{course_id:this.value},
					      url:'<?php echo site_url('mainPageController/batach_id_to_name')?>', 
					      success:function(result){

					      		document.getElementById("course_name").innerHTML=result;
					      		
					      }

						}); 

					document.getElementById("batch_data").innerHTML="";

					$.ajax({

				      type:'POST',
				      data:{course_id:this.value},
				      url:'<?php echo site_url('mainPageController/selectBatachDetials')?>', 
				      success:function(result){
				    
				  		data = JSON.parse(result);

				  		document.getElementById("batch_data2").innerHTML="";

				  		for(var a=0;a<data.length;a++){

				  			document.getElementById("batch_data").innerHTML+='<option value="'+data[a].batch_number+'">'+data[a].batch_number+'<option>';
				  		}

				      }

					}); 

					}

					document.getElementById("batch_data2").onchange=function(){

						var batch_no = this.value;
						var course_id = document.getElementById("course_id").value;

							$.ajax({

						      type:'POST',
						      data:{course_id:course_id,batch_no:batch_no},
						      url:'<?php echo site_url('mainPageController/selectStudentDetailsForAccounts')?>', 
						      success:function(result){

						  		data = JSON.parse(result);

						  		document.getElementById("student_data").innerHTML="";

						  		for(var a=0;a<data.length;a++){

						  			document.getElementById("student_data").innerHTML+='<option value="'+data[a].student_id+'">'+data[a].first_name+' '+data[a].last_name+'<option>';
						  		}

						      }

							}); 

					}

					document.getElementById("batch_data2").onmousedown=function(){

						this.value="";

					}

					document.getElementById("student_data2").onmousedown=function(){

						this.value="";
					}

					document.getElementById("student_data2").onchange=function(){

						$.ajax({

						      type:'POST',
						      data:{student_id:this.value},
						      url:'<?php echo site_url('mainPageController/student_id_to_card_id')?>', 
						      success:function(result){
						    
						    	document.getElementById("username").value = result;
						  		
						      }

						}); 

						$.ajax({

						      type:'POST',
						      data:{student_id:this.value},
						      url:'<?php echo site_url('mainPageController/selectStudentName')?>', 
						      success:function(result){
						    
						  		document.getElementById("student_name").innerHTML = result;

						      }

						}); 		

					}

					document.getElementById("username").onblur=function(){

						$.ajax({

						      type:'POST',
						      data:{username:this.value},
						      url:'<?php echo site_url('mainPageController/checkUserName')?>', 
						      success:function(result){

						  		if(result==""){

						  			document.getElementById("username").style.border="1px solid #D2D6DE";
						  			document.getElementById("submitBTn").disabled = false;
						  			document.getElementById("display_status").style.display="none";
						  			document.getElementById("display_status").innerHTML="";


						  		}else{

						  			document.getElementById("username").style.border="2px solid red";
						  			document.getElementById("submitBTn").disabled = true;
						  			document.getElementById("display_status").style.display="block";
						  			document.getElementById("display_status").innerHTML="The username has already been taken.";

						  		}

						      }

						}); 	
						
					}
						
				}
					
			
				
				
					
			


			</script>
					
		</body>

</html>