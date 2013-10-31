<?php
/**
 * Form de login
 *
 * @category    My
 * @package     My_Form
 * @subpackage  Bootstrap
 * @name        My_Form_Bootstrap_Login
 * @copyright   Copyright (c) 2013 - My
 * @version     1.0
 */
class My_Form_Bootstrap_Login extends My_Form_Bootstrap
{

	public function init()
	{
		$empresa = new Zend_Form_Element_Select( 'empresa' );
		foreach ( My_Service_Sirh_Empresa::getInstance()->getEmpresasByCodigo() as $emp ) {
			$empresa->addMultiOption( $emp->getCodigoEmpresa(), $emp->getDescricaoEmpresa() );
		}
		$this->addPrependIcon( $empresa, 'icon-home' );

		//----------------------------------------------------------------------
		$matricula = new Zend_Form_Element_Text( 'matricula' );
		$matricula->setAttrib( 'placeholder', 'Matrícula' )
			->setAttribs( array( 'maxlength' => 5, 'onKeyPress' => 'return mascaraInteiro(event);' ) )
			->addValidator( new Zend_Validate_Int )
			->setRequired( true )
			->addValidator( 'StringLength', false, array( 5 ) );
		$this->addPrependIcon( $matricula, 'icon-user' );

		//----------------------------------------------------------------------
		$senha = new Zend_Form_Element_Password( 'senha' );
		$senha->setAttrib( 'placeholder', 'Senha' )
			->setRequired( true )
			->addValidator( 'StringLength', false, array( 4 ) );
		$this->addPrependIcon( $senha, 'icon-lock' );

		//----------------------------------------------------------------------
		$submit = new Zend_Form_Element_Button( 'submit' );
		$submit->setLabel( 'Login' );

		//----------------------------------------------------------------------
		$this->setAttrib( 'class', 'form-login' );
		$this->addElements( array( $empresa, $matricula, $senha, $submit ) );

		//----------------------------------------------------------------------
		EasyBib_Form_Decorator::setFormDecorator( $this, EasyBib_Form_Decorator::BOOTSTRAP );
	}
}