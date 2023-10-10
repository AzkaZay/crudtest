<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'demo';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Could not connect to MySQL server: '
    die('Could not connect to MySQL server: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $sprinkles = mysqli_real_escape_string($conn, $_POST['sprinkles']);
    $flavour = mysqli_real_escape_string($conn, $_POST['flavour']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);

    $stmt = $conn->prepare("INSERT INTO orders (name, sprinkles, flavour, price) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("sssd", $name, $sprinkles, $flavour, $price);

    if ($stmt->execute()) {
        echo '1'; 
    } else {
        echo 'Error: ' . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
