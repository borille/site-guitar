<?php

class Admin_Model_DbTable_Carousel extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'carousel', 'carouselId' );
	}

}

