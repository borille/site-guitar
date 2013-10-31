<?php
/**
 * Classe com métodos comuns para CRUD na tabela CON_SCF.TB0200_EMPRESA
 *
 * @category    My
 * @package     My_Service
 * @subpackage  Sirh
 * @name        My_Service_Conscf_Empresa
 * @copyright   Copyright (c) 2013 - My
 * @version     1.0
 */
class My_Service_Conscf_Empresa extends My_Service_Conscf implements My_Service_Interface
{

	/**
	 * @var My_Service_Conscf_Empresa
	 */
	protected static $_instance = null;

	/**
	 * @var My_Db_Table_Conscf_Empresa
	 */
	protected $_repository = null;

	/**
	 * @return My_Service_Conscf_Empresa
	 */
	public static function getInstance()
	{
		if ( self::$_instance === NULL ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * @return My_Db_Table_Conscf_Empresa
	 */
	function getRepository()
	{
		if ( $this->_repository === null ) {
			$this->_repository = new My_Db_Table_Conscf_Empresa();
		}
		return $this->_repository;
	}

	/**
	 * @param $id
	 * @param bool $toObject
	 * @return array|My_Model_Conscf_Empresa
	 */
	public function getEmpresa( $id, $toObject = true )
	{
		$result = $this->getRepository()->getEmpresa( $id );

		if ( $toObject ) {
			$result = new My_Model_Conscf_Empresa( $result );
		}
		return $result;
	}

	/**
	 * @param $id
	 * @return string
	 */
	public function getRazaoSocialEmpresa( $id )
	{
		return $this->getRepository()->getRazaoSocialEmpresa( $id );
	}

	/**
	 * @param $id
	 * @return string
	 */
	public function getNomeFantasiaEmpresa( $id )
	{
		return $this->getRepository()->getNomeFantasiaEmpresa( $id );
	}

	/**
	 * @param $id
	 * @return string
	 */
	public function getEmailEmpresa( $id )
	{
		return $this->getRepository()->getEmailEmpresa( $id );
	}
}