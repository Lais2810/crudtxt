<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="form">

    <?php

        $banco = "banco.txt";
        if(isset($_GET['codigo'])){
            if(file_exists($banco)&&!empty(file_get_contents($banco))){
                $lista = explode("\n", file_get_contents($banco));
                $informacoes = 6;
                $conjunto = $informacoes * ($_GET['codigo'] - 1);

                $nome = $lista[$conjunto];
                $esportePratica = $lista[$conjunto + 1];
                $esporteEscolha = $lista[$conjunto + 2];
                $esporteFav = $lista[$conjunto + 3];
                $esporteTime = $lista[$conjunto + 4];
                $mensagem = str_replace("<br>", "\n", $lista[$conjunto + 5]);
            }

        }
?>
    
<div class="forms">
  <form method="post" action="update.php"><center>
         <table>
            <tr>
                <td>
                    <font size="2" face="Arial">Código: </font>
                </td>
                <td>
                <input type="number" id="codigo" name="codigo" placeholder="<?php echo $_GET['codigo']; ?>" value="<?php echo $_GET['codigo']; ?>" style="background-color: #ccc; width: 20%; text-align: center;" readonly>
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                    <font size="2" face="Arial">Nome: </font>
                </td>
                <td>
                    <input name="nome" type="text" id="nome" size="52" maxlength="150" placeholder="Digite seu nome..." placeholder="<?php echo $nome; ?>" value="<?php echo $nome; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2" face="Arial">Você pratica esportes? </font>
                </td>
                <td>
                <label>
                <input type="radio" name="esportePratica" value="Sim" <?php if ($esportePratica == 'Sim') { echo 'checked'; } ?>> Sim
                </label>
                <label>
                <input type="radio" name="esportePratica" value="Não" <?php if ($esportePratica == 'Não') { echo 'checked'; } ?>> Não
                </label><br>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2" face="Arial">Gosta de esportes? </font>
                </td>
                <td>
                <label>
                <input type="radio" name="esporteEscolha" value="Sim"<?php if ($esporteEscolha == 'Sim') { echo 'checked'; } ?>> Sim
                </label>
                <label>
                <input type="radio" name="esporteEscolha" value="Não" <?php if ($esporteEscolha == 'Não') { echo 'checked'; } ?>> Não
                </label>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2" face="Arial">Qual seu esporte favorito? </font>
                </td>
                <td>
                    <input name="esporteFav" type="text" id="espFav" size="52" maxlength="150" placeholder="<?php echo $esporteFav; ?>" value="<?php echo $esporteFav; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2" face="Arial">Qual seu time favorito desse esporte? </font>
                </td>
                <td>
                    <input name="esporteTime" type="text" id="espTime" size="52" maxlength="150" placeholder="<?php echo $esporteTime; ?>" value="<?php echo $esporteTime; ?>">
                </td>
            </tr>
            <tr>
                <td width="200">
                    <font size="2" face="Arial">O que você acha sobre seu time favorito? </font>
                </td>
                <td width="460">
                    <textarea name="mensagem" id="mensagem" size="52"><?php echo $mensagem; ?></textarea> 
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <button type="submit" name="enviar" class="button">Enviar</button>
                <a href="select.php"><button type="button" name="select" class="button">Voltar</button></a>
                </td>
            </tr>
        </table>    

</center></form>
</div>

</body>
</html>