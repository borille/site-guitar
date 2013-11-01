<?php

class Default_Form_SignUp extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$userName = new Zend_Form_Element_Text( 'userName' );
		$userName->setLabel( $view->translate( "username" ) )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$userMail = new Zend_Form_Element_Text( 'userMail' );
		$userMail->setLabel( $view->translate( "mail" ) )
			->setRequired( true )
			->addValidator( new Zend_Validate_EmailAddress() )
			->setAttrib( 'class', 'form-control' );

		$userPassword = new Zend_Form_Element_Password( 'userPassword' );
		$userPassword->setLabel( $view->translate( "password" ) )
			->setRequired( true )
			->addValidator( new Zend_Validate_StringLength( array( 'min' => 6, 'max' => 20 ) ) )
			->setAttrib( 'class', 'form-control' );

		$passConfirm = new Zend_Form_Element_Password( 'passConfirm' );
		$passConfirm->setLabel( $view->translate( "confirm-password" ) )
			->setRequired( true )
			->addValidator( new Zend_Validate_StringLength( array( 'min' => 6, 'max' => 20 ) ) )
			->addValidator( new Zend_Validate_Identical( array( 'token' => 'userPassword' ) ) )
			->setAttrib( 'class', 'form-control' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( $view->translate( "create" ) )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$userName,
			$userMail,
			$userPassword,
			$passConfirm,
			$submit
		) );
	}

}

