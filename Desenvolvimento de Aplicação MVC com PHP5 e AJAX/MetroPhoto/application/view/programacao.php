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
	<link rel="stylesheet" href="<?php echo $assets['style']?>layout/programacao.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>modules/menu.css">
	<link rel="stylesheet" href="<?php echo $assets['style']?>modules/modules.css">
</head>
<body>
	<?php require_once "application/view/header.php"; ?>
	<?php require_once "application/view/menu-principal.php"; ?>
	<section>
			<h1>Programação</h1>
			<p>Abaixo está descrito o cronograma de evento, com as atividades a serem realizadas e seus respectivos horários: </p>
			<table class="tabela-programacao"> 
                <thead>
                	<tr>
                		<th class="horario">Horário</th>
                        <th>28/11</th>
                        <th>29/11</th>
                        <th>30/11</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $data_tabela; ?>

                </tbody>
            </table>
	</section>
	<?php require_once "application/view/footer.php"; ?>
</body>
</html>