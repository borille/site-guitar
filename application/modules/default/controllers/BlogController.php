<?php

class Default_BlogController extends Zend_Controller_Action
{

    public function init()
    {
		/* Initialize action controller here */
    }

    public function indexAction()
    {
		$tableBlog = new Default_Model_DbTable_Blog();
		$this->view->data = $tableBlog->listArticles();
    }

    public function viewAction()
    {
        // action body
    }


}



