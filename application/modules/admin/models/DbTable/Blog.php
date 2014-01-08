<?php

class Admin_Model_DbTable_Blog extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'blog', 'blogId' );
	}

	public function getSelect()
	{
		$select = parent::getSelect();
		$select->join( 'admin', 'blog.adminId = admin.adminId', 'adminFullName' );

		return $select;
	}

}

