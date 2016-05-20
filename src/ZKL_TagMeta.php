<?php
/**
 * Classe para gerar a tag HTML <meta>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta
 * @author Rafael Marteze
 */
class ZKL_TagMeta extends ZKL_Tag {
	/**
	 * @see ZKL_TagMeta
	 * @param ZKL_Tag $oTagContainer
	 */
	function __construct($oTagContainer = null) {
		parent::__construct($oTagContainer);
		$this->setNomeTag("meta");
	}
	
	/**
	 * Define o atributo charset.
	 * @param string $sCharset
	 */
	public function setCharset($sCharset) {
		$this->setAtributo("charset", $sCharset);
	}
	
	/**
	 * Pega o atributo charset.
	 * @return string
	 */
	public function getCharset() {
		return $this->getAtributo("charset");
	}
	
	/**
	 * Define o atributo content.
	 * @param string $sContent
	 */
	public function setContent($sContent) {
		$this->setAtributo("content", $sContent);
	}
	
	/**
	 * Pega o atributo content.
	 * @return string
	 */
	public function getContent() {
		return $this->getAtributo("content");
	}
	
	/**
	 * Define o atributo http-equiv.
	 * @param string $sHttp-equiv
	 */
	public function setHttp-equiv($sHttp-equiv) {
		$this->setAtributo("http-equiv", $sHttp-equiv);
	}
	
	/**
	 * Pega o atributo http-equiv.
	 * @return string
	 */
	public function getHttp-equiv() {
		return $this->getAtributo("http-equiv");
	}
	
	/**
	 * Define o atributo name.
	 * @param string $sName
	 */
	public function setName($sName) {
		$this->setAtributo("name", $sName);
	}
	
	/**
	 * Pega o atributo name.
	 * @return string
	 */
	public function getName() {
		return $this->getAtributo("name");
	}
}