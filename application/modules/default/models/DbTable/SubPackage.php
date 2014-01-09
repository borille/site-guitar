<?php

class Default_Model_DbTable_SubPackage  extends My_Db_Table_Abstract
{

    protected $languageId;

    public function init()
    {
        parent::configDbTable( NULL, 'subpackage', 'subpackageId' );

        $language = new Zend_Session_Namespace( 'language' );
        $this->languageId = $language->id;
    }


    public function getSubPackages( $packageId )
    {
        $select = parent::getSelect();
        $select->join( 'subPackageTrans', "subPackageTrans.subPackageId = subPackage.subPackageId and subPackageTrans.languageId = $this->languageId", array( 'subPackageTransName', 'subPackageTransDesc' ) )
            ->where( "subPackage.packageId = ?", $packageId );

        return $this->returnAll( $select );
    }

}

