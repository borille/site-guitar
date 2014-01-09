<?php

class Admin_Form_File extends Zend_Form
{

	public function init()
	{
		$view = $this->getView();

		$this->setAttrib( 'class', 'form' );

		$fileId = new Zend_Form_Element_Hidden( 'fileId' );

		$fileName = new Zend_Form_Element_Text( 'fileName' );
		$fileName->setLabel( 'Name' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$fileType = new Zend_Form_Element_Select( 'fileType' );
		$fileType->setLabel( 'Type' )
			->setRequired( true )
			->setAttrib( 'class', 'form-control' );

		$types = array(
			'img' => 'Image',
			'video' => 'Video'
		);

		foreach ( $types as $key => $value ) {
			$fileType->addMultiOption( $key, $value );
		}

		$fileSrc = new Zend_Form_Element_File( 'fileSrc' );
		$fileSrc->setLabel( 'File' )
			->setRequired( true )
			//->setDestination( APPLICATION_PATH . "/../public/upload/" . $user->getNomeModulo() )
			->addValidator( 'Count', true, 1 )
			->addValidator( 'Extension', false, 'jpeg,jpg,png,gif,cab,txt' );

		$submit = new Zend_Form_Element_Submit( 'submit' );
		$submit->setLabel( 'Ok' )
			->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );

		$this->addElements( array(
			$fileId,
			$fileName,
			$fileType,
			$fileSrc,
			$submit
		) );
	}

	public function isValid( $data )
	{
		$fileSrc = $this->getElement( 'fileSrc' );

		$oldname = pathinfo( $fileSrc->getFileName() );
		$filename = md5( Zend_Date::now()->getTimestamp() . '_' . $oldname['filename'] );
		$extension = strtolower( $oldname['extension'] );
		$newname = "$filename.$extension";

		$fileSrc->addFilter( 'Rename', $newname )
			->setDestination( APPLICATION_PATH . "/../public/files/" . $data['fileType'] );

		return parent::isValid( $data );
	}

}

