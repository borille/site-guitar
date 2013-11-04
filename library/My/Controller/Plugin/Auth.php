<?php

class My_Controller_Plugin_Auth extends Zend_Controller_Plugin_Abstract
{

	/**
	 * @var Zend_Auth
	 */
	protected $_auth = null;

	/**
	 * @var Zend_Acl
	 */
	protected $_acl = null;

	/**
	 * @var array
	 */
	protected $_notLoggedRoute = array(
		'controller' => 'user',
		'action' => 'login',
		'module' => 'admin'
	);

	/**
	 * @var array
	 */
	protected $_forbiddenRoute = array(
		'controller' => 'error',
		'action' => 'forbidden',
		'module' => 'default'
	);

	public function __construct()
	{
		$this->_auth = Zend_Auth::getInstance();
		$this->_acl = Zend_Registry::get( 'acl' );
	}

	public function preDispatch( Zend_Controller_Request_Abstract $request )
	{
		if ( $this->getRequest()->getModuleName() == 'admin' ) {
			$controller = $request->getControllerName();
			$action = $request->getActionName();
			$module = $request->getModuleName();

			//verificações de segurança e redirecionamento
			if ( !$this->_auth->hasIdentity() ) {
				//usuario ainda nao fez o login
				$controller = $this->_notLoggedRoute['controller'];
				$action = $this->_notLoggedRoute['action'];
				$module = $this->_notLoggedRoute['module'];
			} else if ( !$this->_isAuthorized( $module, $controller, $action ) ) {
				//usuario fez o login mas nao tem acesso ao controller em questao
				$controller = $this->_forbiddenRoute['controller'];
				$action = $this->_forbiddenRoute['action'];
				$module = $this->_forbiddenRoute['module'];
			}

			//redireciona para o controller/action correto
			$request->setControllerName( $controller );
			$request->setActionName( $action );
			$request->setModuleName( $module );
		}
	}

	protected function _isAuthorized( $module, $controller, $action )
	{
		$user = $this->_auth->getIdentity();
		$resource = $module . ':' . $controller;

		//verifica se o sistema possui o controller e se usuario tem acesso ao mesmo (controller/action)
		if ( !$this->_acl->has( $resource ) || !$this->_acl->isAllowed( $user, $resource, $action ) ) {
			return false;
		}

		return true;
	}

}