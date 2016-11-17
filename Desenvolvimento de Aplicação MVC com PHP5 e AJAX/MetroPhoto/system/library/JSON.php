<?php

	/**
	* 
	*/
	class JSON{
		
		public function __construct(){
			
		}

		public function toString($array){
			
			header("Content-Type: application/json");

			if(!$array) return json_encode(array(), JSON_PRETTY_PRINT);
			return json_encode($array, JSON_PRETTY_PRINT);
		}

		public function toArray($json){

			return json_decode($json);
		}
	}