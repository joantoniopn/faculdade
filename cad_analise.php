<?php
if(!isset($_SESSION)){
    session_start();
}
include_once 'seguranca.php';
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Cadastro de Análise</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>

  <body>
    <?php
    $resultado = mysqli_query($conectar, "SELECT * FROM problemas ORDER BY 'id_problema'");
    $linhas= mysqli_num_rows($resultado);
    
    $resultado3 = mysqli_query($conectar, "SELECT * FROM situacoes ORDER BY 'id_situacao'");
    $linhas3= mysqli_num_rows($resultado3);
    ?>
    <main role="main" class="container">
        <h3>Dados da transação</h3>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputState">Produto</label>
                <select id="selectProduto" class="form-control">
                    <option selected>Selecione...</option>
                    <option>Riocard</option>
                </select>
            </div>
            <div class="form-group col-md-3">
            <label for="SelectAnalise">Problema</label>
                <select id="SelectAnalise" class="form-control">
                    <option selected>Selecione...</option>
                    <option>Cédula não Identificada</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="numeroCartao">Número do Cartão</label>
                <input type="number" class="form-control" id="numeroCartao" placeholder="Somente Números">
            </div>
            <div class="form-group col-md-2">
                <label for="valorAnalise">Valor</label>
                <input type="number" class="form-control" id="valorAnalise" placeholder="Somente Números">
            </div>
            <div class="form-group col-md-3">
                <label for="dataTransacao">Data da transação</label>
                <input type="datetime-local" class="form-control" id="dataTransacao">
            </div>
            <div class="form-group col-md-2">
                <label for="codiTransacao">Código de transação</label>
                <input type="number" class="form-control" id="codiTransacao" placeholder="Somente Números">
            </div>
            <div class="form-group col-md-2">
                <label for="codiTransacao">ID Loja</label>
                <input type="number" class="form-control" id="codiTransacao" placeholder="Somente Números">
            </div>
            <div class="form-group col-md-5 ">
                <label for="codiTransacao">PDV</label>
                <input type="number" class="form-control" id="codiTransacao" placeholder="<- Digite o ID LOJA" disabled>
            </div>
            <div class="form-group col-md-12">
                <label for="textDescricao">Descrição</label>
                <textarea class="form-control" name="textDescricao" id="textDescricao" rows="4"></textarea>
            </div>
        </div>
        <h3>Dados de Reembolso</h3>
        <hr>
        <div class="form-row">
        <div class="form-group col-md-2">
            <label for="banco">Banco</label>
                <select id="banco" class="form-control">
                <option selected>Selecione</option>
                <option>Caixa</option>
                <option>Itaú</option>
                <option>Santander</option>
                <option>Banco do Brasil</option>
        </select>
        </div>
            <div class="form-group col-md-5">
                <label for="nomeTitular">Titular da Conta</label>
                <input type="text" class="form-control" id="nomeTitular" placeholder="Nome Completo">
            </div>
            <div class="form-group col-md-5">
                <label for="cpf">CPF:</label>
                <input type="number" class="form-control" id="cpf" placeholder="Somente Números">
            </div>
            <div class="form-group col-md-2">
                <label for="agencia">Agência</label>
                <input type="text" class="form-control" id="agencia">
            </div>
            <div class="form-group col-md-2">
                <label for="conta">Conta</label>
                <input type="text" class="form-control" id="conta">
            </div>
            <div class="form-group col-md-1">
                <label for="operacao">Operação</label>
                <input type="number" class="form-control" id="operacao" placeholder="N/A">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button> 

        </form>           
    </div>
            
            
        </div>


    </main>
    
