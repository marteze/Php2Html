<?php
/**
 * Classe para gerar a tag HTML <div>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div
 * @author Rafael Marteze
 */
class ZKL_TagDiv extends ZKL_Tag {
	/**
	 * @see ZKL_TagDiv
	 * @param ZKL_Tag $oTagContainer
	 */
	function __construct($oTagContainer = null) {
		parent::__construct($oTagContainer);
		$this->setNomeTag("div");
		$this->setQuebraLinhaAntes(true);
	}
}