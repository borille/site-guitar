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

}





