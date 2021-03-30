
<!-- Biblioteca TSI -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Index</title>
    <?php require_once './require/head_links.php';?>
</head>
<body>
    <?php require_once './require/header.php';?>
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/bio-livros.png" class="mx-auto d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./img/harry-potter.jpg" class="mx-auto d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./img/int.jpeg" class="mx-auto d-block w-100">
            </div>
        </div>
    </div>
    <main class="container">
        <h2 class="mt-5 mb-3">Recomendações</h2>
        <div class="row books">
            <div class="col">
                <img class="img-fluid" src="./img/book3.jpg">
                <h3 class="h5 text-center mt-2">1984</h3>
            </div>
            <div class="col">
                <img class="img-fluid" src="./img/book4.jpg">
                <h3 class="h5 text-center mt-2">Laranja Mecânica</h3>
            </div>
            <div class="col">
                <img class="img-fluid" src="./img/book5.jpg">
                <h3 class="h5 text-center mt-2">It: A Coisa</h3>
            </div>
        </div>
        <h2 class="mt-5 mb-3">Destaques</h2>
        <div class="row books">
            <div class="col">
                <img class="img-fluid" src="./img/book1.jpg">
                <h3 class="h5 text-center mt-2">Harry Potter e a pedra filosofal</h3>
            </div>
            <div class="col">
                <img class="img-fluid" src="./img/book2.jpg">
                <h3 class="h5 text-center mt-2">O Senhor dos Anéis: A Sociedade do Anel</h3>
            </div>
        </div>
        <h2 class="mt-5 mb-3">Autores</h2>
        <div class="row authors">
            <div class="col">
                <img class="img-fluid rounded-circle" src="./img/author4.jpg">
                <h3 class="h5 text-center mt-2">Agatha Christie</h3>
            </div>
            <div class="col">
                <img class="img-fluid rounded-circle" src="./img/author2.jpg">
                <h3 class="h5 text-center mt-2">George R. R. Martin</h3>
            </div>
            <div class="col">
                <img class="img-fluid rounded-circle" src="./img/author1.jpg">
                <h3 class="h5 text-center mt-2">J. R. R. Tolkien</h3>
            </div>
            <div class="col">
                <img class="img-fluid rounded-circle" src="./img/author3.jpg">
                <h3 class="h5 text-center mt-2">Stephen King</h3>
            </div>
        </div>
        <h2 class="mt-5 mb-3">Gêneros</h2>
        <ul class="genre list-unstyled">
            <li>Biografia</li>
            <li>Conto</li>
            <li>Fantasia</li>
            <li>Ficção Científica</li>
            <li>Horror</li>
            <li>Negócios</li>
            <li>Poesia</li>
            <li>Romance</li>
            <li>Suspense</li>
        </ul>
    </main>
    <?php require_once './require/footer.php';?>
</body>
</html>