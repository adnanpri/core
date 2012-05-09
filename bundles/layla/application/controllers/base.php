<?php

/**
* 
*/
class Layla_Base_Controller extends Controller
{
	/**
	 * Website data
	 *
	 * @var array
	 **/
	public $data = array();

	/**
	 * Enable restful routing
	 *
	 * @var bool
	 **/
	public $restful = true;

	/**
	 * Invoke layout method
	 * 
	 * @var bool
	 */
	public $layout = true;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->url = Config::get('layla::application.url').'/';
	}

	/**
	 * layout
	 * 
	 * @return View
	 */
	public function layout()
	{
		$this->layout = View::make('layla::layouts.default')->with('meta_title', $this->meta_title);
		return $this->layout;
	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}