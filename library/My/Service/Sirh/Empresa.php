<?php

require_once 'My/Service/Sirh.php';
require_once 'My/Service/Interface.php';
require_once 'My/Db/Table/Sirh/Empresa.php';

/**
 * Classe com métodos comuns para CRUD na tabela SIRH.SIRH_TB005_EMPRESA_RH
 *
 * @category    My
 * @package     My_Service
 * @subpackage  Sirh
 * @name        My_Service_Sirh_Empresa
 * @copyright   Copyright (c) 2013 - My
 * @version     1.0
 */
class My_Service_Sirh_Empresa extends My_Service_Sirh implements My_Service_Interface
{

	/**
	 * @var My_Service_Sirh_Empresa
	 */
	protected static $_instance = null;

	/**
	 * @var My_Db_Table_Sirh_Empresa
	 */
	protected $_repository = null;

	/**
	 * @return My_Service_Sirh_Empresa
	 */
	public static function getInstance()
	{
		if ( self::$_instance === NULL ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * @return My_Db_Table_Sirh_Empresa
	 */
	function getRepository()
	{
		if ( $this->_repository === null ) {
			require_once 'My/Model/Sirh/Empresa.php';
			$this->_repository = new My_Db_Table_Sirh_Empresa();
		}
		return $this->_repository;
	}

	/**
	 * @param $id
	 * @param bool $toObject
	 * @return array|My_Model_Sirh_Empresa
	 */
	public function getEmpresa( $id, $toObject = true )
	{
		$result = $this->getRepository()->getEmpresa( (int)$id );

		if ( $toObject ) {
			require_once 'My/Model/Sirh/Empresa.php';
			$result = new My_Model_Sirh_Empresa( $result );
		}
		return $result;
	}

	/**
	 * Retorna as empresas ordenadas pelo código
	 *
	 * @param bool $toObject
	 * @return array
	 */
	public function getEmpresasByCodigo( $toObject = true )
	{
		$result = $this->getRepository()->getEmpresasByCodigo();

		if ( $toObject ) {
			require_once 'My/Model/Sirh/Empresa.php';
			$list = array();
			foreach ( $result as $row ) {
				$model = new My_Model_Sirh_Empresa( $row );
				$list[] = $model;
			}
			$result = $list;
		}
		return $result;
	}

	/**
	 * Retorna as empresas ordenadas pela descrição
	 *
	 * @param bool $toObject
	 * @return array
	 */
	public function getEmpresasByDescricao( $toObject = true )
	{
		$result = $this->getRepository()->getEmpresasByDescricao();

		if ( $toObject ) {
			require_once 'My/Model/Sirh/Empresa.php';
			$list = array();
			foreach ( $result as $row ) {
				$model = new My_Model_Sirh_Empresa( $row );
				$list[] = $model;
			}
			$result = $list;
		}
		return $result;
	}

}