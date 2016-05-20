<?php

/**
 * Classe para gerar a tag HTML <script>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script
 * @author Rafael Marteze
 */
class ZKL_TagScript extends ZKL_Tag {
	/**
	 * @see ZKL_TagScript
	 * @param ZKL_Tag $oTagContainer
	 */
	function __construct($oTagContainer = null) {
		parent::__construct($oTagContainer);
		
		$this->setNomeTag("script");
		$this->setType("text/javascript");
		$this->setQuebraLinhaAntes(true);
	}
	
	/**
	 * Define o atributo async.
	 * @param string $sAsync
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script#attr-async	 
	 */
	public function setAsync($sAsync) {
		$this->setAtributo("async", $sAsync);
	}
	
	/**
	 * Pega o atributo async.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script#attr-async
	 */
	public function getAsync() {
		return $this->getAtributo("async");
	}	
	
	/**
	 * Define o atributo integrity.
	 * @param string $sIntegrity
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script#attr-integrity	 
	 */
	public function setIntegrity($sIntegrity) {
		$this->setAtributo("integrity", $sIntegrity);
	}
	
	/**
	 * Pega o atributo integrity.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script#attr-integrity
	 */
	public function getIntegrity() {
		return $this->getAtributo("integrity");
	}	
	
	/**
	 * Define o atributo src.
	 * @param string $sSrc
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script#attr-src	 
	 */
	public function setSrc($sSrc) {
		$this->setAtributo("src", $sSrc);
	}
	
	/**
	 * Pega o atributo src.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script#attr-src
	 */
	public function getSrc() {
		return $this->getAtributo("src");
	}	
	
	/**
	 * Define o atributo type.
	 * @param string $sType
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script#attr-type	 
	 */
	public function setType($sType) {
		$this->setAtributo("type", $sType);
	}
	
	/**
	 * Pega o atributo type.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script#attr-type
	 */
	public function getType() {
		return $this->getAtributo("type");
	}	
	
	/**
	 * Define o atributo text.
	 * @param string $sText
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script#attr-text	 
	 */
	public function setText($sText) {
		$this->setAtributo("text", $sText);
	}
	
	/**
	 * Pega o atributo text.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script#attr-text
	 */
	public function getText() {
		return $this->getAtributo("text");
	}	
	
	/**
	 * Define o atributo defer.
	 * @param string $sDefer
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script#attr-defer	 
	 */
	public function setDefer($sDefer) {
		$this->setAtributo("defer", $sDefer);
	}
	
	/**
	 * Pega o atributo defer.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script#attr-defer
	 */
	public function getDefer() {
		return $this->getAtributo("defer");
	}
}

?>