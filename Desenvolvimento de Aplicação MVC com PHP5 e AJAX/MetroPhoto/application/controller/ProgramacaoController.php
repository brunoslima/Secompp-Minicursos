<?php

	/**
	* 
	*/
	class ProgramacaoController extends Controller{
		
		private $data;

		public function index(){

			$model = new ProgramacaoModel();
			$result = $model->listarAtividades();

			$horario = array('08:00','10:00','14:00','16:00','19:00');
			$html = '';
			for ($i=0; $i<5; $i++){
				$html .= "<tr>
	                    	<td class='horario'>".$horario[$i]."</td>
	                        <td>".$result[$i]['nome']."</td>
	                        <td>".$result[$i+5]['nome']."</td>
	                        <td>".$result[$i+10]['nome']."</td>
                    	  </tr>";
			}

			$data['tabela'] = $html;

			$this->view('programacao', $data);		
		}
	}