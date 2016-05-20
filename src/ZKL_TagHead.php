<?php
/**
 * Classe para gerar a tag HTML <head>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/head
 * @author Rafael Marteze
 */
class ZKL_TagHead extends ZKL_Tag {
	/**
	 * @see ZKL_TagHead
	 * @param ZKL_Tag $oTagContainer
	 */
	function __construct($oTagContainer = null) {
		parent::__construct($oTagContainer);
		$this->setNomeTag("head");
	}
}