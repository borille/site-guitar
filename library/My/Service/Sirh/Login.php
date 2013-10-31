<?php

require_once 'My/Service/Sirh.php';
require_once 'My/Service/Interface.php';
require_once 'My/Db/Table/Sirh/Login.php';

class My_Service_Sirh_Login extends My_Service_Sirh implements My_Service_Interface
{

	/**
	 * @var My_Service_Sirh_Login
	 */
	protected static $_instance = null;

	/**
	 * @var My_Db_Table_Sirh_Login
	 */
	protected $_repository = null;

	/**
	 * @return My_Service_Sirh_Login
	 */
	public static function getInstance()
	{
		if ( self::$_instance === NULL ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * @return My_Db_Table_Sirh_Login
	 */
	function getRepository()
	{
		if ( $this->_repository === null ) {
			$this->_repository = new My_Db_Table_Sirh_Login();
		}
		return $this->_repository;
	}

	/**
	 * @param $matricula
	 * @param $senha
	 * @param int $empresa
	 * @param bool $toObject
	 * @return array|My_Model_Sirh_Login
	 */
	public function validarLogin( $matricula, $senha, $empresa = 1, $toObject = false )
	{
		$servicePessoal = new My_Service_Sirh_Pessoal();
		$matricula = $servicePessoal->validarMatricula( $matricula );

		if ( is_numeric( $matricula ) ) {
			$result = $this->getRepository()->validaLoginSemDigito( $matricula, $senha, $empresa );
		} else {
			$result = $this->getRepository()->validaLoginComDigito( $matricula, $senha );
		}

		if ( $toObject && $result ) {
			require_once 'My/Model/Sirh/Login.php';
			$result = new My_Model_Sirh_Login( $result );
		}
		return $result;
	}
}