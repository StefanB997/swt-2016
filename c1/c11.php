<?php 
session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
	$err=0;

	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
		$err++;
	}

	if(strlen(trim($_POST['password'])) == 0){
		$err++;
	}

	if($err == 0){
		$db = new PDO('mysql:host=127.0.0.1;dbname=users', 'root', '');
		$sql = 'select * FROM users where email = :email and password = :password';
		$query=$db->prepare($sql);
		$query->bindValue(':email', $_POST['email']);
		$query->bindValue(':password', $_POST['password']);
		$query->execute();
		$res = $query->fetchAll(PDO::FETCH_ASSOC);

		if(count($res) > 0){
			echo 'Login Succesfull';

			$_SESSION['logged_in'] = true;
			$_SESSION['user_email'] = $res[0]['email'];
			$_SESSION['user_id'] = $res[0]['id'];

			header('location: admin.php');
		} else {
			header('location: c11.html');
			// echo 'Bad Username or password';
		}
	} else {
		header('location: c11.html');
		// echo 'youy have not entered username or password';
	} 
} else {
	header('location: c11.html');
	// echo 'email or password not set';
}


?>