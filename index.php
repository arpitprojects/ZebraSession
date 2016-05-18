<?php
	include_once 'connect.inc.php';
	include_once 'core.inc.php';

?>
<?php
	if(loggedin()){
		include_once 'suces.php';
	}else{
		include_once 'login.php';
		echo '<p>NOT REGISTER <a href="register.php">Register here</a></p>';
	}
	
?>