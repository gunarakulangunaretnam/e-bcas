<!DOCTYPE html>

<html>
	
		<head>
			
			<?php include 'templates/head.php';?>
			<link rel="stylesheet" href="<?php echo base_url()?>/public_files/theme/profile/style.css" >
			<link rel="stylesheet" href="<?php echo base_url()?>/public_files/croppie/croppie.css">



			<style type="text/css">
				
			#scess{

				text-align: center;
				position: relative;
				left: 200px;
				top: 5px;
				margin-top: -5px;
				margin-bottom:0px;
				font-weight: bold;
				font-size: 16px;
				background-color: none;
				z-index: 100;

			}
			#box{

				background-image: url(<?php echo base_url()?>public_files/theme/dist/img/d.png);
				display: none;
				width: 1112px;
				position: absolute;
				left: 229px;
				top: 50px;
				height: 840px;
				z-index: 1000;
								

			}



			#subBox{

				width: 1112px;
				height: 840px;
				background-color: rgba(0,0,0,0.5);	
				
			
			}

			#cancelBtn{

				color: red;
				text-transform: uppercase;
				font-size: 25px;
				font-weight: bold;
				position: relative;
				top: -556px;
				left: 1066px;
				cursor: default;

			}

			#cancelBtn:hover{

				color: green;
				text-transform: uppercase;
				font-size: 25px;
				font-weight: bold;
				position: relative;
				top: -558px;
				left: 1068px;
				cursor: pointer;
				
			}



			#upload-demo{

				width:350px;
				position: relative;
				left: 360px;
				top: 30px;
				background-color: #A112BD;
				height: 370px;
				padding: 20px 20px 60px 20px;
				visibility: hidden;
				
				
			}

			#box2{

				width: 350px;
				height: 370px;
				position: relative;
				left: 360px;
				top: -810px;
				padding: 20px 20px 60px 20px;
				background-color: #A112BD;
				visibility: visible;

				
			}

			#center_img{

				width: 300px;
				height: 300px;
				border: 1px solid red;
				position: relative;
				left: 5px;
				background-color: rgba(0,0,0,0.5);
			}

			#center_img > img {

				width: 200px;
				height: 200px;
				position: relative;
				left: 50px;
				top:48px;

			}

			.Profile_herader{

				font-family: cursive;
				font-size: 25px;
				font-weight: bold;
				margin-left: 20px;
				margin-top: 10px;

			}



			.place_holder{
				
				margin-right:100px;
				font-size: 18px;
				font-weight: bold;

				
				
			}
			.main_holder{
				
				background-color: rgba(0,0,0,0.1);

					
			}
			.main_holder:hover{
				
				background-color: rgba(0,0,0,0.5);

					
			}
			.dropBtns{
				 margin-left: 20px;
			}
			.placer{

				font-family: "Gill Sans", sans-serif;
				font-weight:normal;
				font-size:15px;
			}

				.separator {
			    border-right: 1px solid #dfdfe0; 
			}
			.icon-btn-save {
			    padding-top: 0;
			    padding-bottom: 0;
			}
			.input-group {
			    margin-bottom:10px; 
			}
			.btn-save-label {
			    position: relative;
			    left: -12px;
			    display: inline-block;
			    padding: 6px 12px;
			    background: rgba(0,0,0,0.15);
			    border-radius: 3px 0 0 3px;
			}

			.view:hover{

				background-color: rgba(0,0,0,0.1);

			}

			.theme_text{

				text-transform: capitalize;
				text-align: center;
				font-size: 20px;
				font-weight: bold;

			}
			.theme_btn{

				width: 140px; 
				position: relative;
				left: 112px;
			}

			.container_img:hover{

				background-color: rgba(0,0,0,0.5);

			}

			</style>	

		</head>

		<body style="background-color: #C0C0C0;">

			<?php include 'templates/header.php';?>
			<?php include 'templates/aside.php';?>
			

				<div id="box">

					<div id="subBox">

						<div id="upload-demo"></div>
						  	
	
					</div>

				<div id="box2">
					
					<div id="center_img">
						
						<img style="border-radius: 50%;" src="" id="center_img_tag">

					</div>

				</div>
				
				<div style="position: relative;left: 410px;top: -800px;">

							<label for="upload" id="uploadBtn" class="btn btn-success btn-lg">
							    <i class="fa fa-cloud-upload"></i> Browse...
							</label>&nbsp&nbsp

							<input type="file" style="display: none;" accept="image/x-png,image/gif,image/jpeg" id="upload" class="btn btn-success btn-lg" name="file_name"/>

							<button type="button" name="submit" disabled="true" class="btn btn-primary btn-lg" id="change_btn"><span class="glyphicon glyphicon-ok"></span> Change</button> <br>

							<button style="position: relative;top: 5px; width: 200px;left: 26px;" class="btn btn-danger .btn-block btn-lg" id="cancel_profile_box"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							
				
				</div>

				</div>




