<?php

class Admin_Model_DbTable_SubCategory extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'subCategory', 'subCategoryId' );
	}

	public function listSubCategory()
	{
		return $this->getSelect()->join( 'category', 'subCategory.categoryId = category.categoryId', 'categoryName' );
	}

}

