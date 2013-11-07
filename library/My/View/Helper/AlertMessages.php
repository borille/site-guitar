<?php

class My_View_Helper_AlertMessages extends Zend_View_Helper_Abstract
{

	public function alertMessages()
	{
		$flashMessenger = Zend_Controller_Action_HelperBroker::getStaticHelper( 'FlashMessenger' );

		$output = '';

		if ( !empty( $flashMessenger ) ) {


			$closeButton = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';

			if ( $flashMessenger->setNamespace( 'success' )->hasMessages() ) {
				foreach ( $flashMessenger->getMessages() as $msg ) {
					$output .= '<div class="alert alert-success fade in">';
					$output .= $closeButton;
					$output .= '<b>' . $msg . '</b>';
					$output .= '</div>';
				}
			}

			if ( $flashMessenger->setNamespace( 'danger' )->hasMessages() ) {
				foreach ( $flashMessenger->getMessages() as $msg ) {
					$output .= '<div class="alert alert-danger fade in">';
					$output .= $closeButton;
					$output .= '<b>' . $msg . '</b>';
					$output .= '</div>';
				}
			}

			if ( $flashMessenger->setNamespace( 'warning' )->hasMessages() ) {
				foreach ( $flashMessenger->getMessages() as $msg ) {
					$output .= '<div class="alert alert-warning fade in">';
					$output .= $closeButton;
					$output .= '<b>' . $msg . '</b>';
					$output .= '</div>';
				}
			}

			if ( $flashMessenger->setNamespace( 'info' )->hasMessages() ) {
				foreach ( $flashMessenger->getMessages() as $msg ) {
					$output .= '<div class="alert alert-info fade in">';
					$output .= $closeButton;
					$output .= '<b>' . $msg . '</b>';
					$output .= '</div>';
				}
			}
		}

		return $output;
	}

}

?>
