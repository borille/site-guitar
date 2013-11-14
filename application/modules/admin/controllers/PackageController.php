<?php

class Admin_PackageController extends My_Controller_Action
{

	public function init()
	{
		$this->setFormName( 'Admin_Form_Package' );
		$this->setTableName( 'Admin_Model_DbTable_Package' );
	}

	public function indexAction()
	{
		$this->view->data = My_Action_Helper::paginator( $this->getTable()->getSelectPackages(), $this->getRequest()->getParam( 'page', 1 ) );
	}

	public function addAction()
	{
		parent::addAction();
	}

	public function editAction()
	{
		parent::editAction();
	}

	public function deleteAction()
	{
		parent::deleteAction();
	}

	public function translateAction()
	{
		$id = $this->getRequest()->getParam( 'id' );

		$this->view->data = My_Action_Helper::paginator( Admin_Model_DbTable_PackageTrans::getInstance()->getSelectPackagesTrans( $id ), $this->getRequest()->getParam( 'page', 1 ) );
		$this->view->id = $id;
	}

	public function translateAddAction()
	{
		$form = new Admin_Form_PackageTrans();
		$tablePackageTrans = new Admin_Model_DbTable_PackageTrans();
		$id = $this->getRequest()->getParam( 'id' );

		if ( $this->getRequest()->isPost() ) {
			if ( $form->isValid( $this->getRequest()->getPost() ) ) {
				if ( $tablePackageTrans->insert( $form->getValues() ) ) {
					My_Action_Helper::showMessage( 'Salvo com Sucesso!' );
				} else {
					My_Action_Helper::showMessage( 'Erro ao Salvar!', 'danger' );
				}
				My_Action_Helper::redirect( 'package', 'translate', array( 'id' => $id ) );
			} else {
				$form->populate( $this->getRequest()->getPost() );
			}
		} else {
			$form->getElement( 'packageId' )->setValue( $id );
		}

		$this->view->id = $id;
		$this->view->form = $form;
	}

	public function translateEditAction()
	{
		$form = new Admin_Form_PackageTrans();
		$tablePackageTrans = new Admin_Model_DbTable_PackageTrans();
		$id = $this->getRequest()->getParam( 'id' );
		$language = $this->getRequest()->getParam( 'language' );

		if ( $this->getRequest()->isPost() ) {
			if ( $form->isValid( $this->getRequest()->getPost() ) ) {
				if ( $tablePackageTrans->update( $form->getValues() ) ) {
					My_Action_Helper::showMessage( 'Salvo com Sucesso!' );
				} else {
					My_Action_Helper::showMessage( 'Erro ao Salvar!', 'danger' );
				}
				My_Action_Helper::redirect( 'package', 'translate', array( 'id' => $id ) );
			} else {
				$form->populate( $this->getRequest()->getPost() );
			}
		} else {
			$form->populate( $tablePackageTrans->getId( array( 'categoryId' => $id, 'languageId' => $language ) ) );
		}

		$this->view->id = $id;
		$this->view->form = $form;
	}

	public function translateDeleteAction()
	{
		$tablePackageTrans = new Admin_Model_DbTable_PackageTrans();
		if ( $tablePackageTrans->delete( array( 'categoryId' => $this->getRequest()->getParam( 'id' ), 'languageId' => $this->getRequest()->getParam( 'language' ) ) ) ) {
			My_Action_Helper::showMessage( 'Excluído com Sucesso!' );
		} else {
			My_Action_Helper::showMessage( 'Erro ao excluir!', 'danger' );
		}
		My_Action_Helper::redirect( 'package', 'translate', array( 'id' => $this->getRequest()->getParam( 'id' ) ) );
	}


}













