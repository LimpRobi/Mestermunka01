<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingatlan Kereső</title>
</head>
<nav class="navbar">
    <a href="index.php">Kezdőlap</a>
    <a href="about.php">Rólunk</a>
    <a href="services.php">Szolgáltatásaink</a>
    <a href="ingatlanok.php">Ingatlanok</a> <!-- Ezt a sort add hozzá -->
    <a href="contact.php">Kapcsolat</a>
</nav>


<body>
    <div class="search-container">
        <h4>Ingatlan kereső</h4>
        <form action="search.php" method="GET">
            <div class="form-group">
                <label for="transactionType">Eladó / Kiadó</label>
                <select class="form-control" id="transactionType" name="transactionType">
                    <option>Eladó</option>
                    <option>Kiadó</option>
                </select>
            </div>
            <div class="form-group">
                <label for="propertyType">Ingatlan típusa</label>
                <select class="form-control" id="propertyType" name="propertyType">
                    <option>Ház</option>
                    <option>Lakás</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Ár</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="millió Ft">
            </div>
            <div class="form-group">
                <label for="area">Alapterület</label>
                <input type="text" class="form-control" id="area" name="area" placeholder="m²">
            </div>
            <div class="form-group">
                <label for="rooms">Szobák száma</label>
                <input type="text" class="form-control" id="rooms" name="rooms" placeholder="db">
            </div>
            <div class="form-group">
                <label for="landArea">Telek területe</label>
                <input type="text" class="form-control" id="landArea" name="landArea" placeholder="m²">
            </div>
            <button type="submit" class="btn btn-primary">Keresés</button>
        </form>
    </div>

    <div class="results-container">
        <!-- Az eredményeket itt jelenítjük meg -->
    </div>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ingatlanok";

// Kapcsolódás az adatbázishoz
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

$transactionType = $_GET['transactionType'];
$propertyType = $_GET['propertyType'];
$price = $_GET['price'];
$area = $_GET['area'];
$rooms = $_GET['rooms'];
$landArea = $_GET['landArea'];

$sql = "SELECT * FROM properties WHERE transaction_type='$transactionType' AND property_type='$propertyType'";

if (!empty($price)) {
    $sql .= " AND price <= $price";
}
if (!empty($area)) {
    $sql .= " AND area >= $area";
}
if (!empty($rooms)) {
    $sql .= " AND rooms >= $rooms";
}
if (!empty($landArea)) {
    $sql .= " AND land_area >= $landArea";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Transaction Type</th><th>Property Type</th><th>Price</th><th>Area</th><th>Rooms</th><th>Land Area</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["transaction_type"]."</td><td>".$row["property_type"]."</td><td>".$row["price"]."</td><td>".$row["area"]."</td><td>".$row["rooms"]."</td><td>".$row["land_area"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nincs találat";
}

$conn->close();
?>