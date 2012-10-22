<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Accueil extends Controller_Template_Age {
	public function before()
	{
		parent::before();
	}
	public function action_index()
	{
		$this->title = 'Accueil';
	}

} ?>