<?php

class Admin_Form_SubPackage extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$subPackageId = new Zend_Form_Element_Hidden( 'subPackageId' );

		$subPackageName = new Zend_Form_Element_Text( 'subPackageName' );
		$subPackageName->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$packageId = new Zend_Form_Element_Select( 'packageId' );
		$packageId->setLabel( 'Package' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		foreach ( Admin_Model_DbTable_Package::getInstance()->listAll() as $package ) {
			$packageId->addMultiOption( $package['packageId'], $package['packageName'] );
		}

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$subPackageId,
			$subPackageName,
			$packageId,
			$submit
		) );
	}

}