<div class="container" style="position: relative;left: 111px; background-color: #C0C0C0; margin-top: -17px; z-index: 1;">
    <div class="row profile">
		<div class="col-md-3">
			<div id="profile_sideBar_head" class="profile-sidebar" style="height: 833px; z-index: 2;">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="<?php echo base_url()?>/<?php

			           foreach ($this->data['profile']  as $value) {

			            echo $value['profile'];
			            
			            } 
			      
			     ?>" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php

				           foreach ($this->data['user_info']  as $value) {

				            echo $value['first_name']." ".$value['last_name'];
				            
				            } 
				      
         				 ?>
					</div>
					<div class="profile-usertitle-job" style="font-size: 20px; text-transform: capitalize;
					">
						<?php

							if($this->session->userdata('userCat')=="staff"){

					           foreach ($this->data['status']  as $value) {

					            echo $value['job_title'];
					            
					            }

				            } elseif($this->session->userdata('userCat')=="student"){

				            	echo "Student";
				            }
				      
         				 ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->

				<div class="profile-userbuttons" style="padding-bottom:20px; ">

					<button type="button" id="change_profile_btn" class="btn btn-warning btn-md"><span class="glyphicon glyphicon-camera"></span>  Change Profile</button> <br>
					
					
				</div>
				<hr>
		

				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav nav-tabs">
						
						<li class="active" style="width: 100%;">
							<a data-toggle="tab" href="#tab1">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						
						<li style="width: 100%;">
							<a id="togBtn" href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
											
						<li id="change_theme_btn" style="width: 93%; display: none;" class="dropBtns">
							<a data-toggle="tab" href="#tab2">
							<i class="glyphicon glyphicon-picture"></i>
								Change Theme </a>
						</li>

						<li style="width: 93%; display: none;" class="dropBtns">
							<a data-toggle="tab" href="#tab3">
							<i class="glyphicon glyphicon-lock"></i>
								Change Password </a>
						</li>

						<?php

							if($this->session->userdata('userCat')=="staff"){
								echo '<li style="width: 93%; display:none;" class="dropBtns">
										<a data-toggle="tab" href="#tab4">
										<i class="glyphicon glyphicon-user"></i>
										Change Username </a>
							     	   </li>';

							}

						?>

					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>

		<div class="col-md-9">
         
         <div id="profile_content_head" class="profile-content" style="height: 833px; margin-left: -25px;">

           <div class="tab-content">

       		<div id="tab1" class="tab-pane fade in active">

       		<div id="tab1_head">
			   
			   <p class="Profile_herader">General Details</p>
			   
			   <hr style="height:1px; border:none; color:#000; background-color:#000;">
			
			</div>


			   <div class="main_holder">
			   	
				   	<div style="position: relative; top: 10px; left: 20px;">

				  	 	<span class="place_holder">Name: </span> <span id="name_placer" style="position: relative; left: 98px;" class="placer"></span>
				   
			   </div>

			   	<hr>

			   </div>

			    <div class="main_holder">
			   	
				   	<div style="position: relative; top: 10px; left: 20px;">

				  	 	<span class="place_holder">Username: </span> <span id="username_placer" style="position: relative;left: 63px;" class="placer"></span>
				   
				   	</div>

			   	<hr>

			   </div>

				<div class="main_holder">
			   	
				   	<div style="position: relative; top: 10px; left: 20px;">

				  	 	<span class="place_holder">BCAS ID Card: </span> <span id="bcas_id_placer" style="position: relative;left: 40px;" class="placer"></span>
				   
				   	</div>

			   	<hr>

			   </div>			   

			    <div class="main_holder">
			   	
				   	<div style="position: relative; top: 10px; left: 20px;">

				  	 	<span class="place_holder">Date of Birth: </span> <span id="dob_placer" style="position: relative;left: 42px;" class="placer"></span>
				   
				</div>

			   	<hr>

			   </div>

			    <div class="main_holder">
			   	
				   	<div style="position: relative; top: 10px; left: 20px;">

				  	 	<span class="place_holder">Age: </span> <span id="age_placer" style="position: relative; left: 114px;" class="placer"></span>
				   
				</div>

			   	<hr>

			   </div>

			   <div class="main_holder">
			   	
				   	<div style="position: relative; top: 10px; left: 20px;">

				  	 	<span class="place_holder">Gender: </span> <span id="gender_placer" style="position: relative;left: 84px;" class="placer"></span>
				   
				</div>

			   	<hr>

			   </div>

			   <div class="main_holder">
			   	
				   	<div style="position: relative; top: 10px; left: 20px;">

				  	 	<span class="place_holder">Email ID: </span> <span id="email_placer" style="position: relative; left: 76px;" class="placer"></span>
				   
				</div>

			   	<hr>

			   </div>

			   	<div class="main_holder">
			   	
				   	<div style="position: relative; top: 10px; left: 20px;">

				  	 	<span class="place_holder">Phone No: </span> <span id="phone_placer" style="position: relative; left: 64px;" class="placer"></span>
				   
					</div>

			   	<hr>

			   </div>

			   <div class="main_holder">
			   	
				   	<div style="position: relative; top: 10px; left: 20px;">

				  	 	<span class="place_holder">National ID No: </span> <span id="nic_placer" style="position: relative;left: 28px;" class="placer"></span>
				   
					</div>

			   	<hr>

			   </div>

			   <div class="main_holder">
			   	
				   	<div style="position: relative; top: 10px; left: 20px;">

				  	 	<span class="place_holder">Department: </span> <span id="department_placer" style="position: relative;left: 45px;" class="placer"></span>
				   
					</div>

			   	<hr>

			   </div>


			    <hr style="height:1px; border:none; color:#000; background-color:#000;">

             </div>

             <div id="tab2" class="tab-pane fade in">
             		
             	<div id="tab2_head">

			        <p class="Profile_herader">Theme Settings</p>
						   
					<hr style="height:1px; border:none; color:#000; background-color:#000;">

				 </div>

				 <div id="themes">	 	
				 		<div class="row">

						  <div class="col-md-6">
						    <div class="thumbnail container_img">
						      <a href="#">
						        <img src="<?php echo base_url()?>./public_files/theme/dist/img/Themes/default.png" alt="Lights" style="width:100%">
						        <div class="caption">
						          <p class="theme_text">Default Theme</p>
						          <button class="btn btn-primary theme_btn" data-value="1" id="default_theme">Apply</button>
						        </div>
						      </a>
						    </div>
						  </div>

						  <div class="col-md-6">
						    <div class="thumbnail container_img">
						      <a href="#">
						        <img src="<?php echo base_url()?>./public_files/theme/dist/img/Themes/mango_purple.png" alt="Lights" style="width:100%">
						        <div class="caption">
						          <p class="theme_text">Mango Purple</p>
						          <button class="btn btn-primary theme_btn" data-value="2" id="mango_purple_theme">Apply</button>
						        </div>
						      </a>
						    </div>
						  </div>

						   <div class="col-md-6">
						    <div class="thumbnail container_img">
						      <a href="#">
						        <img src="<?php echo base_url()?>./public_files/theme/dist/img/Themes/blue_whale.png" alt="Lights" style="width:100%">
						        <div class="caption">
						          <p class="theme_text">Blue Whale</p>
						          <button class="btn btn-primary theme_btn" data-value="3" id="blue_whale_theme">Apply</button>
						        </div>
						      </a>
						    </div>
						  </div>

						  <div class="col-md-6">
						    <div class="thumbnail container_img">
						      <a href="#">
						        <img src="<?php echo base_url()?>./public_files/theme/dist/img/Themes/greener.png" alt="Lights" style="width:100%">
						        <div class="caption">
						          <p class="theme_text">Greener</p>
						          <button class="btn btn-primary theme_btn" data-value="4" id="greener_theme">Apply</button>
						        </div>
						      </a>
						    </div>
						  </div>

						   <div class="col-md-6">
						    <div class="thumbnail container_img">
						      <a href="#">
						        <img src="<?php echo base_url()?>./public_files/theme/dist/img/Themes/yellower.png" alt="Lights" style="width:100%">
						        <div class="caption">
						          <p class="theme_text">Yellower</p>
						          <button class="btn btn-primary theme_btn" data-value="6" id="yellower_theme">Apply</button>
						        </div>
						      </a>
						    </div>
						  </div>

						   <div class="col-md-6" style="position: relative; top: -290px;">
						    <div class="thumbnail container_img">
						      <a href="#">
						        <img src="<?php echo base_url()?>./public_files/theme/dist/img/Themes/pinker.png" alt="Lights" style="width:100%">
						        <div class="caption">
						          <p class="theme_text">Pinker</p>
						          <button class="btn btn-primary theme_btn" data-value="5"  id="pinker_theme">Apply</button>
						        </div>
						      </a>
						    </div>
						  </div>

						  
						</div>
				 </div>
             </div>

             <div id="tab3" class="tab-pane fade in">

	             <div id="tab3_head">

			             <p class="Profile_herader">Credentials Settings</p>
						   
						 <hr style="height:1px; border:none; color:#000; background-color:#000;">
				  
					 	 <div id="errorBox">

							  <div id="error_box_sub" style="text-align: center; font-size: 16px; font-weight: bold; font-family:sans-serif;display: none;" class="alert alert-danger alert-dismissible fade in">
								    This alert box could indicate a dangerous or potentially negative action.
							  </div>
					  
					  	</div>

				 </div>

				 <div id="password_change">
				 	
					<div style="margin-top: 25px;margin-left: -17px" class="container bootstrap snippet">
					    <div class="row">
					        <div class="col-xs-12 col-sm-12 col-md-5">
					            <div class="panel panel-info">
					                <div class="panel-heading">
					                    <h3 class="panel-title">
					                        <span class="glyphicon glyphicon-th"></span>
					                        Change password   
					                    </h3>
					                </div>
					                <div class="panel-body">
					                    <div class="row">
					                        <div style="margin-left: 48px;" class="col-xs-4 col-sm-4 col-md-4 login-box">
						                         
						                         <div class="form-group">
						                            <div class="input-group">
						                              
						                              <input class="form-control" id="old_passowrd" type="password" placeholder="Current Password">
						                              <div class="input-group-addon view" id="old_passowrd_eye_box"><span id="old_passowrd_eye" class="glyphicon glyphicon-eye-open"></span></div>
						                            </div>
						                          </div>

						                          <div class="form-group">
						                            <div class="input-group">
						                             
						                              <input class="form-control" id="new_password" type="password" placeholder="New Password">
						                              <div class="input-group-addon view" id="new_password_eye_box"><span id="new_password_eye" class="glyphicon glyphicon-eye-open"></span></div>
						                            </div>
						                          </div>

						                          <div class="form-group">
						                            <div class="input-group">
						                              
						                              <input class="form-control" id="password_confirm" type="password" placeholder="Confirm Password">
						                              <div class="input-group-addon view" id="password_confirm_eye_box"><span id="password_confirm_eye" class="glyphicon glyphicon-eye-open"></span></div>
						                            </div>
						                          </div>

					                        </div>
					                    </div>
					                </div>
					                <div class="panel-footer">
					                    <div class="row">
					                        <div class="col-xs-6 col-sm-6 col-md-6"></div>
					                        <div class="col-xs-6 col-sm-6 col-md-6">
					                            <button style="margin-left:60px;" disabled="true" id="pass_submit" class="btn icon-btn-save btn-success" type="submit">
					                            <span class="btn-save-label"><i class="glyphicon glyphicon-floppy-disk"></i></span>Save Changes</button>
					                        </div>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>

				 </div>

		        </div>

		        <div id="tab4" class="tab-pane fade in">

			        <div id="tab4_head">

					         <p class="Profile_herader">Credentials Settings</p>
							   
							 <hr style="height:1px; border:none; color:#000; background-color:#000;">
				  
						     <div id="errorBox2">

								  <div id="error_box_sub2" style="text-align: center; font-size: 16px; font-weight: bold; font-family:sans-serif; display: none;" class="alert alert-success alert-dismissible fade in">
									    This alert box could indicate a dangerous or potentially negative action.
								 </div>
						  
						     </div>
				     </div>
				 
					<div id="change_username">
						
						<div style="margin-top: 25px;margin-left: -17px" class="container bootstrap snippet">
					    <div class="row">
					        <div class="col-xs-12 col-sm-12 col-md-5">
					            <div class="panel panel-info">
					                <div class="panel-heading">
					                    <h3 class="panel-title">
					                        <span class="glyphicon glyphicon-th"></span>
					                        Change Username   
					                    </h3>
					                </div>
					                <div class="panel-body">
					                    <div class="row">
					                        <div style="margin-left: 48px;" class="col-xs-4 col-sm-4 col-md-4 login-box">
						                         
						                          <div class="form-group">
						                            <div class="input-group">

						                             <div class="input-group-addon view"><span id="new_password_eye" class="glyphicon glyphicon-user"></span></div>

						                              <input class="form-control" readonly="true" id="current_username" type="text" placeholder="">
						                              
						                            </div>
						                          </div>

						                          <div class="form-group">
						                            <div class="input-group">

						                              <div class="input-group-addon view" ><span class="glyphicon glyphicon-user"></span></div>

						                              <input class="form-control" id="new_username" type="text" placeholder="New Username">
						              
						                            </div>
						                          </div>

					                        </div>
					                    </div>
					                </div>
					                <div class="panel-footer">
					                    <div class="row">
					                        <div class="col-xs-6 col-sm-6 col-md-6"></div>
					                        <div class="col-xs-6 col-sm-6 col-md-6">
					                            <button style="margin-left:60px;" disabled="true" id="user_submit" class="btn icon-btn-save btn-success" type="submit">
					                            <span class="btn-save-label"><i class="glyphicon glyphicon-floppy-disk"></i></span>Save Changes</button>
					                        </div>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
			     </div>			 
			</div>
		</div>
	</div>
