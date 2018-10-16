<?php 
    //Padrão de criação de variavel
    $anoNascimento = 1999;
    $nomeCompleto = "Daniel de Souza Neris";
    $x = "programador";

    echo "nome: $nomeCompleto, idade: $anoNascimento, $x";
    echo '<br>';

    //unset serve para destriu as variáveis;
    unset($x);

    //faz o echo novamente para ver se o unset funcionou
    if(isset($x)){
        echo "nome: $nomeCompleto, idade: $anoNascimento, $x";
    }
    else{
        echo "nome: $nomeCompleto, idade: $anoNascimento";
    }
    
?>