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
	<link rel="stylesheet" href="<?php echo $assets['style']?>layout/endereco.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>modules/menu.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>modules/modules.css">
</head>
<body>
	<?php require_once "application/view/header.php"; ?>
	<?php require_once "application/view/menu-principal.php"; ?>
	<section>

			<div class="maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59127.04724919906!2d-51.426875948683445!3d-22.147300063078003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9493f43f0ff7f359%3A0x3ff5d10b95e4acbf!2sFCT%2FUnesp!5e0!3m2!1spt-BR!2sbr!4v1478484041859" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div class="conteudo-endereco">
				<h2>Universidade Estadual Paulista <br>Faculdade de Ciências e Tecnologia <br>Presidente Prudente</h2>
				<p>Rua Roberto Simonsen, 305
				<p>CEP 19060-900 - Presidente Prudente, SP</p>
				<p>Telefone: (18) 3229-5836</p>
			</div>
			
	</section>
	<?php require_once "application/view/footer.php"; ?>
</body>
</html>