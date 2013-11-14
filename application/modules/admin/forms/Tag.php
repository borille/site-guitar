<?php

class Admin_Form_Tag extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$tagId = new Zend_Form_Element_Hidden( 'tagId' );

		$tagName = new Zend_Form_Element_Text( 'tagName' );
		$tagName->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$tagColor = new Zend_Form_Element_Text( 'tagColor' );
		$tagColor->setLabel( 'Color' )
			->setAttrib( 'class', 'form-control' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$tagId,
			$tagName,
			$tagColor,
			$submit
		) );
	}

}

