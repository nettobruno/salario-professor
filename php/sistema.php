<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/sistema.css">
</head>

<body>
    <div class="conteudo">
        <?php
            if(!empty($_POST['nome']) && !empty($_POST['sexo']) && !empty($_POST['aulas']) && !empty($_POST['valorAula']) && !empty($_POST['especialista'])){
                require_once "Classes/Professor.php";

                $exibir = new Professor($_POST['nome'], $_POST['sexo'], $_POST['aulas'], $_POST['valorAula'], $_POST['especialista']);

                echo $exibir->exibir();
            }
            else{
                header("Location: ../index.php?erro");
            }
        ?>

        <div class="btn">
            <a class="btn-voltar" href="../index.php">Voltar</a>
        </div>
    </div>
</body>

</html>