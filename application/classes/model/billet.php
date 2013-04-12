<?php

/**
 * Billets composants le fil d'actualite.
 */
class Model_Billet extends ORM {
	protected $created;
	protected $modified;
	public $title;

	protected $_belongs_to = array ('auteur' => array (
		'model' => 'utilisateur'
	));

	public function created	($date = NULL)
	{
		if ( ! isset($date))
		{
			return $this->created;
		}
		else
		{
			$this->created = Date::formatted_time($date, 'H:i:s');
		}
	}

	public function modified($date = NULL)
	{
		if ( ! isset($date))
		{
			return $this->created;
		}
		else
		{
			$this->modified = Date::formatted_time($date, 'H:i:s');
		}
	}

	public function title(){}

	public function rules() {
		return array(
			'created' => array(
				array('not_empty'),
			),
		) + parent::rules();
	} 
}
?>