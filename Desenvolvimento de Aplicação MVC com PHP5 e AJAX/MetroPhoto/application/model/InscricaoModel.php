<?php


	/**
	* 
	*/
	class InscricaoModel extends Model{
		
		public function __construct(){
			
			parent::__construct("usuario");
		}

		public function adicionarUsuario($nome, $email, $senha, $formacao, $comentario, $comissao){

			return $this->insert("INSERT INTO {$this->table} VALUES (null, '$nome', '$email', '$senha', $formacao, '$comentario', $comissao)");
		}
	}