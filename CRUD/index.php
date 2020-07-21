<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contactos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", "On");
    include 'contato.class.php';
    $contato = new Contato();
    ?>
    <h1>Contatos </h1>
    <a href="adicionar.php"> Adicionar novo usuário</a>
    <table width="900" text="justify" class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"> ID</th>
                <th scope="col"> Nome</th>
                <th scope="col"> E-mail </th>
                <th scope="col"> Ações </th>
            </tr>
        </thead>
        <?php
        $lista = $contato->getAll();
        foreach ($lista as $item) : // e colocado os dois pontos : para indicar um endforeach
            ?>
            <tr>
                <td> <?php echo $item['id']; ?> </td>
                <td> <?php echo $item['nome']; ?></td>
                <td> <?php echo $item['email']; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $item['id']; ?>"> Editar </a>
                    <a href="excluir.php?id=<?php echo $item['id']; ?>"> Excluir </a>
            </tr>
        <?php
    endforeach;
    ?>


    </table>
</body>

</html>