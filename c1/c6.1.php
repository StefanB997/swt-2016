<?php 
$filename = ('broj.txt');
$fh = fopen($filename, 'w');
fwrite ($fh, $_POST['name'].' '. $_POST['surname'].' '. $_POST['email']. );
$output = fread($fh, filesize('broj.txt'));
$sve = explode($i, $output);
echo $sve;
?>