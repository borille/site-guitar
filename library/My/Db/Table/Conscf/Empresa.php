<?php

require_once 'My/Db/Table/Conscf.php';

/**
 * Classe Db table que acessa a tabela CON_SCF.TB0200_EMPRESA
 *
 * @category    My
 * @package     My_Db_Table
 * @subpackage  Conscf
 * @name        My_Db_Table_Conscf_Empresa
 * @copyright   Copyright (c) 2013 - My
 * @version     1.0
 */

class My_Db_Table_Conscf_Empresa extends My_Db_Table_Conscf
{

	public function init()
	{
		parent::configDbTable( 'CON_SCF', 'TB0200_EMPRESA', 'TB0200_COD_EMPRESA' );
	}

	/**
	 * @param $id
	 * @return array
	 */
	public function getEmpresa( $id )
	{
		return $this->getId( $id );
	}

	/**
	 * @param $id
	 * @return string
	 */
	public function getRazaoSocialEmpresa( $id )
	{
		return $this->getRowValue( $id, 'TB0200_NOME_RAZAO_SOCIAL' );
	}

	/**
	 * @param $id
	 * @return string
	 */
	public function getNomeFantasiaEmpresa( $id )
	{
		return $this->getRowValue( $id, 'TB0200_NOME_FANTASIA' );
	}

	/**
	 * @param $id
	 * @return string
	 */
	public function getEmailEmpresa( $id )
	{
		return $this->getRowValue( $id, 'TB0200_DESC_EMAIL' );
	}

}