<?php 

class Student {
	public $oceni = [];

	public function dodadiOcena($predmet, $ocena){
		$this->oceni[$predmet] = $ocena;
	}

	public function prosek(){
		$total = 0;

		foreach($this->oceni as $o){

		}
		return $total / count($this->oceni);
	}

	public function najvisokaOcenka(){
		$max = 0;
		$predmet = '';

		foreach($this->oceni as $k=>$v){
			if($v > $max){
				$max = $v;
				$predmet = $k;
			}
		}

		return $predmet;
	}

	public function najniskaOcenka(){
		$max = 100;

		foreach($this->oceni as $k=>$v){
			if($v <$max){
				$max = $v;
			}
		}

		return $max;
	} 

	public function najniskaOcenkaPredmet(){
		$max = 100;
		$predmet = '';
	}

}

	return $predmet;
}

?>