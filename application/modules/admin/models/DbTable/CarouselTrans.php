<?php

class Admin_Model_DbTable_CarouselTrans extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'carouselTrans', array( 'carouselId', 'languageId' ) );
	}

	/**
	 * @param $carouselId
	 * @return Zend_Db_Select
	 */
	public function getSelectCarouselTrans( $carouselId )
	{
		return $this->getSelect()
			->join( 'language', 'carouselTrans.languageId = language.languageId', 'languageName' )
			->where( 'carouselId = ?', $carouselId );
	}

}

