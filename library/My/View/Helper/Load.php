<?php

class My_View_Helper_Load extends Zend_View_Helper_Abstract
{

	public function load( $url, $element )
	{
		$this->view->headScript()->prependScript( "$(document).ready(function () {
			$.get('$url', null, function (data) {
                $('#$element').html(data);
            }, 'html')
		});" );
	}

}

?>