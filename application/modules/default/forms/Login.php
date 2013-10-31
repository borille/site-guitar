<?php

class Default_Form_Login extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form-signin' );

		$userMail = new Zend_Form_Element_Text( 'userMail' );
		$userMail->setAttrib( 'placeholder', $view->translate( "mail" ) )
			->setRequired( true )
			//->addValidator( new Zend_Validate_EmailAddress() )
			->setAttrib( 'class', 'form-control' );

		$userPassword = new Zend_Form_Element_Password( 'userPassword' );
		$userPassword->setAttrib( 'placeholder', $view->translate( "password" ) )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( $view->translate( "Login" ) );
		$submit->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$userMail,
			$userPassword,
			$submit
		) );
	}


}

