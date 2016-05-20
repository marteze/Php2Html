<?php
/**
 * Classe para gerar a tag HTML <body>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/body
 * @author Rafael Marteze
 */
class ZKL_TagBody extends ZKL_Tag {
	/**
	 * @see ZKL_TagBody
	 * @param ZKL_Tag $oTagContainer
	 */
	function __construct($oTagContainer = null) {
		parent::__construct($oTagContainer);
		$this->setNomeTag("body");
		$this->setQuebraLinhaAntes(true);
	}
}
?>