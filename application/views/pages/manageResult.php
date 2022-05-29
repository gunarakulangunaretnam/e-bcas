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
			   
			   <p class="Profile_herader">Results</p>
			   
			   <hr style="height:1px; border:none; color:#000; background-color:#000;">
			
			</div>

				<div class="row" style="margin-top: -20px;">
			
					<div class="col-md-12" style="margin-top: 20px; position: relative; left: 20px;top: 5px;">
						
						<p style="font-size: 16px; font-weight: bold;">Student Name: <span style="font-weight: normal; color: red;"><?php

							$name="";
							$pointer = 0;

							foreach ($this->data['result_details2'] as $value) {
								
								if($pointer==0){
								
									$name = $value['first_name']." ".$value['last_name'];
								
								}
								
								$pointer++;
							}

							echo $name;

							?></span><p>
						<p style="font-size: 16px; font-weight: bold;">Course Title: <span  style="font-weight: normal; color: red;"><?php

							$name="";
							$pointer = 0;

							foreach ($this->data['result_details2'] as $value) {
								
								if($pointer==0){
								
									$name = $value['course_full_title'];
								
								}
								
								$pointer++;
							}

							echo $name;

							?></span><p>

					</div>



					<div id="table" class="col-md-12 col-sm-12 col-xs-12">
						<hr style="height:1px; border:none; color:#000; background-color:#000;">

					<div style="overflow: auto">

				       <table id="dtHorizontalExample"  class="table table-bordred table-striped">
				                   
				      <thead>
				       
				       <th>Module Name</th>
				       <th>Grade</th>
				       <th>Points</th>

				      </thead>
				     
				     <tbody id="tbody">
				    
							    
				    <?php

				    	if(isset($this->data["result_details2"])){

				    	foreach ($this->data["result_details2"] as $value) {
				    	   
				    	   echo "<tr>";	
				    	
				    	   echo "<td>".$value["module_name"]."</td>";
				    	   echo "<td>".$value["grade"]."</td>";
				    	   echo "<td>".$value["points"]."</td>";
						  
				    	   echo '<td>'.anchor('mainPageController/resultUpdate/'.$value["result_id"].'.'.$value["student_id_card_no"], 'Edit', ['class'=>'btn btn-primary btn-xs']).'</td>';

				    	   echo '<td>'.anchor('mainPageController/deleteResult/'.$value["result_id"].'.'.$value["student_id_card_no"], 'Delete', ['class'=>'btn btn-danger btn-xs']).'</td>';		           

				         
				        echo "</tr>";
					     }

					}


				    ?>
			
				    
				    
				    </tbody>
				        
				</table>


				
				</div>
				<hr style="height:1px; border:none; color:#000; background-color:#000;">
				<?php
			echo '<td>'.anchor('mainPageController/searchResults/', 'Back', ['class'=>'btn btn-primary btn-lg','style'=>'width:20%; position:relative; left:40%;']).'</td>';	
		?>
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

					document.getElementById("course_id").onchange=function(){

						var val = document.getElementById("course_id").value;
						
						if(val!="All"){

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

					}

				}
				
			</script>

		</body>

</html>