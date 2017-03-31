<?php 

for($i = 0; $i < count($_FILES['m']['type']); $i++){
	$name = $_FILES['m']['name'][$i];
	$type = $_FILES['m']['type'][$i];
	$tmp_name = $_FILES['m']['tmp_name'][$i];
	$error = $_FILES['m']['error'][$i];
	$size = $_FILES['m']['size'][$i];
	$prefix = rand(1000000000, 9999999999);

	if($type == 'image/jpeg' || $type == 'image/pjpeg'){
		move_uploaded_file($tmp_name, 'uploads/'.$prefix.'_'.$name);
	}else{
		echo 'failed';
	}
}
?>