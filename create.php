<?php

$banco = "banco.txt";

$conteudo = $_POST["nome"] . "\n" . $_POST["esportePratica"] . "\n" . $_POST["esporteEscolha"] . "\n" . $_POST["esporteFav"] . "\n" . $_POST["esporteTime"] . "\n" . str_replace("\n", "<br>", $_POST["mensagem"]) . "\n";

$criar = fopen($banco, "a+");

fwrite($criar, $conteudo);

if($criar == true){
    echo "Dados armazenados em banco.txt";
}else{
    echo "Erro ao salvar dados em banco.txt";
}
fclose($criar);

header('Location: /crudtxt/home.php');

?>