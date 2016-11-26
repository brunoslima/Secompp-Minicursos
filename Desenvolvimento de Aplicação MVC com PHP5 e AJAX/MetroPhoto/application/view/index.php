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
	<link rel="stylesheet" href="<?php echo $assets['style']?>layout/home.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>modules/menu.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>modules/modules.css">
</head>
<body>
	<?php require_once "application/view/header.php"; ?>
	<?php require_once "application/view/menu-principal.php"; ?>
	<section>
		<div class="bloco-noticia">
			<div class="noticia"><a href="/MetroPhoto/sobre"><img title="Sobre o evento" src="<?php echo $assets['images']?>palestra.jpg" width="450" height="300"></a></div>
			<div class="noticia"><a href="/MetroPhoto/programacao"><img title="Programação" src="<?php echo $assets['images']?>cronograma.png" width="450" height="300"></a></div>
			<div class="noticia"><a href="/MetroPhoto/fotos"><img title="Fotos e Vídeos" src="<?php echo $assets['images']?>home.png" width="450" height="300"></a></div>
		</div>
	</section>
	<?php require_once "application/view/footer.php"; ?>
</body>
</html>