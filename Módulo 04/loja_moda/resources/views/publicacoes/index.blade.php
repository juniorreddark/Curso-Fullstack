<!DOCTYPE html>
<html>
    <head>
        <title>Publicação</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <style>
            /* Ajustes para o Carousel */
            #carouselExampleControls {
                width: 50%; /* Ocupa toda a largura */
                height: 50%; /* Altura ajustada para 50% da altura da tela */
                margin: 0 auto;
            }

            #carouselExampleControls .carousel-item img {
                width: 50%; /* A imagem vai ocupar 100% da largura */
                height: 100%; /* A imagem vai ocupar 100% da altura do container */
                object-fit: cover; /* Garante que a imagem cubra o container */
            }

            /* Ajuste para as imagens nos cards */
            .card-img-top {
                width: 100%; /* A imagem ocupa toda a largura do card */
                height: 200px; /* Definindo uma altura fixa para as imagens */
                object-fit: cover; /* As imagens cobrem o espaço sem distorção */
            }

            /* Ajuste para os cards */
            .card {
                height: 100%; /* Garantir que todos os cards tenham a mesma altura */
                display: flex;
                flex-direction: column;
            }

            .card-body {
                flex-grow: 1; /* Faz com que o conteúdo do card ocupe o espaço restante */
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MeuSite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active fs-4" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#">Contato</a>
                        </li>
                        <a href="{{ route('login') }}"><button type="button" class="btn btn-primary">Login</button></a>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="mt-5">
            <h1 class="m-4">AJ Modas Masculina</h1>
        </div>

        <!-- Carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($publicacoes as $index => $publicacoe)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img class="d-block mx-auto shadow-sm" 
                             src="{{ asset('storage/' . $publicacoe->produto->foto) }}" 
                             alt="Slide {{ $index + 1 }}">
                    </div>
                @endforeach
            </div>

            <!-- Controle de navegação do carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Cards -->
        <div class="container mt-5">
            <div class="row">
                @foreach ($publicacoes as $publicacoe)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card shadow-sm">
                            <img class="card-img-top" src="{{ asset('storage/' . $publicacoe->produto->foto) }}" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5 class="card-title">Produto: {{ $publicacoe->produto ? $publicacoe->produto->nome : 'N/A' }}</h5>
                                <p class="card-text">Valor R$: {{ $publicacoe->produto ? $publicacoe->produto->preco : 'N/A' }}</p>
                                <p class="card-text">Empresa: {{ $publicacoe->empresa ? $publicacoe->empresa->razao_social : 'N/A' }}</p>
                                <p class="card-text">Categoria: {{ $publicacoe->categoria ? $publicacoe->categoria->nome : 'N/A' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-white py-4 mt-5">
            <div class="container text-center">
                <p>&copy; 2024 MeuSite. Todos os direitos reservados.</p>
                <div>
                    <a href="#" class="text-white mx-2">Sobre</a>
                    <a href="#" class="text-white mx-2">Política de Privacidade</a>
                    <a href="#" class="text-white mx-2">Contato</a>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
