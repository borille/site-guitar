<?php

require_once 'EasyBib/Form.php';

class My_Form_Bootstrap extends EasyBib_Form
{

//--------------------------------------------------------------------------
	public function __construct( $options = null )
	{
		$this->setMethod( 'post' );
		parent::__construct( $options );
	}

	/**
	 * Retorna um campo input com mascara e calendário
	 * @param string $name      Nome do campo
	 * @param string $format    Formato da Data
	 * @param string $mask      Máscara para a Data
	 * @param boolean $calendar Exibir o calendário
	 * @return \Zend_Form_Element_Text
	 */
	public function createDate( $name, $label, $format = 'dd/MM/yyyy', $mask = '99/99/9999', $calendar = true )
	{
		if ( $calendar ) {
			$calendar = "<span class='add-on btn' onClick=\"displayCalendar(document.getElementById('$name'),'dd/mm/yyyy',this)\"><i class='icon-calendar'></i></span>";
		}

		if ( $mask ) {
			$mask = "<script type='text/javascript'>jQuery(function($){ $(\"#$name\").mask(\"$mask\");});</script>";
		}

		$element = new Zend_Form_Element_Text( $name );
		$element->setDescription( $calendar )
			->setAttrib( 'style', 'width: 100px' )
			->setLabel( $label )
			->setAttrib( 'decorator', '_DateElementDecorator' )
			->addValidator( new Zend_Validate_Date( array( 'locale' => 'pt_BR', 'format' => $format ) ) );

		echo $mask;

		return $element;
	}

	/**
	 *
	 * @param Zend_Form_Element $element
	 * @param string $mask
	 */
	public function setMask( $element, $mask )
	{
		if ( $mask ) {
			$name = $element->getName();
			echo "<script type='text/javascript'>jQuery(function($){ $(\"#$name\").mask(\"$mask\");});</script>";
		}
		return $this;
	}

	/**
	 * @param Zend_Form_Element $element
	 * @param $icon
	 * @return Zend_Form_Element
	 */
	public function addPrependIcon( $element, $icon )
	{
		$element->setAttrib( 'decorator', '_PrependIconDecorator' )
			->setDescription( "<span class='add-on'><i class='$icon'></i></span>" );

		return $element;
	}

	/**
	 * @param Zend_Form_Element $element
	 * @param $icon
	 * @return Zend_Form_Element
	 */
	public function addAppendIcon( $element, $icon )
	{
		$element->setAttrib( 'decorator', '_AppendIconDecorator' )
			->setDescription( "<span class='add-on'><i class='$icon'></i></span>" );

		return $element;
	}
}