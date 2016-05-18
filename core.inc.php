<?php
	include_once 'connect.inc.php';
	include_once 'Zebra_Session.php';
	ob_start();
	
?>
<?php
	function loggedin(){
		if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
			
			return true;
		}else{
			
			return false;
		}
	}
	
?>