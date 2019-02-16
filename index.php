<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Calcular Salário</title>
    <?php
        if(isset($_GET['erro'])){
    ?>
    <script>
        alert("Preencha o formulário");
    </script>
    <?php
        }
    ?>
</head>

<body>
    <div class="centro">
        <form action="php/sistema.php" method="post">
            <div class="itens">
                <div>
                    <label>
                        <input type="text" name="nome" placeholder="Informe o seu nome">
                    </label>
                </div>
                <div>
                    <label>
                        <input type="number" name="aulas" placeholder="Quantidade de aulas">
                    </label>
                </div>
                <div>
                    <label>
                        <input type="number" name="valorAula" placeholder="Valor aula">
                    </label>
                </div>
                <div>
                    <legend>Você é especialista?</legend>
                    <input type="radio" id="sim" name="especialista" value="1">
                    <label for="sim">Sim</label>

                    <input type="radio" id="nao" name="especialista" value="2">
                    <label for="nao">Não</label>
                </div>

                <div>
                    <legend>Qual é o seu sexo?</legend>
                    <select name="sexo">
                        <option value="">Escolha</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <?php
                    if(isset($_GET['erro'])){
                ?>
                <h1 style="color: red; font-size: 20px">
                    Preencha o formulário
                </h1>
                <?php
                    }
                ?>

                <div>
                    <button class="btn" type="submit">Enviar</button>
                    <button class="btn" type="reset">Apagar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>