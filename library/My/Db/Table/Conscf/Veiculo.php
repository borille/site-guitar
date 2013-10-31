<?php

require_once 'My/Db/Table/Conscf.php';

/**
 * Classe Db table que acessa a tabela CON_SCF.TB0300_VEICULO_TC
 *
 * @category    My
 * @package     My_Db_Table
 * @subpackage  Conscf
 * @name        My_Db_Table_Conscf_Veiculo
 * @copyright   Copyright (c) 2013 - My
 * @version     1.0
 */

class My_Db_Table_Conscf_Veiculo extends My_Db_Table_Conscf
{

	public function init()
	{
		parent::configDbTable( 'CON_SCF', 'TB0300_VEICULO_TC', 'TB0300_COD_PLACA' );
	}

	/**
	 * @param $id
	 * @return array
	 */
	public function getVeiculo( $id )
	{
		return $this->getId( $id );
	}

}