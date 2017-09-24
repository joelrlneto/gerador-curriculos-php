<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currículo | Modelo 1</title>
    <link rel="stylesheet" href="css/modelo1.css">
</head>
<body>
    <main>
        <section class="lateral">
            <img src="img/avatar1.png" alt="Foto" class="foto">
            <h1><?= $dados['nome']; ?></h1>
            <h3><?= $dados['cargo']; ?></h3>
        </section>
        <section class="principal">
            <h2>Resumo</h2>
            
            <p><?= $dados['resumo']; ?></p>
            
            <h2>Formação</h2>

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
            
            <h2>Experiência</h2>

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
                        <div>
                            <h4>Técnico em Eletrônica</h4>
                            <p>Eletrotunts</p>
                            <p>2013 a 2015</p>
                        </div>
                    </div>
                </li>
            </ul>

            <h2>Contato</h2>

            <ul class="lista-topicos">
                <li>
                    <div>
                        <h4>Endereço:</h4>
                        <p><?= $dados['endereco']; ?></p>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <h4>Telefone:</h4>
                            <p><?= $dados['telefone']; ?></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <h4>Email:</h4>
                            <p><?= $dados['email']; ?></p>
                        </div>
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