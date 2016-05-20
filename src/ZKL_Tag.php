<?php

/**
 * Classe abstrata com o comportamento basico de toda tag HTML.
 * @author Rafael Marteze
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element
 */
abstract class ZKL_Tag {
	/**
	 * @var string
	 */
	private $sNomeTag = "";
	
	/**
	 * @var array
	 */
	private $aAtributos = array();
	
	/**
	 * @var array
	 */
	private $aComponentes = array();
	
	/**
	 * @var boolean
	 */
	private $bAutoFecha = false;
	
	private $bAdicionaIndentacao = true;
	
	/**
	 * @var boolean
	 */
	private $bQuebraLinhaAntes = true;
	
	/**
	 * @var boolean
	 */
	private $bQuebraLinhaInterior = true;
	
	/**
	 * 
	 * @param Tag $oTagContainer
	 */
	function __construct($oTagContainer = null) {
		if (($oTagContainer != null) && (is_object($oTagContainer) == true)) {
			$oTagContainer->addComponente($this);
		}
	}
	
	/**
	 * Adiciona um componente a tag.
	 * @param ZKL_Tag|string $oTag
	 */
	public function addComponente($oTag) {
		$this->aComponentes[] = $oTag;
	}
	
	/**
	 * Pega a lista de componentes.
	 * @return Tag
	 */
	public function getComponentes() {
		return $this->aComponentes;
	}
	
	/**
	 * Define o nome da tag (html, body, table, td, br etc.).
	 * @param string $sNomeTag
	 */
	protected function setNomeTag($sNomeTag) {
		$this->sNomeTag = $sNomeTag;
	}
	
	/**
	 * Pega o nome da tag.
	 * @return string
	 */
	protected function getNomeTag() {
		return $this->sNomeTag;
	}
	
	/**
	 * Define o valor de um atributo.
	 * @param string $sNomeAtributo
	 */
	protected function setAtributo($sNomeAtributo, $sValorAtributo) {
		$this->aAtributos[$sNomeAtributo] = $sValorAtributo;
	}
	
	/**
	 * Pega o valor de um atributo.
	 * @return string
	 */
	protected function getAtributo($sNomeAtributo) {
		return $this->aAtributos[$sNomeAtributo];
	}
	
	/**
	 * Pega a lista de atributos definida.
	 * @return array
	 */
	protected function getAtributos() {
		return $this->aAtributos;
	}
	
	/**
	 * Define se a tag se auto-fecha (<tag />) ou nao (<tag>...</tag>).
	 * @param boolean $bAutoFecha
	 */
	protected function setAutoFecha($bAutoFecha) {
		$this->bAutoFecha = ($bAutoFecha == true);
	}
	
	/**
	 * Pega a informacao se a tag se auto-fecha.
	 * @return tipo
	 */
	protected function getAutoFecha() {
		return $this->bAutoFecha;
	}
	
	/**
	 * Define se deve quebrar a linha no codigo apos gerar tag.
	 * @param boolean $bQuebraLinhaAntes
	 */
	protected function setQuebraLinhaAntes($bQuebraLinhaAntes) {
		$this->bQuebraLinhaAntes = ($bQuebraLinhaAntes == true);
	}
	
	/**
	 * Pega se deve quebrar a linha no codigo apos gerar tag.
	 * @return boolean
	 */
	protected function getQuebraLinhaAntes() {
		return $this->bQuebraLinhaAntes;
	}
	
	/**
	 * Define se deve quebrar a linha no codigo no interior da tag.
	 * @param boolean $bQuebraLinhaAntes
	 */
	protected function setQuebraLinhaInterior($bQuebraLinhaInterior) {
		$this->bQuebraLinhaInterior = ($bQuebraLinhaInterior == true);
	}
	
	/**
	 * Pega se deve quebrar a linha no codigo no interior da tag.
	 * @return boolean
	 */
	protected function getQuebraLinhaInterior() {
		return $this->bQuebraLinhaInterior;
	}
	
