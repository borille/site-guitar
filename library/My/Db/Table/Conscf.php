<?php

require_once 'My/Db/Table/Abstract.php';

/**
 * Classe que configura a dbTable para acessar ao tablespace CON_SCF
 *
 * @category    My
 * @package     My_Db
 * @subpackage  Table
 * @name        My_Db_Table_Conscf
 * @copyright   Copyright (c) 2013 - My
 * @version     1.0
 */
class My_Db_Table_Conscf extends My_Db_Table_Abstract
{

	public function __construct()
	{
		$db = Zend_Db::factory( 'ORACLE', array(
			'host' => 'My.CURITIBA.PR.GOV.BR',
			'username' => 'CON_SCF',
			'password' => 'CON_SCF',
			'dbname' => 'My'
		) );

		parent::__construct( $db );
	}

}