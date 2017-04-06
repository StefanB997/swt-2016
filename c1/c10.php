<?php 


abstract class Vozilo {
	protected $brojTrkala;
	protected $gorivo;
	protected $proizvoditel;

	public function setBrojTrkala($br){
		$this->brojTrkala = $br;
	}

	public function getBrojTrkala(){
		return $this->brojTrkala;
	}

	public function setGorivo($g){
		$this->gorivo = $g;
	}

	public function getGorivo(){
		return $this->gorivo; 
	}

	public function setProizvoditel($p){
		$this->gorivo = $p;
	}

	public function getProizvoditel(){
		return $this->proizvoditel;
	}


}

interface iVozilo{
	public function ignite();
}

class PatnichkoVozilo extends Vozilo implements iVozilo{
	private $brojSedishta;
	private $brojPernichinja;

	public function setBrojSedishta($bs){
		$this->brojSedishta = $s;
	}

	public function getBrojSedishta(){
		return $this->brojSedishta;
	}

	public function setBrojPernichinja($bp){
		$this->brojPernichinja;
	}

	public function getBrojPernichinja(){
		return $this->brojPernichinja;
	}

	public function ignite(){
		echo 'Palam na kopche';
	}

}

class TovarnoVozilo extends Vozilo implements iVozilo{
	private $nosivost;

	public function setNosivost($n){
		$this->nosivost = $n;
	}

	public function getNosviost(){
		return $this->nosivost;
	}

	public function ignite(){
		echo 'Palam na kluch';
	}
}

$objekt = new PatnichkoVozilo;
$objekt->ignite();

echo '</br>';

$t = new TovarnoVozilo;
$t->ignite();


?>