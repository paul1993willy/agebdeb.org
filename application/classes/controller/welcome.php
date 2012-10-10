<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	protected $title;
	protected $description;
	protected $keywords;

	protected $body;

	public function before ()
	{
		
	}

	public function action_index()
	{
		$this->response->body('hello, world!');
	}
	
	public function after ()
	{
		$this->title = (isset($this->title)) ?
			($this->title = "AGEBdeB - ". $this->title) :
			($this->title = "AGEBdeB");

		$this->description = "";
		$this->keywords = "";

		$this->body = "";
	}
} // End Welcome
