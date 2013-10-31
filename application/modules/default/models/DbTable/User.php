<?php

class Default_Model_DbTable_User extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'user', 'userId' );
	}

	public function validateUser( $user, $password )
	{
		$select = $this->getSelect( array( 'userId', 'userName', 'userMail' ) );
		$select->where( 'userMail = ?', $user )
			->where( 'userPassword = ?', md5( $password ) );

		return $this->returnOne( $select );
	}

}

