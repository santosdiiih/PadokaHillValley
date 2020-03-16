<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Padoka Hill Valley</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/padrao.css">
        <link rel="stylesheet" type="text/css" href="css/slide.css">
        <link rel="stylesheet" href="leaflet/leaflet.css">
    </head>
    <body>
        <?php include_once('header.php')?>
        <div id="areaDoMapa">
            <div class="container">
                <div id="myMap">

                </div>
                <div id="containerLojas">
                    <div class="cardLojas">
                        <div class="card-rua-cidade">
                            ITAPEVI - SP
                        </div>
                        <div class="card-rua-detalhada">
                            ROD. ENG. RENÊ BENEDITO DA SILVA 3338
                        </div>
                        <div class="card-rua-contato">
                            Telefone: (11)94002-8922
                        </div>
                        <div class="button-localizar">
                            LOCALIZAR
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('footer.php')?>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/cycle2.js"></script>
        <script type="text/javascript" src="js/slide.js"></script>
        <script src="leaflet/leaflet.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/map.js"></script>
    </body>
</html>