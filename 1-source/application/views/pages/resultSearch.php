<!DOCTYPE html>

<html>
	
		<head>
			
			<?php include 'templates/head.php';?>

			<style type="text/css">
			
				.style1{

					border: 1px solid black;
					padding: 20px;
				
				}
				.sea{
					margin-bottom: 20px;

				}

				.custom{

					width: 100%;
				}

				.dtHorizontalExampleWrapper {
				  max-width: 600px;
				  margin: 0 auto;
				}
				#dtHorizontalExample th, td {
				  white-space: nowrap;
				}

				#overlay {
				    position: fixed; /* Sit on top of the page content */
				    display: none; /* Hidden by default */
				    width: 100%; /* Full width (cover the whole page) */
				    height: 100%; /* Full height (cover the whole page) */
				    top: 0; 
				    left: 0;
				    right: 0;
				    bottom: 0;
				    background-color: rgba(0,0,0,0.5); /* Black background with opacity */
				    z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
				    cursor: pointer; /* Add a pointer on hover */
				}

				#overlay{

					margin-left: 200px;
				}	

				#insideOver{

					margin-top: 100px;
					margin-left: 250px;
					color: white;
					background-color: black;
					width: 600px;
					border-radius: 50px;
					

				}

				.headings{

					font-size: 23px;
					line-height: 40px;

				}	
				.value{

					font-size: 23px;
					line-height: 40px;
					color:red;
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


			<div class="container-flud" style="width: %; margin-left: 18%;" >

			 <div id="tab1_head">
			   
			   <p class="Profile_herader">Search Results</p>
			   
			   <hr style="height:1px; border:none; color:#000; background-color:#000;">
			
			</div>

				<div class="row" style="margin-top: -20px;">

					
							<div id="selectByID" style="margin-top: 40px;" class="col-md-6 col-xs-pull-1 col-sm-push-2 col-sm-12 col-xs-1 col-md-push-3 style1">

								<div>
								   <p id="search_method" style="font-weight: bold; margin-top: 4.5px;" class="col-sm-12 col-xs-11 col-md-4">Course:</p>

									<div class="col-sm-12 col-xs-11 col-md-8 sea">
								      <select  type="text"  name="course_id" required="true" class="form-control" id="course_id" placeholder="Enter Student ID">
								      	<?php
								      		echo "<option></option>";
								      		foreach ($this->data['course_details'] as $value) {
								      			
								      			echo '<option>'.$value["course_full_title"].'</option>';
								      		}

								      	?>

								      </select>
								    </div>
								  </div>

								<div>
								   <p id="search_method" style="font-weight: bold; margin-top: 4.5px;" class="col-sm-12 col-xs-11 col-md-4">Batach No:</p>

									<div class="col-sm-12 col-xs-11 col-md-8 sea">
								      <select  type="text"  name="batch_id" required="true" class="form-control" id="batch_id" placeholder="Enter Student ID">


								      </select>
								    </div>

								</div>

								<div>
								   <p id="search_method" style="font-weight: bold; margin-top: 4.5px;" class="col-sm-12 col-xs-11 col-md-4">Student:</p>

									<div class="col-sm-12 col-xs-11 col-md-8 sea">

								       <input list="stundet_details" id="student" name="student" class="col-md-12">

										<datalist id="stundet_details">
										 	

										</datalist>

								    </div>

								</div>

								<div class="form-group sea">
									    <div class="col-sm-12 col-xs-11  col-md-8 col-md-push-4" style="margin-top: 2px;"> 
									      <?php

									      	echo anchor('mainPageController/manageResult/', 'Search', ['class'=>'btn btn-primary btn-md custom', 'id'=>'search_btn']);

									      ?>
									    </div>
								</div>		    

							</div>	
						</div>
					</div>
					

		<?php include 'templates/script.php';?>

			<script type="text/javascript">

				window.onload=function(){

					document.getElementById("course_id").onchange=function(){

						if(this.value!=""){

							$.ajax({

							      type:'POST',
							      data:{course_name:this.value},
							      url:'<?php echo site_url('mainPageController/batachNumbersForResults')?>', 
							      success:function(result){
							      

							      	var data = JSON.parse(result);
							      	document.getElementById("batch_id").innerHTML="";

							      	$.ajax({

									      type:'POST',
									      data:{course_id:data[0].course_id},
									      url:'<?php echo site_url('mainPageController/batachNumbersForResults2')?>', 
									      success:function(result){

									      	var data1 = JSON.parse(result);
									      	
									      	document.getElementById("batch_id").innerHTML="<option></option>";
									      	for(var a=0;a<data1.length;a++){

									      		document.getElementById("batch_id").innerHTML+='<option>'+data1[a].batch_number+"</option>";
									      	}
									      
									     
									      }

									}); 
							      
							     
							      }

							}); 

						}

					}

					document.getElementById("batch_id").onchange=function(){

								if(this.value!=""){

										$.ajax({

										      type:'POST',
										      data:{course_name:document.getElementById("course_id").value},
										      url:'<?php echo site_url('mainPageController/batachNumbersForResults')?>', 
										      success:function(result){

										      	var data = JSON.parse(result);

											      	$.ajax({

													      type:'POST',
													      data:{course_id:data[0].course_id,batch_number:document.getElementById("batch_id").value},
													      url:'<?php echo site_url('mainPageController/stundetGetter')?>', 
													      success:function(result){

													      		var data1 = JSON.parse(result);
													      		document.getElementById("stundet_details").innerHTML="";
													      		for(var i=0;i<data1.length;i++){

																	document.getElementById("stundet_details").innerHTML+="<option value='"+data1[i].student_id_card_no+"'>"+data1[i].first_name+" "+data1[i].last_name+"</option>"
													      		}

													      }

													}); 
										     
										      }

										}); 
								}
					}

					document.getElementById("student").onchange=function(){

						var oldHref = document.getElementById("search_btn").href;
						var newhreh=oldHref+this.value;
						document.getElementById("search_btn").href = newhreh;

					}

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

				}
				
			</script>

		</body>

</html>