<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Padoka Hill Valley</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/padrao.css">
        <link rel="stylesheet" type="text/css" href="css/slide.css">
        <link rel="stylesheet" type="text/css" href="css/map.css">
    </head>
    <body>
        <?php include_once('header.php')?>
        <div id="areaDoMapa">
            <div class="container">
                <h1> Nossa loja principal está localizada em: </h1>
                <div id="map">

                </div>
            </div>
        </div>
        <?php include_once('footer.php')?>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/cycle2.js"></script>
        <script type="text/javascript" src="js/slide.js"></script>
        <script type="text/javascript" src="js/map.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDupWIQI34kN1Ob4ApcwWCYl0YFBY-mqEU&callback=iniciarMap" async defer></script>
    </body>
</html>