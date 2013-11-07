<?php

class Admin_LanguageController extends My_Controller_Action
{

	public function init()
	{
		$this->setFormName( 'Admin_Form_Language' );
		$this->setTableName( 'Admin_Model_DbTable_Language' );
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







