<?php

class Admin_Form_CarouselTrans extends Zend_Form
{

    public function init()
    {
	    $view = $this->getView();

	    $this->setAttrib( 'class', 'form' );

	    $carouselId = new Zend_Form_Element_Hidden( 'carouselId' );

	    $languageId = new Zend_Form_Element_Select( 'languageId' );
	    $languageId->setLabel( 'Language' )
		    ->setRequired( true )
		    ->setAttrib( 'class', 'form-control' );

	    foreach ( Admin_Model_DbTable_Language::getInstance()->listAll() as $language ) {
		    $languageId->addMultiOption( $language['languageId'], $language['languageName'] );
	    }

	    $carouselTransTitle = new Zend_Form_Element_Text( 'carouselTransTitle' );
	    $carouselTransTitle->setLabel( 'Title' )
		    ->setRequired( true )
		    ->setAttrib( 'class', 'form-control' );

	    $carouselTransDesc = new Zend_Form_Element_Textarea( 'carouselTransDesc' );
	    $carouselTransDesc->setLabel( 'Description' )
		    ->setRequired( true )
		    ->setAttrib( 'class', 'form-control ckeditor' )
		    ->setAttrib( 'rows', '4' );

	    $submit = new Zend_Form_Element_Submit( 'submit' );
	    $submit->setLabel( 'Ok' )
		    ->setAttrib( 'class', 'btn btn-lg btn-primary btn-block' );


	    $this->addElements( array(
		    $carouselId,
		    $languageId,
		    $carouselTransTitle,
		    $carouselTransDesc,
		    $submit
	    ) );
    }


}

