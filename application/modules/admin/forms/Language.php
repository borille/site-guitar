<?php

class Admin_Form_Language extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$languageId = new Zend_Form_Element_Hidden( 'languageId' );

		$languageName = new Zend_Form_Element_Text( 'languageName' );
		$languageName->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$languageId,
			$languageName,
			$submit
		) );
	}

}

