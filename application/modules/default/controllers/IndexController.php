<?php

class Default_IndexController extends Zend_Controller_Action
{

	public function init()
	{
		/* Initialize action controller here */
	}

	public function indexAction()
	{
		// action body
	}

	public function contactAction()
	{
		$form = new Default_Form_Contact();

		if ( $this->getRequest()->isPost() ) {
			if ( $form->isValid( $this->getRequest()->getPost() ) ) {

				$tableUser = new Default_Model_DbTable_User();

				if ( $tableUser->insert( $form->getValues() ) ) {
					My_Action_Helper::redirect( 'index' );
				} else {
					My_Action_Helper::redirect( 'user', 'sign-up' );
				}
			} else {
				$form->populate( $this->getRequest()->getPost() );
			}
		}

		$this->view->form = $form;
	}

	public function aboutAction()
	{
		My_Action_Helper::disableView( false, true, true );
	}


}





