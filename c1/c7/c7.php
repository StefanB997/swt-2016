<?php 


// print_r($_FILES);


if($_FILES ['f']['type'] == 'image/jpeg' && $_FILES ['f']['size'] < 1024 * 1024 *2 || $_FILES['f']['type'] == 'image/pjeg'){
	
move_uploaded_file($_FILES ['f']['tmp_name'], 'uploads/'.$_FILES['f']['name']);	
}else{
	echo "You can't upload this file"; 
}
?>