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
                    <tr>
                    	<td class="horario">08:00</td>
                        <td>Abertura oficial</td>
                        <td>Minicurso 1</td>
                        <td>Palestra 1</td>
                    </tr>

                    <tr>
                    	<td class="horario">10:00</td>
                        <td>Apresentação de trabalhos</td>
						<td>Minicurso 2</td>
						<td>Palestra 2</td>
                    </tr>

                    <tr>
                    	<td class="horario">14:00</td>
                        <td>Minicurso 3</td>
                        <td>Cinema</td>
                        <td>Musical</td>
                    </tr>

                    <tr>
                    	<td class="horario">16:00</td>
                        <td>Minicurso 4</td>
                        <td>Atividade 01</td>
                        <td>Atividade 02</td>
                    </tr>

                    <tr>
                    	<td class="horario">19:00</td>
                        <td>Palestra 3</td>
                        <td>Encerramento</td>
                        <td>Musical</td>
                    </tr>

                </tbody>
            </table>
	</section>
	<?php require_once "application/view/footer.php"; ?>
</body>
</html>