<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (empty($name)) {
    $name = "Anonymous";
}

if (empty($email) || empty($message)) {
    echo "Email and message are required.";
    exit;  
}

$host = 'localhost';
$dbName = 'lvmrcia-s-tutorials_db'; 
$dbUsername = 'lvmrcia-s-tutorials_u';
$dbPassword = 'oA9KwPaij7B2IgH';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);
if ($stmt->execute()) {
    echo "Message sent successfully.";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();

