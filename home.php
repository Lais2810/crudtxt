<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="form">

    <div class="forms">
  <form action="create.php" method="post"><center>
         <table>
            <tr>
                <td>
                    <font size="2" face="Arial">Nome: </font>
                </td>
                <td>
                    <input name="nome" type="text" id="nome" size="52" maxlength="150" placeholder="Digite seu nome..." required>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2" face="Arial">Você pratica esportes? </font>
                </td>
                <td>
                <label>
                <input type="radio" name="esportePratica" value="Sim"> Sim
                </label>
                <label>
                <input type="radio" name="esportePratica" value="Não" required> Não
                </label><br>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2" face="Arial">Gosta de esportes? </font>
                </td>
                <td>
                <label>
                <input type="radio" name="esporteEscolha" value="Sim"> Sim
                </label>
                <label>
                <input type="radio" name="esporteEscolha" value="Não" required> Não
                </label>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2" face="Arial">Qual seu esporte favorito? </font>
                </td>
                <td>
                    <input name="esporteFav" type="text" id="espFav" size="52" maxlength="150" placeholder="Digite seu esporte favorito...">
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2" face="Arial">Qual seu time favorito desse esporte? </font>
                </td>
                <td>
                    <input name="esporteTime" type="text" id="espTime" size="52" maxlength="150" placeholder="Digite seu time favorito...">
                </td>
            </tr>
            <tr>
                <td width="200">
                    <font size="2" face="Arial">O que você acha sobre seu time favorito? </font>
                </td>
                <td width="460">
                    <textarea name="mensagem" id="mensagem" size="52"></textarea> 
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
         
                <button type="submit" onclick="envio()" name="enviar" class="button">Continuar</button>
                <a href="index.php"><button type="button" name="select" class="button">Voltar</button></a>
                </td>
            </tr>
        </table>    

</center></form>
</div>

<script>
    function envio()
    {
        alert("Pesquisa respondida! Obrigada por participar <3");
    }
</script>

</body>
</html>