</div>

		<?php include 'templates/script.php';?>
		<script type="text/javascript" src="<?php echo base_url()?>/public_files/croppie/croppie.min.js"></script>

<script type="text/javascript">

	document.getElementById("cancel_profile_box").onclick=cancel;

	function cancel(){
		

	window.location='<?php echo site_url("MainPageController/ProgfileManagement")?>';

	}
			

</script>



<script type="text/javascript">

$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'circle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});
  

$('#upload').on('change', function (e) { 

	var reader = new FileReader();
	var status2 = "";
	var res="";

    reader.onload = function (e) {
    	
    	var ty = e.target.result;
	
    	res = ty.substring(0, 10);

    	if(res=="data:image"){
 
 		$uploadCrop.croppie('bind', {
    		url: e.target.result

    	}).then(function(){
    		
    		console.log('jQuery bind complete');

    	});	

    	}else{

    		window.location='<?php echo site_url("MainPageController/ProgfileManagement")?>';

    	}

    }

    reader.readAsDataURL(this.files[0]); 	

    status2="done";

    if(status2=="done"){

    	document.getElementById("change_btn").disabled = false;
    	document.getElementById("upload-demo").style.visibility="visible";
    	document.getElementById("box2").style.visibility="hidden";
    }

});


$('#change_btn').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {

		$.ajax({
			url: "<?php echo site_url('mainPageController/file_upload')?>",
			type: "POST",
			data: {"image":resp},
			success: function (data) {

				if(data=="completed"){


					window.location='<?php echo site_url("MainPageController/ProgfileManagement")?>';

				}
			}
		});
	});

});


