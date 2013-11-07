<?php

class My_Controller_Action extends Zend_Controller_Action
{
	/**
	 * @var My_Db_Table_Abstract
	 */
	private $_table = null;

	/**
	 * @var string
	 */
	private $_tableName = null;

	/**
	 * @var Zend_Form
	 */
	private $_form = null;

	/**
	 * @var string
	 */
	private $_formName = null;

	/**
	 * @param $formName string
	 */
	public function setFormName( $formName )
	{
		$this->_formName = $formName;
	}

	/**
	 * @return null|string
	 */
	public function getFormName()
	{
		return $this->_formName;
	}

	/**
	 * @param My_Db_Table_Abstract $table
	 */
	public function setTable( $table )
	{
		$this->_table = $table;
	}

	/**
	 * @return My_Db_Table_Abstract
	 */
	public function getTable()
	{
		if ( !$this->_table ) {
			$this->_table = new $this->_tableName();
		}
		return $this->_table;
	}

	/**
	 * @param $tableName string
	 */
	public function setTableName( $tableName )
	{
		$this->_tableName = $tableName;
	}

	/**
	 * @return string
	 */
	public function getTableName()
	{
		return $this->_tableName;
	}

	/**
	 * @param $form Zend_Form
	 */
	public function setForm( $form )
	{
		$this->_form = $form;
	}

	/**
	 * @return Zend_Form
	 */
	public function getForm()
	{
		if ( !$this->_form ) {
			$this->_form = new $this->_formName();
		}
		return $this->_form;
	}

	public function indexAction()
	{
		$this->view->data = My_Action_Helper::paginator( $this->getTable()->getSelect(), $this->getRequest()->getParam( 'page', 1 ) );
	}

	public function addAction()
	{
		if ( $this->getRequest()->isPost() ) {
			if ( $this->getForm()->isValid( $this->getRequest()->getPost() ) ) {
				if ( $this->getTable()->insert( $this->getForm()->getValues() ) ) {
					My_Action_Helper::showMessage( 'Salvo com Sucesso!' );
					My_Action_Helper::redirect( $this->getRequest()->getControllerName() );
				} else {
					My_Action_Helper::showMessage( 'Erro ao Salvar!', 'error' );
					My_Action_Helper::redirect( $this->getRequest()->getControllerName(), $this->getRequest()->getActionName() );
				}
			} else {
				$this->getForm()->populate( $this->getRequest()->getPost() );
			}
		}
		$this->view->form = $this->getForm();
	}

	public function editAction()
	{
		if ( $this->getRequest()->isPost() ) {
			if ( $this->getForm()->isValid( $this->getRequest()->getPost() ) ) {
				if ( $this->getTable()->update( $this->getForm()->getValues() ) ) {
					My_Action_Helper::showMessage( 'Salvo com Sucesso!' );
					My_Action_Helper::redirect( $this->getRequest()->getControllerName() );
				} else {
					My_Action_Helper::showMessage( 'Erro ao Salvar!', 'error' );
					My_Action_Helper::redirect( $this->getRequest()->getControllerName(), $this->getRequest()->getActionName(), array( 'id' => $this->getRequest()->getParam( 'id' ) ) );
				}
			} else {
				$this->getForm()->populate( $this->getRequest()->getPost() );
			}
		} else {
			$this->getForm()->populate( $this->getTable()->getId( $this->getRequest()->getParam( 'id' ) ) );
		}
		$this->view->form = $this->getForm();
	}

	public function deleteAction()
	{
		if ( $this->getRequest()->isPost() ) {
			if ( $this->getTable()->delete( $this->getRequest()->getParam( 'id' ) ) ) {
				My_Action_Helper::showMessage( 'Excluído com Sucesso!' );
			} else {
				My_Action_Helper::showMessage( 'Erro ao excluir!', 'error' );
			}
		}
		My_Action_Helper::redirect( $this->getRequest()->getControllerName() );
	}
}