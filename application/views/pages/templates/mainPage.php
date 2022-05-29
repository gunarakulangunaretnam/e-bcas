
<?php echo form_open('login/logOut');?>

<?php 



	foreach ($pass as $value) {
		
		echo $value["user_type"]." has been loged in";
	}

?>
<form>
	
	<button  name="log">Logout</button>

</form>


