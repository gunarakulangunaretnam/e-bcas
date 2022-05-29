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
			   
			   <p class="Profile_herader">Course Details</p>
			   
			   <hr style="height:1px; border:none; color:#000; background-color:#000;">
			
			</div>

				<div class="row" style="margin-top: -20px;">
				
					
					<div id="table" class="col-md-12 col-sm-12 col-xs-12">
							

						<div style="overflow: auto">

				       <table id="dtHorizontalExample" style="margin-top: 40px;" class="table table-bordred table-striped">
				                   
				       <thead>
				                  
				       <th>Course ID</th>
				       <th>Course Short Title</th>
				       <th>Course Full Title</th>
				       <th>Course Type</th>
				       <th>Duration</th>
				       <th>Total Payment</th>
				      
				       
				       
				       <th>Edit</th>                
				       <th>Delete</th>
				      
				      </thead>
				     
				     <tbody id="tbody">
				    
							    
				    <?php

				    	if(isset($this->data["course_details"])){

				    	foreach ($this->data["course_details"] as $value) {
				    	   
				    	   echo "<tr>";	
				    	
				    	   echo "<td class='id'>".$value["course_id"]."</td>";
				    	   echo "<td>".$value["course_short_title"]."</td>";
				    	   echo "<td>".$value["course_full_title"]."</td>";
				    	   echo "<td>".$value["course_type"]."</td>";
				    	   echo "<td>".$value["duration"]."</td>";
				    	   echo "<td>".$value['total_payment']."</td>";
				    	  
				    	  	

						  echo '<td>'.anchor('mainPageController/manageCoursesUpdate/'.$value["course_id"], 'Edit', ['class'=>'btn btn-primary btn-xs']).'</td>';

				           echo '<td>'.anchor('mainPageController/manageCoursesDelete/'.$value["course_id"], 'Delete', ['class'=>'btn btn-danger btn-xs']).'</td>';

				         
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