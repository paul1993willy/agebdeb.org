<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Age extends Controller_Template {

	protected $title;
	public $template = 'layout/age';
	protected $description;
	protected $keywords;

	protected $body;

	public function before ()
	{
		parent::before();

		View::bind_global('title', $this->title);
		View::bind_global('description', $this->description);
		View::bind_global('keywords', $this->keywords);

		$this->title = isset($this->title) ?
			'AGEBdeB - '. $this->title :
			'AGEBdeB';

		$this->description = isset($this->description) ?
			$this->description : '';

		$this->keywords = isset($this->keywords) ?
		$this->keywords : '';
	}

	public function action_index()
	{
		$this->response->body('hello, world!');
	}
	
	public function after ()
	{
	}
} // End Welcome
?>