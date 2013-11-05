<?php

class Admin_UserController extends Zend_Controller_Action
{

	public function init()
	{
		/* Initialize action controller here */
	}

	public function indexAction()
	{
		$this->view->data = My_Action_Helper::paginator( Admin_Model_DbTable_Admin::getInstance()->getSelect(), $this->getRequest()->getParam( 'page', 1 ) );
	}

	public function loginAction()
	{
		if ( Zend_Auth::getInstance()->hasIdentity() ) {
			My_Action_Helper::redirect( 'index' );
			return;
		}

		$form = new Admin_Form_Login();

		if ( $this->getRequest()->isPost() ) {
			if ( $form->isValid( $this->getRequest()->getPost() ) ) {

				$tableUser = new Admin_Model_DbTable_Admin();
				$validUser = $tableUser->validateUser( $form->getValue( 'adminUser' ), $form->getValue( 'adminPassword' ) );

				if ( $validUser ) {
					$adminModel = new Admin_Model_Admin( $validUser );
					Zend_Auth::getInstance()->getStorage()->write( $adminModel );

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

	public function addAction()
	{
		$form = new Admin_Form_User();

		if ( $this->getRequest()->isPost() ) {
			if ( $form->isValid( $this->getRequest()->getPost() ) ) {

				$form->getElement( 'adminPassword' )->setValue( md5( $form->getValue( 'adminPassword' ) ) );
				$form->removeElement( 'passConfirm' );

				$tableAdmin = new Admin_Model_DbTable_Admin();

				if ( $tableAdmin->insert( $form->getValues() ) ) {
					My_Action_Helper::showMessage( 'Salvo com Sucesso!' );
					My_Action_Helper::redirect( 'index' );
				} else {
					My_Action_Helper::showMessage( 'Erro ao Salvar!', 'error' );
					My_Action_Helper::redirect( 'user', 'add' );
				}
			} else {
				$form->populate( $this->getRequest()->getPost() );
			}
		}

		$this->view->form = $form;
	}

	public function editAction()
	{
		$form = new Admin_Form_User();
		$tableAdmin = new Admin_Model_DbTable_Admin();

		if ( $this->getRequest()->isPost() ) {
			if ( $form->isValid( $this->getRequest()->getPost() ) ) {

				$form->getElement( 'adminPassword' )->setValue( md5( $form->getValue( 'adminPassword' ) ) );
				$form->removeElement( 'passConfirm' );

				if ( $tableAdmin->update( $form->getValues() ) ) {
					My_Action_Helper::showMessage( 'Salvo com Sucesso!' );
					My_Action_Helper::redirect( 'index' );
				} else {
					My_Action_Helper::showMessage( 'Erro ao Salvar!', 'error' );
					My_Action_Helper::redirect( 'user', 'add' );
				}
			} else {
				$form->populate( $this->getRequest()->getPost() );
			}
		} else {
			$form->populate( $tableAdmin->getId( $this->getRequest()->getParam( 'id' ) ) );
		}

		$this->view->form = $form;
	}

	public function deleteAction()
	{
		// action body
	}


}









