<?php

class Default_Model_User extends My_Model_Abstract implements Zend_Acl_Role_Interface
{
	private $userId;
	private $userName;
	private $userMail;

	/**
	 * Returns the string identifier of the Role
	 *
	 * @return string
	 */
	public function getRoleId()
	{
		return 'U';
	}

	public function setUserId( $userId )
	{
		$this->userId = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function setUserMail( $userMail )
	{
		$this->userMail = $userMail;
	}

	public function getUserMail()
	{
		return $this->userMail;
	}

	public function setUserName( $userName )
	{
		$this->userName = $userName;
	}

	public function getUserName()
	{
		return $this->userName;
	}

	public function getLanguage()
	{
		return 'pt';
	}

}

