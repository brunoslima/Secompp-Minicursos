<?php

	/**
	* 
	*/
	class InscricaoController extends Controller{
		

		public function __construct(){
			
			parent::__construct();
		}

		public function index(){

			

			$this->view('inscricao');
		}

		public function adicionar(){

			$model = new InscricaoModel();
			$result = $model->adicionarUsuario($_POST['nome'], $_POST['email'],$_POST['senha'],$_POST['formacao'],$_POST['comentario'], 0);
		}
	}