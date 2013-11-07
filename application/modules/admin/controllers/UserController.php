<?php

class Admin_UserController extends My_Controller_Action
{

	public function init()
	{
		$this->setFormName( 'Admin_Form_User' );
		$this->setTableName( 'Admin_Model_DbTable_Admin' );
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

	public function indexAction()
	{
		parent::indexAction();
	}

	public function addAction()
	{
		if ( $this->getRequest()->isPost() ) {
			if ( $this->getForm()->isValid( $this->getRequest()->getPost() ) ) {

				$this->getForm()->getElement( 'adminPassword' )->setValue( md5( $this->getForm()->getValue( 'adminPassword' ) ) );
				$this->getForm()->removeElement( 'passConfirm' );

				if ( $this->getTable()->insert( $this->getForm()->getValues() ) ) {
					My_Action_Helper::showMessage( 'Salvo com Sucesso!' );
					My_Action_Helper::redirect( $this->getRequest()->getControllerName() );
				} else {
					My_Action_Helper::showMessage( 'Erro ao Salvar!', 'error' );
					My_Action_Helper::redirect( $this->getRequest()->getControllerName(), $this->getRequest()->getActionName() );
				}
			} else {
				$this->getForm()->populate( $this->getRequest()->getPost() );
			}
		}

		$this->view->form = $this->getForm();
	}

	public function editAction()
	{
		if ( $this->getRequest()->isPost() ) {
			if ( $this->getForm()->isValid( $this->getRequest()->getPost() ) ) {

				$this->getForm()->getElement( 'adminPassword' )->setValue( md5( $this->getForm()->getValue( 'adminPassword' ) ) );
				$this->getForm()->removeElement( 'passConfirm' );

				if ( $this->getTable()->update( $this->getForm()->getValues() ) ) {
					My_Action_Helper::showMessage( 'Salvo com Sucesso!' );
					My_Action_Helper::redirect( $this->getRequest()->getControllerName() );
				} else {
					My_Action_Helper::showMessage( 'Erro ao Salvar!', 'error' );
					My_Action_Helper::redirect( $this->getRequest()->getControllerName(), $this->getRequest()->getActionName(), array( 'id' => $this->getRequest()->getParam( 'id' ) ) );
				}
			} else {
				$this->getForm()->populate( $this->getRequest()->getPost() );
			}
		} else {
			$this->getForm()->populate( $this->getTable()->getId( $this->getRequest()->getParam( 'id' ) ) );
		}

		$this->view->form = $this->getForm();
	}

	public function deleteAction()
	{
		parent::deleteAction();
	}


}









