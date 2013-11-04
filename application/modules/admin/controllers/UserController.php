<?php

class Admin_UserController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function loginAction()
    {
        if (Zend_Auth::getInstance()->hasIdentity()) {
            My_Action_Helper::redirect('index');
            return;
        }

        $form = new Admin_Form_Login();

        if ($this->getRequest()->isPost()) {
            if ($form->isValid($this->getRequest()->getPost())) {

                $tableUser = new Admin_Model_DbTable_Admin();
                $validUser = $tableUser->validateUser($form->getValue('adminUser'), $form->getValue('adminPassword'));

                if ($validUser) {
                    $adminModel = new Admin_Model_Admin($validUser);
                    Zend_Auth::getInstance()->getStorage()->write($adminModel);

                    My_Action_Helper::showMessage($this->view->translate("login-success"));
                    My_Action_Helper::redirect('index');
                } else {
                    My_Action_Helper::showMessage($this->view->translate("login-error"), 'error');
                    My_Action_Helper::redirect('user', 'login');
                }
            } else {
                $form->populate($this->getRequest()->getPost());
            }
        }

        $this->view->form = $form;
    }

    public function addAction()
    {
        $form = new Admin_Form_User();

        if ( $this->getRequest()->isPost() ) {
            if ( $form->isValid( $this->getRequest()->getPost() ) ) {

                $form->getElement( 'adminPassword' )->setValue( md5( $form->getValue( 'adminPassword' ) ) );
                $form->removeElement( 'passConfirm' );

                $tableAdmin = new Admin_Model_DbTable_Admin();

                if ( $tableAdmin->insert( $form->getValues() ) ) {
                    My_Action_Helper::redirect( 'index' );
                } else {
                    My_Action_Helper::redirect( 'user', 'add' );
                }
            } else {
                $form->populate( $this->getRequest()->getPost() );
            }
        }

        $this->view->form = $form;
    }

    public function editAction()
    {
        // action body
    }

    public function deleteAction()
    {
        // action body
    }


}









