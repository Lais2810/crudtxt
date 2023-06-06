<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um site para saber sobre seus gostos pelo esporte!">
    <title>Sport Curioso</title>
</head>
<body>

    <header class="menu">
        <img class="menu-img" src="img/logo.png" alt="Logo do site" width="100px">
        <nav class="menu-config">
            <ul>
            <li><a href="#" class="menu-config-item"> Home </a></li>
            <li><a href="#saiba-mais" class="menu-config-item"> Saiba Mais </a></li>
            <li><a href="#esporte-populares" class="menu-config-item"> Esportes Populares </a></li>
            <li><a href="pesquisa.php" class="menu-config-item"> Opiniões dos Usuários </a></li>
            </ul>
        </nav>
    </header>

    <div class="conf">
        <section class="info">
            <div class="info-esc">
                <h1 class="info-titulo"> Não deixe a gente curioso! </h1>
                <h2 class="info-subtitulo"> Responda a nossa pesquisa você também... </h2>
                <a href="home.php"><button class="info-botao"> Respoder Pesquisa </button></a>
            </div>
            <img class="info-img" src="img/ameixa.png">
        </section>
    </div>

    <div id="saiba-mais" class="sobre">
        <section class="sob">
            <div class="alinhar">
            <h1 class="titulo"> O que é esporte?</h1><br>
            <h2 class="subtitulo"><p> O dicionário define esporte como "<i>cada uma das atividades físicas desenvolvidas por uma pessoa ou um grupo, com regularidade ou não, com o fim de recreação ou competição".</i> Um estudo recente mostrou que existem mais de 8.000 tipos diferentes de esportes no mundo e atualmente o esporte mais popular do mundo é o Futebol! </p></h2><br>
            <center>
                <img src="img/esporte.jpg" width="800px" height="355px" style="margin-bottom: 30px; border-radius: 20px; margin-top: 40px; padding: 10px;" ><br>
            </center>
            <h1 class="titulo"> Quando o esporte surgiu? </h1><br>
            <h2 class="subtitulo"><p> Existiam pessoas na China que já faziam ginástica há cerca de 4.000 a.C. Já no Egito, foram encontrados registros de particantes de esgrima, salto e de arremesso de dardos por volta de 1.450 a.C. 
                No entanto, não existe uma data exata de quando o esporte de fato surgiu.</p></h2>
            </div>

        </section>
    </div>


    <div id="esporte-populares" class="dest">
        <h1> Os três esportes mais populares do mundo: </h1>
        <div class="destaque">   
           <div class="card">
                <div class="face front">
                    <img class="img" src="img/futebol.jpg" alt="Futebol">
                    <h3>Futebol</h3>
                </div>
                <div class="face back">
                    <h3>Futebol</h3>
                    <p class="p">O esporte mais popular do mundo é o futebol com 4 bilhões de fãs ao redor do mundo</p>
                </div>
            </div>   
            <div class="card">
                <div class="face front">
                    <img class="img" src="img/cricket.jpg" alt="Críquete">
                    <h3>Críquete</h3>
                </div>
                <div class="face back">
                    <h3>Críquete</h3>
                    <p class="p">Em segundo lugar o esporte mais popular é o críquete com 2,6 bilhões de fãs ao redor do mundo</p>
                </div>
            </div>   
            <div class="card">
                <div class="face front">
                    <img class="img" src="img/hoquei.jpg" alt=>Hóquei">
                    <h3>Hóquei</h3>
                </div>
                <div class="face back">
                    <h3>Hóquei</h3>
                    <p class="p">Em terceiro lugar temos o Hóquei com 2 bilhões de fãs ao redor do mundo</p>
                </div>
            </div>
    </div>   
    </div>

    <footer class="fim">

    <p>© 2023 Autora:</p>
    <p>Lais Fontinele</p>
    <p>Fatec Ferraz de Vasconcelos - SP</p>

    </footer>

</body>
</html>
