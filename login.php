<?php
	include_once 'connect.inc.php';
	include_once 'core.inc.php';
	

?>

<h1>Login</h1>
<form method="post" action="login.php">
	<input type="email" name="email"/>
	<br>
	<input type="password" name="password"/>
	<br>
	<input type="submit" name="submit"/>
	<br>
</form>
<?php
	if(isset($_POST['email']) && isset($_POST['password'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		if(!empty($email) && !empty($password)){
		$query ="SELECT * FROM `register` WHERE `email`= '$email'";
			if($query_run = mysqli_query($link , $query)){
			$num_rows = mysqli_num_rows($query_run);
			if($num_rows  == 1){
				$user_id = mysql_result($query_run , 0 , 'id');
				$session = new Zebra_Session($link, 'sEcUr1tY_c0dE');
				$_SESSION['id'] = $user_id;
				header('Location:suces.php');
				ob_end_flush();
			}else{
				echo 'Invalid username and password';
			}
			}else{
			echo 'Query Failed';
			}
		}else{
			echo 'empty fields';
		}
	}
?> 