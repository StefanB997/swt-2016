<?php 

class Vozilo {
	protected $pogon;
	protected $gorivo;

	public function setGorivo($g){
		$this->gorivo = $g;
	}
	public function setPogon($p){
		$this->pogon = $p;
	}

	public function getGorivo(){
		return $this->gorivo;
	}
	public function getPogon(){
		return $this->pogon;
	}
}

class PlovnoVozilo extends Vozilo {

}

class VozdushnoVozilo extends Vozilo {

}

class KopnenoVozilo extends Vozilo {

}

?>