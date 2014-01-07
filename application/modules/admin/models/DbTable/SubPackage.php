<?php

class Admin_Model_DbTable_SubPackage extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'subPackage', 'subPackageId' );
	}

	/**
	 * @return Zend_Db_Select
	 */
	public function getSelectSubPackages()
	{
		return $this->getSelect()->join( 'package', 'subPackage.packageId = package.packageId', 'packageName' );
	}

	public function getSubPackages()
	{
		return $this->returnAll( $this->getSelectSubPackages() );
	}

}

