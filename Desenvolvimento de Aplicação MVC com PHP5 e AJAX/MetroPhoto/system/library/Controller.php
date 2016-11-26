<?php


	abstract class Controller{

		
		protected $parameter;


		public function __construct(){

			$this->parameter = $_GET['key'];

			//$this->parameter = array();
			//print_r($this->parameter);

			/*if(!isset($_GET['key'])) $this->parameter[0] = null;
			else
				foreach ($_GET['key'] as $key => $value) {
				
					$this->parameter[$key] = $value;
				}*/
		}

		/**
		 * This method promoves the loading of respective webpage view,
		 * even it is created by user ou some default template.
		 * 
		 * @param  String 	$name It refers to name of "html" file at 
		 *                        'application/view' folder, it is really important to remember
		 *                        that file must have '.php' extension.
		 * 
		 * @param  Array 	$vars It is optional, this array contains some contents that
		 *                        will be showed at view page.
		 *
		 *
		 * @since  Flash PHP 1.0
		 * 
		 */
		protected function view($name, $vars = null){

			if (is_array($vars) && count($vars) > 0) {
				
				extract($vars, EXTR_PREFIX_ALL, "data");
			}

			if(file_exists("application/view/".$name.".php")){
				
				require_once "application/settings/constant.php";
				require_once 'application/view/'.$name.'.php';
			} 
			else {
				require_once "system/settings/constant.php";
				require_once 'system/view/'.$name.'.php';
			}

			exit(0);
		}

		protected function rest(){

			$name = substr(get_class($this), 0, strlen(get_class($this)) - strlen("Controller"))."Model";
			
			if(class_exists($name)){


				$model = new $name();
				
				$model->teste = function($parameter){
					
					if($parameter[0] == null){
					
						return $this->select("SELECT * FROM {$this->getTable()}");
					}
					else{

						$condicoes = "";
						foreach ($parameter[0] as $key => $value) {

							$condicoes .= $key." in (".$value.") and ";	
						}


						$condicoes = substr($condicoes, 0, strlen($condicoes) - 5).";";

						return $this->select("SELECT * FROM {$this->getTable()} WHERE $condicoes");
					}
				};

				$result = $model->teste($this->parameter);

				require_once "system/library/JSON.php";
				$json = new JSON();
				return $json->toString($result);
			}
		}

		

	}