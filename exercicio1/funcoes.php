<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    function validarDados($peso, $altura) {//Função para validar os dados recebidos no arquivo "calcimc.php"

        $msgErro = "";//Mensagem de erro começa vazia

        if ( empty($peso) ) {//Insere o erro de peso não informado
            $msgErro = $msgErro . "Informe o peso.<br>";        
        }        
        
        if ( empty($altura) ) {//Insere o erro de altura não informada
            $msgErro = $msgErro . "Informe a altura.<br>";
        } 

        if ( !empty($peso) && $peso >= 600 || !empty($peso) && $peso < 5) {//Caso informado, o peso deve ser maior que 5 (peso de criança de 6 meses) e 600 (maior peso já registrado)
            $msgErro = $msgErro . "Digite um peso entre 5 e 600 quilos.<br>";
        }

        if ( !empty($altura) && $altura >= 3 || !empty($altura) && $altura < 0.4 ) {//Caso informada, a altura deve ser maior que 40cm (altura de criança de 6 meses) e 3 (maior altura já registrada)
            $msgErro = $msgErro . "Digite uma altura entre 40cm e 3m.<br>";
        }

        return $msgErro;//Retorna a mensagem de erro

    }

?>