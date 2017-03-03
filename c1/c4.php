<?php 
$username = 'blazho';
$password = 'blazhevski';
$post_username = trim(strip_tags($_POST['username']));
$post_password = trim(strip_tags($_POST['password']));

if(strlen($post_username) > 0 && strlen($post_password) > 0){

	if($post_username == $username && $post_password == $password){
	echo 'You fat mothafucka';
} else {
	echo 'probaj ponovo you fat mothafucka'.strip_tags($_POST['username']);
} else {
	echo 'nemash uneseno podatke jebem ti mothafucka';
}
?>