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

            <h3>Formação</h3>

            <ul class="lista-topicos">
                <li>
                    <div>
                        <h4>Bacharelado em Engenharia Elétrica</h4>
                        <p>Universidade Federal da Paraíba</p>
                        <p>2017</p>
                    </div>
                </li>
                <li>
                    <div>
                        <h4>Técnico em Eletricidade e Eletrônica</h4>
                        <p>Instituto Federal de Educação, Ciência e Tecnologia da Paraíba</p>
                        <p>2013</p>
                    </div>
                </li>
            </ul>

            <h3>Experiência</h3>

            <ul class="lista-topicos">
                <li>
                    <div>
                        <h4>Estágio em Engenharia Elétrica</h4>
                        <p>Super Top Engenharia</p>
                        <p>2015 a 2017</p>
                    </div>
                </li>
                <li>
                    <div>
                        <h4>Técnico em Eletrônica</h4>
                        <p>Eletrotunts</p>
                        <p>2013 a 2015</p>
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <script>
        window.print();
    </script>
</body>
</html>