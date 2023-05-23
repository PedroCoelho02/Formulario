<?php
include_once ("php/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../imagens/coelhoicon.png">
    <link href="../css/style2.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Coelho's Bar</title>
</head>

<body>
    <div class="container-fluid">
        <!--Inicio do menu-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index2.html">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="localizacao.html">Localização</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quemsomos.html">Quem Somos</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!--Termino menu-->

        <!--inicio Carrocel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://catracalivre.com.br/wp-content/uploads/2021/08/pinball-mania-achados-elo-3-910x607.jpg"
                        class="d-block w-100" alt="Fliperama">
                </div>
                <div class="carousel-item">
                    <img src="https://static.portaldaindustria.com.br/portaldaindustria/noticias/media/imagem_plugin/shutterstock_C8gIAfp.jpg"
                        class="d-block w-100" alt="tabuleiro">
                </div>
                <div class="carousel-item">
                    <img src="https://www.jogosdorei.com.br/blog/wp-content/uploads/2017/09/118500-como-jogar-truco-aprenda-as-regras-666x333.jpg"
                        class="d-block w-100" alt="Truco">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--termino carrocel-->

        <!--inicio cards-->
        <div class="card-group">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1oCiH2RQNzdq1FNlLXeFjGAg4OZdvbJdECA&usqp=CAU"
                    class="card-img-top" alt="Fliperama">
                <div class="card-body">
                    <h5 class="card-title">Fliperama</h5>
                    <p class="card-text">Maquina de jogos eletronicos para quem gosta de um desafio.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://s2.glbimg.com/DMaP8xt6icFMQ-42e-CsfpmOB5c=/0x0:695x508/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2021/X/K/p1HpHqTMW7aKCpMZqwWg/2014-01-15-bioshockinfinite-tabuleiro.jpg"
                    class="card-img-top" alt="Tabuleiro">
                <div class="card-body">
                    <h5 class="card-title">Tabuleiro</h5>
                    <p class="card-text">Para quem gosta de um tipo de jogo diferente.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="https://blog.bodog.com/wp-content/uploads/2021/09/3-cartas-truco-paulista.jpg"
                    class="card-img-top" alt="Truco">
                <div class="card-body">
                    <h5 class="card-title">Truco</h5>
                    <p class="card-text">Um jogo de cartas para quem gosta de barulho.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQBsUe_fyrpa0zv9riAQKvDBC7vMbRnCkxZQ&usqp=CAU"
                    class="card-img-top" alt="Cacheta">
                <div class="card-body">
                    <h5 class="card-title">Cacheta</h5>
                    <p class="card-text">Um jogo de cartas para quem gosta de apostar.
                    </p>
                </div>
            </div>
        </div>
        <!--Termino cards-->

        <!--Inicio Form-->
        <form method="post" action="cadastrar.php" class="row g-3" id="formularioCad">
            <h3 id="tituloform">Faça seu cadastro</h3>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" maxlength="80" required
                    onblur="validaEmail(email)">
            </div>
            <div class="col-md-6">
                <label for="inputName" class="form-label">Nome</label>
                <input type="name" class="form-control" id="inputName" name="name" maxlength="80">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Rua... " name="adress"
                    maxlength="80">
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">CEP</label>
                <input type="text" class="form-control" id="CEP" name="cep" maxlength="9" onblur="validaCep(cep)">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="city" maxlength="30">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select" name="state">
                    <option selected>States</option>
                    <option>São Paulo</option>
                    <option>Minas Gerais</option>
                    <option>Pernambuco</option>
                    <option>Ceará</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btnsign" onclick="validaNome()">Sign in</button>
            </div>
        </form>
        <!--termino form-->
    </div>

    <scrip src="../js/form.js"></script>     

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>