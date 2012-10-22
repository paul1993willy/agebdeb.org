<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template_Age extends Controller_Template {

	protected $title;
	public $template = 'layout/age';
	protected $description;
	protected $keywords;

	public $header;
	protected $body;

	public function before ()
	{
		parent::before();

		View::bind_global('title', $this->title);
		View::bind_global('description', $this->description);
		View::bind_global('keywords', $this->keywords);

		$this->title = isset($this->title) ?
			'AGEBdeB - ' . $this->title : 'AGEBdeB';

		$this->description = isset($this->description) ?
			$this->description : 'Le site de l\'association générale étudiante
				de bois de boulogne';

		$this->keywords = isset($this->keywords) ?
			$this->keywords : '';
		$this->head = View::factory('layout/head');
		$this->header = View::factory('layout/header');
	}

	public function action_index()
	{
	}
	
	public function after ()
	{
		$this->body = $this->head . $this->header . $this->body;
		$this->response->body($this->body);
	}
} // End Welcome
?>