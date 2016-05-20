<?php

/**
 * Classe para gerar a tag HTML <html>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/html
 * @author Rafael Marteze
 */
class ZKL_TagHtml extends ZKL_Tag {
	/**
	 * @see ZKL_TagHtml
	 */
	function __construct() {
		parent::__construct();
		$this->setNomeTag("html");
		$this->setQuebraLinhaAntes(true);
	}
	
	/**
	 * (non-PHPdoc)
	 * @see ZKL_Tag::__toString()
	 */
	public function __toString() {
		$sHtml  = "<!DOCTYPE html>";
		$sHtml .= parent::__toString();
		return $sHtml;
	}
	
	/**
	 * Define o atributo Xmlns.
	 * @param string $sXmlns
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/html#attr-xmlns
	 */
	public function setXmlns($sXmlns) {
		$this->setAtributo("xmlns", $sXmlns);
	}
	
	/**
	 * Pega o atributo Xmlns.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/html#attr-xmlns
	 */
	public function getXmlns() {
		return $this->getAtributo("xmlns");
	}
}