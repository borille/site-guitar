<?php

class Admin_CategoryController extends My_Controller_Action
{

	public function init()
	{
		$this->setFormName( 'Admin_Form_Category' );
		$this->setTableName( 'Admin_Model_DbTable_Category' );
	}

	public function indexAction()
	{
		parent::indexAction();
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





