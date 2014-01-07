<?php

class Admin_TagController extends My_Controller_Action
{

	public function init()
	{
		$this->setFormName( 'Admin_Form_Tag' );
		$this->setTableName( 'Admin_Model_DbTable_Tag' );
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







