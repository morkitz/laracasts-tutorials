<?php

class Router {
	protected $routes;

	public static function load($filename) {
		$router = new static;

		require $filename;
		return $router;
	}

	public function setRoutes($routes) {
		$this->routes = $routes;
	}

	public function route($uri) {
		if (array_key_exists($uri, $this->routes)) {
			return $this->routes[$uri];
		}

		throw new Exception("Couldn't reroute requested URI");
		
	}
}

?>