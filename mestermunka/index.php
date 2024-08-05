
<?php
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = null; // vagy valamilyen alapértelmezett érték
}
?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falusi Ingatlanok</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">FalusiHázak</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Főoldal <span class="sr-only">(aktuális)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ingatlanok.php">Ingatlanok</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Szolgáltatásaink</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bejelentkezés</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide header-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <a href="https://www.example.com" target="_blank">
                            <img class="d-block w-100" src="IMG/HITEL.jpg" alt="Első kép">
                        </div>
                        <div class="carousel-item">
                        <a href="https://www.example.com" target="_blank">
                            <img class="d-block w-100" src="IMG/CSOK.jpg" alt="Második kép">
                        </div>
                        <div class="carousel-item">
                        <a href="https://www.example.com" target="_blank">  
                            <img class="d-block w-100" src="IMG/ELADAS.jpg" alt="Harmadik kép">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Előző</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Következő</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="search-container">
                    <h4>Ingatlan kereső</h4>
                    <form>
                        <div class="form-group">
                            <label for="transactionType">Eladó / Kiadó</label>
                            <select class="form-control" id="transactionType">
                                <option>Eladó</option>
                                <option>Kiadó</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="propertyType">Ingatlan típusa</label>
                            <select class="form-control" id="propertyType">
                                <option>Ház</option>
                                <option>Lakás</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Ár</label>
                            <input type="text" class="form-control" id="price" placeholder="millió Ft">
                        </div>
                        <div class="form-group">
                            <label for="area">Alapterület</label>
                            <input type="text" class="form-control" id="area" placeholder="m²">
                        </div>
                        <div class="form-group">
                            <label for="rooms">Szobák száma</label>
                            <input type="text" class="form-control" id="rooms" placeholder="db">
                        </div>
                        <div class="form-group">
                            <label for="landArea">Telek területe</label>
                            <input type="text" class="form-control" id="landArea" placeholder="m²">
                        </div>
                        <button type="submit" class="btn btn-primary">Keresés</button>
                    </form>
                    <a href="#">Részletes keresés ></a>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="property-card card">
                    <img class="card-img-top" src="IMG/snapshot (1).jpg" alt="Ingatlan 1">
                    <div class="card-body">
                        <h5 class="card-title">Ingatlan 1</h5>
                        <p class="card-text">Ez egy rövid leírás az ingatlanról.</p>
                        <a href="#" class="btn btn-primary">Részletek</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="property-card card">
                    <img class="card-img-top" src="IMG/snapshot.jpg" alt="Ingatlan 2">
                    <div class="card-body">
                        <h5 class="card-title">Ingatlan 2</h5>
                        <p class="card-text">Ez egy rövid leírás az ingatlanról.</p>
                        <a href="#" class="btn btn-primary">Részletek</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="property-card card">
                    <img class="card-img-top" src="IMG/snapshot (2).jpg" alt="Ingatlan 3">
                    <div class="card-body">
                        <h5 class="card-title">Ingatlan 3</h5>
                        <p class="card-text">Ez egy rövid leírás az ingatlanról.</p>
                        <a href="#" class="btn btn-primary">Részletek</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="property-card card">
                    <div class="card-body">
                        <h5 class="card-title">Állásajánlat</h5>
                        <p class="card-text">Pályakezdők, kisgyermekes anyukák, részmunkaidőben dolgozók jelentkezését is várjuk!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="property-card card">
                    <div class="card-body">
                        <h5 class="card-title">Hitelügyintézés</h5>
                        <p class="card-text">Ingyenes banki előminősítés, az összes bank ajánlata egy helyen!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="property-card card">
                    <div class="card-body">
                        <h5 class="card-title">Eladná ingatlanát?</h5>
                        <p class="card-text">Eladná - Kiadná ingatlanát? Bízza ingatlan értékesítését, bérbeadását szakembereinkre!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php include 'footer.php'; ?>