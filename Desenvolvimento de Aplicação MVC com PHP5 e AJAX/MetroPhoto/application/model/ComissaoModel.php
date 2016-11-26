<?php



	class ComissaoModel extends Model{
		

		
		public function __construct(){
			
			parent::__construct("usuario");
		}

		public function listarComissao(){

			return $this->select("SELECT nome FROM {$this->table} WHERE organizacao = true  ORDER BY formacao desc, nome asc;");
		}
	}