	/**
	 * Define o atributo accesskey.
	 * @param string $sAccesskey
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-accesskey
	 */
	public function setAccesskey($sAccesskey) {
		$this->setAtributo("accesskey", $sAccesskey);
	}
	
	/**
	 * Pega o atributo Accesskey.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-accesskey
	 */
	public function getAccesskey() {
		return $this->getAtributo("accesskey");
	}
	
	/**
	 * Define o atributo class.
	 * @param string $sClass
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-class
	 */
	public function setClass($sClass) {
		$this->setAtributo("class", $sClass);
	}
	
	/**
	 * Pega o atributo Class.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-class
	 */
	public function getClass() {
		return $this->getAtributo("class");
	}
	
	/**
	 * Adiciona uma classe CSS ao atributo class.
	 * @param string $sClass Classe CSS a ser adicionada
	 */
	public function addClass($sClass) {
		$this->setClass($this->getClass() . " " . $sClass);
	}
	
	/**
	 * Remove uma classe CSS do atributo class.
	 * @param string $sClass Classe CSS a ser removida
	 */
	public function remClass($sClass) {
		$aClasses = $this->getClass();
		
		$iIndice = array_search($sClass, $aClasses);
		
		if ($iIndice !== false) {
			unset($aClasses[$iIndice]);
		}
		
		$this->setClass(implode(" ", $aClasses));
	}
	
	/**
	 * Define o atributo contenteditable.
	 * @param string $sContenteditable
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-contenteditable
	 */
	public function setContenteditable($sContenteditable) {
		$this->setAtributo("contenteditable", $sContenteditable);
	}
	
	/**
	 * Pega o atributo Contenteditable.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-contenteditable
	 */
	public function getContenteditable() {
		return $this->getAtributo("contenteditable");
	}
	
	/**
	 * Define o atributo contextmenu.
	 * @param string $sContextmenu
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-contextmenu
	 */
	public function setContextmenu($sContextmenu) {
		$this->setAtributo("contextmenu", $sContextmenu);
	}
	
	/**
	 * Pega o atributo Contextmenu.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-contextmenu
	 */
	public function getContextmenu() {
		return $this->getAtributo("contextmenu");
	}
	
	/**
	 * Define o atributo dir.
	 * @param string $sDir
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-dir
	 */
	public function setDir($sDir) {
		$this->setAtributo("dir", $sDir);
	}
	
	/**
	 * Pega o atributo Dir.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-dir
	 */
	public function getDir() {
		return $this->getAtributo("dir");
	}
	
	/**
	 * Define o atributo hidden.
	 * @param string $sHidden
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-hidden
	 */
	public function setHidden($sHidden) {
		$this->setAtributo("hidden", $sHidden);
	}
	
	/**
	 * Pega o atributo Hidden.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-hidden
	 */
	public function getHidden() {
		return $this->getAtributo("hidden");
	}
	
	/**
	 * Define o atributo id.
	 * @param string $sId
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-id
	 */
	public function setId($sId) {
		$this->setAtributo("id", $sId);
	}
	
	/**
	 * Pega o atributo Id.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-id
	 */
	public function getId() {
		return $this->getAtributo("id");
	}
	
	/**
	 * Define o atributo itemid.
	 * @param string $sItemid
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-itemid
	 */
	public function setItemid($sItemid) {
		$this->setAtributo("itemid", $sItemid);
	}
	
	/**
	 * Pega o atributo Itemid.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-itemid
	 */
	public function getItemid() {
		return $this->getAtributo("itemid");
	}
	
	/**
	 * Define o atributo itemprop.
	 * @param string $sItemprop
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-itemprop
	 */
	public function setItemprop($sItemprop) {
		$this->setAtributo("itemprop", $sItemprop);
	}
	
	/**
	 * Pega o atributo Itemprop.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-itemprop
	 */
	public function getItemprop() {
		return $this->getAtributo("itemprop");
	}
	
	/**
	 * Define o atributo itemref.
	 * @param string $sItemref
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-itemref
	 */
	public function setItemref($sItemref) {
		$this->setAtributo("itemref", $sItemref);
	}
	
