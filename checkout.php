<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Checkout Mirror Fashion</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <style>
            .navbar {
                margin: 0;
            }
        </style>
        <nav class="navbar navbar-inverse" class="navbar-static-top">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Mirror Fashion</a>
                <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
                    <span class="glyphicon glyphicon-align-justify"></span>
                </button>
                
            </div>
            <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Perguntas frequentes</a></li>
                <li><a href="#">Entre em contato</a></li>
            </ul>
        </nav>
        <div class="jumbotron">
            <div class="container">

                <!-- h1 e p que já tínhamos -->
                <h1>Ótima escolha!</h1>
                <p>Obrigado....</p>

            </div><!-- fim .container dentro do jumbotron -->
        </div><!-- fim .jumbotron -->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">Sua compra</h2>
                        </div><!-- fim .panel-heading -->
                        <div class="panel-body">
                            <img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" 
                                 class="img-thumbnail img-responsive">
                            <dl>
                                <dt>Produto</dt>
                                <dd>Fuzzy Cardigan</dd>

                                <dt>Cor</dt>
                                <dd>verde</dd>

                                <dt>Tamanho</dt>
                                <dd>40</dd>

                                <dt>Preço</dt>
                                <dd>R$ 129,00</dd>
                            </dl>
                        </div><!-- fim .panel-body -->
                    </div><!-- fim .panel -->
                </div>
                <form class="col-sm-8">
                    <fieldset>
                        <legend>Dados pessoais</legend>
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>

                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control"
                                       id="email" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" 
                                   placeholder="000.000.000-00" required>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="sim" name="spam" checked>
                                Quero receber spam da Mirror Fashion
                            </label>
                        </div>

                    </fieldset>

                    <fieldset>
                        <legend>Cartão de crédito</legend>

                        <div class="form-group">
                            <label for="numero-cartao">Número - CVV</label>
                            <input type="text" class="form-control" 
                                   id="numero-cartao" name="numero-cartao">
                        </div>

                        <div class="form-group">
                            <label for="bandeira-cartao">Bandeira</label>
                            <select name="bandeira-cartao" id="bandeira-cartao"
                                    class="form-control">
                                <option value="master">MasterCard</option>
                                <option value="visa">VISA</option>
                                <option value="amex">American Express</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="validade-cartao">Validade</label>
                            <input type="month" class="form-control" 
                                   id="validade-cartao" name="validade-cartao">
                        </div>

                    </fieldset>

                    <button type="submit" class="btn btn-primary" class="btn-lg" class="pull-right">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                        Confirmar Pedido
                    </button>
                </form>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>