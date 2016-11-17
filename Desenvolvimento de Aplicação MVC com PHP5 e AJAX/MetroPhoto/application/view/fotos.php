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
	<link rel="stylesheet" href="<?php echo $assets['style']?>layout/fotos.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>modules/menu.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>modules/modules.css">
</head>
<body>
	<?php require_once "application/view/header.php"; ?>
	<?php require_once "application/view/menu-principal.php"; ?>
	<section>

		<h1>Fotos</h1>
		<div class="bloco-fotos">
			<img src="<?php echo $assets['images']?>a.jpg" class="foto tamanho-normal imagem-a" />
			<img src="<?php echo $assets['images']?>b.jpg" class="foto tamanho-pequeno imagem-b" />
			<img src="<?php echo $assets['images']?>c.jpg" class="foto tamanho-normal imagem-c" />
			<img src="<?php echo $assets['images']?>c.jpg" class="foto tamanho-pequeno imagem-c" />
			<img src="<?php echo $assets['images']?>b.jpg" class="foto tamanho-grande imagem-c" />
			<img src="<?php echo $assets['images']?>a.jpg" class="foto tamanho-pequeno imagem-a" />

		</div><br><br>
		<h1>Vídeos</h1>	
		<div class="video">
			<video width="600" height="400" controls="on">
				<source src="<?php echo $assets['style']?>video/flash.mp4" type="video/mp4">
			</video>
		</div>
	</section>
	<?php require_once "application/view/footer.php"; ?>
</body>
</html>