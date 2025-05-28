<?php
$servername = "localhost"; // or 127.0.0.1
$username = "root";
$password = "Super@123";
$database = "parks_and_recreation";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
} else {
    echo "✅ Connected successfully!";
}


$sql = "SELECT id, name,salary, created_date FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - salary: " . $row["salary"] ."- Created_date: ". $row["created_date"] . "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>
