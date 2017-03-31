<?php

class A{
	protected $ime = 'Stefan';
}

class B extends A{
	public $prezime = 'Blazhevski';

	public function setIme($ime){
		$this->ime = $ime;
	}
}
$object1 = new B;
$object1->setIme('sve');
print_r($object1);

class C extends B {

}

$c = new C;
$c->setIme('Janko');
print_r($c);






?>