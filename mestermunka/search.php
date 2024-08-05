<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "falusihazak_db";

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