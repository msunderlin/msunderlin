<?php

class Router{
	private $request;
	private $supportedHttpMethids = array(
		"GET",
		"POST"
	);

	function __construct(IRequest $request){
		$this->request = $request;
	}
	function __call($name, $args){
		list($route, $method) = $args;

		if(!in_array(strtoupper($name), $this->supportedHttpMethods)){
			$this->invalidMethodHandler();
		}
		$this->{strtolower($name)}[$this->formatRoute($route)] = $method;
	}


private function formatRoute($route){
	$result = rtrim($route, '/');
	if($result === ''){
		return '/';
	}
	return $result;
}

private function invalidMethodHandler(){
	header("{$this->request->serverProtocol} 405 Method not Allowed");
}

private function defaultRequestHandler(){
	header("{$this->request->serverProtocol} 404 Not Found");
}










