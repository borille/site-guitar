<?php

class Default_UserController extends Zend_Controller_Action
{

	public function init()
	{
		/* Initialize action controller here */
	}

	public function indexAction()
	{
		if ( !Zend_Auth::getInstance()->hasIdentity() ) {
			My_Action_Helper::redirect( 'index' );
			return;
		}
	}

	public function signUpAction()
	{
		if ( Zend_Auth::getInstance()->hasIdentity() ) {
			My_Action_Helper::redirect( 'index' );
			return;
		}

		$form = new Default_Form_SignUp();

		if ( $this->getRequest()->isPost() ) {
			if ( $form->isValid( $this->getRequest()->getPost() ) ) {

				$form->getElement( 'userPassword' )->setValue( md5( $form->getValue( 'userPassword' ) ) );
				$form->removeElement( 'passConfirm' );

				$tableUser = new Default_Model_DbTable_User();

				if ( $tableUser->insert( $form->getValues() ) ) {
					My_Action_Helper::redirect( 'index' );
				} else {
					My_Action_Helper::redirect( 'user', 'sign-up' );
				}
			} else {
				$form->populate( $this->getRequest()->getPost() );
			}
		}

		$this->view->form = $form;
	}

	public function loginAction()
	{
		if ( Zend_Auth::getInstance()->hasIdentity() ) {
			My_Action_Helper::redirect( 'index' );
			return;
		}

		if ( My_Action_Helper::isAjax() ) {
			My_Action_Helper::disableView( false, true, true );
			$this->view->isAjax = true;
		}

		$form = new Default_Form_Login();

		if ( $this->getRequest()->isPost() ) {
			if ( $form->isValid( $this->getRequest()->getPost() ) ) {

				$tableUser = new Default_Model_DbTable_User();
				$validUser = $tableUser->validateUser( $form->getValue( 'userMail' ), $form->getValue( 'userPassword' ) );

				if ( $validUser ) {
					$userModel = new Default_Model_User( $validUser );
					Zend_Auth::getInstance()->getStorage()->write( $userModel );

					My_Action_Helper::showMessage( $this->view->translate( "login-success" ) );
					My_Action_Helper::redirect( 'index' );
				} else {
					My_Action_Helper::showMessage( $this->view->translate( "login-error" ), 'error' );
					My_Action_Helper::redirect( 'user', 'login' );
				}
			} else {
				$form->populate( $this->getRequest()->getPost() );
			}
		}

		$this->view->form = $form;
	}

	public function logoutAction()
	{
		Zend_Auth::getInstance()->clearIdentity();
		My_Action_Helper::redirect( 'index' );
	}

	public function forgotPasswordAction()
	{
		$form = new Default_Form_ForgotPassword();

		if ( $this->getRequest()->isPost() ) {
			if ( $form->isValid( $this->getRequest()->getPost() ) ) {
				My_Action_Helper::showMessage( $this->view->translate( 'mail-not-found' ), 'warning' );
				My_Action_Helper::redirect( 'user', 'forgot-password' );
			} else {
				$form->populate( $this->getRequest()->getPost() );
			}
		}

		$this->view->form = $form;
	}


}







