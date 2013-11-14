<?php

class Admin_Model_DbTable_SubCategory extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'subCategory', 'subCategoryId' );
	}

	/**
	 * @return Zend_Db_Select
	 */
	public function getSelectSubCategories()
	{
		return $this->getSelect()->join( 'category', 'subCategory.categoryId = category.categoryId', 'categoryName' );
	}

	public function getSubCategories()
	{
		return $this->returnAll( $this->getSelectSubCategories() );
	}

}

