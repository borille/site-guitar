<?php

class Admin_Model_DbTable_File extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'file', 'fileId' );
	}

	public function getFilesType( $type )
	{
		$select = $this->getSelect()->where( 'fileType = ?', $type );

		return $this->returnAll( $select );
	}

}

