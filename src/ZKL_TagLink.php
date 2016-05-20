<?php
/**
 * Classe para gerar a tag HTML <link>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link
 * @author Rafael Marteze
 */
class ZKL_TagLink extends ZKL_Tag {
	/**
	 * @see ZKL_TagLink
	 * @param ZKL_Tag $oTagContainer
	 */
	function __construct($oTagContainer = null) {
		parent::__construct($oTagContainer);
		$this->setNomeTag("link");
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
	 * Define o atributo hreflang.
	 * @param string $sHreflang
	 */
	public function setHreflang($sHreflang) {
		$this->setAtributo("hreflang", $sHreflang);
	}
	
	/**
	 * Pega o atributo hreflang.
	 * @return string
	 */
	public function getHreflang() {
		return $this->getAtributo("hreflang");
	}
	
	/**
	 * Define o atributo media.
	 * @param string $sMedia
	 */
	public function setMedia($sMedia) {
		$this->setAtributo("media", $sMedia);
	}
	
	/**
	 * Pega o atributo media.
	 * @return string
	 */
	public function getMedia() {
		return $this->getAtributo("media");
	}
	
	/**
	 * Define o atributo rel.
	 * @param string $sRel
	 */
	public function setRel($sRel) {
		$this->setAtributo("rel", $sRel);
	}
	
	/**
	 * Pega o atributo rel.
	 * @return string
	 */
	public function getRel() {
		return $this->getAtributo("rel");
	}
	
	/**
	 * Define o atributo sizes.
	 * @param string $sSizes
	 */
	public function setSizes($sSizes) {
		$this->setAtributo("sizes", $sSizes);
	}
	
	/**
	 * Pega o atributo sizes.
	 * @return string
	 */
	public function getSizes() {
		return $this->getAtributo("sizes");
	}
	
	/**
	 * Define o atributo type.
	 * @param string $sType
	 */
	public function setType($sType) {
		$this->setAtributo("type", $sType);
	}
	
	/**
	 * Pega o atributo type.
	 * @return string
	 */
	public function getType() {
		return $this->getAtributo("type");
	}
}