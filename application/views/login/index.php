<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-BCAS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="public_files/login_form_file/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public_files/login_form_file/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public_files/login_form_file/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public_files/login_form_file/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public_files/login_form_file/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public_files/login_form_file/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public_files/login_form_file/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public_files/login_form_file/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public_files/login_form_file/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public_files/login_form_file/css/util.css">
	<link rel="stylesheet" type="text/css" href="public_files/login_form_file/css/main.css">
<!--===============================================================================================-->

<style type="text/css">
	
	#back{

		background-image: url(public_files/login_form_file/images/s.jpg);
	}


</style>

</head>
<body>

		<div class="container-login100" id="back">
			
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55" style="border: 1px solid black;">
			
				<form action = "logins/get" method="post" class="login100-form validate-form flex-sb flex-w">
					
					<span class=" p-b-11" id="out" style="color: red; font-size: 20px;position: relative;top: -30px;left: 60px;display: none;">
						Invalid username or Password.
						
					</span>

					<span class="login100-form-title p-b-32">
						Login
					</span>
					
					<span class="txt1 p-b-11">
						Account Type
					</span>

					<div class="wrap-input100 validate-input m-b-36" data-validate = "Account type is required">
						<select class="input100" style="color:blue" name="acc">
							 <option value="Admin">Admin</option>
  							 <option value="Student">Student</option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" style="color:blue" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" style="color:blue" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button id="subBTN" name="sub" class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		
		window.onload=function(){

			var c=document.getElementById("p").innerHTML;
			document.getElementById("p").style.display="none";

			if(c=="Not"){

				document.getElementById("out").style.display='block';

			}
		}

	</script>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="public_files/login_form_file/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="public_files/login_form_file/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="public_files/login_form_file/vendor/bootstrap/js/popper.js"></script>
	<script src="public_files/login_form_file/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="public_files/login_form_file/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="public_files/login_form_file/vendor/daterangepicker/moment.min.js"></script>
	<script src="public_files/login_form_file/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="public_files/login_form_file/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="public_files/login_form_file/js/main.js"></script>

</body>
</html>