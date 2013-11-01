<?php

class Default_Form_ForgotPassword extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$userMail = new Zend_Form_Element_Text( 'userMail' );
		$userMail->setLabel( $view->translate( "your" ) . ' ' . $view->translate( "mail" ) )
			->setAttrib( 'placeholder', $view->translate( "mail" ) )
			->setRequired( true )
			->addValidator( new Zend_Validate_EmailAddress() )
			->setAttrib( 'class', 'form-control' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( $view->translate( "send" ) . ' ' . $view->translate( "password" ) );
		$submit->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$userMail,
			$submit
		) );
	}

}

