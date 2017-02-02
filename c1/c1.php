<?php

	echo 'Zdravo Svetu <br/>';

	$ime = "Bojan";
	echo $ime;

	$a = 10;
	$b = 13;

	echo '<br/>';
	echo $a + $b;
	echo '<br/>';
	echo $a - $b;
	echo '<br/>';
	echo $a * $b;
	echo '<br/>';
	echo $a / $b;
	echo '<br/>';
	echo $a * ($a +$b);
	echo '<br/>';
	echo $a * $a +$b;
	echo '<br/>';

	$integer = 123;
	$float = 123.21;
	$string = "text";
	$boolean = true;

	// echo $integer;
	// echo $float;
	// echo $string;
	// echo $boolean;
	// echo '<br/>';


	// $vistina = TRUE;
	// if($vistina){
	// 	echo 'Vistina';
	// } else{
	// 	echo 'Nevistina';
	// }
	echo '<br/>';
	$c = true;
	$d = false;

	if($c && $d){ // I DVETE VREDNOSTI MORA DA BIDAT TRUE ZA USLOVOT DA SE ISPOLNI
		echo 'Vistina';
	} else {
		echo 'Nevistina';
	}

	echo '</br>';

	if($c || $d){ // EDNA OD VREDNOSTITE MORA DA BIDE TRUE ZA USLOVOT DA SE ISPOLNI
		echo 'Vistina';
	} else{
		echo 'Nevistina';
	}
	echo '<br/>';
	echo '<br/>';
	echo '<br/>';

	strlen('Bojan');
	$prezime = 'prezime';
	strlen($prezime);


	$ime = 'Bojan';

	if(strlen ($ime) %2 == 0){
		echo 'BROJO JE PAREN';
	} else{
		echo 'BROJO NE E PAREN';
	};

	echo '<br/>';
	echo '<br/>';
	echo '<br/>';
	echo '<br/>';
	echo '<br/>';
	echo '<br/>';

	$godini = 45;

	if($godini < 15){
		echo 'MALA SI';
	}else if($godini >= 15 && $godini < 25){
		echo 'MLAD SI';}
	else if($godini >= 25 && $godini < 45){
		echo "VOZRASEN SI";
	}else if($godini >= 45){
		echo "STARO DRTALO";
	}

	echo '<br/>';
	echo '<br/>';
	echo '<br/>';


	$den = '';

	switch($den){
		case 'pon':
			echo 'Ponedelnik';
		break;
		case 'vto':
			echo 'Vtornik';
		break;
		case 'sre':
			echo 'Sreda';
		break;
		case 'che':
			echo 'Chetvrtok';
		break;
		case 'pet':
			echo 'Petok';
		break;
		case 'sab':
			echo 'Sabota';
		break;
		case 'ned':
			echo 'Nedela';
		break;
	}

	echo '<br/>';	
	echo '<br/>';	
	echo '<br/>';	
	echo '<br/>';	
	echo '<br/>';	


	for($i = 0; $i < 12; $i++){
	switch($i){
		case 0:
			echo 'Januari';
	break;
		case 1:
			echo 'Februari';
	break;
		case 2:
			echo 'Mart';
	break;
		case 3:
			echo 'April';
	break;
		case 4:
			echo 'Maj';
	break;		
		case 5:
			echo 'Juni';
	break;		
		case 6:
			echo 'Juli';
	break;		
		case 7:
			echo 'Avgust';
	break;
	}
		echo '<br/>';
	}

	$j = 0;
	while($j < 5){
		echo "$j<br/>";
		$j++;
	}

	echo '<br/>';
	echo '<br/>';
	echo '<br/>';

	$z = 0;
	$x = 0;
	while($z < 10){
		$x = $x + $z;
		$z++;
}

	echo "$z";


?>