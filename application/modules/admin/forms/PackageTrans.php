<?php

class Admin_Form_PackageTrans extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$packageId = new Zend_Form_Element_Text( 'packageId' );

		$languageId = new Zend_Form_Element_Select( 'languageId' );
		$languageId->setLabel( 'Language' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		foreach ( Admin_Model_DbTable_Language::getInstance()->listAll() as $language ) {
			$languageId->addMultiOption( $language['languageId'], $language['languageName'] );
		}

		$packageTransName = new Zend_Form_Element_Text( 'packageTransName' );
		$packageTransName->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$packageTransDesc = new Zend_Form_Element_Textarea( 'packageTransDesc' );
		$packageTransDesc->setLabel( 'Description' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' )
			->setAttrib( 'rows', '4' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );


		$this->addElements( array(
			$packageId,
			$languageId,
			$packageTransName,
			$packageTransDesc,
			$submit
		) );
	}


}

