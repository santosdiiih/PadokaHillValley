<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CRUD - Contatos</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <header>
        </header>
        <div id="container">
            <div id="container-cadastro">
                <form name="frmCadastro" action="" method="post">
                    <div class="titulo formataTexto">
                        Cadastro de Contatos
                    </div>
                    <div class="campo-de-cadastro">
                        <div class="nome-do-campo formataTexto">
                            Nome:
                        </div>
                        <div class="campo-das-entradas">
                            <input type="text" name="txtNome" value="" class="entrada-de-texto">
                        </div>
                    </div>
                    <div class="campo-de-cadastro">
                        <div class="nome-do-campo formataTexto">
                            Endereço:
                        </div>
                        <div class="campo-das-entradas">
                            <input type="text" name="txtEndereco" value="" class="entrada-de-texto">
                        </div>
                    </div>
                    <div class="campo-de-cadastro">
                        <div class="nome-do-campo formataTexto">
                            Bairro:
                        </div>
                        <div class="campo-das-entradas">
                            <input type="text" name="txtBairro" value="" class="entrada-de-texto">
                        </div>
                    </div>
                    <div class="campo-de-cadastro">
                        <div class="nome-do-campo formataTexto">
                            Cep:
                        </div>
                        <div class="campo-das-entradas">
                            <input type="text" name="txtCep" value="" class="entrada-de-texto">
                        </div>
                    </div>
                    <div class="campo-de-cadastro">
                        <div class="nome-do-campo formataTexto">
                            Estados:
                        </div>
                        <div class="campo-das-entradas">
                            <select name="slcEstados" class="entrada-de-texto"></select>
                        </div>
                    </div>
                    <div class="campo-de-cadastro">
                        <div class="nome-do-campo formataTexto">
                            Telefone:
                        </div>
                        <div class="campo-das-entradas">
                            <input type="text" name="txtTelefone" value="" class="entrada-de-texto">
                        </div>
                    </div>
                    <div class="campo-de-cadastro">
                        <div class="nome-do-campo formataTexto">
                            Celular:
                        </div>
                        <div class="campo-das-entradas">
                            <input type="text" name="txtCelular" value="" class="entrada-de-texto">
                        </div>
                    </div>
                    <div class="campo-de-cadastro">
                        <div class="nome-do-campo formataTexto">
                            E-Mail:
                        </div>
                        <div class="campo-das-entradas">
                            <input type="text" name="txtMail" value="" class="entrada-de-texto">
                        </div>
                    </div>
                    <div class="campo-de-cadastro">
                        <div class="nome-do-campo formataTexto">
                            Data Nascimento:
                        </div>
                        <div class="campo-das-entradas">
                            <input type="text" name="txtDtNasc" value="" class="entrada-de-texto">
                        </div>
                    </div>
                    <div class="campo-de-cadastro">
                        <div class="nome-do-campo formataTexto">
                            Sexo:
                        </div>
                        <div class="campo-das-entradas">
                            <div class="formataTexto radioBtn">
                                Feminino
                                <input type="radio" name="rdoSexo" value="f">
                            </div>
                            <div class="formataTexto radioBtn">
                                Masculino
                                <input type="radio" name="rdoSexo" value="m">
                            </div>
                        </div>
                    </div>
                    <div class="campo-de-cadastro">
                        <div class="nome-do-campo formataTexto">
                            Obs.:
                        </div>
                        <div class="campo-das-entradas">
                            <textarea name="txtObs" class="area-de-texto"></textarea>
                        </div>
                    </div>
                    <input type="submit" name="smtSalvar" value="salvar" id="botao-salvar" class="formataTexto">
                </form>
            </div>
            <div id="campo-da-consulta">
                <table id="campo-consulta">
                    <tr class="titulo formataTexto">
                        <td>Consulta de Contatos</td>
                    </tr>
                    <tr class="campos">
                        <td colspan="4" id="campos-td">
                            <table id="resultados">
                                <tr class="linhas">
                                    <td class="coluna formataTexto">
                                        Nome
                                    </td>
                                    <td class="coluna formataTexto">
                                        Celular
                                    </td>
                                    <td class="coluna formataTexto">
                                        Estado
                                    </td>
                                    <td class="coluna formataTexto">
                                        Email
                                    </td>
                                    <td class="coluna formataTexto">
                                        Opções
                                    </td>
                                </tr>
                                <tr class="linhas">
                                    <td class="coluna formataTexto"></td>
                                    <td class="coluna formataTexto"></td>
                                    <td class="coluna formataTexto"></td>
                                    <td class="coluna formataTexto"></td>
                                    <td class="coluna formataTexto">
                                        <div class="container-opcoes">
                                            <div class="button-opcoes close">
                                            </div>
                                            <div class="button-opcoes edit">
                                            </div>
                                            <div class="button-opcoes search">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="linhas">
                                    <td class="coluna formataTexto"></td>
                                    <td class="coluna formataTexto"></td>
                                    <td class="coluna formataTexto"></td>
                                    <td class="coluna formataTexto"></td>
                                    <td class="coluna formataTexto">
                                        <div class="container-opcoes">
                                            <div class="button-opcoes close">
                                            </div>
                                            <div class="button-opcoes edit">
                                            </div>
                                            <div class="button-opcoes search">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>