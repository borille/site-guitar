<?php

class Default_Model_DbTable_Blog extends My_Db_Table_Abstract
{

	public function init()
	{
		parent::configDbTable( NULL, 'blog', 'blogId' );
	}

	public function getSelect()
	{
		$select = parent::getSelect();
		$select->join( 'admin', 'blog.adminId = admin.adminId', 'adminFullName' );

		return $select;
	}

	public function listArticles( $filter )
	{
		$select = parent::getSelect();
		$select->join( 'admin', 'blog.adminId = admin.adminId', 'adminFullName' );

		if ( $filter['tag'] ) {
			$select->where( "blog.blogTag like '%" . $filter['tag'] . "%'" );
		}

		return $this->returnAll( $select );
	}

	public function getArticle( $id )
	{
		$select = parent::getSelect();
		$select->join( 'admin', 'blog.adminId = admin.adminId', 'adminFullName' )
			->where( 'blog.blogId = ?', $id );

		return $this->returnOne( $select );
	}

	public function getSumary()
	{
		$select = $this->getAdapter()->select();
		$select->from( $this->getTableName(), array(
			'blogId',
			'blogTitle',
			"DATE_FORMAT(blogDate, '%M') AS MONTH",
			"DATE_FORMAT(blogDate, '%Y') AS YEAR",
		) );

		$data = $this->returnAll( $select );

		$result = array();
		foreach ( $data as $row ) {
			$result[$row['YEAR']][$row['MONTH']][] = array(
				'blogId' => $row['blogId'],
				'blogTitle' => $row['blogTitle'],
			);
		}

		//var_dump( $result ); die;
		return $result;
	}

}