$("#change_profile_btn").on("click",function(ev){

	$.ajax({

		type:'POST',
		data:{profile_path:'profile'},
		url:'<?php echo site_url('mainPageController/get_defualt_profile_picture')?>',	
		success:function(result){

			document.getElementById("center_img_tag").src= result.toString();		
				
		}

	})

	$("#box").css("display","block");

});

// Details printing Section
window.onload=function(){

	document.getElementById("name_placer").innerHTML=' <?php

							if($this->session->userdata('userCat')=="staff"){

					           foreach ($this->data['details']  as $value) {

					            echo $value['first_name']." ".$value['last_name'];
					            
					            }

				            } elseif($this->session->userdata('userCat')=="student"){

				            
				            	foreach ($this->data['details']  as $value) {

					            echo $value['first_name']." ".$value['last_name'];
					            
					            }

				            }
				      
    ?>';

    document.getElementById("username_placer").innerHTML='<?php

							if($this->session->userdata('userCat')=="staff"){

					           foreach ($this->data['details']  as $value) {

					            echo $value['username'];
					            
					            }

				            } elseif($this->session->userdata('userCat')=="student"){

				            
				            	foreach ($this->data['details']  as $value) {

					            echo $value['username'];;
					            
					            }

				            }
				      
    ?>';

    document.getElementById("bcas_id_placer").innerHTML='<?php 

    						if($this->session->userdata('userCat')=="staff"){

    							foreach($this->data['details'] as $value){

    								echo $value['staff_id_card_no'];    		
    							}

    						}elseif($this->session->userdata('userCat')=="student"){

    							foreach($this->data['details'] as $value){

    								echo $value["student_id_card_no"];
    							}
    						}

    ?>';

    document.getElementById("dob_placer").innerHTML='<?php 

    		if($this->session->userdata('userCat')=='staff'){

    			foreach($this->data['details'] as $value){

    				echo $value['date_of_birth'];
    			}
    		
    		}elseif($this->session->userdata('userCat')=="student"){

    			echo $value['date_of_birth'];
    		}

    ?>';

    document.getElementById("age_placer").innerHTML='<?php 

    		if($this->session->userdata('userCat')=="staff"){

    			foreach($this->data['details'] as $da){

    				echo $da['age'];
    			} 

    		}elseif($this->session->userdata('userCat')=="student"){

    			foreach($this->data['details'] as $da){

    				echo $da['age'];

    			}
    		}

    ?>';

    document.getElementById("gender_placer").innerHTML='<?php 

    		if($this->session->userdata('userCat')=="staff"){

    			foreach($this->data['details'] as $da){

    				echo $da['gender'];
    			} 

    		}elseif($this->session->userdata('userCat')=="student"){

    			foreach($this->data['details'] as $da){

    				echo $da['gender'];

    			}
    		}

    ?>';

     document.getElementById("email_placer").innerHTML='<?php 

    		if($this->session->userdata('userCat')=="staff"){

    			foreach($this->data['details'] as $da){

    				echo $da['email'];
    			} 

    		}elseif($this->session->userdata('userCat')=="student"){

    			foreach($this->data['details'] as $da){

    				echo $da['email'];

    			}
    		}

    ?>';

     document.getElementById("phone_placer").innerHTML='<?php 

    		if($this->session->userdata('userCat')=="staff"){

    			foreach($this->data['details'] as $da){

    				echo $da['phone_no'];
    			} 

    		}elseif($this->session->userdata('userCat')=="student"){

    			foreach($this->data['details'] as $da){

    				echo $da['phone_no'];

    			}
    		}

    ?>';

    document.getElementById("nic_placer").innerHTML='<?php 

    		if($this->session->userdata('userCat')=="staff"){

    			foreach($this->data['details'] as $da){

    				echo $da['nic_card_no'];
    			} 

    		}elseif($this->session->userdata('userCat')=="student"){

    			foreach($this->data['details'] as $da){

    				echo $da['nic_card_no'];

    			}
    		}

    ?>';

     document.getElementById("department_placer").innerHTML='<?php 

    		if($this->session->userdata('userCat')=="staff"){

    			foreach($this->data['details'] as $da){

    				echo $da['department_full_name']." (".$da['department_short_name'].")";
    			} 

    		}elseif($this->session->userdata('userCat')=="student"){

    			foreach($this->data['details'] as $da){

    				echo $da['course_full_title']." (".$da['course_short_title'].")";

    			}
    		}

    ?>';

    document.getElementById("password_confirm").oninput=function(){

    	var old_passowrd = document.getElementById("old_passowrd").value;
    	var new_password = document.getElementById("new_password").value;
    	var password_confirm = document.getElementById("password_confirm").value;

    	if(old_passowrd != "" && new_password != "" && password_confirm){

    		document.getElementById("pass_submit").disabled=false;
    		
    	}else {

			document.getElementById("pass_submit").disabled=true;

    	}
    	
    }

    document.getElementById("new_username").oninput=function(){

		var new_username = document.getElementById("new_username").value;

		if(new_username!=""){

			document.getElementById("user_submit").disabled = false;
		}else{

			document.getElementById("user_submit").disabled = true;
		}
	}

	$(document).ready(function(){
	  $("#togBtn").click(function(){
	    $(".dropBtns").fadeToggle();
	  });
	});

	$("#old_passowrd_eye_box").click(function(){

		var calssNames = $("#old_passowrd_eye").attr("class");

		$("#old_passowrd_eye").toggleClass("glyphicon-eye-open glyphicon-eye-close");

		if(calssNames=="glyphicon glyphicon-eye-open"){

			$("#old_passowrd").attr("type","text");

		}else if(calssNames=="glyphicon glyphicon-eye-close"){

				$("#old_passowrd").attr("type","password");
		}
		
	});

	$("#new_password_eye_box").click(function(){

		var calssNames = $("#new_password_eye").attr("class");

		$("#new_password_eye").toggleClass("glyphicon-eye-open glyphicon-eye-close");

		if(calssNames=="glyphicon glyphicon-eye-open"){

			$("#new_password").attr("type","text");

		}else if(calssNames=="glyphicon glyphicon-eye-close"){

				$("#new_password").attr("type","password");
		}

	});

	$("#password_confirm_eye_box").click(function(){

		var calssNames = $("#password_confirm_eye").attr("class");

		$("#password_confirm_eye").toggleClass("glyphicon-eye-open glyphicon-eye-close");

		if(calssNames=="glyphicon glyphicon-eye-open"){

			$("#password_confirm").attr("type","text");

		}else if(calssNames=="glyphicon glyphicon-eye-close"){

				$("#password_confirm").attr("type","password");
		}
		
	});

	document.getElementById("pass_submit").onclick = function(){


		//resetting border of textboxes.
		document.getElementById("old_passowrd").style.border="solid 1px #D2D6DE";
		document.getElementById("password_confirm").style.border="solid 1px #D2D6DE";

		var new_password = document.getElementById("new_password").value;
		var com_password = document.getElementById("password_confirm").value;
		var old_password = document.getElementById("old_passowrd").value;

		if(new_password!="" && com_password!="" && old_password!=""){

		if(new_password == com_password){

			$.ajax({
			type:'POST',
			data:{old_password:old_password,new_password:new_password},
			url:'<?php echo site_url('mainPageController/change_password')?>',	
			success:function(result){
			
			if(result=="current_password_wrong"){

					errorBox("Your current password is wrong.");
					document.getElementById("new_password").value="";
					document.getElementById("old_passowrd").value="";
					document.getElementById("password_confirm").value="";
					document.getElementById("old_passowrd").style.border='1px solid red';

			}else if(result=="updated"){

					$("#error_box_sub").removeClass("intro").addClass("alert-success");
					$("#error_box_sub").html("<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a> The password has been changed successfully.");

					$("#error_box_sub").slideDown().delay(2000).slideUp(function(){

						window.location='<?php echo site_url("logins/log")?>';
					});			

			}	
				
			}

			})		
			
		}else{

			errorBox("Confirmation password does not match.");
			document.getElementById("new_password").value="";
			document.getElementById("old_passowrd").value="";
			document.getElementById("password_confirm").value="";
			document.getElementById("password_confirm").style.border = "1px solid red";
		}

	}
	
	document.getElementById("pass_submit").disabled=true;
	document.getElementById("user_submit").disabled=true;			

	}

	$.ajax({
			type:'POST',
			url:'<?php echo site_url('mainPageController/current_username')?>',	
			success:function(result){
			
			document.getElementById("current_username").value = result;

			}
	});	

	document.getElementById("user_submit").onclick=function(){

		var new_username = document.getElementById("new_username").value;

		$.ajax({
			type:'POST',
			data:{user_enterd_username:new_username},
			url:'<?php echo site_url('mainPageController/change_username')?>',	
			success:function(result){
			
				if(result=="updated"){

					$("#error_box_sub2").html("<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a> The username has been changed successfully.");
					$("#error_box_sub2").slideDown().delay(2000).slideUp(function(){

						window.location='<?php echo site_url("logins/log")?>';

					});
				}
			}
		});	
	
	}


	$(".theme_btn").click(function(){

	    var theme_value = $(this).data("value");
	    $.ajax({
			type:'POST',
			data:{value_of_theme:theme_value},
			url:'<?php echo site_url('mainPageController/update_theme')?>',	
			success:function(result){
			
				window.location='<?php echo site_url("mainPageController/ProgfileManagement")?>';
			
			}
		});	


	});

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

			

function errorBox(msg){

	$("#error_box_sub").html("<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"+msg);
	$("#error_box_sub").slideDown().delay(3000).slideUp();

}

</script>

</body>

</html>