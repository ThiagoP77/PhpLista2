<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    require "funcoes.php";//Necessita da função presente nesse arquivo
    
    $peso = $_POST["nbPeso"];//Recebe valor do formulario.php
    $altura = $_POST["nbAltura"];//Recebe valor do formulario.php

    $msgErro = validarDados($peso, $altura);//Chama a função de validação em "funcoes.php"

    if ( empty($msgErro) ) {//Envia mensagem com os resultados corretos quando a mensagem de erros está vazia

        $imc = $peso / ($altura * $altura);//Calcula o IMC

        $imcmostrado = number_format($imc,2,",","");//Formata o IMC para ser mostrado

        if ( $imc < 18.5 ) {//Caso 1 de IMC
            header("Location:formulario.php?msg=<font color=blue>Seu IMC é $imcmostrado.<br>Você está na categoria abaixo do peso!</font>");
        } 
        
        else if ( $imc >= 18.5 && $imc < 25 ) {//Caso 2 de IMC
            header("Location:formulario.php?msg=<font color=green>Seu IMC é $imcmostrado.<br>Você está na categoria peso normal!</font>");
        }

        else if ( $imc >= 25 && $imc < 30 ) {//Caso 3 de IMC
            header("Location:formulario.php?msg=<font color=yellow>Seu IMC é $imcmostrado.<br>Você está na categoria sobrepeso!</font>");
        }

        else if ( $imc >= 30 && $imc < 35 ) {//Caso 4 de IMC
            header("Location:formulario.php?msg=<font color=orange>Seu IMC é $imcmostrado.<br>Você está na categoria obeso leve!</font>");
        }

        else if ( $imc >= 35 && $imc < 40 ) {//Caso 5 de IMC
            header("Location:formulario.php?msg=<font color=purple>Seu IMC é $imcmostrado.<br>Você está na categoria obeso moderado!</font>");
        }

        else {//Caso 6 de IMC
            header("Location:formulario.php?msg=<font color=red>Seu IMC é $imcmostrado.<br>Você está na categoria obeso mórbido!</font>");
        }

    } else {//Envia mensagem de erro quando ela não está vazia

        header("Location:formulario.php?msg=<font color=red>$msgErro</font>");

    }


?>