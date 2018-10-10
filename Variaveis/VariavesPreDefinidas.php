<?php 

    //super globar post
    $_POST['idade'] = 12;
    if(isset($_POST['idade'])){
        $idade = $_POST['idade'];
        var_dump($idade);
    }
    
    echo '<br>';

    //super global get
    if(isset($_GET['nome'])){
        $nome = $_GET['nome'];
        var_dump($nome);
    }
    else{
        echo "Nome não definido";
    }

    echo '<br>';

    //log de acesso
    $server = $_SERVER["SCRIPT_NAME"];
    var_dump($server);
?>
