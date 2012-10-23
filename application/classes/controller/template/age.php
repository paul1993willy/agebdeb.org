<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Template_Age extends Controller_Template {

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

		$this->head = View::factory('layout/head');
		$this->header = View::factory('layout/header');
	}

	public function after ()
	{
		$this->title = isset($this->title) ?
			$this->title . ' - Association générale étudiante de Bois-de-Boulogne':
			'Association générale étudiante de Bois-de-Boulogne';

		$this->description = isset($this->description) ?
			$this->description : 'Le site de l\'association générale étudiante
				de bois de boulogne';

		$this->keywords = isset($this->keywords) ?
			$this->keywords : '';
		$this->footer = View::factory('layout/footer');
		$this->foot = View::factory('layout/foot');
		$this->body = $this->head . $this->header . $this->body . $this->footer .
			$this->foot;
		$this->response->body($this->body);
	}
}
?>
