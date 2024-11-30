<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    require "funcoes.php";//Necessita da função presente nesse arquivo
    
    $a = $_POST["nbA"];//Recebe valor do formulario.php
    $b = $_POST["nbB"];//Recebe valor do formulario.php
    $c = $_POST["nbC"];//Recebe valor do formulario.php

    $msgErro = validarDados($a, $b, $c);//Chama a função de validação em "funcoes.php"

    if ( empty($msgErro) ) {//Envia mensagem com os resultados corretos quando a mensagem de erros está vazia

        if ($b > 0) {//Adiciona o sinal de positivo para a fórmula
            $bf = "mais $b";
        } else {//Adiciona o sinal de negativo para a fórmula
            $bas = abs($b);
            $bf = "- $bas";
        }
        if ($c > 0) {//Adiciona o sinal de positivo para a fórmula
            $cf = "mais $c";
        } else {//Adiciona o sinal de negativo para a fórmula
            $cas = abs($c);
            $cf = "- $cas";
        }

        if ( $b == 0) {//Verifica se b é 0 para montar a fórmula
            $eq = "Equação: $a"."x²"." $cf = 0.";
        } else if ($c == 0) {//Verifica se c é 0 para montar a fórmula
            $eq = "Equação: $a"."x²"." $bf"."x = 0.";
        } else if ( $b == 0 && $c == 0) {//Verifica se b e c são 0 para montar a fórmula
            $eq = "Equação: $a"."x² = 0.";
        } else {//Monta a fórmula quando nenhum valor é nulo
            $eq = "Equação: $a"."x²"." $bf"."x $cf = 0.";
        }

        $coef = "Coeficientes: a = $a"."; b = $b"."; c = $c.";//Variável que guarda os coeficientes 

        if ( $a > 0) {//Verifica se a concavidade está para cima ou para baixo
            $conc = "<font color=blue>Concavidade voltada para cima.</font>";
        } else {
            $conc = "<font color=red>Concavidade voltada para baixo.</font>";
        }

        $delta = (($b * $b) - (4 * $a * $c));//Calcula o delta da expressão

        if ($delta == 0) {//Delta nulo, então calcula uma única raíz
            $x = ((-$b)/(2*$a));
            $res = "Raízes: X1 = X2 = $x.";
        } 
        
        else if ($delta > 0) {//Delta positivo, calcula as duas raízes
            $raiz = sqrt($delta);//Raíz quadrada do Delta
            $x1 = (((-$b)+$raiz)/(2*$a));
            $x2 = (((-$b)-$raiz)/(2*$a));
            $res = "Raízes: X1 = $x1 e X2 = $x2.";
        } 
        
        else {//Delta negativo, então não há raízes reais
            $res = "Raízes: Não há raízes reais.";
        }

        header("Location:formulario.php?msg= $eq <br> $coef <br> $res <br> $conc");

    } else {//Envia mensagem de erro quando ela não está vazia

        header("Location:formulario.php?msg=<font color=red>$msgErro</font>");

    }

?>