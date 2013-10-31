<?php

require_once 'My/Db/Table/Sirh.php';

/**
 * Classe Db table que acessa a view SIRH.VW_LOGIN
 *
 * @category    My
 * @package     My_Db_Table
 * @subpackage  Sirh
 * @name        My_Db_Table_Sirh_Login
 * @copyright   Copyright (c) 2013 - My
 * @version     1.0
 */

class My_Db_Table_Sirh_Login extends My_Db_Table_Sirh
{

	public function init()
	{
		parent::configDbTable( 'SIRH', 'VW_LOGIN' );
	}

	/**
	 * @param $matricula
	 * @param $senha
	 * @param int $empresa
	 * @return array
	 */
	public function validaLoginSemDigito( $matricula, $senha, $empresa = 1 )
	{
		$select = $this->getSelect()
			->where( 'MATRICULA = ?', $matricula )
			->where( 'EMPRESA = ?', $empresa )
			->where( 'SENHA = SIRH.CRIPTOGRAFA_2(?)', $senha );

		return $this->returnOne( $select );
	}

	/**
	 * @param $matricula
	 * @param $senha
	 * @return array
	 */
	public function validaLoginComDigito( $matricula, $senha )
	{
		$select = $this->getSelect()
			->where( 'MATRICULA_TOTAL = ?', $matricula )
			->where( 'SENHA = SIRH.CRIPTOGRAFA_2(?)', $senha );

		return $this->returnOne( $select );
	}
}