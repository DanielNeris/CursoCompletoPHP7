<?php 

    //tipos básicos de variáveris


    //string
    $nome = "Daniel";
    var_dump($nome);
    echo '<br>';

    //int
    $ano = 1999;
    var_dump($ano);
    echo '<br>';

    //float
    $salario = 600.00;
    var_dump($salario);
    echo '<br>';

    //bool
    $bloqueado = false;
    var_dump($bloqueado);
    echo '<br>';

    
    //tipos compostos de variáveis

    //array
    //dando echo '<pre>' para formatar a visualização do array
    echo '<pre>';
        $frutas = ['Abacaxi', 'Laranja', 'Manga', 'Maça'];
        var_dump($frutas);
    echo '</pre>';
    echo '<br>';

    //object
    echo '<pre>';
        $data = new DateTime();
        var_dump($data);
    echo '</pre>';
    echo '<br>';

    //tipos especiais

    //resource of type (stream) 
    $arquivo = fopen("exemplo.php", "r");
    var_dump($arquivo);
    echo '<br><br>';

    //null
    $nulo = null;
    var_dump($nulo);
    echo '<br>';

?>