<?php
// process.php

// Retrieve form data
$studentName = $_POST['studentName'];
$feeAmount = $_POST['feeAmount'];
$paymentDate = $_POST['paymentDate'];
$paymentMethod = $_POST['paymentMethod'];
$note = $_POST['note'];
$status = $_POST['status'];

// Database connection
$servername = "localhost";
$username = "root"; // replace with your MySQL username
$password = ""; // replace with your MySQL password
$dbname = "fees"; // replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert form data into database
$sql = "INSERT INTO fees (student_name, fee_amount, payment_date, payment_method, note, status)
        VALUES ('$studentName', '$feeAmount', '$paymentDate', '$paymentMethod', '$note', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


