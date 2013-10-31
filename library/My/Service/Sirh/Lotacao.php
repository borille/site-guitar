<?php

require_once 'My/Service/Sirh.php';
require_once 'My/Service/Interface.php';
require_once 'My/Db/Table/Sirh/Lotacao.php';

/**
 * Classe com m�todos comuns para CRUD na tabela SIRH.SIRH_TB002_LOTACAO_My
 *
 * @category    My
 * @package     My_Service
 * @subpackage  Sirh
 * @name        My_Service_Sirh_Lotacao
 * @copyright   Copyright (c) 2013 - My
 * @version     1.0
 */
class My_Service_Sirh_Lotacao extends My_Service_Sirh implements My_Service_Interface
{

	/**
	 * @var My_Service_Sirh_Lotacao
	 */
	protected static $_instance = null;

	/**
	 * @var My_Db_Table_Sirh_Lotacao
	 */
	protected $_repository = null;

	/**
	 * @return My_Db_Table_Sirh_Lotacao
	 */
	public function getRepository()
	{
		if ( $this->_repository === null ) {
			$this->_repository = new My_Db_Table_Sirh_Lotacao();
		}
		return $this->_repository;
	}

	/**
	 * @return My_Service_Sirh_Lotacao
	 */
	public static function getInstance()
	{
		if ( self::$_instance === null ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * Retorna os dados da verba passada
	 *
	 * @param $verba
	 * @param $toObject
	 * @return array|My_Model_Sirh_Lotacao
	 */
	public function getVerba( $verba, $toObject = true )
	{
		$result = $this->getRepository()->getId( self::validarVerba( $verba ) );

		if ( $toObject ) {
			require_once 'My/Model/Sirh/Lotacao.php';
			$result = new My_Model_Sirh_Lotacao( $result );
		}
		return $result;
	}

	/**
	 * Retorna se a verba est� ativa ou n�o
	 *
	 * @param $verba
	 * @return bool
	 */
	public function isVerbaAtiva( $verba )
	{
		$result = $this->getRepository()->getDataExtincaoVerba( self::validarVerba( $verba ) );

		if ( $result != null ) {
			return false;
		}
		return true;
	}

	/**
	 * Retorna o nome da verba
	 *
	 * @param $verba
	 * @return string
	 */
	public function getNomeVerba( $verba )
	{
		return trim( $this->getRepository()->getNomeVerba( self::validarVerba( $verba ) ) );
	}

	/**
	 * Retorna a sigla da verba
	 *
	 * @param $verba
	 * @return string
	 */
	public function getSiglaVerba( $verba )
	{
		return trim( $this->getRepository()->getSiglaVerba( self::validarVerba( $verba ) ) );
	}

	/**
	 * @param bool $ativas
	 * @param bool $toObject
	 * @return array
	 */
	public function listVerbasComDescricao( $ativas = true, $toObject = false )
	{
		$result = $this->getRepository()->getVerbasComDescri��o( $ativas );

		if ( $toObject ) {
			require_once 'My/Model/Sirh/Lotacao.php';
			$list = array();

			foreach ( $result as $row ) {
				$model = new My_Model_Sirh_Lotacao( $row );
				$list[] = $model;
			}
			$result = $list;
		}
		return $result;
	}

	/**
	 * Retorna a lota��o completa da verba
	 *
	 * @param $verba
	 * @param bool $toObject
	 * @return array|My_Model_Sirh_Lotacao_Completa
	 */
	public function getLotacaoCompletaVerba( $verba, $toObject = true )
	{
		$result = $this->getRepository()->getLotacaoCompleta( $this->validarVerba( $verba ) );

		if ( $toObject ) {
			require_once 'My/Model/Sirh/Lotacao/Completa.php';
			return new My_Model_Sirh_Lotacao_Completa( $result );
		}
		return $result;
	}

	/**
	 * Listar as verbas com a lota��o completa
	 *
	 * @param bool $ativas Se � para listar somente as verbas ativas
	 * @param bool $toObject
	 * @return array
	 */
	public function listLotacaoCompletaVerbas( $ativas = true, $toObject = true )
	{
		$result = $this->getRepository()->getLotacaoCompleta( null, $ativas );

		if ( $toObject ) {
			require_once 'My/Model/Sirh/Lotacao/Completa.php';
			$list = array();

			foreach ( $result as $row ) {
				$model = new My_Model_Sirh_Lotacao_Completa( $row );
				$list[] = $model;
			}
			$result = $list;
		}
		return $result;
	}

	/**
	 * Lista as verbas da gerencia
	 *
	 * @param $gerencia
	 * @param bool $ativas
	 * @param bool $toObject
	 * @return array
	 */
	public function listVerbasDaGerencia( $gerencia, $ativas = true, $toObject = true )
	{
		$result = $this->getRepository()->getVerbasDaGerencia( $gerencia, $ativas );

		if ( $toObject ) {
			require_once 'My/Model/Sirh/Lotacao.php';
			$list = array();

			foreach ( $result as $row ) {
				$model = new My_Model_Sirh_Lotacao( $row );
				$list[] = $model;
			}
			$result = $list;
		}
		return $result;
	}

	/**
	 * Lista as gerencias da diretoria
	 *
	 * @param $diretoria
	 * @param bool $ativas
	 * @param bool $toObject
	 * @return array
	 */
	public function listGerenciasDaDiretoria( $diretoria, $ativas = true, $toObject = true )
	{
		$result = $this->getRepository()->getGerenciasDaDiretoria( $diretoria, $ativas );

		if ( $toObject ) {
			require_once 'My/Model/Sirh/Lotacao.php';
			$list = array();

			foreach ( $result as $row ) {
				$model = new My_Model_Sirh_Lotacao( $row );
				$list[] = $model;
			}
			$result = $list;
		}
		return $result;
	}
}