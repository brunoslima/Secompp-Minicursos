<?php


	class ErrorHandlerController extends Controller{
		

		/**
		 * In the case that user attemps access some inexistent address,
		 * by badly intent or wrong typing, all those address will be redirect
		 * to 404 default page.
		 *
		 * @since Flash PHP 1.0
		 * 
		 */
		public function error404(){

			$data = array(
				"url" => "http://".$_SERVER['SERVER_NAME'].$_SERVER['REDIRECT_URL']
			);

			$this->view("error404", $data);
		}

		
	}