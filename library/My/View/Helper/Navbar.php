<?php

class My_View_Helper_Navbar extends Zend_View_Helper_Abstract
{

	/**
	 * View Helper para criar um navbar
	 *
	 * @param array $itens
	 * @param string $class nav-tabs|nav-tabs nav-stacked|nav-pills|nav-pills nav-stacked|nav-list
	 * @return string
	 */
	public function navbar( $itens = array(), $class = 'nav-tabs' )
	{
		$output = "<ul class=\"nav $class\">";

		foreach ( $itens as $key => $value ) {

			$controller = $this->view->controller;
			$action = Zend_Controller_Front::getInstance()->getRequest()->getActionName();

			if ( is_array( $value ) ) {
				$url = Zend_View_Helper_Url::url( $value, null, TRUE );
			} else {
				$url = Zend_View_Helper_Url::url( array( 'controller' => $controller, 'action' => $value ), null, TRUE );
			}

			if ( $action === $value ) {
				$output .= '<li class="active">';
			} else {
				$output .= '<li>';
			}

			$output .= "<a href=\"$url\">$key</a>";
			$output .= '</li>';
		}

		$output .= '</ul>';

		return $output;
	}

}

?>