<?php

class Default_Model_DbTable_Author extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'author', 'authorId' );
	}

}

