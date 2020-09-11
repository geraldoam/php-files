<?php

/*
	public - propriedade ou método pode ser acessado de qualquer lugar. Isso é o padrão.
	protected - a propriedade ou método pode ser acessado dentro da classe e por classes derivadas dessa classe.
	private - a propriedade ou método SOMENTE pode ser acessada dentro da classe.
*/

class Fruit {
	public $name;
	protected $color;
	private $weight;

	function set_name($n){ // a public function (default)
		$this->name = $n;
	}
	protected function set_color($n){ // a protected function
		$this->color = $n;
	}
	private function set_weight($n){ // a private function
		$this->weight = $n;
	}
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR