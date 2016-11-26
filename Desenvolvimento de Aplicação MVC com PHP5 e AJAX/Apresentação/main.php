<?php

	//Está é uma "main"

	//Incluindo a classe que criamos
	include_once("Aluno.php");

	//Criando variaveis
	var $nome = "Bruno";
	var $idade = "20";

	//Instanciando objeto
	$a1 = new Aluno($nome, "Lima", $idade, "Maculino", "bruno.slima@outlook.com");

	$a1->jogarIntercomp;
	$a1->exibirAluno;

	$a1->setNome("Mauricio");
	echo $a1->getNome();

	$a1->exibirAluno();

	var $loop = 5-2;
	var $cont = 0;
	while(cont < lopp){
		echo "Isso é tudo pessoal!";
		$cont++;
	}

?>