<?php

class Admin_Form_Login extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );
		$this->setAction( $this->getView()->url( array( 'module' => 'admin', 'controller' => 'user', 'action' => 'login' ), null, true ) );

		$adminName = new Zend_Form_Element_Text( 'adminName' );
		$adminName->setLabel( 'Username' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$adminPassword = new Zend_Form_Element_Password( 'adminPassword' );
		$adminPassword->setLabel( 'Password' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( $view->translate( "Login" ) );
		$submit->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$adminName,
			$adminPassword,
			$submit
		) );
	}

}

