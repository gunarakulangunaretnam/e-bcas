<!DOCTYPE html>

<html>
	
		<head>
			
			<?php include 'templates/head.php';?>

		</head>

		<body style="background-image: url(<?php echo base_url()?>public_files/theme/dist/img/f.png);">
			
			<?php include 'templates/header.php';?>
			
			<?php include 'templates/aside.php';?>	
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