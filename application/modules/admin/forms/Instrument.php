<?php

class Admin_Form_Instrument extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$instrumentId = new Zend_Form_Element_Hidden( 'instrumentId' );

		$instrumentName = new Zend_Form_Element_Text( 'instrumentName' );
		$instrumentName->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$instrumentId,
			$instrumentName,
			$submit
		) );
	}

}

