$(document).ready(function(){

	$('.button-inscricao').click(function(e){


		e.preventDefault();
	 	$dados = new Object();
	 	$dados['nome'] = $('[name="Nome"]').val();
	 	$dados['email'] = $('[name="e-mail"]').val();
	 	$dados['senha'] = $('[name="senha"]').val();
	 	var valorFormacao;

	 	if($('[name="formacao"]').val() == "aluno"){
	 		valorFormacao = 0;
	 	}
	 	else if($('[name="formacao"]').val() == "professor"){
	 		valorFormacao = 1;
	 	}
	 	else{
	 		valorFormacao = 2;
	 	}


	 	$dados['formacao'] = valorFormacao;
	 	$dados['comentario'] = $('[name="mensagem"]').val();
	 	
	 	$.ajax({
			url: ( location.href + "/adicionar"),
			type: "post",
			async: true,
			data: $dados,
			cache: false
		})
		.done(function(data){
			
			$('.form-inscricao').find('input:text, input:password, select, textarea').val('');

		})
		.fail(function(){
			
		});
	});
});