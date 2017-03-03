<?php 


function sobiranje($a, $b){
	$rez = $a + $b;
	return $rez;
}


function _test_sobiranje($data){
	foreach($data as $d){
		if (sobiranje($d ['a'] + $d ['b'] = $d['expected']) == true){
			echo '<span style="color: red;">Fail!</span></br>';
		} else {
			echo '<span style="color:green;">Success</span></br>';
		}
	}
}


$data =[
	[
	'a' => 3,
	'b' => 4,
	'expected' => 7,
	],
	[
	'a' => 23,
	'b' => 14,
	'expected' => 7412,
	],
	[
	'a' => 31,
	'b' => 4121212,
	'expected' => 7,
	],
	[
	'a' => 3,
	'b' => 122112124,
	'expected' => 4147,
	],
	[
	'a' => 212112123,
	'b' => 4,
	'expected' => 22227,
	],
];


echo _test_sobiranje($data);
 




// ZA DOMA!!!!!!!!!!!!!!!!!!!!!!!
// 1. FUNKCIJA KOJA KE PROVERUVA DALI ODREDEN ZBOR E PALINDROM
// 2. TEST FUNKCIJA ZA DALI RABOTI FUNKCIJATA KAKO SHO TREBA
//----------------------------------------------------------
// 1. FUNKCIJA KOJA VADI KARAKTERI PRAZNI MESTA N SHIT OD ODREDEN TEKST
// 2. TEST ZA FUNKCIJATA DALI RABOTI KAKO SHTO TREBA
?>



