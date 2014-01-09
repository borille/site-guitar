<?php

class Default_Model_DbTable_Carousel extends My_Db_Table_Abstract
{

	protected $languageId;

	public function init()
	{
		parent::configDbTable( NULL, 'carousel', 'carouselId' );

		$language = new Zend_Session_Namespace( 'language' );
		$this->languageId = $language->id;
	}

	public function getCarousel()
	{
		$select = parent::getSelect();
		$select->join( 'carouselTrans', "carouselTrans.carouselId = carousel.carouselId and carouselTrans.languageId = $this->languageId", array( 'carouselTransTitle', 'carouselTransDesc', 'carouselTransBtn' ) )
			->join( 'file', "file.fileId = carousel.fileId", array( 'fileSrc', 'fileType' ) );

		return $this->returnAll( $select );
	}

}

