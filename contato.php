<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset=utf-8>
        <title>Padoka Hills Valley</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/padrao.css">
        <link rel="stylesheet" type="text/css" href="css/slide.css">
    </head>
    <body>
        <?php include_once('header.php') ?>
        
        <div id="areaContato">
            <div class="container">
                
                <h1> Fale Conosco! </h1>
                <form name="frmContato" method="post" action="">
                    
                    <div class="camposContato">
                        <div class="containerTexto formataTexto">
                            Nome:
                        </div>
                        <input type="text" name="txtNome" class="campoDeEntrada">
                    </div>
                    
                    <div class="camposContato">
                        <div class="containerTexto formataTexto">
                            Telefone:
                        </div>
                        <input type="text" name="txtTelefone" class="campoDeEntrada">
                    </div>
                    
                    <div class="camposContato">
                        <div class="containerTexto formataTexto">
                            Celular:
                        </div>
                        <input type="text" name="txtCelular" class="campoDeEntrada">
                    </div>
                    
                    <div class="camposContato">
                        <div class="containerTexto formataTexto">
                            Email:
                        </div>
                        <input type="text" name="txtEmail" class="campoDeEntrada">
                    </div>
                    
                    <div class="camposContato">
                        <div class="containerTexto formataTexto">
                            Link do Facebook:
                        </div>
                        <input type="text" name="txtFacebook" class="campoDeEntrada">
                    </div>
                    
                    <div class="camposContato">
                        <div class="containerTexto formataTexto">
                            Sujestões:
                        </div>
                        <textarea name="txtSujestao" class="textarea"></textarea>
                    </div>
                    
                    <div class="camposContato">
                        <div class="containerTexto formataTexto">
                            Mensagem:
                        </div>
                        <textarea name="txtMensagem" class="textarea"></textarea>
                    </div>
                    
                    <div class="camposContato">
                        <div class="containerTexto formataTexto">
                            Sexo:
                        </div>
                        <select name="slcSexo" id="campoSelect">
                            <option value="m">Masculino</option>
                            <option value="f">Feminino</option>
                            <option value="o">Outros</option>
                        </select>
                        <input type="text" id="campoSexoOutros" name="txtOutros">
                    </div>
                </form>
            </div>
        </div>
        
        <script src="js/jquery.js"></script>
        <script src="js/cycle2.js"></script>
        <script src="js/slide.js"></script>
        <script src="js/contatos.js"></script>
        <?php include_once('footer.php') ?>
    </body>
</html>