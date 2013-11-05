<?php

class My_View_Helper_ConfirmDelete extends Zend_View_Helper_Abstract
{

	public function confirmDelete( $params = array(), $controller = null, $action = 'delete', $text = '', $description = 'Excluir registro' )
	{
		//verifica se foi passado algum nome de controller, senao tenta pegar o atual
		if ( !$controller ) {
			$controller = Zend_Controller_Front::getInstance()->getRequest()->getControllerName();
		}

		$urlParams = array(
			'module' => Zend_Controller_Front::getInstance()->getRequest()->getModuleName(),
			'controller' => $controller,
			'action' => $action
		);

		if ( !is_array( $params ) ) {
			$params = array(
				'id' => $params
			);
		}

		$output = "<a href='#' onClick='confirmDeleteBs(\"" . $this->view->url( array_merge( $urlParams, $params ), null, TRUE ) . "\")' title='" . $description . "'>";
		$output .= '<i class="glyphicon glyphicon-trash"></i>';
		$output .= $text;
		$output .= '</a>';

		return $output;
	}
}

?>