<html>
	<head>
		<title>Electronic's ST</title>
		<meta charset="utf-8">
		<base href="<?= URL_BASE ?>"><!-- Esta instrução é super importante e não deve ser mudada! -->
		<link rel="stylesheet" href="./publico/css/app.css">
	</head>
	<body class="container">
		<?php
			/*
				http://tiagomatos.com/blog/dica-sobre-a-variavel-global-server-do-php
				https://www.php.net/manual/pt_BR/reserved.variables.server.php
			*/
			if ($_SERVER['PHP_SELF']!='/est/index.php/cliente/adicionarCliente') {
				require('cabecalho.php');
			}else{
				require('cabecalho_login.php');
			}

			//echo $_SERVER['PHP_SELF'];
		?>
		<main class="container" id="content">
			<?php 
				require $viewFilePath;
			?>
		</main>
		<?php 
			if ($_SERVER['PHP_SELF']!='/est/index.php/cliente/adicionarCliente') {
				require('footer.php');
			}elseif ($_SERVER['PHP_SELF']!='/est/index.php/cliente/logarCliente') {
				require('footer.php');
			}
		?>
	</body>
</html>