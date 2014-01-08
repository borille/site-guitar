<?php

class Admin_BlogController extends My_Controller_Action
{

	public function init()
	{
		$this->setFormName( 'Admin_Form_Blog' );
		$this->setTableName( 'Admin_Model_DbTable_Blog' );
	}

	public function indexAction()
	{
		parent::indexAction();
	}

	public function addAction()
	{
		parent::addAction();

		$this->view->form;
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







