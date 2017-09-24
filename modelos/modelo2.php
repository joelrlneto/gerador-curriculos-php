<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currículo | Modelo 2</title>
    <link rel="stylesheet" href="css/modelo2.css">
</head>
<body>
    <main>
        <section class="lateral">
            <img src="<?= $dados['foto']; ?>" alt="Foto" class="foto">
            <div class="topico-lateral">
                <img src="img/icone-endereco-1.png" alt="Endereço">
                <span><?= $dados['endereco']; ?></span>
            </div>
            <div class="topico-lateral">
                <img src="img/icone-telefone-1.png" alt="Telefone">
                <span><?= $dados['telefone']; ?></span>
            </div>
            <div class="topico-lateral">
                <img src="img/icone-email-1.png" alt="E-mail">
                <span><?= $dados['email']; ?></span>
            </div>
        </section>
        <section class="principal">
            <h1><?= $dados['nome']; ?></h1>
            
            <h2><?= $dados['cargo']; ?></h2>
            
            <p><?= $dados['resumo']; ?></p>
            
            <?php if($dados['formacoes']) { ?>
                <div class="cabecalho-secao">
                    <img src="img/icone-formacao-1.png" alt="Formação">
                    <h3>Formação</h3>
                    <div class="separador"></div>
                </div>
            
                <ul class="lista-topicos">
                    <?php for($i = 0; $i < sizeof($dados['formacoes']['cursos']); $i++) { ?>
                        <li>
                            <div>
                                <h4><?= $dados['formacoes']['cursos'][$i] ?></h4>
                                <p><?= $dados['formacoes']['instituicoes'][$i] ?></p>
                                <p><?= $dados['formacoes']['conclusoes'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            
            <?php if($dados['experiencias']) { ?>
                <div class="cabecalho-secao">
                    <img src="img/icone-experiencia-1.png" alt="Experiência">
                    <h3>Experiência</h3>
                    <div class="separador"></div>
                </div>

                <ul class="lista-topicos">
                    <?php for($i = 0; $i < sizeof($dados['experiencias']['cargos']); $i++) { ?>
                        <li>
                            <div>
                                <h4><?= $dados['experiencias']['cargos'][$i] ?></h4>
                                <p><?= $dados['experiencias']['empresas'][$i] ?></p>
                                <p><?= $dados['experiencias']['inicios'][$i] ?> a <?= $dados['experiencias']['fins'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </section>
    </main>
    <script>
        window.print();
    </script>
</body>
</html>