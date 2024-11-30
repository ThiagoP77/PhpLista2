<?php

    //Aluno: Thiago Piffer Lauro. Turma: M13.

    function validarDados($a, $b, $c) {//Função para validar os dados recebidos no arquivo "calceq.php"

        $msgErro = "";//Mensagem de erro começa vazia

        if ( !isset($a) ) {//Insere o erro de coeficiente a não informado
            $msgErro = $msgErro . "Informe o coeficiente A.<br>";        
        }       

        if ( isset($a) && !is_numeric($a)) {//Verifica se ée um número
            $msgErro = $msgErro . "Informe um coeficiente A válido.<br>"; 
        }

        if ( isset($a) && is_numeric($a) && $a == 0) {//Verifica se o coeficiente a é diferente de 0
            $msgErro = $msgErro . "Informe um coeficiente A diferente de 0.<br>"; 
        }
        
        if ( !isset($b) ) {//Insere o erro de coeficiente b não informado
            $msgErro = $msgErro . "Informe o coeficiente B.<br>";
        } 

        if ( isset($b) && !is_numeric($b)) {//Verifica se ée um número
            $msgErro = $msgErro . "Informe um coeficiente B válido.<br>"; 
        }

        if ( !isset($c) ) {//Insere o erro de coeficiente c não informado
            $msgErro = $msgErro . "Informe o coeficiente C.<br>";
        } 

        if ( isset($c) && !is_numeric($c)) {//Verifica se ée um número
            $msgErro = $msgErro . "Informe um coeficiente C válido.<br>"; 
        }

        return $msgErro;//Retorna a mensagem de erro

    }

?>