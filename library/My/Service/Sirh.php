<?php

require_once 'My/Service/Abstract.php';

/**
 * Classe com métodos comuns para todas as filhas de My_Service_Sirh
 *
 * @category    My
 * @package     My_Service
 * @name        My_Service_Sirh
 * @copyright   Copyright (c) 2013 - My
 * @version     1.0
 */

abstract class My_Service_Sirh extends My_Service_Abstract
{
	/**
	 * Método para validar a matrícula
	 * Padrões válidos => 99999 ou 99999-9 ou 99999-X
	 *
	 * @param string $matricula
	 */
	public function validarMatricula( $matricula )
	{
		$matricula = trim( strtoupper( $matricula ) );

		if ( !is_numeric( $matricula ) ) {
			$valida = preg_match( "/^[0-9]{5}-[X0-9]{1}$/", $matricula );
		} else {
			$valida = preg_match( "/^[0-9]{5}$/", $matricula );
		}

		if ( !$valida ) {
			throw new Exception( "A matrícula com digito: $matricula não é válida!" );
		}
		return $matricula;
	}

	/**
	 * Verifica se a verba informada é válida
	 *
	 * @param $verba
	 * @return int|string
	 * @throws Exception
	 */
	public function validarVerba( $verba )
	{
		if ( !is_numeric( $verba ) || ( strlen( $verba ) != 7 ) ) {
			throw new Exception( 'Código da verba é inválido!' );
		}
		return $verba;
	}
}