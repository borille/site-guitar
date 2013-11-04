<?php

class Default_Model_DbTable_Blog extends Zend_Db_Table_Abstract
{

	protected $_name = 'blog';


	public function listArticles()
	{
		$data = array(
			'title' => '',
			''
		);

		return $data;
	}

}

