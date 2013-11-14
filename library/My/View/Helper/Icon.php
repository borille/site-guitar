<?php

class My_View_Helper_Icon extends My_View_Helper_HtmlElement
{
	/**
	 * View Helper para
	 *
	 * @param $name
	 * @param array $attributes
	 * @return string
	 */
	public function icon( $icon = '', $attributes = array() )
	{
		$this->setAttributes( $attributes );
		$this->setIcon( $icon );
		return $this;
	}

	/**
	 * @return string
	 */
	public function render()
	{
		$params = $this->attributesToHtml();
		return "<i $params></i>";
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->render();
	}

	/**
	 * @param $name
	 * @return $this
	 */
	public function setIcon( $icon )
	{
		if ( strpos( $icon, 'glyphicon-' ) === false && $icon !== '' ) {
			$icon = 'glyphicon-' . $icon;
		}

		if ( ( $class = $this->getAttribute( 'class' ) ) ) {
			$this->setAttribute( 'class', 'glyphicon ' . $icon . ' ' . $class );
		} else {
			$this->setAttribute( 'class', 'glyphicon ' . $icon );
		}
		return $this;
	}

}

?>