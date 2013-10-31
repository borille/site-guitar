<?php

/**
 * Classe utilizada para avaliar o desempenho do sistema
 * ela salva o tempo inicial da requisi��o para calcular o tempo
 * que o sistema levou at� trazer os dados na view
 * 
 * @category My
 * @package My_Controller
 * @subpackage My_Controller_Plugin
 * @author TRB
 * @copyright My@2012
 */
class My_Controller_Plugin_Benchmark extends Zend_Controller_Plugin_Abstract
{

    /**
     * Salva o tempo atual no inicio da requisi��o 
     */
    public function routeStartup()
    {
        if ( isset( $_SESSION['benchmark'] ) )
        {
            $_SESSION['benchmark'] = microtime( true );
        }
    }

    /**
     * Por fim, calcula o tempo que levou desde a requisi��o at� desenhar a view
     */
    public function dispatchLoopShutdown()
    {
        if ( isset( $_SESSION['benchmark'] ) )
        {
            $tempo = (microtime( true ) - $_SESSION['benchmark']) * 1000;
            echo 'Tempo: ' . round( $tempo ) . ' ms';
        }
    }

}
