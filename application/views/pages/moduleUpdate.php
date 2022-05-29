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
			   
			   <p class="Profile_herader">Update Module</p>
			   
			   <hr style="height:1px; border:none; color:#000; background-color:#000;">
			
			</div>

					<div id="formSection">

						<?php

						if($this->session->flashdata('successModule')){

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
						echo form_open('mainPageController/updateModule', $attributes); 

						 ?>

						 	
								  

						 	<div class="form-group" style="display: none;">
							    <label class="control-label col-sm-2 col-md-5" for="module_id">Module ID:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="module_id" required="true" class="form-control" id="module_id">
							    </div>
							</div>
						 
							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="module_code">Module Code:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="module_code" required="true" class="form-control" id="module_code">
							    </div>
							</div>

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="module_name">Module Name:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="module_name" required="true" class="form-control" id="module_name">
							    </div>
							</div>
							
							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="module_level">Module Level:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <select name="module_level" required="true" id="module_level" class="form-control">
							      	
							      	<option value="Level-04">Level-04</option>
							      	<option value="Level-05">Level-05</option>

							      </select>

							    </div>
							</div>

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="module_credit">Module Credit:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="module_credit" required="true" class="form-control" id="module_credit">
							    </div>
							</div>

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="module_hours">Lecturing Hours:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="module_hours" required="true" class="form-control" id="module_hours">
							    </div>
							</div>					

							<div class="form-group" style="margin-top: 50px;">
							    <label class="control-label col-sm-2 col-md-5" for="Occupation"></label>
							    <div class="col-sm-12 col-xs-11  col-md-2"> 
							     <input style="font-weight: bold; font-size: 14px;" type="submit"type="button" value="Update" class="btn btn-success">
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

					document.getElementById("module_level").innerHTML='';
   				

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

					document.getElementById("module_code").value=' <?php

							    foreach ($this->data['module_details']  as $value) {

					            echo $value['module_code'];
					            
					            }
				      
   				 ?>';

   				 document.getElementById("module_name").value=' <?php

							    foreach ($this->data['module_details']  as $value) {

					            echo $value['module_name'];
					            
					            }
				      
   				 ?>';

   				 document.getElementById("module_level").innerHTML=' <?php

							    foreach ($this->data['module_details']  as $value) {

							    	$val = "Level-05";

							    	if($value['module_level']=="Level-05"){

							    		$val = "Level-04";
							    	}

					            echo '<option value="'.$value['module_level'].'">'.$value['module_level'].'</option>';
					            echo '<option value="'.$val.'">'.$val.'</option>';
					            
					            }


				      
   				 ?>';

   				  document.getElementById("module_credit").value=' <?php

							    foreach ($this->data['module_details']  as $value) {

					            echo $value['module_credit'];
					            
					            }
				      
   				 ?>';

   				   document.getElementById("module_hours").value=' <?php

							    foreach ($this->data['module_details']  as $value) {

					            echo $value['lecturing_hours'];
					            
					            }
				      
   				 ?>';

   				 document.getElementById("module_id").value=' <?php

							    foreach ($this->data['module_details']  as $value) {

					            echo $value['module_id'];
					            
					            }
				      
   				 ?>';



				}


			</script>
					
		</body>

</html>