	/**
	 * Pega o atributo Itemref.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-itemref
	 */
	public function getItemref() {
		return $this->getAtributo("itemref");
	}
	
	/**
	 * Define o atributo itemscope.
	 * @param string $sItemscope
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-itemscope
	 */
	public function setItemscope($sItemscope) {
		$this->setAtributo("itemscope", $sItemscope);
	}
	
	/**
	 * Pega o atributo Itemscope.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-itemscope
	 */
	public function getItemscope() {
		return $this->getAtributo("itemscope");
	}
	
	/**
	 * Define o atributo itemtype.
	 * @param string $sItemtype
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-itemtype
	 */
	public function setItemtype($sItemtype) {
		$this->setAtributo("itemtype", $sItemtype);
	}
	
	/**
	 * Pega o atributo Itemtype.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-itemtype
	 */
	public function getItemtype() {
		return $this->getAtributo("itemtype");
	}
	
	/**
	 * Define o atributo lang.
	 * @param string $sLang
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-lang
	 */
	public function setLang($sLang) {
		$this->setAtributo("lang", $sLang);
	}
	
	/**
	 * Pega o atributo Lang.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-lang
	 */
	public function getLang() {
		return $this->getAtributo("lang");
	}
	
	/**
	 * Define o atributo style.
	 * @param string $sStyle
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-style
	 */
	public function setStyle($sStyle) {
		$this->setAtributo("style", $sStyle);
	}
	
	/**
	 * Pega o atributo style.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-style
	 */
	public function getStyle() {
		return $this->getAtributo("style");
	}
	
	/**
	 * Adiciona um conteudo ao atributo style.
	 * @param unknown $sStyle
	 */
	public function addStyle($sStyle) {
		$this->setStyle($this->getStyle() . $sStyle);
	}
	
	/**
	 * Define o atributo tabindex.
	 * @param string $sTabindex
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-tabindex
	 */
	public function setTabindex($sTabindex) {
		$this->setAtributo("tabindex", $sTabindex);
	}
	
	/**
	 * Pega o atributo Tabindex.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-tabindex
	 */
	public function getTabindex() {
		return $this->getAtributo("tabindex");
	}
	
	/**
	 * Define o atributo title.
	 * @param string $sTitle
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-title
	 */
	public function setTitle($sTitle) {
		$this->setAtributo("title", $sTitle);
	}
	
	/**
	 * Pega o atributo Title.
	 * @return string
	 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#attr-title
	 */
	public function getTitle() {
		return $this->getAtributo("title");
	}
	
	/**
	 * Gera o trecho HTML da tag.
	 * @return string
	 */
	public function __toString() {
		$aComponentes = $this->getComponentes();
		$aAtributos = $this->getAtributos();
		
		$sHtml = "";
		
		if ($this->getQuebraLinhaAntes() == true) {
			$sHtml .= "\n";
		}
		
		if (($this->getAutoFecha() == true) && (count($aComponentes) == 0)) {
			$sHtml .= "<" . $this->getNomeTag();
			
			foreach($aAtributos as $sNomeAtributo => $sValorAtributo) {
				$sHtml .= " " . $sNomeAtributo . "=\"" . $sValorAtributo . "\"";
			}
			
			$sHtml .= " />";
		} else {
			$sHtml .= "<" . $this->getNomeTag();
				
			foreach($aAtributos as $sNomeAtributo => $sValorAtributo) {
				$sHtml .= " " . $sNomeAtributo . "=\"" . $sValorAtributo . "\"";
			}
				
			$sHtml .= ">";
			
			foreach($aComponentes as $mComponente) {
				if (is_string($mComponente) == true) {
					$sHtml .= "\n";
				}
				
				$sHtml .= $mComponente;
			}
			
			if ($this->getQuebraLinhaAntes() == true) {
				$sHtml .= "\n";
			}
			
			$sHtml .= "</" . $this->getNomeTag() . ">";
		}
		
		return $sHtml;
	}
}

?>