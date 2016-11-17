<?php

	class System{
		
		private $controller;
		private $method;
		private $parameters;


		public function start(){

			$this->createRequest($_GET['key']);
			$this->loadLibrary();
			$this->loadResource();

			session_start();

			$controller = new $this->controller();

			$this->loadModel();
			
			if(method_exists($controller, $this->method)) $controller->{$this->method}();
			else $controller->index();

			$_SESSION['parameters'] = $this->parameters;
		}


		/**
		 * 	This method process the url request, it retrieves the controller,
		 *  method and parameters.
		 *
		 * 	@param  String $param 	Refers to url request from client.
		 *
		 * 	@since Flash PHP 1.0
		 */
		private function createRequest($param){

			$list = array_filter(explode("/", $_GET['key']));
			
			$this->controller = (count($list) > 0 ?  ucfirst(array_shift($list)) : "Index") . "Controller";
			$this->method = (count($list) > 0 ?  array_shift($list) : "index");
			$this->param = (count($list) > 0 ? $list : null);

		}
		
		/**
		 * 	This method verifies if the respective controller exists,
		 *  if not, the system will be redirect to 404 page.
		 *
		 *	@since  Flash PHP 1.0
		 * 
		 */
		private function loadResource(){

			if(file_exists("application/controller/".$this->controller.".php")) require_once "application/controller/".$this->controller.".php";
			else if(file_exists("system/controller/".$this->controller.".php")) require_once "system/controller/".$this->controller.".php";	
			else{

				require_once "system/controller/ErrorHandlerController.php";

				$errorHandler = new ErrorHandlerController();
				$errorHandler->error404();
			}	
		}

		/**
		 * 	This method loads all required elements to instanciation
		 *  controllers and each call of methods. The constants also are defined.
		 *
		 * 	@since  Flash PHP 1.0
		 */
		private function loadLibrary(){

			require_once "system/library/Controller.php";
			require_once "system/library/Model.php";

		}

		private function loadModel(){

			function __autoload($file){

				if(file_exists("application/model/".$file.".php")) require_once "application/model/".$file.".php";
				else if(file_exists("system/model/".$file.".php")) require_once "system/model/".$file.".php";
			}
		}
	}	

