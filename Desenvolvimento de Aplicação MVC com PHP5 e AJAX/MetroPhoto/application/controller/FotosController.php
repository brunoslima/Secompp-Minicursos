<?php

	/**
	* 
	*/
	class FotosController extends Controller{
		
		private $data;

		public function __construct(){

			parent::__construct();
		}

		public function index(){

			$model = new FotosModel();
			$result = $model->listarFotos();

			$imagens = "";

			foreach ($result as $value) {
				$imagens .= "<img src='application/assets/css/images/".$value['source']."'class='foto tamanho-grande' title='".$value['nome']."' />";
			}


			$model = new VideoModel();
			$result = $model->listarVideos();

			$videos = "";

			foreach ($result as $value) {
				$videos .= "<video width='600' height='400' controls='on' title='".$value['nome']."'>
								<source src='application/assets/video/".$value['source']."' type='video/mp4'>
						   </video>";
			}

			$data = array(
				"listaImagens" => $imagens,
				"listaVideos" => $videos
			);

			$this->view('fotos', $data);		
		}
	}

