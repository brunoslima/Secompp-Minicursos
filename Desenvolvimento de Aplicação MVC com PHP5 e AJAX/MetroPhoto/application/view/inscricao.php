<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MetroPhoto</title>
	<link rel="stylesheet" href="<?php echo $assets['style']?>base/base.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>base/fonts.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>layout/header.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>layout/footer.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>modules/menu.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>modules/modules.css">
	<script src="<?php echo $assets['script']?>jquery-3.1.0.min.js"></script>
	<script src="<?php echo $assets['script']?>inscricao.js"></script>
</head>
<body>
	<?php require_once "application/view/header.php"; ?>
	<?php require_once "application/view/menu-principal.php"; ?>
	<section>
		<div class="conteudo">
			<div class="conteudo-formulario">
				<form class="form-inscricao">
					<label for="nome">Nome:</label><br>
					<input type="text" name="Nome"><br>

					<label for="e-mail">E-mail:</label><br>
					<input type="text" name="e-mail"><br>

					<label for="senha">Senha:</label><br>
					<input type="password" name="senha"><br>

					<label for="confirmacao">Confirmação de senha:</label><br>
					<input type="password" name="confirmacao"><br>

					<label for="nome">Formação:</label><br>
					<select name="formacao">
  						<option value="aluno">Aluno</option>
  						<option value="professor">Professor</option>
  						<option value="outro">Outro</option>
					</select><br>

					<label for="nome">Comentário:</label><br>
					<textarea name="mensagem" rows="10" cols="50" placeholder="Informe suas expectativas."></textarea><br>
					<button type="button" class="button-inscricao">Efetuar Inscrição</button>
				</form>
			</div>
		</div>
	</section>
	<?php require_once "application/view/footer.php"; ?>
</body>
</html>