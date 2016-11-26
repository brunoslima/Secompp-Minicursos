<?php

	/**
	* 
	*/
	class ComissaoController extends Controller{
		
		private $data;

		public function __construct(){

			parent::__construct();
		}

		public function index(){

			$model = new ComissaoModel();
			$resposta = $model->listarComissao();

			$html = "";
			foreach ($resposta as $linha) {
					
				$html .= "<li>".$linha['nome']."</li>";
			}

			$data['lista'] = $html;

			$this->view('comissao', $data);		
		}
	}