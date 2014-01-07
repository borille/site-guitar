<?php

class Admin_SubPackageController extends My_Controller_Action
{

	public function init()
	{
		$this->setFormName( 'Admin_Form_SubPackage' );
		$this->setTableName( 'Admin_Model_DbTable_SubPackage' );
	}

	public function indexAction()
	{
		$this->view->data = My_Action_Helper::paginator( $this->getTable()->getSelectSubPackages(), $this->getRequest()->getParam( 'page', 1 ) );
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





