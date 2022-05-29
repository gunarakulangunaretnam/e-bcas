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
			   
			   <p class="Profile_herader">Provide Results</p>
			   
			   <hr style="height:1px; border:none; color:#000; background-color:#000;">
			
			</div>

					<div id="formSection">

						<?php

						if($this->session->flashdata('successResult')){

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
						echo form_open('mainPageController/resultValidation', $attributes); 

						 ?>

						 
							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="course_id">Course:</label>
							    <div class="col-sm-12 col-xs-11 col-md-2">
							      
							      <input list="department_data" id="module_course" name="module_course">

										<datalist id="department_data">
										 	<?php 

										 	 	foreach ($this->data['course_details'] as $value) {
														
													echo '<option class="course_details_val" value="'.$value['course_id'].'">'.$value['course_full_title']." (".$value['course_short_title'].")".'</option>';
												
												}
										 	 
										 	 ?>">
										</datalist>

							    </div>

							    <div class="col-sm-12 col-xs-11 col-md-5" style="font-size: 16px; font-weight: bold; color: red;" id="course_Name"></div>


							</div>


						 
							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="course_id">Batch No:</label>
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


							    <div class="col-sm-12 col-xs-11 col-md-5" style="font-size: 16px; font-weight: bold; color: red;" id="student_name"></div>


							</div>
							
							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="module_data">Module Name:</label>
							    <div class="col-sm-12 col-xs-11 col-md-2">
							      
							      <input list="module_data" id="module_data2" name="module_data">

										<datalist id="module_data">

											
										 	
										</datalist>

							    </div>

							    <div class="col-sm-12 col-xs-11 col-md-5" style="font-size: 16px; font-weight: bold; color: red;" id="module_name_display"></div>

							</div>
							
							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="grade">Grade:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <select name="grade" required="true" class="form-control">
							      	
							      	<option value="Distinction">Distinction</option>
							      	<option value="Merit">Merit</option>
							      	<option value="Pass">Pass</option>
							      	<option value="Redo">Redo</option>

							      </select>

							    </div>
							</div>

							<div class="form-group">
							    <label class="control-label col-sm-2 col-md-5" for="points">Points:</label>
							    <div class="col-sm-12 col-xs-11 col-md-5">
							      <input type="text"  name="points" required="true" class="form-control" id="points">
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

					document.getElementById("module_course").onmousedown=function(){

						this.value="";						
					
					}

					document.getElementById("module_data2").onmousedown=function(){

						this.value="";

					}


					document.getElementById("batch_data2").onmousedown=function(){

						this.value="";
					}

					document.getElementById("student_data2").onmousedown=function(){

						this.value="";
					}

					document.getElementById("module_course").onchange=function(){

					$.ajax({

				      type:'POST',
				      data:{course_id:this.value},
				      url:'<?php echo site_url('mainPageController/selectModuleDetails')?>', 
				      success:function(result){
				      
				  		data = JSON.parse(result);

				  		document.getElementById("module_data").innerHTML="";

				  		for(var a=0;a<data.length;a++){

				  			document.getElementById("module_data").innerHTML+='<option value="'+data[a].module_id+'">'+data[a].module_name+'<option>';
				  		}

				     
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

					$.ajax({

				      type:'POST',
				      data:{course_id:this.value},
				      url:'<?php echo site_url('mainPageController/selectCourseNameWithID')?>', 
				      success:function(result){
				    	
				    	document.getElementById("course_Name").innerHTML = result;

				      }

					}); 

					
					}

					document.getElementById("batch_data2").onchange=function(){

						var batch_no = this.value;
						var course_id = document.getElementById("module_course").value;


							$.ajax({

						      type:'POST',
						      data:{course_id:course_id,batch_no:batch_no},
						      url:'<?php echo site_url('mainPageController/selectModuleDetails2')?>', 
						      success:function(result){
						    
						  		data = JSON.parse(result);
						  		
						  		document.getElementById("student_data").innerHTML="";

						  		for(var a=0;a<data.length;a++){

						  			document.getElementById("student_data").innerHTML+='<option value="'+data[a].student_id+'">'+data[a].first_name+' '+data[a].last_name+'<option>';
						  		}

						      }

							}); 

					}

					document.getElementById("student_data2").onchange=function(){

							$.ajax({

						      type:'POST',
						      data:{student_id:this.value},
						      url:'<?php echo site_url('mainPageController/selectStudentName')?>', 
						      success:function(result){
						    
						  		document.getElementById("student_name").innerHTML = result;

						      }

							}); 						
					}

					document.getElementById("module_data2").onchange=function(){

						$.ajax({

						      type:'POST',
						      data:{module_id:this.value},
						      url:'<?php echo site_url('mainPageController/selectModuleName')?>', 
						      success:function(result){
						    
						  		document.getElementById("module_name_display").innerHTML=result;

						      }

							}); 
					}
														
				}
					
			</script>
					
		</body>

</html>