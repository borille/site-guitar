<?php

class Admin_Model_DbTable_Instrument extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'instrument', 'instrumentId' );
	}

}

