<?php

class Default_Model_DbTable_Blog extends Zend_Db_Table_Abstract
{

	protected $_name = 'blog';


	public function listArticles()
	{
		$data = array(
			array(
				'id' => 1,
				'title' => 'T�tulo',
				'author' => 'Chris Barnes',
				'category' => 'Releases',
				'date' => 'July 24, 2012',
				'body' => 'We make the WordPress Bootstrap CSS plugin that your referred to earlier, on Host Like Toast.</br>
				This plugin is free and open-source, and we have tutorials on the website for how you can use WordPress
				shortcodes to implement some of the bootstrap features.</br>
				You could also, in your themes, use the do_shortcode() function to implement the existing shortcodes
				easily.
				Today we released version 2.0.0-beta so you can immediately start taking full advantage of Twitter
				Bootstrap
				2.0.</br>
				We make the WordPress Bootstrap CSS plugin that your referred to earlier, on Host Like Toast.</br>
				This plugin is free and open-source, and we have tutorials on the website for how you can use WordPress
				shortcodes to implement some of the bootstrap features.</br>
				You could also, in your themes, use the do_shortcode() function to implement the existing shortcodes
				easily.
				Today we released version 2.0.0-beta so you can immediately start taking full advantage of Twitter
				Bootstrap
				2.0.</br>',
				'tag' => array(
					array(
						'name' => 'bootstrap',
						'url' => '#'
					),
					array(
						'name' => 'twitter',
						'url' => '#'
					)
				)
			)
		);

		return $data;
	}

}

