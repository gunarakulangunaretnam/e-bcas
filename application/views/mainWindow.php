<?php

		$session1 = $this->session->userdata('username');
		
		echo $session1;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo form_open('logins/log');?>

	<form method="post">

		<button name="log">LOGOUT</button>

	</form>

</body>
</html>