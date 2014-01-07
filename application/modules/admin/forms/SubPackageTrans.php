<?php

class Admin_Form_SubPackageTrans extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$packageId = new Zend_Form_Element_Hidden( 'subpackageId' );

		$languageId = new Zend_Form_Element_Select( 'languageId' );
		$languageId->setLabel( 'Language' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		foreach ( Admin_Model_DbTable_Language::getInstance()->listAll() as $language ) {
			$languageId->addMultiOption( $language['languageId'], $language['languageName'] );
		}

		$subpackageTransName = new Zend_Form_Element_Text( 'subpackageTransName' );
		$subpackageTransName->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$subpackageTransDesc = new Zend_Form_Element_Textarea( 'subpackageTransDesc' );
		$subpackageTransDesc->setLabel( 'Description' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control ckeditor' )
			->setAttrib( 'rows', '4' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );


		$this->addElements( array(
			$packageId,
			$languageId,
			$subpackageTransName,
			$subpackageTransDesc,
			$submit
		) );
	}

}

