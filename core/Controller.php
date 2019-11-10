<?php
namespace core;

use core\View;

abstract class Controller {

	public $route;
	public $view;

	function __construct($route, $routes) {
		$this->route = $route;
		$this->view = new View($route, $routes);
	}
}

?>
