<?php 

$config = 'mysql:host=127.0.0.1;dbname=sa_site';
$username = 'root';
$password = '';
$db = new PDO($config, $username, $password);

$sql= "SET NAMES UTF8";
$query = $db -> query($sql);


$sql_professors = 'select first_name, last_name, photo from professors';
$query_professors = $db->query($sql_professors);
$professors_web = $query_professors->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>


<list>

    <?php foreach($professors_web as $row):?> 
                <li>
                	<?=$row['first_name'];?> <?=$row['last_name'];?>
                	<img src='/Semos-Proekt-Razvivanje-na-Strana/<?=$row['photo']?>'>
                </li>
    <?php endforeach;?>

</list>





