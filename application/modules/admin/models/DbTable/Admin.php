<?php

class Admin_Model_DbTable_Admin extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'admin', 'adminId' );
	}

	public function validateUser( $user, $password )
	{
		$select = $this->getSelect( array( 'adminId', 'adminName' ) );
		$select->where( 'adminName = ?', $user )
			->where( 'adminPassword = ?', md5( $password ) );

		return $this->returnOne( $select );
	}

}

