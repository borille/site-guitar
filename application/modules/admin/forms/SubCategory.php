<?php

class Admin_Form_SubCategory extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$subCategoryId = new Zend_Form_Element_Hidden( 'subCategoryId' );

		$subCategoryName = new Zend_Form_Element_Text( 'subCategoryName' );
		$subCategoryName->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$categoryId = new Zend_Form_Element_Select( 'categoryId' );
		$categoryId->setLabel( 'Category' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		foreach ( Admin_Model_DbTable_Category::getInstance()->listAll() as $category ) {
			$categoryId->addMultiOption( $category['categoryId'], $category['categoryName'] );
		}

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$subCategoryId,
			$subCategoryName,
			$categoryId,
			$submit
		) );
	}

}

