<?php

class Admin_Form_Author extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$authorId = new Zend_Form_Element_Hidden( 'authorId' );

		$authorName = new Zend_Form_Element_Text( 'authorName' );
		$authorName->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$authorDesc = new Zend_Form_Element_Textarea( 'authorDesc' );
		$authorDesc->setLabel( 'Description' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control ckeditor' );

		$authorSite = new Zend_Form_Element_Text( 'authorSite' );
		$authorSite->setLabel( 'Web Site' )
			->setAttrib( 'class', 'form-control' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$authorId,
			$authorName,
			$authorDesc,
			$authorSite,
			$submit
		) );
	}

}

