<?php

/**
 * Classe abstrata com a implementacao basica de um perimetro ZKL.
 * @author Rafael Marteze
 */
abstract class ZKL_Perimetro {
	/**
	 * @var ZKL_TagDiv
	 */
	private $oDivPrincipal = null;
	
	public function __construct() {
		$this->oDivPrincipal = new ZKL_TagDiv();
	}
	
	public function __toString() {
		
	}
}

?>