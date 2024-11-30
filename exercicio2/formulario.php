<!-- Aluno: Thiago Piffer Lauro. Turma: M13. -->

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Calc Equacao do 2 Grau</title>

</head>

<body style="background-color:lightgrey; font-family:Arial, Helvetica, sans-serif;font-size:18px">

    <nav class="navbar bg-dark navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase" href="#" style="font-size:xx-large">Calculadora de equação do segundo grau
                <span><img src="Imagens/Logo.png" alt=""></span>
            </a>
        </div>
    </nav>

    <br><br>

    <h4>Cadastro de dados:</h4>

    <br>

    <form action="calceq.php" method="POST" style="width: 50%">

        <div style="display: flex; align-items:center; justify-content:flex-start">
            <label for="nbA" style="margin-right:3%">Valor de a:</label>
            <input class="form-control" type="text" name="nbA"  value="" placeholder="Digite o coeficiente a..."><!-- Receber o coeficiente a -->
        </div>

        <br>

        <div style="display: flex; align-items:center; justify-content:flex-start">
            <label for="nbB" style="margin-right:3%">Valor de b:</label>
            <input class="form-control" type="text" name="nbB"  value="" placeholder="Digite o coeficiente b..."><!-- Receber o coeficiente b -->
        </div>

        <br>

        <div style="display: flex; align-items:center; justify-content:flex-start">
            <label for="nbC" style="margin-right:3%">Valor de c:</label>
            <input class="form-control" type="text" name="nbC"  value="" placeholder="Digite o coeficiente c..."><!-- Receber o coeficiente c -->
        </div>

        <br><br>

        <div style="display: flex; align-items:center; justify-content:center">
            <input class="btn btn-dark" type="submit" name="bCalc" value="Calcular" style="margin-right:50px; margin-left:10px"><!-- Botão para enviar o formulário -->
            <input class="btn btn-dark" type="reset" name="bLimpar" value="Limpar"><!-- Botão para apagar dados do formulário -->
        </div>

    </form>

    <br>

    <h4>Resultados:</h4>

    <br>

    <?php
        if ( isset($_GET["msg"])  ) {//Recebe a mensagem com os resultados do programa (erros ou acertos)
            $mensg = $_GET["msg"];
            $mensg = str_replace("mais","+",$mensg);//Troca "mais" por "+", uma vez que não a url entende como espaço
            echo "$mensg";//Exibe a mensagem
        }
    ?>
    
</body>

</html>