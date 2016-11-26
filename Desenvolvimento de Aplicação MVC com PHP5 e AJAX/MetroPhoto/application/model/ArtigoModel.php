<?php

	/**
	* 
	*/
	class ArtigoModel extends Model{
		

		public function __construct(){

			parent::__construct("artigo");
		}

		public function listarItens(){


			return $this->select("SELECT descricao, source FROM {$this->table};");
		}
	}