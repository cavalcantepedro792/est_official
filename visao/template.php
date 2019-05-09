<html>
    <head>
        <title>template MVC</title>
        <meta charset="utf-8">
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">
        <?php require('cabecalho.php'); ?>
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>
        <?php require('footer.php'); ?>
    </body>
</html>