<?php


	/**
	* 
	*/
	class ProgramacaoModel extends Model{
		
		public function __construct(){
			
			parent::__construct("atividade");
		}

		public function listarAtividades(){

			return $this->select("SELECT * FROM {$this->table};");
		}
	}