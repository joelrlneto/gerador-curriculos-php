<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gerador de Currículos</a>
    </nav>
    <main class="container" style="margin-top:20px">
        <form action="gerarCurriculo.php" method="post" target="_blank" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informações gerais</h4>

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cargo">Cargo pretendido</label>
                                <input type="text" class="form-control" name="cargo" id="cargo">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco">
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
                    <div class="form-group">
                        <label for="resumo">Resumo</label>
                        <textarea class="form-control" name="resumo" id="resumo"></textarea>
                    </div>
                </div>

                <div class="card-body" id="div-formacoes">
                    <h4 class="card-title">Formação</h4>
                    <button class="btn btn-sm right" id="btn-adicionar-formacao" title="Adicionar formação">Adicionar formação</button>
                </div>

                <div class="card-body" id="div-experiencias">
                    <h4 class="card-title">Experiência</h4>
                    <button class="btn btn-sm right" id="btn-adicionar-experiencia" title="Adicionar experiência">Adicionar experiência</button>
                </div>

                <div class="card-body" id="div-experiencias">
                    <h4 class="card-title">Modelo de currículo</h4>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="modelo" id="modelo1" value="modelo1" checked> Moderno preto
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                 <input class="form-check-input" type="radio" name="modelo" id="modelo2" value="modelo2"> Moderno azul
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="modelo" id="modelo3" value="modelo3"> Básico
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Gerar currículo</button>
                    <button class="btn btn-default" type="reset">Limpar campos</button>
                </div>
            </div>
        </form>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>