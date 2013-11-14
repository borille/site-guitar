<?php

class Admin_Form_Package extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$packageId = new Zend_Form_Element_Hidden( 'packageId' );

		$packageName = new Zend_Form_Element_Text( 'packageName' );
		$packageName->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$subCategoryId = new Zend_Form_Element_Select( 'subCategoryId' );
		$subCategoryId->setLabel( 'Sub Category' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		foreach ( Admin_Model_DbTable_SubCategory::getInstance()->getSubCategories() as $subCategory ) {
			$subCategoryId->addMultiOption( $subCategory['subCategoryId'], $subCategory['categoryName'] . ' - ' . $subCategory['subCategoryName'] );
		}

		$instrumentId = new Zend_Form_Element_Select( 'instrumentId' );
		$instrumentId->setLabel( 'Instrument' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		foreach ( Admin_Model_DbTable_Instrument::getInstance()->listAll() as $instrument ) {
			$instrumentId->addMultiOption( $instrument['instrumentId'], $instrument['instrumentName'] );
		}

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$packageId,
			$packageName,
			$subCategoryId,
			$instrumentId,
			$submit
		) );
	}

}

