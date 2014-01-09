<?php

class Default_Model_DbTable_Package extends My_Db_Table_Abstract
{

    protected $languageId;

    public function init()
    {
        parent::configDbTable( NULL, 'package', 'packageId' );

        $language = new Zend_Session_Namespace( 'language' );
        $this->languageId = $language->id;
    }

    public function searchPackage( $search )
    {
        $select = parent::getSelect();
        $select->join( 'packageTrans', "packageTrans.packageId = package.packageId and packageTrans.languageId = $this->languageId", array( 'packageTransName' ) )
            ->where( "packageTrans.packageTransName like '%$search%'" )
            ->orWhere( "package.packageTag like '%$search%'" );

        return $this->returnAll( $select );
    }

    public function getPackage( $id )
    {
        $select = parent::getSelect();
        $select->join( 'packageTrans', "packageTrans.packageId = package.packageId and packageTrans.languageId = $this->languageId", array( 'packageTransName', 'packageTransDesc' ) )
            ->join( 'instrument', 'package.instrumentId = instrument.instrumentId', 'instrumentName' )
            ->join( 'author', 'package.authorId = author.authorId', 'authorName' )
            ->where( "package.packageId = ?", $id );

        return $this->returnOne( $select );
    }

}

