<?php
namespace core;

class View {

	public $path;
	public $route;
	public $routes;
	public $crumbs;
	public $layout = "default";

	function __construct($route, $routes) {
		$this->route = $route;
		$this->routes = $routes;
		$this->path = $route['controller'].'/'.$route['action'];
	}

	public function render($title = '', $vars = []) {
		$this->breadcrumbs();
		$crumbs = $this->crumbs;
		extract($vars);

		if($title == '') {
			$title = $this->route['title'];
		}
		
		if(file_exists('views/'.$this->path.'.php')) {
			ob_start();
			require 'views/'.$this->path.'.php';
			$content = ob_get_clean();
			require 'views/layout/'.$this->layout.'.php';
		} else {
			$this->errorCode(404);
		}
	}

	public function redirect($url) {
		header('location: '.$url);
		exit;
	}

	public static function errorCode($code) {
		http_response_code($code);
		require 'views/errors/'.$code.'.php';
		exit;
	}

	public function breadcrumbs() {
		$url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
		array_unshift($url, "");
		array_push($url, trim($_SERVER['REQUEST_URI'], '/'));
		$crumbs = array();
		foreach ($this->routes as $route => $params) {
			foreach ($url as $value) {
				if($value == $route) {
					$crumbs[] = ["title" => $params["title"],
								 "url"	 => $route];
					break;
				} 
			}				
		}
		$this->crumbs = $crumbs;
	}

}
?>
