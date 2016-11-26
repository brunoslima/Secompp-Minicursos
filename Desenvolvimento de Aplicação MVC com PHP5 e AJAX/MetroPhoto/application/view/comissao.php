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
	<link rel="stylesheet" href="<?php echo $assets['style']?>layout/comissao.css">
</head>
<body>
	<?php require_once "application/view/header.php"; ?>
	<?php require_once "application/view/menu-principal.php"; ?>
	<section>
		<p>Abaixo segue uma lista com o nome de cada aluno e professor que compuseram a comissão organizadora: </p>
		<div class="conteudo">
			<div class="conteudo-comissao">
				<ul>
					<?php echo $data_lista; ?>
				</ul>
			</div>
		</div>
	</section>
	<?php require_once "application/view/footer.php"; ?>
</body>
</html>