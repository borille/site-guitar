<?php

class Default_PackageController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function viewAction()
    {
        $id = $this->getRequest()->getParam( 'id' );

        $tablePackage = new Default_Model_DbTable_Package();
        $this->view->package = $tablePackage->getPackage( $id );

        $tableSubPackage = new Default_Model_DbTable_SubPackage();
        $this->view->subPackage = $tableSubPackage->getSubPackages( $id );
    }


}



