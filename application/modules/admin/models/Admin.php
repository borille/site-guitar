<?php

class Admin_Model_Admin extends My_Model_Abstract implements Zend_Acl_Role_Interface
{
	private $adminId;
	private $adminName;

	/**
	 * Returns the string identifier of the Role
	 *
	 * @return string
	 */
	public function getRoleId()
	{
		return 'A';
	}

	public function setAdminId( $adminId )
	{
		$this->adminId = $adminId;
	}

	public function getAdminId()
	{
		return $this->adminId;
	}

	public function setAdminName( $adminName )
	{
		$this->adminName = $adminName;
	}

	public function getAdminName()
	{
		return $this->adminName;
	}

	public function getLanguage()
	{
		return 'en';
	}

}

