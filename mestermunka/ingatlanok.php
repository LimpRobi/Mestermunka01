
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingatlanok</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
        .property-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .property-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .card-title {
            font-weight: bold;
        }
        .card-text {
            font-size: 0.9rem;
            color: #555;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <h1 class="mb-4">Ingatlanok</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="property-card card">
                    <img class="card-img-top" src="IMG/nadfedeles-haz.jpg" alt="Ingatlan 1">
                    <div class="card-body">
                        <h5 class="card-title">Ingatlan 1</h5>
                        <p class="card-text">Ez egy rövid leírás az ingatlanról.</p>
                        <a href="#" class="btn btn-primary">Részletek</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="property-card card">
                    <img class="card-img-top" src="IMG/Bugac.jpg" alt="Ingatlan 2">
                    <div class="card-body">
                        <h5 class="card-title">Ingatlan 2</h5>
                        <p class="card-text">Ez egy rövid leírás az ingatlanról.</p>
                        <a href="#" class="btn btn-primary">Részletek</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="property-card card">
                    <img class="card-img-top" src="IMG/Kigyos.jpg" alt="Ingatlan 3">
                    <div class="card-body">
                        <h5 class="card-title">Ingatlan 3</h5>
                        <p class="card-text">Ez egy rövid leírás az ingatlanról.</p>
                        <a href="#" class="btn btn-primary">Részletek</a>
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