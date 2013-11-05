<?php

class My_View_Helper_Edit extends Zend_View_Helper_Abstract
{

	/**
	 * Helper que cria um link e desenha uma imagem de edição
	 *
	 * @param array|string $params Array de parametros ou valor do parametro
	 * @param string $controller Nome do controller (padrão é o atual)
	 * @param string $text Texto para exibir ao lado do link
	 * @param string $description Descrição quando posicionar o mouse sobre o link
	 * @return string
	 */
	public function edit( $params = array(), $controller = null, $text = '', $description = 'Editar registro' )
	{
		//verifica se foi passado algum nome de controller, senao tenta pegar o atual
		if ( !$controller ) {
			$controller = Zend_Controller_Front::getInstance()->getRequest()->getControllerName();
		}

		$urlParams = array(
			'module' => Zend_Controller_Front::getInstance()->getRequest()->getModuleName(),
			'controller' => $controller,
			'action' => 'edit'
		);

		if ( !is_array( $params ) ) {
			$params = array(
				'id' => $params
			);
		}

		$output = '<a href="' . $this->view->url( array_merge( $urlParams, $params ), null, TRUE ) . '" title="' . $description . '">';
		$output .= '<i class="glyphicon glyphicon-pencil"></i>';

		$output .= $text;
		$output .= '</a>';

		return $output;
	}
}

?>