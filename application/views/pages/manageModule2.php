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
			   
			   <p class="Profile_herader">Module Details</p>
			   
			   <hr style="height:1px; border:none; color:#000; background-color:#000;">
			
			</div>

				<div class="row" style="margin-top: -20px;">

					
							<div id="selectByID" style="margin-top: 20px;" class="col-md-6 col-xs-pull-1 col-sm-push-2 col-sm-12 col-xs-1 col-md-push-3 style1">

								  
								   <p id="search_method" style="font-weight: bold; margin-top: 4.5px;" class="col-sm-12 col-xs-11 col-md-4">Filter By Course:</p>

									<div class="col-sm-12 col-xs-11 col-md-8 sea">
								      <select  type="text"  name="course_id" required="true" class="form-control" id="course_id" placeholder="Enter Student ID">
								      	
								      	<?php
								      		
										    foreach ($this->data['module_details']  as $value) {

								            echo '<option value="'.$value['course_full_title'].'">'.$value['course_full_title'].'</option>';
								            
								            }
				      
   										?>';


								      </select>
								    </div>

								  
									<div class="form-group sea">
									    <div class="col-sm-12 col-xs-11  col-md-8 col-md-push-4" style="margin-top: 2px;"> 
									      <?php

									      	echo anchor('mainPageController/selectSPModule/', 'Search', ['class'=>'btn btn-primary btn-md custom', 'id'=>'search_btn']);

									      ?>
									    </div>
									</div>

							</div>
					
					<div id="table" class="col-md-12 col-sm-12 col-xs-12">
							

						<div style="overflow: auto">

				       <table id="dtHorizontalExample" style="margin-top: 40px;" class="table table-bordred table-striped">
				                   
				      <thead>
				                  
				       <th>Module ID</th>
				       <th>Module Code</th>
				       <th>Module Name</th>
				       <th>Module Level</th>
				       <th>Module Credit</th>
				       <th>Lecturing Hours</th>
				       <th>Course</th>

				      </thead>
				     
				     <tbody id="tbody">
				    
							    
				    <?php

				    	if(isset($this->data["module_details"])){

				    	foreach ($this->data["module_details"] as $value) {
				    	   
				    	   echo "<tr>";	
				    	
				    	   echo "<td class='id'>".$value["module_id"]."</td>";
				    	   echo "<td>".$value["module_code"]."</td>";
				    	   echo "<td>".$value["module_name"]."</td>";
				    	   echo "<td>".$value["module_level"]."</td>";
				    	   echo "<td>".$value["module_credit"]."</td>";
				    	   echo "<td>".$value["lecturing_hours"]."</td>";
				    	   echo "<td>".$value["course_full_title"]."</td>";
						  
				    	   echo '<td>'.anchor('mainPageController/moduleUdateDetails/'.$value["module_id"], 'Edit', ['class'=>'btn btn-primary btn-xs']).'</td>';

				    	   echo '<td>'.anchor('mainPageController/deleteModule/'.$value["module_id"], 'Delete', ['class'=>'btn btn-danger btn-xs']).'</td>';		           

				         
				        echo "</tr>";
					     }

					}


				    ?>
			
				    
				    
				    </tbody>
				        
				</table>

				
				</div>
			</div>
						
				</div>
			</div>

			</div>

		<?php include 'templates/script.php';?>

			<script type="text/javascript">

				window.onload=function(){

					document.getElementById("course_id").onchange=function(){

						var val = document.getElementById("course_id").value;

							$.ajax({

						      type:'POST',
						      data:{course_name:val},
						      url:'<?php echo site_url('mainPageController/CourseNameToID')?>', 
						      success:function(result){
						     	
						     	var hrefVal= document.getElementById("search_btn").href;
								document.getElementById("search_btn").href = hrefVal+result;

						      }

							}); 


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

					document.getElementById("course_id").onmousedown=function(){

						window.location.href='<?php echo site_url('mainPageController/manageModule')?>'

					}

				}
				
			</script>

		</body>

</html>