<?php
class Admin_Bootstrap extends Zend_Application_Module_Bootstrap
{
	//--------------------------------------------------------------------------
	//iniciar a configuração do ACL
	protected function _initAcl()
	{
		return new My_Acl_Setup();
	}
}