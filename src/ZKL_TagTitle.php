<?php
/**
 * Classe para gerar a tag HTML <title>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/title
 * @author Rafael Marteze
 */
class ZKL_TagTitle extends ZKL_Tag {
	/**
	 * @see ZKL_TagTitle
	 * @param ZKL_Tag $oTagContainer
	 * @param string $sTitulo Texto do titulo (conteudo da tag).
	 */
	function __construct($oTagContainer = null, $sTitulo = "") {
		parent::__construct($oTagContainer);
		$this->addComponente($sTitulo);
		$this->setNomeTag("title");
		$this->setQuebraLinhaInterior(false);
	}
}