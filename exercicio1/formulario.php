<!-- Aluno: Thiago Piffer Lauro. Turma: M13. -->

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Calculadora de IMC</title>

</head>

<body style="background-color:lightgrey; font-family:Arial, Helvetica, sans-serif;font-size:18px">

    <nav class="navbar bg-dark navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase" href="#" style="font-size:xx-large">Calculadora de IMC
                <span><img src="Imagens/Logo.png" alt=""></span>
            </a>
        </div>
    </nav>

    <br><br>

    <h4>Cadastro de dados:</h4>

    <br>

    <form action="calcimc.php" method="POST" style="width: 50%">

        <div style="display: flex; align-items:center; justify-content:flex-start">
            <label for="nbPeso" style="margin-right:3%">Peso(Kg): </label>
            <input class="form-control" type="number" name="nbPeso"  value="" step="0.01" placeholder="Digite seu peso em quilos..."><!-- Receber o peso com até duas casas decimais -->
        </div>

        <br><br>

        <div style="display: flex; align-items:center; justify-content:flex-start">
            <label for="nbAltura" style="margin-right:3%">Altura(m): </label>
            <input class="form-control" type="number" name="nbAltura"  value="" step="0.01" placeholder="Digite sua altura em metros..."><!-- Receber a altura com até duas casas decimais -->
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
            echo "$mensg";//Exibe a mensagem
        }
    ?>
    
</body>

</html>