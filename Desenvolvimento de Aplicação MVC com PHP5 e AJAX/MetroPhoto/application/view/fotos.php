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
</head>
<body>
	<?php require_once "application/view/header.php"; ?>
	<?php require_once "application/view/menu-principal.php"; ?>
	<section>

		<h1>Fotos</h1>
		<div class="bloco-fotos">
			<?php echo $data_listaImagens; ?>
		</div><br><br>
		<h1>Vídeos</h1>	
		<div class="video">
			<?php echo $data_listaVideos; ?>
		</div>
	</section>
	<?php require_once "application/view/footer.php"; ?>
</body>
</html>