<?php

class Admin_Model_DbTable_Category extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'category', 'categoryId' );
	}

}

