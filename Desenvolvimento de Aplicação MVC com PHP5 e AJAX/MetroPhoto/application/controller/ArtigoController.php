<?php

	/**
	*
	* 
	*/
	class ArtigoController extends Controller{
		
		private $data;

		public function __construct(){

			parent::__construct();
		}

		public function index(){

			$model = new ArtigoModel();
			$lista = $model->listarItens();

			$result = "";

			foreach ($lista as $linha) {
				$result .= "<p><a href=".'application/files/'.$linha['source']." target='blank'>-> ".$linha['descricao']."</a></p>";
			}

			$data["lista"] = $result;

			$this->view('artigo', $data);
		}
	}