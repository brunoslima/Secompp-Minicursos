<?php

	class Aluno{

		private $nome;
		private $sobrenome;
		private $idade;
		private $genero;
		private $email;

		public function __construct($nome, $sobrenome, $idade, $genero, $email){

			this->nome = $nome;
			this->sobrenome = $sobrenome;
			this->idade = $idade;
			this->genero = $genero;
			this->email = $email;

		}

		public function setNome($nome){

			this->nome = $nome;

		}

		public function getNome(){

			return this->nome;
		}

		public function acessarSGA($email, $senha){
			//Restante do método
		}

		public function jogarIntercomp(){
			echo this->nome . " está jogando o Intercomp mas sofreu um gol!";
		}

		public function exibirAluno(){

			echo "Aluno de Computação:";
			echo "Nome: " . this->nome . this->sobrenome;

			echo "Idade: " . this->idade; 
			if(this->idade >= 18) echo "Maior de idade!";
			else echo "Menor de idade!";

			echo "Genero: " . this->genero;
			echo "E-mail: " . this->email;

		}
	}

?>