<?php

class Admin_Form_Blog extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$blogId = new Zend_Form_Element_Hidden( 'blogId' );

		$adminId = new Zend_Form_Element_Hidden( 'adminId' );
		$adminId->setValue( Zend_Auth::getInstance()->getIdentity()->getAdminId() );

		$blogTitle = new Zend_Form_Element_Text( 'blogTitle' );
		$blogTitle->setLabel( 'Title' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$blogContent = new Zend_Form_Element_Textarea( 'blogContent' );
		$blogContent->setLabel( 'Content' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control ckeditor' );

		$blogTag = new Zend_Form_Element_Text( 'blogTag' );
		$blogTag->setLabel( 'Tags' )
			->setAttrib( 'class', 'form-control' )
			->setDescription( 'comma separated' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$blogId,
			$blogTitle,
			$blogContent,
			$blogTag,
			$submit,
			$adminId
		) );
	}

}

