<?php

class Admin_Model_DbTable_Package extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'package', 'packageId' );
	}

	/**
	 * @return Zend_Db_Select
	 */
	public function getSelectPackages()
	{
		return $this->getSelect()
			->join( 'subCategory', 'package.subCategoryId = subCategory.subCategoryId', 'subCategoryName' )
			->join( 'category', 'subCategory.categoryId = category.categoryId', 'categoryName' )
			->join( 'instrument', 'package.instrumentId = instrument.instrumentId', 'instrumentName' );
	}

}

