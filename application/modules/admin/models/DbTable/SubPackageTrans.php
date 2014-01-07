<?php

class Admin_Model_DbTable_SubPackageTrans extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'subpackageTrans', array( 'subpackageId', 'languageId' ) );
	}

	/**
	 * @param $subpackageId
	 * @return Zend_Db_Select
	 */
	public function getSelectSubPackagesTrans( $subpackageId )
	{
		return $this->getSelect()
			->join( 'language', 'subpackageTrans.languageId = language.languageId', 'languageName' )
			->where( 'subpackageId = ?', $subpackageId );
	}

}

