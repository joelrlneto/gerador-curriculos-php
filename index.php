<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=false">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gerador de Currículos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        <form action="gerarCurriculo.php" method="post">
        <div class="card">
            <h4 class="card-header">Gerar novo currículo</h4>

            <div class="card-body">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco" id="endereco">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <select class="form-control" name="sexo" id="sexo">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Não declarado">Não declarado</option>
                            </select>
                        </div>
                    </div> 
                    <div class="col">
                        <div class="form-group">
                            <label for="idade">Idade</label>
                            <input type="number" class="form-control" name="idade" id="idade">
                        </div>
                    </div> 
                    <div class="col">
                        <div class="form-group">
                            <label for="estado-civil">Estado civil</label>
                            <select class="form-control" name="estado-civil" id="estado-civil">
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Solteiro(a)">Solteiro(a)</option>
                                <option value="Divorciado(a)">Divorciado(a)</option>
                                <option value="Viúvo(a)">Viúvo(a)</option>
                            </select>
                        </div>
                    </div>                 
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" name="telefone" id="telefone">
                        </div>
                    </div> 
                    <div class="col">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                    </div> 
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Gerar currículo</button>
                <button class="btn btn-default" type="reset">Limpar campos</button>
            </div>
        </form>
    </div>
</body>
</html>