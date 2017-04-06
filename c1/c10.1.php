<?php 


class C {
	public function __call($method, $attributes){
		echo "<br.>Kako Vardar ke dotecham $method";
	}
}



// $c = new C;
// $c->sing();
// $c->play();
// $c->dance();
// $c->start();
// $c->end();

class D {
	public function __call($method, $attributes){
		echo "Method: $method, Attributes: ".implode(',', $attributes);
	}
}

// $d = new D;
// $d->jadi('Piza', 'Burger', 'Burek');
// echo '</br>';
// $d->setStudent('Bojan', 'Gavrovski', 3, 7.2);
// echo '</br>';
// $d->pej('kako vardar breeeeeeeeeeeeeeeeeeeeeeeeeeeee');

class E {
	private function pej1(){
		echo 'somebody once told me...';
	}

	private function pej2($pesna){
		echo $pesna;
	}

	public function __call($method, $arguments){

		if($method == 'pej' && count($arguments) == 0){
			$this->pej1();
		}else if($method == 'pej' && count($arguments) == 1){
			$this->pej2($arguments[0]);
		}
	}
}


// $e = new E;
// $e->pej();
// echo '</br>';
// $e->pej('tralalalalala...');




?>