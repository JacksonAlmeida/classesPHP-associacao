<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacionamento entre classes</title>
</head>

<body>

    <?php

    include __DIR__ . '/Pessoa.php';
    include __DIR__ . '/Endereco.php';

    $endereco = new Endereco('Novo Aleixo','Manaus','Igaraçu','AM' ,'69099-120','Amazonas');
    $pessoa = new Pessoa(1,'Jackson Almeida',$endereco);
    var_dump($pessoa);
    ?>

</body>

</html>