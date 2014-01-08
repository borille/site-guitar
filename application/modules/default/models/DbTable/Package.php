<?php

class Default_Model_DbTable_Package  extends My_Db_Table_Abstract
{

    public function init()
    {
        parent::configDbTable( NULL, 'package', 'packageId' );
    }

    public function searchPackage( $search )
    {
        $select = parent::getSelect();
        $select->where( "package.packageName like '%$search%'" )
            ->orWhere( "package.packageTag like '%$search%'" );

        return $this->returnAll( $select );
    }

}

