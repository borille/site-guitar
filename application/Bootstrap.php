<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	//--------------------------------------------------------------------------
	//iniciar a configura��o do ACL
	protected function _initAcl()
	{
		return new My_Acl_Setup();
	}

}

