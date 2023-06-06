<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Curioso - Pesquisa</title>
</head>
<body class="pesquisa">

    <header class="menu">
        <img class="menu-img" src="img/logo.png" alt="Logo do site" width="100px">
        <nav class="menu-config">
            <ul>
            <li><a href="index.php" class="menu-config-item"> Home </a></li>
            <li><a href="select.php" class="menu-config-item"> Alterar Registros </a></li>
            </ul>
        </nav>
    </header>

<?php
$banco = "banco.txt";
echo "<br><br><CENTER><h1>Registro das Respostas dos Usuários</h1><br><br></CENTER>";
echo "<br>";

if(file_exists($banco) && !empty(file_get_contents($banco))){
    $lista = explode("\n", file_get_contents($banco));
    $informacoes = 6;
    unset($lista[count($lista) - 1]);
    $conjunto = 1;

    echo "<center><table class='table'>";
    date_default_timezone_set('America/Sao_Paulo');

    echo "<meta charset='UTF-8'>";

    echo "<tr class='tr'><th class='th'>Código</th><th class='th'>Nome</th><th class='th'>Você Pratica Esporte?</th><th class='th'>Gosta de Esporte?</th><th class='th'>Esporte favorito</th><th class='th'>Time favorito</th><th class='th'>Opinião sobre o time</th></tr>";
    for ($i = 0; $i < count($lista); $i += $informacoes){
        echo "<tr class='tr'>";
        echo "<td class='td' id='$conjunto'>$conjunto</td>";

        for ($j = $i; $j < $i + $informacoes; $j++){
            echo "<td class='td'>{$lista[$j]}</td>";
        }
        echo "</tr>";

        $conjunto++;

    }

    echo "</table>";
    echo "<foooter id='footer'>";
    echo "</footer>";

}else{
    echo "<br><br><h2 style='margin-top: 10%'><p align=center>Ainda não há nenhum registro!</h2></p>";
}

?>

</body>
</html>