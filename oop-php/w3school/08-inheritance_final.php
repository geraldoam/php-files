<?php

// A final palavra-chave pode ser usada para impedir a herança de classe ou para substituir o método.

final class Fruit {
	// some code
}

// Will result in error
class Strawberry extends Fruit {
	// some code
}



// Como impedir a substituição do método
class Fruit {
	final public function intro() {
		// some code
	}
}

class Strawberry extends Fruit {
	// will result in error
	public function intro() {
		// some code
	}
} 