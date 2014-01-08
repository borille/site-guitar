<?php

class Admin_Model_DbTable_SubPackage extends My_Db_Table_Abstract
{

    public function init()
    {
        parent::configDbTable( NULL, 'subPackage', 'subPackageId' );
    }

    /**
     * @return Zend_Db_Select
     */
    public function getSelectSubPackages( $package = null )
    {
        $select = $this->getSelect()->join( 'package', 'subPackage.packageId = package.packageId', 'packageName' );

        if ( $package ) {
            $select->where( 'subPackage.packageId = ?', $package );
        }

        return $select;
    }

    public function getSubPackages()
    {
        return $this->returnAll( $this->getSelectSubPackages() );
    }

}

