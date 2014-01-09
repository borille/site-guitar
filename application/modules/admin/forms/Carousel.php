<?php

class Admin_Form_Carousel extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$carouselId = new Zend_Form_Element_Hidden( 'carouselId' );

		$carouselName = new Zend_Form_Element_Text( 'carouselName' );
		$carouselName->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$carouselUrl = new Zend_Form_Element_Text( 'carouselUrl' );
		$carouselUrl->setLabel( 'Url' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$fileId = new Zend_Form_Element_Select( 'fileId' );
		$fileId->setLabel( 'File' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		foreach ( Admin_Model_DbTable_File::getInstance()->getFilesType( 'img' ) as $file ) {
			$fileId->addMultiOption( $file['fileId'], $file['fileName'] );
		}

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$carouselId,
			$carouselName,
			$carouselUrl,
			$fileId,
			$submit
		) );
	}


}

