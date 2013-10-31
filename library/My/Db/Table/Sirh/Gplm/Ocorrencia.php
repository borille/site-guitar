<?php
/**
 * Classe Db table que acessa a tabela SIRH.GPLM006_OCORRENCIA
 *
 * @category    My
 * @package     My_Db_Table
 * @subpackage  Sirh
 * @name        My_Db_Table_Sirh_Gplm_Ocorrencia
 * @copyright   Copyright (c) 2013 - My
 * @version     1.0
 */

class My_Db_Table_Sirh_Gplm_Ocorrencia extends My_Db_Table_Sirh
{
	public function init()
	{
		parent::configDbTable( 'SIRH', 'GPLM006_OCORRENCIA', 'GPLM006_ID' );
	}
}