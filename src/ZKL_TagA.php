<?php

/**
 * Classe para gerar a tag HTML <a>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a
 * @author Rafael Marteze
 */
class ZKL_TagA extends ZKL_Tag {
	/**
	 * @see ZKL_TagA
	 * @param ZKL_Tag $oTagContainer
	 */
	function __construct($oTagContainer = null) {
		parent::__construct($oTagContainer);
		$this->setNomeTag("a");
	}
	
	/**
	 * Define o atributo download.
	 * @param string $sDownload
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-download
	 */
	public function setDownload($sDownload) {
		$this->setAtributo("download", $sDownload);
	}
	
	/**
	 * Pega o atributo download.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-download
	 */
	public function getDownload() {
		return $this->getAtributo("download");
	}
	
	/**
	 * Define o atributo href.
	 * @param string $sHref
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-href
	 */
	public function setHref($sHref) {
		$this->setAtributo("href", $sHref);
	}
	
	/**
	 * Pega o atributo href.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-href
	 */
	public function getHref() {
		return $this->getAtributo("href");
	}
	
	/**
	 * Define o atributo hreflang.
	 * @param string $sHreflang
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-hreflang
	 */
	public function setHreflang($sHreflang) {
		$this->setAtributo("hreflang", $sHreflang);
	}
	
	/**
	 * Pega o atributo hreflang.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-hreflang
	 */
	public function getHreflang() {
		return $this->getAtributo("hreflang");
	}
	
	/**
	 * Define o atributo ping .
	 * @param string $sPing
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-ping
	 */
	public function setPing ($sPing ) {
		$this->setAtributo("ping ", $sPing );
	}
	
	/**
	 * Pega o atributo ping .
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-ping
	 */
	public function getPing () {
		return $this->getAtributo("ping ");
	}
	
	/**
	 * Define o atributo rel.
	 * @param string $sRel
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-rel
	 */
	public function setRel($sRel) {
		$this->setAtributo("rel", $sRel);
	}
	
	/**
	 * Pega o atributo rel.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-rel
	 */
	public function getRel() {
		return $this->getAtributo("rel");
	}
	
	/**
	 * Define o atributo target.
	 * @param string $sTarget
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-target
	 */
	public function setTarget($sTarget) {
		$this->setAtributo("target", $sTarget);
	}
	
	/**
	 * Pega o atributo target.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-target
	 */
	public function getTarget() {
		return $this->getAtributo("target");
	}
	
	/**
	 * Define o atributo type.
	 * @param string $sType
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-type
	 */
	public function setType($sType) {
		$this->setAtributo("type", $sType);
	}
	
	/**
	 * Pega o atributo type.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-type
	 */
	public function getType() {
		return $this->getAtributo("type");
	}
}
?>