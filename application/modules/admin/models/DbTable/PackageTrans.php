<?php

class Admin_Model_DbTable_PackageTrans extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'packageTrans', array( 'packageId', 'languageId' ) );
	}

	/**
	 * @param $packageId
	 * @return Zend_Db_Select
	 */
	public function getSelectPackagesTrans( $packageId )
	{
		return $this->getSelect()
			->join( 'language', 'packageTrans.languageId = language.languageId', 'languageName' )
			->where( 'packageId = ?', $packageId );
	}

}

