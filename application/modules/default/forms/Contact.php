<?php

class Default_Form_Contact extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form-contact' );

		$name = new Zend_Form_Element_Text( 'name' );
		$name->setLabel( $view->translate( "name" ) )
			->setAttrib( 'class', 'form-control' )
			->addValidator( new Zend_Validate_StringLength( array( 'max' => 100 ) ) );

		$mail = new Zend_Form_Element_Text( 'userMail' );
		$mail->setLabel( $view->translate( "mail" ) )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' )
			->addValidator( new Zend_Validate_StringLength( array( 'max' => 100 ) ) )
			->addValidator( new Zend_Validate_EmailAddress() );

		$subject = new Zend_Form_Element_Password( 'userPassword' );
		$subject->setLabel( $view->translate( "subject" ) )
			->setAttrib( 'class', 'form-control' )
			->addValidator( new Zend_Validate_StringLength( array( 'max' => 100 ) ) );

		$message = new Zend_Form_Element_Textarea( 'message' );
		$message->setRequired( true )
			->setAttribs( array(
				'class' => 'form-control',
				'rows' => '4'
			) );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( $view->translate( "send" ) )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$name,
			$mail,
			$subject,
			$message,
			$submit
		) );
	}


}

