<?php

class Admin_Form_Category extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$categoryId = new Zend_Form_Element_Hidden( 'categoryId' );

		$categoryName = new Zend_Form_Element_Text( 'categoryName' );
		$categoryName->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$categoryId,
			$categoryName,
			$submit
		) );
	}

}

