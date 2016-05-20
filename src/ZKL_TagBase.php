<?php
/**
 * Classe para gerar a tag HTML <base>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/base
 * @author Rafael Marteze
 */
class ZKL_TagBase extends ZKL_Tag {
	/**
	 * @see ZKL_TagBase
	 * @param ZKL_Tag $oTagContainer
	 */
	function __construct($oTagContainer = null) {
		parent::__construct($oTagContainer);
		$this->setNomeTag("base");
	}
	
	/**
	 * Define o atributo href.
	 * @param string $sHref
	 */
	public function setHref($sHref) {
		$this->setAtributo("href", $sHref);
	}
	
	/**
	 * Pega o atributo href.
	 * @return string
	 */
	public function getHref() {
		return $this->getAtributo("href");
	}
	
	/**
	 * Define o atributo target.
	 * @param string $sTarget
	 */
	public function setTarget($sTarget) {
		$this->setAtributo("target", $sTarget);
	}
	
	/**
	 * Pega o atributo target.
	 * @return string
	 */
	public function getTarget() {
		return $this->getAtributo("target");
	}
}