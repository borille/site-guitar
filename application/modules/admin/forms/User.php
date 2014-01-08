<?php

class Admin_Form_User extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$adminId = new Zend_Form_Element_Hidden( 'adminId' );

		$adminUser = new Zend_Form_Element_Text( 'adminName' );
		$adminUser->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$adminFullName = new Zend_Form_Element_Text( 'adminFullName' );
		$adminFullName->setLabel( 'Full Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$adminPassword = new Zend_Form_Element_Password( 'adminPassword' );
		$adminPassword->setLabel( 'Password' )
			->setRequired( true )
			->addValidator( new Zend_Validate_StringLength( array( 'min' => 6, 'max' => 20 ) ) )
			->setAttrib( 'class', 'form-control' );

		$passConfirm = new Zend_Form_Element_Password( 'passConfirm' );
		$passConfirm->setLabel( $view->translate( "confirm-password" ) )
			->setRequired( true )
			->addValidator( new Zend_Validate_StringLength( array( 'min' => 6, 'max' => 20 ) ) )
			->addValidator( new Zend_Validate_Identical( array( 'token' => 'adminPassword' ) ) )
			->setAttrib( 'class', 'form-control' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( $view->translate( "create" ) )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$adminId,
			$adminUser,
			$adminFullName,
			$adminPassword,
			$passConfirm,
			$submit
		) );
	}


}

