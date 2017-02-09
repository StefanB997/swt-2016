<?php 
// $niza = array();
// $niza2 = [];

// $niza3 = array('a', 'b', 'c', 'd');
// $niza4 = ['e', 'f', 'g', 'h'];

// $niza[0] = 'i';
// $niza[1] = 'k';
// $niza [2] = 'l';
// $niza [3] = 'j';

// $niza2[] = 'm';
// $niza2[] = 'n';
// $niza2[] = 'o';
// $niza2[] = 'p';

// // print_r($niza); //printanje nizi
// echo '<hr/>';
// // var_dump($niza2); //printanje nizi
	
// $dolzina = count($niza);
// echo $dolzina;

// for($i = 0; $i < $dolzina; $i++){
// 	echo $niza[$i].'<br/>';
// }

	// $niza = ['Skopje', 'Kumanovo', 'Batinci', 'Kosovo', 'Srbija', 'Beograd'];
	// $niza = array ('Skopje', 'kumanovo', 'batinci', 'sve','sveee');
	// $d = $niza;
	// $a = 0;
	// $b = count($niza);
	// 	while($a < $b){
	// 		echo $a;
	// 		echo strlen ($d[$a]);
	// 		$a++;
	// 	}

	// $text = 'win32 get last control message (oid)win32 get last control message (oid)win32 get last control message (oid)win32 get last control message (oid)win32 get last control message (oid)win32 get last control message (oid)win32 get last control message (oid)win32 get last control message. (oid)win32 get last control message (oid)win32 get last control message (oid)win32 get last control message (oid)win32 get last control message (oid)win32 get last control message (oid)win32 get last control message (oid)win32 get last control message (oid)win32 get last control message. (oid)win32 get last control message (oid)win32 get last control message (oid)';
	// $zborovi = explode ('. ', $text);
	// echo count ($zborovi);

	// 	$student = array(
	// 		'ime' => 'Stefan',
	// 		'prezime' => 'Blazhevski',
	// 		'prosek' => '7.4'
	// );

	// 	foreach($student as $detail_key => $detail_value){
	// 		echo $detail_key.' -> ' .$detail_value.'<br/>';
	// 	}

// $text = "worem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown pijasdibjasbiuasibuasdibuasdbiuadsubrinter took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorejjjjjjjjjjjjjjjjjjjm Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

// $words  = explode(' ', $text);

// $longestWordLength = 110;
// $longestWord = '';

// foreach ($words as $word) {
//    if (strlen($word) < $longestWordLength) {
//       $longestWordLength = strlen($word);
//       $longestWord = $word;	
//    }
// }

// echo $longestWord;
	

	$blogPosts = [
		[
			'naslov' => 'Title 1',
			'sodrzina' => 'loreira ro iaot awi noi ior   huwuheufgqiq q hqfqpqh whp fqhphfpqiqfwq fup qwfip igfq giq wfiqw fig fwigq qwgfpqw fp piuqfwup igfqi ugfqqf guiq guipq gqwfg qwfup gqfw fqwgu qwf qfw gpqwf qwfgp gqwf ufay auf uvyas uvfyqq wyqwryqwgydfyuzx bqwbtruq b z zui gfuiqf w'

		],
		[		
			'naslov' => 'Title 2',
			'sodrzina' => 'loreira ro iaot awi noi ior   huwuheufgqiq q hqfqpqh whp fqhphfpqiqfwq fup qwfip igfq giq wfiqw fig fwigq qwgfpqw fp piuqfwup igfqi ugfqqf guiq guipq gqwfg qwfup gqfw fqwgu qwf qfw gpqwf qwfgp gqwf ufay auf uvyas uvfyqq wyqwryqwgydfyuzx bqwbtruq b z zui gfuiqf w'
		],		
		[
			'naslov' => 'Title 3',
			'sodrzina' => 'loreira ro iaot awi noi ior   huwuheufgqiq q hqfqpqh whp fqhphfpqiqfwq fup qwfip igfq giq wfiqw fig fwigq qwgfpqw fp piuqfwup igfqi ugfqqf guiq guipq gqwfg qwfup gqfw fqwgu qwf qfw gpqwf qwfgp gqwf ufay auf uvyas uvfyqq wyqwryqwgydfyuzx bqwbtruq b z zui gfuiqf w'
		],			
		[
			'naslov' => 'Title 4',
			'sodrzina' => 'loreira ro iaot awi noi ior   huwuheufgqiq q hqfqpqh whp fqhphfpqiqfwq fup qwfip igfq giq wfiqw fig fwigq qwgfpqw fp piuqfwup igfqi ugfqqf guiq guipq gqwfg qwfup gqfw fqwgu qwf qfw gpqwf qwfgp gqwf ufay auf uvyas uvfyqq wyqwryqwgydfyuzx bqwbtruq b z zui gfuiqf w'
		],			
		[
			'naslov' => 'Title 5',
			'sodrzina' => 'loreira ro iaot awi noi ior   huwuheufgqiq q hqfqpqh whp fqhphfpqiqfwq fup qwfip igfq giq wfiqw fig fwigq qwgfpqw fp piuqfwup igfqi ugfqqf guiq guipq gqwfg qwfup gqfw fqwgu qwf qfw gpqwf qwfgp gqwf ufay auf uvyas uvfyqq wyqwryqwgydfyuzx bqwbtruq b z zui gfuiqf w'
		],
	];
	

	foreach($blogPosts as $naslov => $sodrzina){
			echo $sodrzina;
	}
?>