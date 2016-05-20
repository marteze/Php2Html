<?php
/**
 * Classe para gerar a tag HTML <input>.
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
 * @author Rafael Marteze
 */
class ZKL_TagInput extends ZKL_Tag {
	/**
	 * @see ZKL_TagInput
	 * @param ZKL_Tag $oTagContainer
	 */
	function __construct($oTagContainer = null) {
		parent::__construct($oTagContainer);
		$this->setNomeTag("input");
		$this->setQuebraLinhaAntes(true);
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
	 * Define o atributo accept.
	 * @param string $sAccept
	 */
	public function setAccept($sAccept) {
		$this->setAtributo("accept", $sAccept);
	}
	
	/**
	 * Pega o atributo accept.
	 * @return string
	 */
	public function getAccept() {
		return $this->getAtributo("accept");
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
	 * Define o atributo autofocus.
	 * @param string $sAutofocus
	 */
	public function setAutofocus($sAutofocus) {
		$this->setAtributo("autofocus", $sAutofocus);
	}
	
	/**
	 * Pega o atributo autofocus.
	 * @return string
	 */
	public function getAutofocus() {
		return $this->getAtributo("autofocus");
	}
	
	/**
	 * Define o atributo autosave.
	 * @param string $sAutosave
	 */
	public function setAutosave($sAutosave) {
		$this->setAtributo("autosave", $sAutosave);
	}
	
	/**
	 * Pega o atributo autosave.
	 * @return string
	 */
	public function getAutosave() {
		return $this->getAtributo("autosave");
	}
	
	/**
	 * Define o atributo checked.
	 * @param string $sChecked
	 */
	public function setChecked($sChecked) {
		$this->setAtributo("checked", $sChecked);
	}
	
	/**
	 * Pega o atributo checked.
	 * @return string
	 */
	public function getChecked() {
		return $this->getAtributo("checked");
	}
	
	/**
	 * Define o atributo disabled.
	 * @param string $sDisabled
	 */
	public function setDisabled($sDisabled) {
		$this->setAtributo("disabled", $sDisabled);
	}
	
	/**
	 * Pega o atributo disabled.
	 * @return string
	 */
	public function getDisabled() {
		return $this->getAtributo("disabled");
	}
	
	/**
	 * Define o atributo form.
	 * @param string $sForm
	 */
	public function setForm($sForm) {
		$this->setAtributo("form", $sForm);
	}
	
	/**
	 * Pega o atributo form.
	 * @return string
	 */
	public function getForm() {
		return $this->getAtributo("form");
	}
	
	/**
	 * Define o atributo formaction.
	 * @param string $sFormaction
	 */
	public function setFormaction($sFormaction) {
		$this->setAtributo("formaction", $sFormaction);
	}
	
	/**
	 * Pega o atributo formaction.
	 * @return string
	 */
	public function getFormaction() {
		return $this->getAtributo("formaction");
	}
	
	/**
	 * Define o atributo formenctype.
	 * @param string $sFormenctype
	 */
	public function setFormenctype($sFormenctype) {
		$this->setAtributo("formenctype", $sFormenctype);
	}
	
	/**
	 * Pega o atributo formenctype.
	 * @return string
	 */
	public function getFormenctype() {
		return $this->getAtributo("formenctype");
	}
	
	/**
	 * Define o atributo formmethod.
	 * @param string $sFormmethod
	 */
	public function setFormmethod($sFormmethod) {
		$this->setAtributo("formmethod", $sFormmethod);
	}
	
	/**
	 * Pega o atributo formmethod.
	 * @return string
	 */
	public function getFormmethod() {
		return $this->getAtributo("formmethod");
	}
	
	/**
	 * Define o atributo formnovalidate.
	 * @param string $sFormnovalidate
	 */
	public function setFormnovalidate($sFormnovalidate) {
		$this->setAtributo("formnovalidate", $sFormnovalidate);
	}
	
	/**
	 * Pega o atributo formnovalidate.
	 * @return string
	 */
	public function getFormnovalidate() {
		return $this->getAtributo("formnovalidate");
	}
	
	/**
	 * Define o atributo formtarget.
	 * @param string $sFormtarget
	 */
	public function setFormtarget($sFormtarget) {
		$this->setAtributo("formtarget", $sFormtarget);
	}
	
	/**
	 * Pega o atributo formtarget.
	 * @return string
	 */
	public function getFormtarget() {
		return $this->getAtributo("formtarget");
	}
	
	/**
	 * Define o atributo height.
	 * @param string $sHeight
	 */
	public function setHeight($sHeight) {
		$this->setAtributo("height", $sHeight);
	}
	
	/**
	 * Pega o atributo height.
	 * @return string
	 */
	public function getHeight() {
		return $this->getAtributo("height");
	}
	
	/**
	 * Define o atributo inputmode.
	 * @param string $sInputmode
	 */
	public function setInputmode($sInputmode) {
		$this->setAtributo("inputmode", $sInputmode);
	}
	
	/**
	 * Pega o atributo inputmode.
	 * @return string
	 */
	public function getInputmode() {
		return $this->getAtributo("inputmode");
	}
	
	/**
	 * Define o atributo list.
	 * @param string $sList
	 */
	public function setList($sList) {
		$this->setAtributo("list", $sList);
	}
	
	/**
	 * Pega o atributo list.
	 * @return string
	 */
	public function getList() {
		return $this->getAtributo("list");
	}
	
	/**
	 * Define o atributo max.
	 * @param string $sMax
	 */
	public function setMax($sMax) {
		$this->setAtributo("max", $sMax);
	}
	
	/**
	 * Pega o atributo max.
	 * @return string
	 */
	public function getMax() {
		return $this->getAtributo("max");
	}
	
	/**
	 * Define o atributo maxlength.
	 * @param string $sMaxlength
	 */
	public function setMaxlength($sMaxlength) {
		$this->setAtributo("maxlength", $sMaxlength);
	}
	
	/**
	 * Pega o atributo maxlength.
	 * @return string
	 */
	public function getMaxlength() {
		return $this->getAtributo("maxlength");
	}
	
	/**
	 * Define o atributo min.
	 * @param string $sMin
	 */
	public function setMin($sMin) {
		$this->setAtributo("min", $sMin);
	}
	
	/**
	 * Pega o atributo min.
	 * @return string
	 */
	public function getMin() {
		return $this->getAtributo("min");
	}
	
	/**
	 * Define o atributo minlength.
	 * @param string $sMinlength
	 */
	public function setMinlength($sMinlength) {
		$this->setAtributo("minlength", $sMinlength);
	}
	
	/**
	 * Pega o atributo minlength.
	 * @return string
	 */
	public function getMinlength() {
		return $this->getAtributo("minlength");
	}
	
	/**
	 * Define o atributo multiple.
	 * @param string $sMultiple
	 */
	public function setMultiple($sMultiple) {
		$this->setAtributo("multiple", $sMultiple);
	}
	
	/**
	 * Pega o atributo multiple.
	 * @return string
	 */
	public function getMultiple() {
		return $this->getAtributo("multiple");
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
	 * Define o atributo pattern.
	 * @param string $sPattern
	 */
	public function setPattern($sPattern) {
		$this->setAtributo("pattern", $sPattern);
	}
	
	/**
	 * Pega o atributo pattern.
	 * @return string
	 */
	public function getPattern() {
		return $this->getAtributo("pattern");
	}
	
	/**
	 * Define o atributo placeholder.
	 * @param string $sPlaceholder
	 */
	public function setPlaceholder($sPlaceholder) {
		$this->setAtributo("placeholder", $sPlaceholder);
	}
	
	/**
	 * Pega o atributo placeholder.
	 * @return string
	 */
	public function getPlaceholder() {
		return $this->getAtributo("placeholder");
	}
	
	/**
	 * Define o atributo readonly.
	 * @param string $sReadonly
	 */
	public function setReadonly($sReadonly) {
		$this->setAtributo("readonly", $sReadonly);
	}
	
	/**
	 * Pega o atributo readonly.
	 * @return string
	 */
	public function getReadonly() {
		return $this->getAtributo("readonly");
	}
	
	/**
	 * Define o atributo required.
	 * @param string $sRequired
	 */
	public function setRequired($sRequired) {
		$this->setAtributo("required", $sRequired);
	}
	
	/**
	 * Pega o atributo required.
	 * @return string
	 */
	public function getRequired() {
		return $this->getAtributo("required");
	}
	
	/**
	 * Define o atributo selectionDirection.
	 * @param string $sSelectionDirection
	 */
	public function setSelectionDirection($sSelectionDirection) {
		$this->setAtributo("selectionDirection", $sSelectionDirection);
	}
	
	/**
	 * Pega o atributo selectionDirection.
	 * @return string
	 */
	public function getSelectionDirection() {
		return $this->getAtributo("selectionDirection");
	}
	
	/**
	 * Define o atributo size.
	 * @param string $sSize
	 */
	public function setSize($sSize) {
		$this->setAtributo("size", $sSize);
	}
	
	/**
	 * Pega o atributo size.
	 * @return string
	 */
	public function getSize() {
		return $this->getAtributo("size");
	}
	
	/**
	 * Define o atributo spellcheck.
	 * @param string $sSpellcheck
	 */
	public function setSpellcheck($sSpellcheck) {
		$this->setAtributo("spellcheck", $sSpellcheck);
	}
	
	/**
	 * Pega o atributo spellcheck.
	 * @return string
	 */
	public function getSpellcheck() {
		return $this->getAtributo("spellcheck");
	}
	
	/**
	 * Define o atributo src.
	 * @param string $sSrc
	 */
	public function setSrc($sSrc) {
		$this->setAtributo("src", $sSrc);
	}
	
	/**
	 * Pega o atributo src.
	 * @return string
	 */
	public function getSrc() {
		return $this->getAtributo("src");
	}
	
	/**
	 * Define o atributo step.
	 * @param string $sStep
	 */
	public function setStep($sStep) {
		$this->setAtributo("step", $sStep);
	}
	
	/**
	 * Pega o atributo step.
	 * @return string
	 */
	public function getStep() {
		return $this->getAtributo("step");
	}
	
	/**
	 * Define o atributo tabindex.
	 * @param string $sTabindex
	 */
	public function setTabindex($sTabindex) {
		$this->setAtributo("tabindex", $sTabindex);
	}
	
	/**
	 * Pega o atributo tabindex.
	 * @return string
	 */
	public function getTabindex() {
		return $this->getAtributo("tabindex");
	}
	
	/**
	 * Define o atributo value.
	 * @param string $sValue
	 */
	public function setValue($sValue) {
		$this->setAtributo("value", $sValue);
	}
	
	/**
	 * Pega o atributo value.
	 * @return string
	 */
	public function getValue() {
		return $this->getAtributo("value");
	}
	
	/**
	 * Define o atributo width.
	 * @param string $sWidth
	 */
	public function setWidth($sWidth) {
		$this->setAtributo("width", $sWidth);
	}
	
	/**
	 * Pega o atributo width.
	 * @return string
	 */
	public function getWidth() {
		return $this->getAtributo("width");
	}
}