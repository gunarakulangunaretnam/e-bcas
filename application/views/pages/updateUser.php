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
			   
			   <p class="Profile_herader">Update User</p>
			   
			   <hr style="height:1px; border:none; color:#000; background-color:#000;">
			
			</div>

					<div id="formSection">

						<?php

						if($this->session->flashdata('successCourse')){

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
						echo form_open('mainPageController/updateUserDetails', $attributes); 

						 ?>

						 	<div class="form-group" style="display: none;">
							    <label class="control-label col-sm-2 col-md-5" for="user_id">User ID:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="user_id" required="true" class="form-control" id="user_id">
							    </div>
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
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="password" required="true" class="form-control" id="password" >
							    </div>
							</div>

							
							<div class="form-group" style="margin-top: 50px;">
							    <label class="control-label col-sm-2 col-md-5" for="Occupation"></label>
							    <div class="col-sm-12 col-xs-11  col-md-2"> 
							     <input style="font-weight: bold; font-size: 14px;" type="submit" value="Update" class="btn btn-success form-control" id="submitBTn">
							    </div>
							</div>		

									 
						</form>
					
					</div>
				
				</div>

			</div>
		</div>
		
			<?php include 'templates/script.php';?>

			<script type="text/javascript">

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

					document.getElementById("username").onkeyup=function(){

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

					document.getElementById("user_id").value='<?php

							foreach ($this->data['user_details']  as $value) {

					            echo $value['user_id'];
					            
					        }
				      
   				    ?>'; 

   				    document.getElementById("username").value='<?php

							foreach ($this->data['user_details']  as $value) {

					            echo $value['username'];
					            
					        }
				      
   				 ?>'; 

   				  document.getElementById("password").value='<?php

							foreach ($this->data['user_details']  as $value) {

					            echo $value['password'];
					            
					        }
				      
   				 ?>'; 



			</script>

		</body>

</html>