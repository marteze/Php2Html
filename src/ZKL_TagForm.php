<?php
/**
 * Classe para gerar a tag HTML <form>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form
 * @author Rafael Marteze
 */
class ZKL_TagForm extends ZKL_Tag {
	/**
	 * @see ZKL_TagForm
	 * @param ZKL_Tag $oTagContainer
	 */
	function __construct($oTagContainer = null) {
		parent::__construct($oTagContainer);
		$this->setNomeTag("form");
		$this->setQuebraLinhaAntes(true);
	}
	
	/**
	 * Define o atributo acceptCharset.
	 * @param string $sAcceptCharset
	 */
	public function setAcceptCharset($sAcceptCharset) {
		$this->setAtributo("accept-charset", $sAcceptCharset);
	}
	
	/**
	 * Pega o atributo acceptCharset.
	 * @return string
	 */
	public function getAcceptCharset() {
		return $this->getAtributo("accept-charset");
	}
	
	/**
	 * Define o atributo action.
	 * @param string $sAction
	 */
	public function setAction($sAction) {
		$this->setAtributo("action", $sAction);
	}
	
	/**
	 * Pega o atributo action.
	 * @return string
	 */
	public function getAction() {
		return $this->getAtributo("action");
	}
	
	/**
	 * Define o atributo autocomplete.
	 * @param string $sAutocomplete
	 */
	public function setAutocomplete($sAutocomplete) {
		$this->setAtributo("autocomplete", $sAutocomplete);
	}
	
	/**
	 * Pega o atributo autocomplete.
	 * @return string
	 */
	public function getAutocomplete() {
		return $this->getAtributo("autocomplete");
	}
	
	/**
	 * Define o atributo enctype.
	 * @param string $sEnctype
	 */
	public function setEnctype($sEnctype) {
		$this->setAtributo("enctype", $sEnctype);
	}
	
	/**
	 * Pega o atributo enctype.
	 * @return string
	 */
	public function getEnctype() {
		return $this->getAtributo("enctype");
	}
	
	/**
	 * Define o atributo method.
	 * @param string $sMethod
	 */
	public function setMethod($sMethod) {
		$this->setAtributo("method", $sMethod);
	}
	
	/**
	 * Pega o atributo method.
	 * @return string
	 */
	public function getMethod() {
		return $this->getAtributo("method");
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
	
	/**
	 * Define o atributo novalidate.
	 * @param string $sNovalidate
	 */
	public function setNovalidate($sNovalidate) {
		$this->setAtributo("novalidate", $sNovalidate);
	}
	
	/**
	 * Pega o atributo novalidate.
	 * @return string
	 */
	public function getNovalidate() {
		return $this->getAtributo("novalidate");
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