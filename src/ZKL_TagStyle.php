<?php
/**
 * Classe para gerar a tag HTML <style>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/style
 * @author Rafael Marteze
 */
class ZKL_TagStyle extends ZKL_Tag {
	/**
	 * @see ZKL_TagStyle
	 * @param ZKL_Tag $oTagContainer
	 */
	function __construct($oTagContainer = null) {
		parent::__construct($oTagContainer);
		$this->setNomeTag("style");
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
}