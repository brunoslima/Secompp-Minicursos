<?php

	/**
	* 
	*/
	class FotosModel extends Model{
		
		public function __construct(){
			
			parent::__construct("foto");
		}

		public function listarFotos(){

			return $this->select("SELECT nome, source FROM {$this->table}");
		}

		
	}