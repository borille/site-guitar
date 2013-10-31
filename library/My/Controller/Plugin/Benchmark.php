<?php

/**
 * Classe utilizada para avaliar o desempenho do sistema
 * ela salva o tempo inicial da requisiчуo para calcular o tempo
 * que o sistema levou atщ trazer os dados na view
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
     * Salva o tempo atual no inicio da requisiчуo 
     */
    public function routeStartup()
    {
        if ( isset( $_SESSION['benchmark'] ) )
        {
            $_SESSION['benchmark'] = microtime( true );
        }
    }

    /**
     * Por fim, calcula o tempo que levou desde a requisiчуo atщ desenhar a view
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
