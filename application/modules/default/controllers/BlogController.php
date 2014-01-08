<?php

class Default_BlogController extends Zend_Controller_Action
{

	public function init()
	{
		/* Initialize action controller here */
	}

	public function indexAction()
	{
		$filter = array(
			'tag' => $this->getRequest()->getParam( 'tag' )
		);

		$tableBlog = new Default_Model_DbTable_Blog();
		$this->view->data = $tableBlog->listArticles( $filter );
	}

	public function viewAction()
	{
		$tableBlog = new Default_Model_DbTable_Blog();
		$this->view->data = $tableBlog->getArticle( $this->getRequest()->getParam( 'id' ) );
	}


}



