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
		<p>Abaixo seguem os links para <i>download</i> dos arquivos disponibilizados pela organização do evento: </p>
		<p> 
            <a href="documentos/apresentacao.pdf" target="blank">-> Apresentação do Minicurso</a>
            <img src="<?php echo $assets['style']?>images/new4.gif">
        </p>
	</section>
	<?php require_once "application/view/footer.php"; ?>
</body>
</html>