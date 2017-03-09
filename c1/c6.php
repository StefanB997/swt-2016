<?php 
// $filename = 'fajl.txt';
// $fh = fopen($filename, 'a+');
// fwrite ($fh, 'Vrska nemame od PHP?');



$filename = 'fajl.txt';
$fh = fopen($filename, 'a+');
fwrite ($fh, $_POST['name'].' '. $_POST['surname'].' '. $_POST['email'].';');
rewind($fh);
$filesize = filesize('fajl.txt');
$output = fread ($fh, $filesize);
$sve = explode(";", $output);
fclose($fh);
?>

<ul>
	<?php foreach ($sve as $s) { ?>
	<li><?= $s ?></li>
	<?php } ?>
</ul>