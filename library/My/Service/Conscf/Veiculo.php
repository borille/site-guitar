<?php
/**
 * Classe com métodos comuns para CRUD na tabela CON_SCF.TB0300_VEICULO_TC
 *
 * @category    My
 * @package     My_Service
 * @subpackage  Sirh
 * @name        My_Service_Conscf_Veiculo
 * @copyright   Copyright (c) 2013 - My
 * @version     1.0
 */
class My_Service_Conscf_Veiculo extends My_Service_Conscf implements My_Service_Interface
{

	/**
	 * @var My_Service_Conscf_Veiculo
	 */
	protected static $_instance = null;

	/**
	 * @var My_Db_Table_Conscf_Veiculo
	 */
	protected $_repository = null;

	/**
	 * @return My_Service_Conscf_Veiculo
	 */
	public static function getInstance()
	{
		if ( self::$_instance === NULL ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * @return My_Db_Table_Conscf_Veiculo
	 */
	function getRepository()
	{
		if ( $this->_repository === null ) {
			$this->_repository = new My_Db_Table_Conscf_Veiculo();
		}
		return $this->_repository;
	}

	/**
	 * @param $placa
	 * @param bool $toObject
	 * @return array|My_Model_Conscf_Veiculo
	 */
	public function getVeiculo( $placa, $toObject = true )
	{
		$result = $this->getRepository()->getVeiculo( $placa );

		if ( $toObject ) {
			$result = new My_Model_Conscf_Veiculo( $result );
		}
		return $result;
	}

}