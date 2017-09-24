<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currículo | Modelo 3</title>
    <link rel="stylesheet" href="css/modelo3.css">
</head>
<body>
    <main>
        <section class="topo">
            <h1><?= $dados['nome']; ?></h1>
            <h2><?= $dados['cargo']; ?></h2>
            <p><span>Telefone(s): </span><?= $dados['telefone']; ?></p>
            <p><span>E-mail: </span><?= $dados['email']; ?></p>
            <p><span>Endereço: </span><?= $dados['endereco']; ?></p>
        </section>
        <section class="conteudo">
            <h3>Resumo</h3>
            
            <p><?= $dados['resumo']; ?></p>
            
            <?php if($dados['formacoes']) { ?>
                <h3>Formação</h3>

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
                <h3>Experiência</h3>

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