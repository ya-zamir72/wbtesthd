<?php

namespace core;

class Router {

	protected $routes = [];
	protected $params = [];
	
	public function __construct() {
		$arr = require 'config/routes.php';

		foreach ($arr as $key => $value) {
			$this->add($key, $value);
		}
	}

	public function add($route, $params) {
		// $route = '/^'.$route.'/';
		$route = $route;
		$this->routes[$route] = $params;
	}

	public function match()	{
		$url = trim($_SERVER['REQUEST_URI'], '/');
		foreach ($this->routes as $route => $params) {
			if($route == $url) {
				$this->params = $params;
				return true;
			}
		}
		return false;
	}

	public function run() {
		if($this->match()) {
			$path = 'controllers\\'.ucfirst($this->params['controller']).'Controller';

			if(class_exists($path)) {
				$action = $this->params['action'].'Action';

				if(method_exists($path, $action)) {
					$controller = new $path($this->params, $this->routes);
					$controller->$action();
				} else {
					View::errorCode(404);
				}
			} else {
				View::errorCode(404);
			}
		} else {
			View::errorCode(404);
		}

	}

}

?>